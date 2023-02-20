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
                                    <p class="subtitle-2">To verify your email, we've sent a One Time Password (OTP) to teammember0525@gmail.com <a href="#" class="link-normal">{{ __('(Change)')}}</a> </p>
                                    <form action="{{ route('stepFour') }}" method="POST">
                                        @csrf
                                        <label class="label-2">{{ __('Enter OTP')}}</label>
                                        <input type="text" class="custom-form-control" />
                                        <button type="submit" class="b-btn mt-15 mb-15">{{ __('Create your BrandedStocklots account')}}</button>
                                    </form>
                                    <p class="para-normal">By creating an account, you agree to BrandedStocklots's <a href="#">{{ __('Conditions of Use')}}</a> and <a href="#">{{ __('Privacy Notice')}}</a>.</p>
                                    <div class="center">
                                        <a href="#" class="link-big">{{ __('Resend OTP')}}</a>    
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