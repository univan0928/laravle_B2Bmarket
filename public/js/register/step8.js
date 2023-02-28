$('form').submit(function(e) {
    const tax_ein_ssn = $("input[name='tax_ein_ssn']").val();
    const invitation_code = $("input[name='invitation_code']").val();
    const business_url = $("input[name='business_url']").val();
  
    if (tax_ein_ssn == "") {
        $("#tax_ein_ssn_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#tax_ein_ssn_error").addClass('none');
        localStorage.setItem('tax_ein_ssn', tax_ein_ssn);
    }

    if (invitation_code == "") {
        $("#invitation_code_error").removeClass('none');
        e.preventDefault();
    } else {
        $("#invitation_code_error").addClass('none');
        localStorage.setItem('invitation_code', invitation_code);
    }
});