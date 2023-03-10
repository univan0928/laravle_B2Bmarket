<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;



class LoginController extends Controller
{

    public function login(Request $request)
    {
        $password = $request->input('password');
        $email = $request->input('email');

        session()->flash('show_error_message', false);
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            session()->flash('show_error_message', false);

            return redirect('/user-dashboard');
        } else {
            session()->flash('show_error_message', true);
            
            return redirect()
                ->back()
                ->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('auth/login');
    }
    
}
