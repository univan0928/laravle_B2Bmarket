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
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="h-captcha" data-sitekey="e40b0c3e-bedf-4d07-9dea-af28a5a58a35"></div>
                                    </form>
                                    <div id="alert_message"></div>
                                    <button type="button" onclick="onContinue()"  class="b-btn mt-15 mb-15">Continue</button>
                                    <p class="para-normal">By continuing, you agree to BrandedStocklots's <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.</p>
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
    <script>
        function onContinue(){
            $.ajax({
                url: '/stepThree',
                type: 'post',
                data: $('form').serialize(),
                dataType: 'json',
                success: function(response){
                    var error = response.error;
                    var success = response.success;
                    if(error != "") {
                        $('#alert_message').html(error);
                    }
                    else {
                        location.href="/stepFour";
                    }
                },
                error: function(jqXhr, json, errorThrown){
                    var error = jqXhr.responseText;
                    $('#alert_message').html(error);
                }
            });
        }
    </script>

    <script src="https://hcaptcha.com/1/api.js" async defer></script>
@endsection
