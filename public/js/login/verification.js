$(document).ready(function() {
    const email = localStorage.getItem('email');
    $("#email_show").html(email);
    $("span.link-big.hoverable").click(function() {
        $("#help-tag").toggle();
    });

    $('form').submit(function(e) {
        const verify_code = $("input[name='verify_code']").val();
        if (verify_code == "") {
            $("#verify_code_error").removeClass('none');
            e.preventDefault();
        } else {
            $("#verify_code_error").addClass('none');
        }
    });
});