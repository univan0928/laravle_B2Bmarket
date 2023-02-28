// CLIENT SIDE VALIDATION
$('form').submit(function(e) {
    const password = $("input[name='password']").val();
    if (password == "") {
        $("#password_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#password_error").addClass('none');
    }
});