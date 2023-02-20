var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {    
    this.style.border = "0px";

    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}



var acc1 = document.getElementsByClassName("accordion1");
var j;

for (j = 0; j < acc1.length; j++) {
  acc1[j].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel1 = this.nextElementSibling;
    if (panel1.style.maxHeight) {
      panel1.style.maxHeight = null;
    } else {
      panel1.style.maxHeight = panel1.scrollHeight + "px";
    } 
  });
}


$(document).ready(function() {
  $('#showInputsBtn').click(function() {
    this.checked? $('#info-inputs').hide() : $('#info-inputs').show();
  })

  let showVerifyWindow = false;
  $('#v-info-toggle-btn').click(() => {
    showVerifyWindow = !showVerifyWindow;    
    showVerifyWindow? $('#verifyWindow').show() : $('#verifyWindow').hide();
  })

  $('#bpCheckbox').click(function () {
    this.checked? $('.add-content .b-info').show() : $('.add-content .b-info').hide();
  });

  $(".input-file-btn").click(function () {
    $(".fileinput").trigger("click")
  })
})

$(document).ready(function() {
  $('#showInputsBtn').click(function() {
    this.checked? $('#info-inputs').hide() : $('#info-inputs').show();
  })

  let showVerifyWindow2 = false;
  $('#v-info-toggle-btn').click(() => {
    showVerifyWindow2 = !showVerifyWindow2;    
    showVerifyWindow2? $('#verifyWindow2').show() : $('#verifyWindow2').hide();
  })

  $('#bpCheckbox').click(function () {
    this.checked? $('.add-content .b-info').show() : $('.add-content .b-info').hide();
  });

  $(".input-file-btn").click(function () {
    $(".fileinput").trigger("click")
  })
})