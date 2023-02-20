<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

require_once app_path().'/Constant/constants.php';

class SignupController extends Controller
{

    public function stepOne(Request $request)
    {
        // VALIDATION (METHOD 1)
        // $rules = [
        //     'business_email'=>'required|email',
        //     'role' => 'required'
        // ];
        // $messages = [
        //     'business_email.required' => 'The email field is required.',
        //     'business_email.email' => 'Please enter a valid email address.',
        //     'role.required' => 'The role field is required.'
        // ];
        // $validator = Validator::make($request->all(), $rules, $messages);
        // if ($validator->fails()) {
        //     return redirect()
        //     ->back()
        //     ->withErrors($validator)
        //     ->withInput();
        // }

        

        // SERVER-SIDE VALIDATION (METHOD 2)
        // resources/lang/en/validation.php
        $validator = Validator::make($request->all(), [
            'business_email' => 'required|email',
            'role' => 'required'
        ], [
            'required' => trans('validation.required'),
            'email' => trans('validation.email')
        ]);

        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }


        // GET BUSINESS_EMAIL, ROLE DATA
        // $business_email = $request->business_email;
        // $role = $request->role;
        
        // SAVE DATA IN SESSION (METHOD 1)
        // session([
        //     'business_email' => $business_email,
        //     'role' => $role
        // ]);




        // SAVE DATA IN SESSION (METHOD 2)

        // $request->session()->put('data', $validationData);

        // // Retrieve the data from the session
        // $value1 = session('key1');
        // $value2 = session('key2');
        // $value3 = session('key3');

        // GET SESSION DATA
        // $value = $request->session()->get('data');

        // GET ALL SESSION DATA
        // $value = $request->session()->all();
        
        return redirect('/stepTwo');
    }

    public function stepTwo(Request $request)
    {

        // SERVER-SIDE VALIDATION
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:40',
            'email' => 'required|email',
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
            'confirmed' => trans('validation.confirmed')
        ]);
        
        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }


        // GET DATA FROM $request
        // $name = $request -> input('name');
        // $email = $request -> input('email');
        // $password = $request -> input('password');

        // SAVE DATA IN SESSION (METHOD 1)
        // session([
        //     'name' => $name,
        //     'email' => $email,
        //     'password' => $password
        // ]);

        return redirect('/stepThree');
    }

    public function stepThree(Request $request)
    {

        // HCAPTCHA VERIFICATION
        // Hcaptcha info
        // site_key : e40b0c3e-bedf-4d07-9dea-af28a5a58a35
        // secret_key : 0x3f81316467467b489376d1bcf1DC44eE16A5430b

        $captchaResponse = $request -> input('h-captcha-response');
        
        if(isset($captchaResponse) && !empty($captchaResponse)){
            $secret = SECRET;
            $remote_address = $_SERVER['REMOTE_ADDR'];
            // This is hcaptcha url
            $verify_url = "https://hcaptcha.com/siteverify?secret=".$secret."&response=".$captchaResponse."&remoteip=".$remote_address;
            $response = file_get_contents($verify_url); # Get token from post data with key 'h-captcha-response' and Make a POST request with data payload to hCaptcha API endpoint
            $responseData = json_decode($response);
            $success_msg="";
            $err_msg="";
            if($responseData->success){
                $success_msg = SUCCESS_MESSAGE;
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

        return json_encode($return_msg);
    }

    public function stepFour(Request $request)
    {
        // GET ALL SESSION DATA
        $value = $request->session()->all();
        $email = session('email');
        $otp = Str::random(6);
        Mail::to($email)->send(new OtpMail($otp));
    }


    public function stepSix(Request $request)
    {

        // VALIDATION
        $validator = Validator::make($request->all(), [
            'first_last_name' => 'required|string|max:40',
            'business_phone' => 'required|numeric|min:10',
            // 'receive_message' => 
            'business_name' => 'required|string|max:40',
            'business_type' => 'required',
            'street_address' => 'required',
            // 'suite_unit_floor' =>
            'zip_code' => 'required|numeric|min:5',
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


        // GET DATA FROM $request
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


        // SAVE DATA IN SESSION (METHOD 1)
        session([
            'first_last_name' => $first_last_name,
            'business_phone' => $business_phone,
            'receive_message' => $receive_message,
            'business_name' => $business_name,
            'business_type' => $business_type,
            'street_address' => $street_address,
            'suite_unit_floor' => $suite_unit_floor,
            'zip_code' => $zip_code,
            'city' => $city,
            'state' => $state
        ]);

        return redirect('/stepSeven');

    }

    public function stepSeven (Request $request) {

        // VALIDATION
        $validator = Validator::make($request->all(), [
            'tax_ein_ssn' => 'required',
            'invitation_code' => 'required',
            'business_url' => 'required',
        ], [
            'required' => trans('validation.required'),
        ]);
        
        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }


        // GET DATA FROM $request
        $tax_ein_ssn = $request->input('tax_ein_ssn');
        $invitation_code = $request->input('invitation_code');
        $business_url = $request->input('business_url');

        // SAVE DATA IN SESSION (METHOD 1)
        session([
            'tax_ein_ssn' => $tax_ein_ssn,
            'invitation_code' => $invitation_code,
            'business_url' => $business_url
        ]);
        

        // GET ALL SESSION DATA
        $value = $request->session()->all();
        // $email = session('email');
        dd($value);

    }




    // Display a listing of the resource.
    public function index()
    {
        return view('stepOne');
    }


    // Show the form for creating a new resource.
    public function create()
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
