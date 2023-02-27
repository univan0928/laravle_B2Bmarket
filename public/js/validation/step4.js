$(document).ready(function() {

    $("#email_show").text(localStorage.getItem('email'));
});

$('form').submit(function(e) {
    const verify_code = $("input[name='verify_code']").val();

    // VERIFY CODE VALIDATION
    if (verify_code == "") {
        $("#verify_code_error_length").addClass("none");
        $("#verify_code_error_number").addClass("none");
        $("#verify_code_error_required").removeClass("none");
        e.preventDefault();
    } else if(isNaN(verify_code)) {
        $("#verify_code_error_required").addClass("none");
        $("#verify_code_error_length").addClass("none");
        $("#verify_code_error_number").removeClass("none");
        e.preventDefault();
    } else if(verify_code.length != 6) {
        $("#verify_code_error_number").addClass("none");
        $("#verify_code_error_required").addClass("none");
        $("#verify_code_error_length").removeClass("none");
        e.preventDefault();
    } else {
        $("#verify_code_error_length").addClass("none");
    }
});