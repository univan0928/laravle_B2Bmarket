<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $password = $request->input('password');
        $email = session('email');
        $record = DB::table('users')
            ->where('email', $email)
            ->first();

        if(Hash::check($password, $record->password)) {
            return view('/user-dashboard');
        } else {
            session()->flash('signin_status' , true);
            return redirect()
                ->back();
        }

     
    }
}
