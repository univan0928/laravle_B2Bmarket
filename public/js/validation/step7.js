$( document ).ready(function() {

    // GET LOCALSTORAGE DATA

    var data = {
        business_email: localStorage.getItem('business_email'),
        role: localStorage.getItem('role'),
        name: localStorage.getItem('name'),
        email: localStorage.getItem('email'),
        password: localStorage.getItem('password'),
        mobile_number: localStorage.getItem('mobile_number'),
    }

    $("#business_email").val(data.business_email);
    $("#role").val(data.role);
    $("#name").val(data.name);
    $("#email").val(data.email);
    $("#password").val(data.password);
    $("#mobile_number").val(data.mobile_number);
});

$('form').submit(function(e) {
    const first_last_name = $("input[name='first_last_name']").val();
    const business_phone = $("input[name='business_phone']").val();
    const business_name = $("input[name='business_name']").val();
    const business_type = $("input[name='business_type']:checked").val();
    const street_address = $("input[name='street_address']").val();
    const zip_code = $("input[name='zip_code']").val();
    const city = $("input[name='city']").val();
    const state = $("select[name='state']").val();

    // FIRST AND LAST NAME FIELD VALIDATION
    if (first_last_name == "") {
        $("#first_last_name_error").removeClass("none");
        e.preventDefault();
    } else {
        $("#first_last_name_error").addClass("none");
        localStorage.setItem('first_last_name', first_last_name);
    }

    // BUSINESS PHONE FIELD VALIDATION
    if (business_phone == "") {
        $("#business_phone_error_required").removeClass('none');
        e.preventDefault();
    } else if (isNaN(business_phone)) {
        $("#business_phone_error_required").addClass('none');
        $("#business_phone_error_phone").removeClass('none');
        e.preventDefault();
    } else {
        $("#business_phone_error_phone").addClass('none');
        localStorage.setItem('business_phone', business_phone);
    }
    
    //  BUSINESS NAME VALIDATION
    if (business_name == "") {
        $("#business_name_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#business_name_error").addClass('none');
        localStorage.setItem('business_name', business_name);
    }

    // BUSINESS TYPE FIELD VALIDATION
    if (!business_type) {
        $("#business_type_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#business_type_error").addClass('none');
        localStorage.setItem('business_type', business_type);
    }

    //  STREET ADDRESS VALIDATION
    if (street_address == "") {
        $("#street_address_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#street_address_error").addClass('none');
        localStorage.setItem('street_address', street_address);
    }

    //  ZIP CODE VALIDATION
    if (zip_code == "") {
        $("#zip_code_error_required").removeClass('none');
        e.preventDefault();
    } else if(isNaN(zip_code)) {
        $("#zip_code_error_required").addClass('none');
        $("#zip_code_error_number").removeClass('none');
        e.preventDefault();
    } else {
        $("#zip_code_error_number").addClass('none');
        localStorage.setItem('zip_code', zip_code);
    }

    //  CITY VALIDATION
    if (city == "") {
        $("#city_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#city_error").addClass('none');
        localStorage.setItem('city', city);
    }

    //  COUNTRY VALIDATION
    if (state == "") {
        $("#state_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#state_error").addClass('none');
        localStorage.setItem('state', state);
    }

 
});