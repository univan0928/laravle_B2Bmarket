<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\EmailVerification;
use App\Http\Controllers\Controller;

class VerificationController extends Controller
{
    public function index(Request $request)
    {
        $email = session('email');

        // GET VERIFY CODE FROM INPUT TAG
        $verify_code = $request->input('verify_code');

        // GET CURRENT DATE
        $verify_email_otp_date = strtotime(date('Y-m-d H:i:s', strtotime('now')));

        $record = DB::table('email_verifications')->where('email', $email)->first();
        $created_at = strtotime($record->updated_time);
        $correct_email_verify_code = $record->verify_code;

        // CALCULATE TIME
        $time = $verify_email_otp_date - $created_at;
        if($time >= 300) {
            $random_str = Str::random(12);
            DB::table('email_verifications')
                ->where('email',$email)
                ->update(['verify_code' => $random_str]);

            $verify_code_error = "Please check your code and try again.";
            session()->flash('verify_code_error', $verify_code_error);
            return redirect()
                ->back()
                ->withInput();

        } else if ($verify_code != $correct_email_verify_code) {
            $verify_code_error = "Please check your code and try again.";
            session()->flash('verify_code_error', $verify_code_error);
            return redirect()
                ->back()
                ->withInput();
        } else {
            DB::table('email_verifications')
                ->where('email', $email)
                ->update(['status' => true]);
            // go to the create new password page...
            // session(['signup_step' => 4]);

            return redirect('/auth/login/reset-password');
            // return redirect('/auth/register/step5');
        }

    }

    public function resendEmail(Request $request)
    {
        $email = session('email');
        $otp = rand(100000, 999999);
        $content = DB::table('email_templates')
            ->where('title', 'email-verification-otp')
            ->first()
            ->content;
        $content = "$content";
        $content = str_replace('{otp}', $otp, $content);
        $email_data = array(
            "sender"=>array("name"=>"BrandedStocklots", "email"=>"Admin@brandedstocklots.com"),
            "to"=>array(array("email"=>$email)),
            "subject"=>"Your OTP is $otp",
            "htmlContent"=>$content
        );
        $email_data = json_encode($email_data);
        $api_key = env('SENDINBLUE_API_KEY');
        $headers = array(
            "accept: application/json",
            "content-type: application/json",
            "api-key: $api_key"
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
            $verify_email_otp_date = date('Y-m-d H:i:s', strtotime('now'));

            $emial_verification = new EmailVerification();
            $emial_verification->verify_code = $otp;
            $emial_verification->email = $email;
            $emial_verification->status = false;
            $emial_verification->updated_time = $verify_email_otp_date;
            $emial_verification->save();
        } catch(Exception $e) { };

        return redirect('/auth/login/verification');
    }
}
