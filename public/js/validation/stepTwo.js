$('form').submit(function(e) {
    const name = $("input[name='name']").val();
    const email = $("input[name='email']").val();
    const password = $("input[name='password']").val();
    const password_confirmation = $("input[name='password_confirmation']").val();

    // NAME FIELD VALIDATION
    if (name == "") {
        $("#name_error").removeClass("none");
        e.preventDefault();
    } else {
        $("#name_error").addClass("none");
        localStorage.setItem('name', name);
    }

    // EMAIL FIELD VALIDATION
    if (email == "") {
        $("#email_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#email_error").addClass('none');
        localStorage.setItem('email', email);
    }
    
    // PASSWORD VALIDATION
    const regex = /^(?=.*[A-Z])(?=.*\d).+$/;
    if(password == "") {
        $("#password_error_required").removeClass("none");
        e.preventDefault();
    } else if (password.length < 6) {
        $("#password_error_match,#password_error_rule, #password_error_length, #password_error_required").addClass("none");
        $("#password_error_length").removeClass("none");
        e.preventDefault();
    } else if (password != password_confirmation) {
        $("#password_error_match,#password_error_rule, #password_error_length, #password_error_required").addClass("none");
        $("#password_error_match").removeClass("none");
        e.preventDefault();
    } else if (!password.match(regex)) {
        $("#password_error_match,#password_error_rule, #password_error_length, #password_error_required").addClass("none");
        $("#password_error_rule").removeClass("none");
        e.preventDefault();
    } else {
        $("#password_error_match,#password_error_rule, #password_error_length, #password_error_required").addClass("none");
        localStorage.setItem('password', password);
    }
});