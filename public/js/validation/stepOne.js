$('form').submit(function(e) {
    const role = $("input[name='role']:checked").val();
    const business_email = $("#business_email").val();
    if (!role) {
        $("#role_error").removeClass("none");
        e.preventDefault();
    } else {
        $("#role_error").addClass("none");
        localStorage.setItem('role', role);
    }
    if (business_email == "") {
        $("#business_email_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#business_email_error").addClass('none');
        localStorage.setItem('business_email', business_email);
    }
});