$(document).ready(function() {
    const email = localStorage.getItem('email');
    $("#email_show").html(email);
    $("span.link-big.hoverable").click(function() {
        $("#help-tag").toggle();
    });
});