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
                            <div class="bg-white pd-30-27">
                                <p class="title mb-15">{{ __('Sign in')}}</p>
                                <form action="{{ route('signin.step1') }}" method="POST">
                                    @csrf
                                    <label class="label-2">{{ __('Email or mobile phone number')}}</label>
                                    <input type="email" value="{{ old('email') }}"  name="email" class="custom-form-control" />
                                    <div class="text-danger none" id="email_error">This field is required</div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    
                                    <button type="submit" class="b-btn mt-15 mb-15">{{ __('Continue')}}</button>
                                </form>
                                <p class="para-normal">By continuing, you agree to BrandedStocklots's <a href="#">{{ __('Conditions of Use')}}</a> and <a href="#">Privacy Notice</a>.</p>
                            </div>
                            <div class="a-divider a-divider-break"><h5 aria-level="5">New to Amazon?</h5></div>
                            
                            <div class="button-wrapper" data-tippy-content="Click to copy button 4">
                               <button class="button-4" role="button">Create your account</button>
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
    <script src="{{ asset('/js/signin/step1.js') }}"></script>
@endsection