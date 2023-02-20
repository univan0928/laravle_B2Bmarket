$(document).ready(function(){

$('.content').richText();

$(".card.ad-card").click(function () {
    $('.card.ad-card').css('border-color', '#15171c59');
    $('.card.ad-card .card-header').css('background', '#15171c59');
    $('.card.ad-card .card-footer').css('background', '#15171c59');
    $(this).find('.card-header').css('background', '#15171c');
    $(this).find('.card-footer').css('background', '#15171c');
    $(this).css('border-color', '#15171c');
})
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);


$(".preview").click(function(){

});
$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".modal-content .next-payment").click(function(){

    current_fs = $('.step2');
    console.log(current_fs)
    next_fs =$('.step2').next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(++current);
    });

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

$('.payment-card').click(function(){
    console.log($(this))
    $('.payment-card').css('background', 'white');
    // $('.payment-card').css('border-color', '#15171c');
    $(this).css('background', '#15171c40');
    $(this).css('border-color', '#15171c');
    var txt = $(this).find('label').text().trim();
    // alert(txt)

    // debugger

    if(txt === "iDeal") {
        $('.card-footer.paypal').css('display', 'none');
        $('.card-footer.credit').css('display', 'none');
        $('.card-footer.ideal').css('display', 'block');
    }

    if(txt === "PayPal") {
        $('.card-footer.paypal').css('display', 'block');
        $('.card-footer.credit').css('display', 'none');
        $('.card-footer.ideal').css('display', 'none');
        
    }

    if(txt === "Credit card") {
        $('.card-footer.paypal').css('display', 'none');
        $('.card-footer.credit').css('display', 'block');
        $('.card-footer.ideal').css('display', 'none');
        
    }

})

});