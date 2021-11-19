
  /*nav js*/

  function myFunction(x) {
    var z = document.getElementById('mobilenav');
    var y = document.getElementById("myLinks");
    var asd = document.getElementById("asd");
    var w = y.children;
    if (y.style.display === "flex") {
        y.style.display = "none";
        z.style.boxShadow = "none";
        asd.style.backgroundColor="transparent";

    } else {
        y.style.display = "flex";
        z.style.boxShadow = " 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)";
        asd.style.backgroundColor="#ffffff";
        for (let i of w){
            i.style.opacity= "1";
            i.style.animation="opacityAnimation 2s";
        }

    }
    x.classList.toggle("change");
}

  /*popUp js*/
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
// slider js

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-orange", "");
  }
  x[slideIndex-1].style.display = "grid";  
  x[slideIndex-1].style.animation = "Anima 2s";  
  dots[slideIndex-1].className += " w3-orange";
}