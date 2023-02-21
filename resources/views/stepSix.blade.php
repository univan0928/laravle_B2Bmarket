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
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default">{{ __('✓')}}</span>
                        <span class="text-white text-uppercase">{{ __('Account creation')}}</span>
                    </li>
                    <li class="d-inline mr-20">
                        <span
                            class="b-badge b-mr-mini b-border b-thick b-border-cloud b-circle b-bg-cloud b-text-abyss b-default"
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
    <div class="ps-page--single" id="about-us">
        <div class="ps-about-intro">
            <div class="container">
                <div class="ps-section__header custom-section__header">
                    <div class="row center-element-2">
                        <div class="col-md-12">
                            <div class="">
                                <div class="pr-45 pl-45 pt-30 pb-30 bg-white">
                                    <p class="title mb-15">{{ __('Enter your business details')}}</p>
                                    <p class="subtitle-2">{{ __('Tell us about you and your business so we can verify it.
                                        Please provide information per your official documents to get verified quicker.')}}
                                        <span>
                                            <a href="#" class="download-i mytooltip-2">
                                                <img src="./img/download-i.svg" alt="download-i">
                                                <span class="mytooltiptext-2">{{ __('All registrants are verified to help
                                                    protect the identity of organizations like yours and to ensure we
                                                    can continue offering business-only benefits.')}}</span>
                                            </a>
                                        </span>
                                    </p>
                                    <hr class="bd-m">
                                    <form action="{{ route('stepSix') }}" method="POST">
                                        @csrf
                                        <p class="subtitle-3">{{ __('Contract Information')}}</p>
                                        <label class="label-1">{{ __('First and last name')}}</label>
                                        <input type="text" name="first_last_name" value="{{ old('first_last_name') }}" placeholder="First and last name" class="custom-form-control" />
                                        <div class="text-danger none" id="first_last_name_error">The name field is required</div>
                                        @error('first_last_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <label class="label-1">{{ __('Business phone')}}
                                            <span class="subtitle-2">
                                                <a href="#" class="download-i mytooltip-2">
                                                    <img src="./img/download-i.svg" alt="download-i">
                                                    <span class="mytooltiptext-2">{{ __('The number you enter will be displayed in
                                                        the account details and might be visible to other users. We may
                                                        contact you for verification purposes.')}}</span>
                                                </a>
                                            </span>
                                        </label>
                                        <input type="text" name="business_phone" value="{{ old('business_phone') }}" class="custom-form-control" />
                                        <div class="text-danger none" id="business_phone_error_required">The business phone field is required</div>
                                        <div class="text-danger none" id="business_phone_error_phone">The business phone field must be number</div>
                                        @error('business_phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="checkbox-element">
                                            <input type="checkbox" name="receive_message">
                                            <span>{{ __('Receive texts to get updates on your account verification status. Message
                                                and data rates may apply.')}}</span>
                                        </div>
                                        <hr class="bd-m">
                                        <p class="subtitle-3">{{ __('Business information')}}</p>
                                        <label class="label-1">{{ __('Business name')}}
                                            <span class="subtitle-2">
                                                <a href="#" class="download-i mytooltip-2">
                                                    <img src="./img/download-i.svg" alt="download-i">
                                                    <span class="mytooltiptext-2 tooltip-extra">{{ __('Enter your full legal entity
                                                        name. If you are a sole proprietor or unregistered business, enter
                                                        the name you conduct business under. If you do not have a business
                                                        name, enter your profession and choose "sole proprietorship" as your
                                                        business type.')}}</span>
                                                </a>
                                            </span>
                                        </label>
                                        <input type="text" name="business_name" value="{{ old('business_name') }}" class="custom-form-control" />
                                        <div class="text-danger none" id="business_name_error">The business name field is required</div>
                                        @error('business_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <label class="label-1">{{ __('Business type')}}</label>
                                        <div class="radio-element">
                                            <input type="radio" name="business_type" value="Sole_proprietorship" {{ old('business_type') == 'Sole_proprietorship' ? 'checked' : '' }}>
                                            <span>{{ __('Sole proprietorship (Not registered)')}}</span>
                                        </div>
                                        <div class="radio-element">
                                            <input type="radio" name="business_type" value="Other" {{ old('business_type') == 'Other' ? 'checked' : '' }}>
                                            <span>{{ __('Other')}}</span>
                                        </div>
                                        <div class="text-danger none" id="business_type_error">The business type field is required</div>
                                        @error('business_type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <hr class="bd-m">
                                        <p class="subtitle-3">{{ __('Business adress')}}</p>
                                        <p class="subtitle-2">{{ __('Have multiple locations? Use the address shown on official
                                            documents like tax forms.')}}</p>
                                        <label class="label-1">{{ __('Street address')}}</label>
                                        <input type="text" name="street_address" value="{{ old('street_address') }}" class="custom-form-control" />
                                        <div class="text-danger none" id="street_address_error">The street address field is required</div>
                                        @error('street_address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <label class="label-1">{{ __('Suite, unit, floor (optional)')}}</label>
                                        <input type="text" name="suite_unit_floor" class="custom-form-control" />
                                        <label class="label-1">{{ __('ZIP code')}}</label>
                                        <input type="text" name="zip_code" value="{{ old('zip_code') }}" class="custom-form-control" />
                                        <div class="text-danger none" id="zip_code_error_required">The zip code field is required</div>
                                        <div class="text-danger none" id="zip_code_error_number">The zip code field must be number</div>
                                        @error('zip_code')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <label class="label-1">{{ __('City')}}</label>
                                        <input type="text" name="city" value="{{ old('city') }}" class="custom-form-control" />
                                        <div class="text-danger none" id="city_error">The city field is required</div>
                                        @error('city')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <label class="label-1">{{ __('Country')}}</label>
                                        <select name="state" id="state-dropdown-id" class="select1">
                                            <option hidden="" value="">Select your country</option>
                                            <option value="AL" {{ old('state') == 'AL' ? 'selected' : '' }}>Alabama</option>
                                            <option value="AK" {{ old('state') == 'AK' ? 'selected' : '' }}>Alaska</option>
                                            <option value="AS" {{ old('state') == 'AS' ? 'selected' : '' }}>American Samoa</option>
                                            <option value="AZ" {{ old('state') == 'AZ' ? 'selected' : '' }}>Arizona</option>
                                            <option value="AR" {{ old('state') == 'AR' ? 'selected' : '' }}>Arkansas</option>
                                            <option value="CA" {{ old('state') == 'CA' ? 'selected' : '' }}>California</option>
                                            <option value="CO" {{ old('state') == 'CO' ? 'selected' : '' }}>Colorado</option>
                                            <option value="CT" {{ old('state') == 'CT' ? 'selected' : '' }}>Connecticut</option>
                                            <option value="DE" {{ old('state') == 'DE' ? 'selected' : '' }}>Delaware</option>
                                            <option value="DC" {{ old('state') == 'DC' ? 'selected' : '' }}>District of Columbia</option>
                                            <option value="FL" {{ old('state') == 'FL' ? 'selected' : '' }}>Florida</option>
                                            <option value="GA" {{ old('state') == 'GA' ? 'selected' : '' }}>Georgia</option>
                                            <option value="GU" {{ old('state') == 'GU' ? 'selected' : '' }}>Guam</option>
                                            <option value="HI" {{ old('state') == 'HI' ? 'selected' : '' }}>Hawaii</option>
                                            <option value="ID" {{ old('state') == 'ID' ? 'selected' : '' }}>Idaho</option>
                                            <option value="IL" {{ old('state') == 'IL' ? 'selected' : '' }}>Illinois</option>
                                            <option value="IN" {{ old('state') == 'IN' ? 'selected' : '' }}>Indiana</option>
                                            <option value="IA" {{ old('state') == 'IA' ? 'selected' : '' }}>Iowa</option>
                                            <option value="KS" {{ old('state') == 'KS' ? 'selected' : '' }}>Kansas</option>
                                            <option value="KY" {{ old('state') == 'KY' ? 'selected' : '' }}>Kentucky</option>
                                            <option value="LA" {{ old('state') == 'LA' ? 'selected' : '' }}>Louisiana</option>
                                            <option value="ME" {{ old('state') == 'ME' ? 'selected' : '' }}>Maine</option>
                                            <option value="MD" {{ old('state') == 'MD' ? 'selected' : '' }}>Maryland</option>
                                            <option value="MA" {{ old('state') == 'MA' ? 'selected' : '' }}>Massachusetts</option>
                                            <option value="MI" {{ old('state') == 'MI' ? 'selected' : '' }}>Michigan</option>
                                            <option value="MN" {{ old('state') == 'MN' ? 'selected' : '' }}>Minnesota</option>
                                            <option value="MS" {{ old('state') == 'MS' ? 'selected' : '' }}>Mississippi</option>
                                            <option value="MO" {{ old('state') == 'MO' ? 'selected' : '' }}>Missouri</option>
                                            <option value="MT" {{ old('state') == 'MT' ? 'selected' : '' }}>Montana</option>
                                            <option value="NE" {{ old('state') == 'NE' ? 'selected' : '' }}>Nebraska</option>
                                            <option value="NV" {{ old('state') == 'NV' ? 'selected' : '' }}>Nevada</option>
                                            <option value="NH" {{ old('state') == 'NH' ? 'selected' : '' }}>New Hampshire</option>
                                            <option value="NJ" {{ old('state') == 'NJ' ? 'selected' : '' }}>New Jersey</option>
                                            <option value="NM" {{ old('state') == 'NM' ? 'selected' : '' }}>New Mexico</option>
                                            <option value="NY" {{ old('state') == 'NY' ? 'selected' : '' }}>New York</option>
                                            <option value="NC" {{ old('state') == 'NC' ? 'selected' : '' }}>North Carolina</option>
                                            <option value="ND" {{ old('state') == 'ND' ? 'selected' : '' }}>North Dakota</option>
                                            <option value="MP" {{ old('state') == 'MP' ? 'selected' : '' }}>Northern Mariana Islands</option>
                                            <option value="OH" {{ old('state') == 'OH' ? 'selected' : '' }}>Ohio</option>
                                            <option value="OK" {{ old('state') == 'OK' ? 'selected' : '' }}>Oklahoma</option>
                                            <option value="OR" {{ old('state') == 'OR' ? 'selected' : '' }}>Oregon</option>
                                            <option value="PA" {{ old('state') == 'PA' ? 'selected' : '' }}>Pennsylvania</option>
                                            <option value="PR" {{ old('state') == 'PR' ? 'selected' : '' }}>Puerto Rico</option>
                                            <option value="RI" {{ old('state') == 'RI' ? 'selected' : '' }}>Rhode Island</option>
                                            <option value="SC" {{ old('state') == 'SC' ? 'selected' : '' }}>South Carolina</option>
                                            <option value="SD" {{ old('state') == 'SD' ? 'selected' : '' }}>South Dakota</option>
                                            <option value="TN" {{ old('state') == 'TN' ? 'selected' : '' }}>Tennessee</option>
                                            <option value="TX" {{ old('state') == 'TX' ? 'selected' : '' }}>Texas</option>
                                            <option value="UT" {{ old('state') == 'UT' ? 'selected' : '' }}>Utah</option>
                                            <option value="VT" {{ old('state') == 'VT' ? 'selected' : '' }}>Vermont</option>
                                            <option value="VI" {{ old('state') == 'VI' ? 'selected' : '' }}>Virgin Islands</option>
                                            <option value="VA" {{ old('state') == 'VA' ? 'selected' : '' }}>Virginia</option>
                                            <option value="WA" {{ old('state') == 'WA' ? 'selected' : '' }}>Washington</option>
                                            <option value="WV" {{ old('state') == 'WV' ? 'selected' : '' }}>West Virginia</option>
                                            <option value="WI" {{ old('state') == 'WI' ? 'selected' : '' }}>Wisconsin</option>
                                            <option value="WY" {{ old('state') == 'WY' ? 'selected' : '' }}>Wyoming</option>
                                            <option value="AE" {{ old('state') == 'AE' ? 'selected' : '' }}>U.S. Armed Forces, Europe</option>
                                            <option value="AP" {{ old('state') == 'AP' ? 'selected' : '' }}>U.S. Armed Forces, Pacific</option>
                                            <option value="AA" {{ old('state') == 'AA' ? 'selected' : '' }}>U.S. Armed Forces, Americas</option>
                                        </select>
                                        <div class="text-danger none" id="state_error">The country field is required</div>
                                        @error('state')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <hr class="bd-m">
                                        <button type="submit" class="b-btn mt-15 mb-15">{{ __('Create business account')}}</button>
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
    <script src="{{ asset('/js/validation/stepSix.js') }}"></script>
@endsection