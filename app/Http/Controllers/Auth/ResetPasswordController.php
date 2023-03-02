<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class ResetPasswordController extends Controller
{
    public function index(Request $request)
    {
        // SERVER-SIDE VALIDATION
        $validator = Validator::make($request->all(), [
            'password' => [
                'required',
                'regex:/^(?=.*[A-Z])(?=.*\d).+$/',
                'min:6',
                'confirmed'
            ]
        ], [
            'required' => trans('validation.required'),
            'min' => trans('validation.min'),
            'confirmed' => trans('validation.confirmed'),
        ]);
        
        if ($validator->fails()) {
            return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
        }

        $email = session('email');
        $password = $request->input('password');
        DB::table('users')
            ->where('email', $email)
            ->update(['password' => bcrypt($password)]);
        if(Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/user-dashboard', );
        } else {
            return redirect()
                ->back();
        }
    }
}
