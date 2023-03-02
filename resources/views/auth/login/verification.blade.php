@extends('layout.app')

@section('title', __('Martfury - Multipurpose Marketplace HTML5 Template + Admin Template'))

@section('custom_css')
    <link rel="stylesheet" href="{{ asset('/css/multi-step.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@endsection

@section('content')


    <!-- CONTENT -->
    <div class="ps-page--single" id="about-us">
        <div class="ps-about-intro">
            <div class="container">
                <div class="ps-section__header custom-section__header">
                    <div class="row center-element">
                        <div class="col-md-12">
                            <div class="bg-white pd-30-27">
                                <p class="title mb-15">{{ __('Verification required')}}</p>
                                <p class="subtitle-2">To continue, complete this verification step. We've sent a One Time Password (OTP) to the email <span class="subtitle-2" id="email_show"></span>. Please enter it below.</p>
                                <form action="{{ route('auth.login.verification') }}" method="POST">
                                    @csrf
                                    <div class="password-tag">
                                        <label class="label-2">{{ __('Enter OTP')}}</label>
                                    </div>
                                    <input type="verify_code" value="{{ old('verify_code') }}"  name="verify_code" class="custom-form-control" />
                                    <div class="text-danger none" id="verify_code_error">The OTP field is required</div>
                                    @if (session()->has('verify_code_error'))
                                        <div class="text-danger" id="verify_code_error">
                                            {{ session('verify_code_error') }}
                                        </div>
                                    @endif
                                    <button type="submit" class="b-btn mt-15 mb-15">{{ __('Continue')}}</button>
                                    <div class="center">
                                        <a href="{{ route('auth.login.verification.resendEmail') }}" class="link-big">{{ __('Resend OTP')}}</a>    
                                    </div>
                                    <div class="left">
                                        <span class="link-big hoverable">{{ __('I need more help')}}</span>    
                                    </div>
                                    <p class="subtitle-2 help-tag none" id="help-tag"> <br> If you've already tried to reset your password, but haven't received an email from Amazon, check your Junk or Spam folder. <br><br>
                                        If you can't access your email, try resetting that first through your email provider.   <br><br>
                                        If you've recently updated your password, your old password could still be saved in your browser. Try clearing your browser history and re-typing your password. <br><br>
                                        If you need more password help, call us at 1-800-383-9484 or, if outside the U.S. or Canada, 1-206-577-1364 (International, charges may apply).</p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="a-divider a-divider-section">
                        <div class="a-divider-inner">
                        </div>
                    </div>
                    <div>
                        <p class="para-normal">
                            <a href="#" class="pr-30">{{ __('Conditions of Use')}}</a>
                            <a href="#" class="pr-30">{{ __('Privacy Notice')}}</a>
                            <a href="#">{{ __('Help')}}</a>
                        </p>
                    </div>
                    <div class="signin-footer">
                        <span class="signin-footer-content">© 1996-2023, Amazon.com, Inc. or its affiliates</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    <!-- CLIENT-SIDE VALIDATION -->
    <script src="{{ asset('/js/login/verification.js') }}"></script>
@endsection