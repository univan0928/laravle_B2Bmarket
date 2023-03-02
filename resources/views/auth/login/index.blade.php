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
                            @if(session('show_error_message') == true)
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
                                <form action="{{ route('auth.login.index') }}" method="POST">
                                    @csrf
                                    <label class="label-2">{{ __('Email or mobile phone number')}}</label>
                                    <input type="email" value="{{ old('email') }}"  name="email" class="custom-form-control" />
                                    <div class="text-danger none" id="email_error">This field is required</div>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="password-tag">
                                        <label class="label-2">{{ __('Password')}}</label>
                                        <a href="{{ route('auth.login.forget_password') }}" class="link-normal lh-1">Forget password?</a>
                                    </div>
                                    <input type="password" value="{{ old('password') }}"  name="password" class="custom-form-control" />
                                    <div class="text-danger none" id="password_error">The password field is required</div>

                                    <button type="submit" class="b-btn mt-15 mb-15">{{ __('Sign in')}}</button>
                                </form>
                                <p class="para-normal">By continuing, you agree to BrandedStocklots's <a href="#">{{ __('Conditions of Use')}}</a> and <a href="#">Privacy Notice</a>.</p>
                                <div class="checkbox-element2">
                                    <input type="checkbox" name="receive_message">
                                    <span>{{ __('Keep me signed in.')}}
                                        <span class="a-declarative" data-action="a-popover" data-csa-c-type="widget" data-csa-c-func-deps="aui-da-a-popover" data-a-popover="{&quot;closeButtonLabel&quot;:&quot;&quot;,&quot;activate&quot;:&quot;onclick&quot;,&quot;header&quot;:&quot;\&quot;Keep Me Signed In\&quot; Checkbox&quot;,&quot;inlineContent&quot;:&quot;\u003cp>Choosing \&quot;Keep me signed in\&quot; reduces the number of times you're asked to Sign-In on this device.\u003c\/p>\n\u003cp>To keep your account secure, use this option only on your personal devices.\u003c\/p>&quot;}" data-csa-c-id="sbdwp4-momo5p-lwd90x-lqyy04">
                                            <a id="remember_me_learn_more_link" href="javascript:void(0)" role="button" class="a-popover-trigger a-declarative detail">
                                            Details
                                                <!-- <i class="a-icon a-icon-popover"></i> -->
                                            </a>
                                        </span>
                                    </span>
                                </div>
                            </div>
                            <div class="a-divider a-divider-break"><h5 aria-level="5">New to Amazon?</h5></div>
                            
                            <div class="button-wrapper" data-tippy-content="Click to copy button 4">
                               <a href="{{ route('auth.register.step1') }}" class="button-4" role="button" >Register now</a>
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
    <script src="{{ asset('/js/login/index.js') }}"></script>
@endsection