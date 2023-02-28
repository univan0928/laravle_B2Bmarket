$(document).ready(function() {
    $("#state_select").change(function() {
        var selectedValue = $(this).val();
        $("input[name='mobile_number']").val(selectedValue);
    });
});

$('form').submit(function(e) {
    const mobile_number = $("input[name='mobile_number']").val();
    if (mobile_number == "") {
        $("#mobile_number_error_required").removeClass("none");
        e.preventDefault();
    } else if (isNaN(mobile_number)) {
        $("#mobile_number_error_required").addClass("none");
        $("#mobile_number_error_number").removeClass("none");
        e.preventDefault();
    } else {
        $("#mobile_number_error_number").addClass("none");
        localStorage.setItem('mobile_number', mobile_number);
    }
});