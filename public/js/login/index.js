// CLIENT SIDE VALIDATION
$('form').submit(function(e) {
    const email = $("input[name='email']").val();
    const password = $("input[name='password']").val();
    if (email == "") {
        $("#email_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#email_error").addClass('none');
        localStorage.setItem('email', email);
    }
    if (password == "") {
        $("#password_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#password_error").addClass('none');
    }
});
