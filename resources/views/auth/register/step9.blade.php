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
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default">✓</span>
                        <span class="text-white text-uppercase">{{ __('Account creation')}}</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default"
                            role="alert">✓</span>
                        <span class="text-white text-uppercase">{{ __('Business details')}}</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default"
                            role="alert">✓</span>
                        <span class="text-white text-uppercase">{{ __('Finish')}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-white text-bold text-3"></p>
                    <p class="text-white text-bold text-3">{{ __('Thank you.')}} <br> {{ __('We are verifying your information.')}}</p>
                    <br>
                    <p class="text-white text-4">We'll notify you of your verification status via email in 24 to 48
                        hours.</p>
                    <br>
                    <button class="check-button">{{ __('Check status')}}</button>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>

    <div class="link-business ps-10 pb-40">
        <div class="container pt-30">
            <div class="row">
                <div class="ps-200 col-md-12">
                    <p class="text-bold link-business-text-1">{{ __('Start buying & selling on BrandedStocklots')}}</p>
                    <p class="link-business-text-2">{{ __('Many stock available, different categories')}}  </p>
                    <br>
                    <div class="row">
                        <a href="{{route('user-dashboard')}}" id="start_now">
                            <button class="account-button">{{ __('Start now')}}</button>
                        </a>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="row ps-100">
                <div class="col-md-4 col-sm-12 center">
                    <img src="{{asset('img/price-comparison-blue.svg')}}" alt="price" class="account-image">
                    <p class="link-business-text-3">{{ __('Manage your business profile')}}</p>
                </div>
                <div class="col-md-4 col-sm-12 center">
                    <img src="{{asset('img/centralize-tailspend-blue.svg')}}" alt="centralize" class="account-image">
                    <p class="link-business-text-3">{{ __('0% Commission')}}</p>
                </div>
                <div class="col-md-4 col-sm-12 center">
                    <img src="{{asset('img/gusto-callout1-blue.svg')}}" alt="gusto" class="account-image">
                    <p class="link-business-text-3">{{ __('Get quotes from sellers')}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="link-business-2">
        <div class="container pt-30">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-bold link-business-text-1 ps-20">{{ __('Discover stocklots from different
                        sellers to reduce costs and save time on business purchases')}}</p>
                    <br>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="bd-b-blue pr-20 center pb-30">
                                <img src="{{asset('img/business-only-prices-orange.svg')}}" alt="business-only-prices-orange"
                                    class="account-image">
                            </div>
                            <p class="link-business-text-3 pt-20">{{ __('Savings and Discounts')}}</p>
                            <p class="link-business-text-4">{{ __('Save on over 50 million stocklots with business-only pricing,
                                Quantity Discounts, and Progressive Discounts.')}}</p>
                            <a href="#" class="link-4">
                                {{ __('Discover different ways to save')}}
                                <img src="{{asset('img/icon-arrow-ocean.svg')}}" alt="icon-arrow-ocean">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="bd-b-blue pr-20 center pb-30">
                                <img src="{{asset('img/business-prime-orange.svg')}}" alt="business-prime-orange"
                                    class="account-image">
                            </div>
                            <p class="link-business-text-3 pt-20">{{ __('Buyers Club')}}</p>
                            <p class="link-business-text-4">{{ __('Join the Buyers club and receive exclusive benefits when sourcing from BrandedStocklots.com')}}</p>
                            <a href="#" class="link-4">
                                {{ __('Buyers Club benefits')}}
                                <img src="{{asset('img/icon-arrow-ocean.svg')}}" alt="icon-arrow-ocean">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="bd-b-blue pr-20 center pb-30">
                                <img src="{{asset('img/tax-exemption-orange.svg')}}" alt="tax-exemption-orange"
                                    class="account-image">
                            </div>
                            <p class="link-business-text-3 pt-20">{{ __('0% Commission')}}</p>
                            <p class="link-business-text-4">{{ __('Sourcing on brandedstocklots keeps you ahead of your competitors ')}}</p>
                            <a href="#" class="link-4">
                                {{ __('Learn more')}}
                                <img src="{{asset('img/icon-arrow-ocean.svg')}}" alt="icon-arrow-ocean">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="bd-b-blue pr-20 center pb-30">
                                <img src="{{asset('img/purchasing-system-orange.svg')}}" alt="purchasing-system-orange"
                                    class="account-image">
                            </div>
                            <p class="link-business-text-3 pt-20">{{ __('Business features')}}</p>
                            <p class="link-business-text-4">{{ __('Enjoy free features that empower your purchasing team such
                                as multi-user setting and business analytics.')}} </p>
                            <a href="#" class="link-4">
                                {{ __('See purchasing features')}}
                                <img src="{{asset('img/icon-arrow-ocean.svg')}}" alt="icon-arrow-ocean">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="link-business pb-40">
        <div class="container pt-30">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="pr-20 center pb-30">
                        <img src="{{asset('img/business-only-prices-orange.svg')}}" alt="business-only-prices-orange"
                            class="account-image">
                    </div>
                    <p class="text-bold link-business-text-1 pt-20">{{ __('Quick tips')}}</p>
                </div>

                <div class="col-md-3 col-sm-12">
                </div>

                <div class="col-md-3 col-sm-12">
                    <p class="link-business-text-3 pt-20">{{ __('Did you know you could upload multiple products?')}}</p>
                    <p class="link-business-text-4">{{ __('With your bulk uploader you can easily import multiple ads using CSV/XML format.')}} </p>
                    <a href="#" class="link-4">
                        {{ __('Discover Bulk Uploader')}}
                        <img src="{{asset('img/icon-arrow-ocean.svg')}}" alt="icon-arrow-ocean">
                    </a>
                </div>
                <div class="col-md-3 col-sm-12">
                    <p class="link-business-text-3 pt-20">{{ __('Easy to use real-time chat system.')}}</p>
                    <p class="link-business-text-4">{{ __('Use our BrandedStocklots Messenger to connect with buyers & sellers all over the world. ')}}</p>
                    <a href="#" class="link-4">
                        {{ __('Discover Messenger')}}
                        <img src="{{asset('img/icon-arrow-ocean.svg')}}" alt="icon-arrow-ocean">
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="link-business-2 ps-200">
        <div class="container pt-30">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-bold link-business-text-1 ps-20">{{ __('Frequently Asked Questions')}}</p>
                    <br>
                    <div>
                        <button class="accordion1">{{ __('What is the difference between Silver, Gold & VIP?')}}</button>
                        <div class="panel1">
                          <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')}}</p>
                        </div>
                        
                        <button class="accordion1">{{ __('How do I know which membership suits my Business?')}}</button>
                        <div class="panel1">
                          <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')}}</p>
                        </div>
                        
                        <button class="accordion1">{{ __('How can I contact Customer service?')}}</button>
                        <div class="panel1">
                          <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')}}</p>
                        </div>

                        <button class="accordion1">{{ __('What are the pricing benefits I get when I join BrandedStocklots')}}</button>
                        <div class="panel1">
                          <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')}}</p>
                        </div>

                        <button class="accordion1">{{ __('What are COVID-19 Supplies?')}}</button>
                        <div class="panel1">
                          <p>{{ __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.')}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection



@section('custom_js')
    <script src="{{ asset('/js/custom.js') }}"></script>
@endsection
