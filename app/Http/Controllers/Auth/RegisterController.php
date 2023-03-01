<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\Mail\OtpMail;
use App\Models\EmailVerification;
use App\Models\PhoneVerification;
use App\Models\User;
use App\Http\Controllers\Controller;



use GuzzleHttp\Client;


require_once app_path().'/Constant/constants.php';

class RegisterController extends Controller
{
    public function step1(Request $request)
    {
        // $verify_code = 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA';
        // $record = DB::table('test')->first()->content;
        // $record = str_replace('%verify_code%', $verify_code, $record);
        // echo $record;
        // exit;

        // SERVER-SIDE VALIDATION
        // resources/lang/en/validation.php
        $validator = Validator::make($request->all(), [
            'business_email' => 'required|email|unique:users,business_email',
            'role' => 'required'
        ], [
            'required' => trans('validation.required'),
            'email' => trans('validation.email'),
            'unique' => trans('validation.unique')
        ]);

        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

        // SET SIGNUP STEP
        session(['signup_step' => 1]);

        return redirect('/auth/register/step2');
    }

    public function step2(Request $request)
    {

        // SERVER-SIDE VALIDATION
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'regex:/^(?=.*[A-Z])(?=.*\d).+$/',
                'min:6',
                'confirmed'
            ]
        ], [
            'required' => trans('validation.required'),
            'email' => trans('validation.email'),
            'min' => trans('validation.min'),
            'confirmed' => trans('validation.confirmed'),
            'unique' => trans('validation.unique')
        ]);
        
        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

        // GET EMAIL FROM $request
        $email = $request -> input('email');

        session([
            'email' => $email,
            'signup_step' => 2
        ]);

        return redirect('/auth/register/step3');
    }

    public function step3(Request $request)
    {

        $captchaResponse = $request -> input('h-captcha-response');
        
        if(isset($captchaResponse) && !empty($captchaResponse)){
            $secret = SECRET;
            $remote_address = $_SERVER['REMOTE_ADDR'];

            // This is hcaptcha url
            $verify_url = "https://hcaptcha.com/siteverify?secret=".$secret."&response=".$captchaResponse."&remoteip=".$remote_address;
            $response = file_get_contents($verify_url);
            $responseData = json_decode($response);
            $success_msg="";
            $err_msg="";
            if($responseData->success){
                $success_msg = SUCCESS_MESSAGE;
                session(['signup_step' => 3]);
            } else {
                $err_msg =  ERROR_MESSAGE1;
            }
        } else {
            $err_msg =  ERROR_MESSAGE2;
        }

        // Get the response and pass it into your ajax as a response.
        $return_msg = array(
            'error'     =>  $err_msg ?? "",
            'success'   =>  $success_msg ?? ""
        );

        // SEND OTP TO THE EMAIL ADDRESS
        // GET EMAIL FROM SESSION
        $email = session('email');
        $otp = rand(100000, 999999);
        // Mail::to($email)->send(new OtpMail($otp));

        $email_data = array(
            "sender"=>array("name"=>"BrandedStocklots", "email"=>"Admin@brandedstocklots.com"),
            "to"=>array(array("email"=>$email)),
            "subject"=>"Your OTP is $otp",
            "htmlContent"=>"<p>Your OTP is $otp</p>"
        );
        $email_data = json_encode($email_data);
        $headers = array(
            "accept: application/json",
            "content-type: application/json",
            "api-key: "
        );
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.sendinblue.com/v3/smtp/email",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $email_data,
            CURLOPT_HTTPHEADER => $headers
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        //     echo "Email sent successfully.";
        // }

        // SAVE DATA
        try {
            $record = DB::table('email_verifications')->where('email', $email)->first();
            if($record) {
                DB::table('email_verifications')->where('email', $email)->delete();
            }
            $emial_verification = new EmailVerification();
            $emial_verification->verify_code = $otp;
            $emial_verification->email = $email;
            $emial_verification->status = false;
            $emial_verification->save();
        } catch(Exception $e) { };

        return json_encode($return_msg);
    }

    public function step4(Request $request)
    {

        $email = session('email');

        // SERVER-SIDE VALIDATION
        $validator = Validator::make($request->all(), [
            'verify_code' => 'required|numeric',
        ], [
            'required' => trans('validation.required'),
            'numeric' => trans('validation.numeric'),
        ]);
        
        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

        // GET VERIFY CODE FROM INPUT TAG
        $verify_code = $request->input('verify_code');

        // GET CURRENT DATE
        $verify_email_otp_date = strtotime(date('Y-m-d H:i:s', strtotime('now')));

        $record = DB::table('email_verifications')->where('email', $email)->first();
        $created_at = strtotime($record->created_at);
        $correct_email_verify_code = $record->verify_code;

        // CALCULATE TIME
        $time = $verify_email_otp_date - $created_at;
        if($time >= 300) {
            $random_str = Str::random(12);
            DB::table('email_verifications')
                ->where('email',$email)
                ->update(['verify_code' => $random_str]);

            $verify_code_error = "The code is invalid";
            session()->flash('verify_code_error', $verify_code_error);
            return view('/auth/register/step4');

        } else if ($verify_code != $correct_email_verify_code) {
            $verify_code_error = "The code is invalid";
            session()->flash('verify_code_error', $verify_code_error);
            return view('/auth/register/step4');
        } else {
            DB::table('email_verifications')
                ->where('email', $email)
                ->update(['status' => true]);
            
            session(['signup_step' => 4]);

            return redirect('/auth/register/step5');
        }
    }

    public function step5(Request $request)
    {

        // VALIDATION
        $validator = Validator::make($request->all(), [
            'mobile_number' => 'required|numeric',
        ], [
            'required' => trans('validation.required'),
            'numeric' => trans('validation.numeric'),
        ]);

        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

        $mobile_number = $request -> input('mobile_number');

        session(['mobile_number' => $mobile_number]);
        session(['signup_step' => 5]);

        // $phoneNumber = '+31683906728';

        // return redirect('/auth/register/step6');
        return redirect()->action([self::class, 'sendPhone']);

       
    }

    public function step6(Request $request)
    {
        // GET VERIFY CODE FROM INPUT TAG
        $verify_code = $request->input('verify_code');

        $mobile_number = session('mobile_number');
        if(substr($mobile_number, 0, 1) == "+") {
            $mobile_number = substr($mobile_number, 1);
        }
        // GET CURRENT DATE
        $verify_email_otp_date = strtotime(date('Y-m-d H:i:s', strtotime('now')));

        $record = DB::table('phone_verifications')->where('phone_number', $mobile_number)->first();
        $created_at = strtotime($record->created_at);
        $correct_phone_verify_code = $record->verify_code;

        // CALCULATE TIME
        $time = $verify_email_otp_date - $created_at;

        
        if($time >= 300) {
            $random_str = Str::random(12);
            DB::table('phone_verifications')
                ->where('phone_number', $mobile_number)
                ->update(['verify_code' => $random_str]);

            $verify_code_error = "The code is invalid";
            session()->flash('verify_code_error', $verify_code_error);
            return redirect('/auth/register/step6')
                ->withInput();

        } else if ($verify_code != $correct_phone_verify_code) {
            $verify_code_error = "The code is invalid";
            session()->flash('verify_code_error', $verify_code_error);
            return redirect('/auth/register/step6')
                ->withInput();
        } else {
            DB::table('phone_verifications')
                ->where('phone_number', $mobile_number)
                ->update(['status' => true]);

            session(['signup_step' => 6]);
        
            return redirect('/auth/register/step7');
        }
    }

    public function step7(Request $request)
    {
        Session::forget('mobile_number');

        // VALIDATION
        $validator = Validator::make($request->all(), [
            'first_last_name' => 'required|string|max:40',
            'business_phone' => 'required|numeric|min:10',
            // 'receive_message' => 
            'business_name' => 'required|string|max:40',
            'business_type' => 'required',
            'street_address' => 'required',
            // 'suite_unit_floor' =>
            'zip_code' => 'required',
            'city' => 'required|string|max:255',
            'state' => 'required',
        ], [
            'required' => trans('validation.required'),
            'max' => trans('validation.max'),
            'string' => trans('validation.string'),
            'numeric' => trans('validation.numeric'),
        ]);

        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

        $first_last_name = $request->input('first_last_name');
        $business_phone = $request->input('business_phone');
        $receive_message = $request->input('receive_message');
        $business_name = $request->input('business_name');
        $business_type = $request->input('business_type');
        $street_address = $request->input('street_address');
        $suite_unit_floor = $request->input('suite_unit_floor');
        $zip_code = $request->input('zip_code');
        $city = $request->input('city');
        $state = $request->input('state');

        $business_email = $request->input('business_email');
        $role = $request->input('role');
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $mobile_number = $request->input('mobile_number');
        try {
            $user = new User();
            $user->first_last_name = $first_last_name;
            $user->business_phone = $business_phone;
            $user->receive_message = $receive_message;
            $user->business_name = $business_name;
            $user->business_type = $business_type;
            $user->street_address = $street_address;
            $user->suite_unit_floor = $suite_unit_floor;
            $user->zip_code = $zip_code;
            $user->city = $city;
            $user->state = $state;
            $user->business_email = $business_email;
            $user->role = $role;
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->mobile_number = $mobile_number;
            $user->save();
        } catch(Exception $e) { };

        session(['signup_step' => 7]);


        if($role == "Buyer") {
            return redirect('/auth/register/step9');
        } else {
            return redirect('/auth/register/step8');
        }
    }

    public function step8 (Request $request) 
    {
        // VALIDATION
        $validator = Validator::make($request->all(), [
            'tax_ein_ssn' => 'required',
            'invitation_code' => 'required',
            'business_url' => 'required',
            'file1' => 'required|file|mimes:pdf,jpeg,jpg|max:10240',
            'file2' => 'required|file|mimes:pdf,jpeg,jpg|max:10240',
        ], [
            'required' => trans('validation.required_file'),
            'file' => trans('validation.file'),
            'mimes' => trans('validation.mimes'),
            'max' => trans('validation.maxsize'),
        ]);
        
        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

        $file1 = $request->file('file1');
        $file2 = $request->file('file2');

        // storage/app
        $file1->store('public/uploads');
        $file2->store('public/uploads');


        $tax_ein_ssn = $request->input('tax_ein_ssn');
        $business_url = $request->input('business_url');
        $invitation_code = $request->input('invitation_code');
        $fileName1 = $request->file('file1')->hashName();
        $fileName2 = $request->file('file2')->hashName();
        $domain = request()->getHost();
        $port = request()->getPort();
        $url1 = $domain . ':' . $port . asset('storage/app/public/uploads/' . $fileName1);
        $url2 = $domain . ':' . $port . asset('storage/app/public/uploads/' . $fileName2);
        $email = session('email');

        DB::table('users')
            ->where('email', $email)
            ->update([
                'tax_ein_ssn' => $tax_ein_ssn,
                'business_url' => $business_url,
                'invitation_code' => $invitation_code,
                'official_documents_1' => $url1,
                'official_documents_2' => $url2,
            ]);

        Session::forget('email');

        session(['signup_step' => 8]);

        return redirect('/auth/register/step9');
    }

    public function sendEmail (Request $request)
    {
        // SEND OTP TO THE EMAIL ADDRESS
        // GET EMAIL FROM SESSION
        $email = session('email');
        $otp = rand(100000, 999999);
        // Mail::to($email)->send(new OtpMail($otp));

        $email_data = array(
            "sender"=>array("name"=>"BrandedStocklots", "email"=>"Admin@brandedstocklots.com"),
            "to"=>array(array("email"=>$email)),
            "subject"=>"Your OTP is $otp",
            "htmlContent"=>"<p>Your OTP is $otp</p>"
        );
        $email_data = json_encode($email_data);
        $headers = array(
            "accept: application/json",
            "content-type: application/json",
            "api-key: "
        );
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.sendinblue.com/v3/smtp/email",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $email_data,
            CURLOPT_HTTPHEADER => $headers
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        // if ($err) {
        //     echo "cURL Error #:" . $err;
        // } else {
        //     echo "Email sent successfully.";
        // }

        // SAVE DATA
        try {
            $record = DB::table('email_verifications')->where('email', $email)->first();
            if($record) {
                DB::table('email_verifications')->where('email', $email)->delete();
            }
            $emial_verification = new EmailVerification();
            $emial_verification->verify_code = $otp;
            $emial_verification->email = $email;
            $emial_verification->status = false;
            $emial_verification->save();
        } catch(Exception $e) { };

        return redirect('/auth/register/step4');
    }
    
    public function sendPhone (Request $request)
    {
        // SEND OTP VIA PLIVO
        $otp = rand(100000, 999999);
        $mobile_number = session('mobile_number');
        if(substr($mobile_number, 0, 1) == "+") {
            $mobile_number = substr($mobile_number, 1);
        }
        $records = DB::table('phone_verifications')
            ->where('phone_number' , $mobile_number)
            ->delete();

        $AUTH_ID = env('PLIVO_AUTH_ID');
        $AUTH_TOKEN = env('PLIVO_AUTH_TOKEN');
        $src = env('PLIVO_SENDER_ID');
        $dst = $mobile_number;
        $text = 'Your OTP is: ' . $otp;

        $url = 'https://api.plivo.com/v1/Account/'.$AUTH_ID.'/Message/';
        $data = array("src" => "$src", "dst" => "$dst", "text" => "$text");
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])
        ->withBasicAuth($AUTH_ID, $AUTH_TOKEN)
        ->post($url, $data);

        // CREATE NEW RECORD
        try {
            $phone_number_verification = new PhoneVerification();
            $phone_number_verification->verify_code = $otp;
            $phone_number_verification->phone_number = $mobile_number;
            $phone_number_verification->status = false;
            $phone_number_verification->save();
        } catch(Exception $e) { };
        return redirect()->action([self::class, 'step6']);
    }



    // Display a listing of the resource.
    public function index()
    {
        return view('/auth/register/step1');
    }


    // Show the form for creating a new resource.
    public function create(Request $request)
    {
        //
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        //
    }

    // Display the specified resource.
    public function show(string $id)
    {
        //
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        //
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        //
    }

    // Remove the specified resource from storage.
    public function destroy(string $id)
    {
        //
    }

    
}
