<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ForgetPasswordController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->input('email');
        session(['email' => $email]);
        $record = DB::table('users')
            ->where('email', $email)
            ->first();
        session()->flash('show_email_error_message', false);
        if($record == false) {
            session()->flash('show_email_error_message', true);
            return redirect()
                ->back()
                ->withInput();
        }

        // SEND OTP TO THE EMAIL ADDRESS
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
        $api_key = env('SENDINBLUE_API_KEY');
        $email_data = json_encode($email_data);
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

        $verify_email_otp_date = date('Y-m-d H:i:s', strtotime('now'));

        DB::table('email_verifications')
            ->where('email', $email)
            ->update(['verify_code' => $otp, 'status' => false, 'updated_time' => $verify_email_otp_date]);

        return redirect('/auth/login/verification');
    }
}
