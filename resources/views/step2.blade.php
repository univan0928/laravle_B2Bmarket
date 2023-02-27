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
                            <div class="pr-45 pl-45 pt-30 pb-30 bg-white">
                                <p class="title mb-15">{{ __('Enter your full name and choose your business passwords')}}</p>
                                <form action="{{ route('step2') }}" method="POST">
                                    @csrf
                                    <label class="label-2">{{ __('Your name')}}</label>
                                    <input type="text" value="{{ old('name') }}" placeholder="First and last name" name="name" class="custom-form-control" />
                                    <div class="text-danger none" id="name_error">The name field is required</div>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="label-2">{{ __('Email')}}</label>
                                    <input type="email" value="{{ old('email') }}" name="email" placeholder="teammember0525@gmail.com" class="custom-form-control" />
                                    <div class="text-danger none" id="email_error">The email field is required</div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="label-2">{{ __('Password')}}</label>
                                    <input type="password" value="{{ old('password') }}" name="password" placeholder="At least 6 characters" class="custom-form-control" />
                                    <div id="pass-notice">
                                        <i class="a-icon a-icon-alert"></i>
                                        <span>{{ __('Passwords must be at least 6 characters.')}}</span>
                                    </div>
                                    <div class="text-danger none" id="password_error_required">The email field is required</div>
                                    <div class="text-danger none" id="password_error_match">Password confirmation does not match</div>
                                    <div class="text-danger none" id="password_error_rule">Password must have at least 1 uppercase letter and 1 number</div>
                                    <div class="text-danger none" id="password_error_length">Password must be at least 6 characters</div>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <label class="label-2">{{ __('Re-enter Password')}}</label>
                                    <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="custom-form-control" />
                                    @error('password_confirmation')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <button type="submit" class="b-btn mt-15 mb-15">{{ __('Next step')}}</button>
                                </form>
                                <p class="para-normal">By continuing, you agree to BrandedStocklots's <a href="#">{{ __('Conditions of Use')}}</a> and <a href="#">Privacy Notice</a>.</p>
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