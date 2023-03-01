$(document).ready(function() {
    const emailValue = localStorage.getItem('email');
    $("input[name='email']").val(emailValue);
});