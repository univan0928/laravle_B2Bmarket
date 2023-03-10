@extends('layout.app')

@section('title', __('Martfury - Multipurpose Marketplace HTML5 Template + Admin Template'))

@section('custom_css')
    <link rel="stylesheet" href="{{ asset('/css/multi-step.css') }}">
@endsection

@section('content')


    <!-- STATUS BAR -->
    <div class="process-bar">
        <div class="container">
            <div class="text-right">
                <ul class="d-inline">
                    <li class="d-inline mr-20">
                        <span class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default">{{ __('1')}}</span>
                        <span class="text-white text-uppercase">{{ __('Account creation')}}</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-abyss b-text-cloud b-default"
                            role="alert">{{ __('2')}}</span>
                        <span class="text-white text-uppercase">{{ __('Business details')}}</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-abyss b-text-cloud b-default"
                            role="alert">{{ __('3')}}</span>
                        <span class="text-white text-uppercase">{{ __('Finish')}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="ps-page--single" id="about-us">
        <div class="ps-about-intro">
            <div class="container">
                <div class="ps-section__header custom-section__header">
                    <div class="row center-element">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="pr-45 pl-45 pt-30 pb-30 bg-white">
                                    <p class="title mb-15">{{ __('Verify email address')}}</p>
                                    <p class="subtitle-2">To verify your email, we've sent a One Time Password (OTP) to <span class="subtitle-2" id="email_show"></span> </p>
                                    <form action="{{ route('auth.register.step4') }}" method="POST">
                                        @csrf
                                        <label class="label-2">{{ __('Enter OTP')}}</label>
                                        <input type="text" name="verify_code" value="{{ old('verify_code') }}" class="custom-form-control" />
                                        <div class="text-danger none" id="verify_code_error_required">This field is required</div>
                                        <div class="text-danger none" id="verify_code_error_length">This field must be 6 characters</div>
                                        <div class="text-danger none" id="verify_code_error_number">This field must be number</div>
                                        @error('verify_code')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div>
                                            @if (session()->has('verify_code_error'))
                                                <div class="text-danger" id="verify_code_error">
                                                    {{ session('verify_code_error') }}
                                                </div>
                                            @endif
                                        </div>
                                        <button type="submit" class="b-btn mt-15 mb-15">{{ __('Create your BrandedStocklots account')}}</button>
                                    </form>
                                    <p class="para-normal">By creating an account, you agree to BrandedStocklots's <a href="#">{{ __('Conditions of Use')}}</a> and <a href="#">{{ __('Privacy Notice')}}</a>.</p>
                                    <div class="center">
                                        <a href="{{ route('sendEmail') }}" class="link-big">{{ __('Resend OTP')}}</a>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_js')
    <!-- CLIENT-SIDE VALIDATION -->
    <script src="{{ asset('/js/register/step4.js') }}"></script>
@endsection