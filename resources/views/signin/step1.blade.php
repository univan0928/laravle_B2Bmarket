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
                    <div class="row">
                        <div class="col-md-6 pl-0 pr-0">
                            <div class="card">
                                <div class="pr-45 pl-45 pt-30 pb-30 bg-white">
                                    <p class="top-title mb-15">Let's create your Branded Stocklots account</p>
                                    <p class="label-1">Enter the email you'd like to use for your business account</p>
                                    <form action="{{ route('step1') }}" method="POST" id="myForm">
                                        @csrf
                                        <input type="email" id="business_email" name="business_email" value="{{ old('business_email') }}" placeholder="Enter email" class="custom-form-control" />
                                        <div class="text-danger none" id="business_email_error">The business_email field is required</div>
                                        @error('business_email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="selector pt-15">
                                            <p for="select-name"><span>*</span>{{ __('Please select trade role:')}}</p>
                                            <div class="form-group">
                                                <input type="radio" name="role" value="Buyer" {{ old('role') == 'Buyer' ? 'checked' : '' }}><label for="Buyer" required>{{ __('Buyer')}}</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" name="role" value="Seller" {{ old('role') == 'Seller' ? 'checked' : '' }}><label for="Seller">{{ __('Seller')}}</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="radio" name="role" value="Both" {{ old('role') == 'Both' ? 'checked' : '' }}><label for="Both">{{ __('Both')}}</label>
                                            </div>
                                        </div>
                                        <div class="text-danger none" id="role_error">The role field is required</div>
                                        @error('role')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <button type="submit" class="b-btn mt-15 mb-15">Get started</button>
                                    </form>
                                    <p class="descrition">{{ __('Make sure you have information about your organization to help us verify your business account faster.')}}</p>
                                    <a href="#" class="link-title mytooltip">
                                        {{ __('Why is verification needed?')}}
                                        <span class="mytooltiptext">
                                            {{ __('To ensure the identity of yours and other businesses remains secure, we always confirm new business registrations.')}}
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-0 pr-0">
                            <div class="card">
                                <div class="pr-45 pl-45 pt-30 bg-abyss">
                                    <p class="top-title2 mb-15 text-white">{{ __('Stocklots for every type of organization')}}</p>
                                    <div class="card-content">
                                        <img src="{{asset('img/icon-savings.svg')}}" alt="icon-savings" class="pr-10">
                                        <div>
                                            <p class="text-white text-bold subtitle">{{ __('Buy more, save more')}}</p>
                                            <p class="text-white subtext">{{ __('From stocklots to liquidation deals, save on over 60 million products..')}}</p>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <img src="{{asset('img/icon-addusers.svg')}}" alt="icon-savings" class="pr-10">
                                        <div>
                                            <p class="text-white text-bold subtitle">{{ __('Connect your people')}}</p>
                                            <p class="text-white subtext">{{ __('Create groups, share payment methods, and manage supplies across locations.')}}</p>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <img src="{{asset('img/icon-bp.svg')}}" alt="icon-savings" class="pr-10">
                                        <div>
                                            <p class="text-white text-bold subtitle">{{ __('Direct chat with wholesalers')}}</p>
                                            <p class="text-white subtext">{{ __('Contact sellers directly whenever it convenes you 24/7 brainstockloads')}}</p>
                                        </div>
                                    </div>
                                    <img src="{{asset('img/building.svg')}}" alt="building" class="building">
                                    
                                </div>
                                <div class="card-footer text-white">
                                    <a href="#">{{ __('Learn more about Branded Stocklots')}}</a>
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
    <script src="{{ asset('/js/validation/step1.js') }}"></script>
@endsection