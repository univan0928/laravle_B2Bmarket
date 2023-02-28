@extends('layout.app')

@section('title', __('Martfury - Multipurpose Marketplace HTML5 Template + Admin Template'))

@section('custom_css')
    <link rel="stylesheet" href="{{ asset('/css/multi-step.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/signin.css') }}">
@endsection

@section('content')


    <!-- CONTENT -->
    <div class="ps-page--single" id="about-us">
        <div class="ps-about-intro">
            <div class="container">
                <div class="ps-section__header custom-section__header">
                    <div class="row center-element">
                        <div class="col-md-12">
                            @if(session('signin_status'))
                            <div class="a-section">
                                <div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base" role="alert">
                                    <div class="a-box-inner a-alert-container">
                                        <h4 class="a-alert-heading">There was a problem</h4>
                                        <i class="a-icon a-icon-alert"></i>
                                        <div class="a-alert-content">
                                            <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none">
                                                <li>
                                                    <span class="a-list-item">Your password is incorrect</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="bg-white pd-30-27">
                                <p class="title mb-15">{{ __('Sign in')}}</p>
                                <p class="subtitle-2">To verify your email, we've sent a One Time Password (OTP) to <span class="subtitle-2" id="email_show"></span> <a href="#" class="link-normal">Change</a> </p>
                                <form action="{{ route('signin.step2') }}" method="POST">
                                    @csrf
                                    <div class="password-tag">
                                        <label class="label-2">{{ __('Password')}}</label>
                                        <a href="#" class="link-normal lh-1">Forget password?</a>
                                    </div>
                                    <input type="password" value="{{ old('password') }}"  name="password" class="custom-form-control" />
                                    <div class="text-danger none" id="password_error">The password field is required</div>
                                    <!-- @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror -->
                                    
                                    <button type="submit" class="b-btn mt-15 mb-15">{{ __('Continue')}}</button>
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
    <script src="{{ asset('/js/signin/step2.js') }}"></script>
@endsection