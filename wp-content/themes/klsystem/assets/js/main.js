
var acc = document.getElementsByClassName("js_acc");
var i;
var mq = window.matchMedia( "(max-width: 700px)" );
if(mq.matches){
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            var panel2 = panel.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
                panel2.style.display = "none";
            } else {
                panel.style.display = "block";
                panel2.style.display = "inline";
            }
        });
    }
}


$(document).ready(function(){
    PopUpHide();
});
function PopUpShow(){
    $("#myDIV").css('display', 'flex');
}
function PopUpHide(){
    $("#myDIV").hide();
}

$(document).ready(function(){
    PopUpRequestHide();
});
function PopUpRequestShow(){
    $(".form-wrapper").css('display', 'block');
}
function PopUpRequestHide(){
    $(".form-wrapper").hide();
}
