// CLIENT SIDE VALIDATION
$('form').submit(function(e) {
    const email = $("input[name='email']").val();
    if (email == "") {
        $("#email_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#email_error").addClass('none');
    }
});