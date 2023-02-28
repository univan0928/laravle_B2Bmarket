@extends('layout.app')

@section('title', __('Martfury - Multipurpose Marketplace HTML5 Template + Admin Template'))

@section('custom_css')
    <link rel="stylesheet" href="{{ asset('/css/multi-step.css') }}">
@endsection

@section('content')

    <div class="process-bar">
        <div class="container">
            <div class="text-right">
                <ul class="d-inline">
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default">1</span>
                        <span class="text-white text-uppercase">Account creation</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-abyss b-text-cloud b-default"
                            role="alert">2</span>
                        <span class="text-white text-uppercase">Business details</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-abyss b-text-cloud b-default"
                            role="alert">3</span>
                        <span class="text-white text-uppercase">Finish</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ps-page--single" id="about-us">
        <div class="ps-about-intro">
            <div class="container">
                <div class="ps-section__header custom-section__header">
                    <div class="row center-element">
                        <div class="col-md-12">
                            <div class="">
                                <div class="pr-45 pl-45 pt-30 pb-30 bg-white">
                                    <p class="title mb-15">Add mobile number</p>
                                    <p class="subtitle-2">To enhance your account security, add and verify your mobile number.</p>
                                    <p class="label-2">New mobile number</p>
                                    <form action="{{ route('auth.register.step5') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-4">
                                                <select class="browser-default custom-select" id="state_select">
                                                    <option hidden="" value="">NL +31</option>
                                                    <option value="+1">US +1</option>
                                                    <option value="+44">GB +44</option>
                                                    <option value="+31">NL +31</option>
                                                    <option value="+61">AU +61</option>
                                                </select>
                                            </div>
                                            <div class="col-8">
                                                <!-- value="{{ old('mobile_number') }}" -->
                                                <input type="text" name="mobile_number" value="+31" class="custom-form-control" />
                                            </div>
                                            <div class="text-danger none m-err" id="mobile_number_error_required">The mobile number field is required</div>
                                            <div class="text-danger none m-err" id="mobile_number_error_number">The mobile number must be number</div>
                                            @error('mobile_number')
                                                <div class="text-danger m-err">{{ $message }}</div>
                                            @enderror
                                            @if (session()->has('show_status'))
                                                <div class="text-danger m-err">
                                                    {{ session('show_status') }}
                                                </div>
                                            @endif
                                        </div>
                                        <p class="subtitle-2">By enrolling a mobile phone number, your consent to receive automated security notifications via text message from BrandedStocklots. Remove your number in Login & Security to cancel. For more information reply HELP. Message and data rates may apply. Message frequency varies.</p>
                                        <button type="submit" class="b-btn mt-15 mb-15">Add mobile number</button>
                                    </form>
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
    <script src="{{ asset('/js/register/step5.js') }}"></script>
@endsection