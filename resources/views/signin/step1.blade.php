@extends('layout.app')

@section('title', __('Martfury - Multipurpose Marketplace HTML5 Template + Admin Template'))

@section('custom_css')
    <link rel="stylesheet" href="{{ asset('/css/multi-step.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/signin.css') }}">
@endsection

@section('content')


    <!-- STATUS BAR -->
    <div class="process-bar">
        <div class="container">
            <div class="text-right">
                <ul class="d-inline">
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default">1</span>
                        <span class="text-white text-uppercase">{{ __('Account creation')}}</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-abyss b-text-cloud b-default"
                            role="alert">2</span>
                        <span class="text-white text-uppercase">{{ __('Business details')}}</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-abyss b-text-cloud b-default"
                            role="alert">3</span>
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
                            <div class="bg-white pd-30-27">
                                <p class="title mb-15">{{ __('Sign in')}}</p>
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
                                <p class="para-normal">By continuing, you agree to BrandedStocklots's <a href="#">{{ __('Conditions of Use')}}</a> and <a href="#">Privacy Notice</a>.</p>
                            </div>
                            <div class="a-divider a-divider-break"><h5 aria-level="5">New to Amazon?</h5></div>
                            <button type="submit" class="b-btn b-btn-add">{{ __('Create your account')}}</button>
                            <div class="button-wrapper" data-tippy-content="Click to copy button 30">
                                <button class="button-30" role="button">Button 30</button>
                            </div>
                            <div class="button-wrapper" data-tippy-content="Click to copy button 4">
                               <button class="button-4" role="button">Button 4</button>
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
    <script src="{{ asset('/js/validation/step2.js') }}"></script>
@endsection