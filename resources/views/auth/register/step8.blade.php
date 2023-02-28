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
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default">✓</span>
                        <span class="text-white text-uppercase">Account creation</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default"
                            role="alert">✓</span>
                        <span class="text-white text-uppercase">Business details</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default"
                            role="alert">3</span>
                        <span class="text-white text-uppercase">Finish</span>
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
                    <div class="row center-element-2">
                        <div class="col-md-12">
                            <div class="">
                                <div class="pr-45 pl-45 pt-30 pb-30 bg-white">
                                    <p class="title mb-15">{{ __('Get verified quicker (optional)')}}</p>
                                    <p class="subtitle-2">{{ __('Choose any one of the following options to help speed up the')}}
                                        <a href="#" class="link-big extra link-title-2">{{ __('verification process')}}</a></p>

                                    <form action="{{ route('auth.register.step8') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card mt-15">
                                            <button type="button" class="accordion">{{ __('Tax ID, EIN, or SSN')}}
                                                <i class="icon-chevron-down"></i>
                                            </button>
                                            <div class="panel">
                                                <p class="subtitle-2 pt-10">Enter your business tax ID or employer ID number
                                                    (EIN). If you're a sole proprietor, enter your social security number
                                                    (SSN).</p>
                                                <label class="subtitle-2 pt-10">{{ __('Tax ID, EIN, or SSN')}}</label>
                                                <input type="text" name="tax_ein_ssn" value="{{ old('tax_ein_ssn') }}" class="custom-form-control mb-20" />
                                                <div class="text-danger none" id="tax_ein_ssn_error">This field is required</div>
                                                @error('tax_ein_ssn')
                                                    <div class="text-danger mt-err">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="card mt-15">
                                            <button type="button" class="accordion">{{ __('Invitation code')}}
                                                <i class="icon-chevron-down"></i>
                                            </button>
                                            <div class="panel">
                                                <p class="subtitle-2 pt-10">{{ __('Your invitation code is given to you by BrandedStocklots
                                                    to instantly verify your account. Note: this is different than
                                                    your one-time password.')}}</p>
                                                <label class="subtitle-2 pt-10">{{ __('Invitation code')}}</label>
                                                <input type="text" name="invitation_code" value="{{ old('invitation_code') }}" class="custom-form-control mb-20" />
                                                <div class="text-danger none" id="invitation_code_error">The Inivation code field is required</div>
                                                @error('invitation_code')
                                                    <div class="text-danger mt-err">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="card mt-15">
                                            <button type="button" class="accordion">{{ __('Official documents')}}
                                                <i class="icon-chevron-down"></i>
                                            </button>
                                            <div class="panel">
                                                <p class="subtitle-2 pt-10">Upload a document on official letterhead that
                                                    shows your organization's status.</p>
                                                <p class="subtitle-2 pt-10">{{ __('Official documents that contain your EIN, or
                                                    sole proprietor, or individual status.')}}</p>
                                                <input type="file" class="file" id="file1" name="file1">
                                                @error('file1')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <p class="para-normal">{{ __('PDF or JPEG format, size limit of 10 MB')}}</p>
                                                <p class="subtitle-2 pt-10">{{ __('Official documents that contain your EIN, or
                                                    sole proprietor, or individual status.')}}</p>
                                                <input type="file" class="file" id="file2" name="file2">
                                                @error('file2')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                                <p class="para-normal">{{ __('PDF or JPEG format, size limit of 10 MB')}}</p>
                                            </div>
                                        </div>
                                        <button type="submit" class="b-btn mt-15 mb-15">{{ __('Submit')}}</button>
                                    </form>
                                    <div class="link-tag">
                                        <a href="{{ route('auth.register.step9') }}" class="link-normal">Skip this step</a>
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
    <script src="{{ asset('/js/custom.js') }}"></script>
    <!-- CLIENT-SIDE VALIDATION -->
    <script src="{{ asset('/js/register/step8.js') }}"></script>
@endsection
