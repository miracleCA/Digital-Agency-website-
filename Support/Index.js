//Get the button,
let mybutton = document.getElementById("myBtn");
let Mynav = document.getElementById("nav");

// When the user scrolls down 200px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
    mybutton.style.display = "block";
  } 
  else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function back_to_top() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}