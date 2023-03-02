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
                                <p class="title mb-15">{{ __('Create new password')}}</p>
                                <p class="subtitle-2">{{ __('We will ask for this password whenever you Sign-In.')}}</p>
                                <form action="{{ route('auth.login.reset_password') }}" method="POST">
                                    @csrf
                                    <div class="password-tag">
                                        <label class="label-2">{{ __('New password')}}</label>
                                    </div>
                                    <input type="password" value="{{ old('password') }}"  name="password" class="custom-form-control" />
                                    <p class="tip">{{ __('Passwords must be at least 6 characters.')}}</p>
                                    
                                    <div class="text-danger none" id="password_error_required">The password field is required</div>
                                    <div class="text-danger none" id="password_error_match">Password confirmation does not match</div>
                                    <div class="text-danger none" id="password_error_rule">Password must have at least 1 uppercase letter and 1 number</div>
                                    <div class="text-danger none" id="password_error_length">Password must be at least 6 characters</div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <!-- @if (session()->has('verify_code_error'))
                                        <div class="text-danger" id="verify_code_error">
                                            {{ session('verify_code_error') }}
                                        </div>
                                    @endif -->

                                    <div class="password-tag">
                                        <label class="label-2">{{ __('Re-enter password')}}</label>
                                    </div>
                                    <input type="password" value="{{ old('password_confirmation') }}"  name="password_confirmation" class="custom-form-control" />
                                    @error('password_confirmation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <!-- @if (session()->has('verify_code_error'))
                                        <div class="text-danger" id="verify_code_error">
                                            {{ session('verify_code_error') }}
                                        </div>
                                    @endif -->

                                    <button type="submit" class="b-btn mt-15 mb-15">{{ __('Save changes and Sign-In')}}</button>
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
    <script src="{{ asset('/js/login/reset-password.js') }}"></script>
@endsection