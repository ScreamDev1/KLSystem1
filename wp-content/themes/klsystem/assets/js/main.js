
var acc = document.getElementsByClassName("cell__header");
var i;

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