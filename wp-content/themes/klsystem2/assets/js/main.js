
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

$(document).ready(function() {
    $(".service-cells").hover(function () {
        $('.it_parallax').css('transform', 'translateX(-40%) translateY(0)');
        $('.it_parallax').css('transition', 'all 2s ease-in-out');
    });
    $(".features").hover(function () {
        $('.zabbix-parallax').css('transform', 'translateX(-25%) translateY(0)');
        $('.zabbix-parallax').css('transition', 'all 2s ease-in-out');
    });
    $(".products_1c").hover(function () {
        $('.parallax-1c').css('transform', 'translateX(-30%) translateY(0)');
        $('.parallax-1c').css('transition', 'all 2s ease-in-out');
    });
    $(".wt-features").hover(function () {
        $('.wtware-parallax').css('transform', 'translateX(-25%) translateY(0)');
        $('.wtware-parallax').css('transition', 'all 2s ease-in-out');
    });
    $(".tel-features").hover(function () {
        $('.tel-parallax').css('transform', 'translateX(-25%) translateY(0)');
        $('.tel-parallax').css('transition', 'all 2s ease-in-out');
    });
    $(".sites-features").hover(function () {
        $('.sites-parallax').css('transform', 'translateX(-30%) translateY(0)');
        $('.sites-parallax').css('transition', 'all 2s ease-in-out');
    });
    $(".network").hover(function () {
        $('.network-parallax').css('transform', 'translateX(-15%) translateY(0)');
        $('.network-parallax').css('transition', 'all 2s ease-in-out');
    });
    $(".video-features").hover(function () {
        $('.video-parallax').css('transform', 'translateX(-30%) translateY(0)');
        $('.video-parallax').css('transition', 'all 2s ease-in-out');
    });
});
