function onContinue() {
    $.ajax({
        url: 'step3',
        type: 'post',
        data: $('form').serialize(),
        dataType: 'json',
        success: function(response){
            var error = response.error;
            var success = response.success;
            if(error != "") {
                $('#alert_message').html(error);
            }
            else {
                location.href="/auth/register/step4";
            }
        },
        error: function(jqXhr, json, errorThrown){
            var error = jqXhr.responseText;
            $('#alert_message').html(error);
        }
    });
}