//Get the button, nav, and active class
var mybutton = document.getElementById("myBtn");
var Mynav = document.getElementById("nav");

// When the user scrolls down 200px from the top of the document, show the button and 
// When the user scrolls down 550px from the top of the document, show the nav background color
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
    mybutton.style.display = "block";
  } 
  else {
    mybutton.style.display = "none";
  }
  if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
    Mynav.style.background = "rgb(5, 5, 60)";
    document.getElementById("active").style.border = "2px solid white";
  } 
  else if (screen.width <= 699) {
    Mynav.style.background = "transparent";
    document.getElementById("active").style.border = "2px solid white"
  }
  else {
        Mynav.style.background = "transparent";
        document.getElementById("active").style.border = "2px solid rgb(10, 10, 75)"
  }
}
// When the user clicks on the button, scroll to the top of the document
function back_to_top() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


// When the user clicks on the buttons, display the sections
function myFunction() {
  var x = document.getElementById("service");
  var y = document.getElementById("workflow");      
  y.style.display = "none";
  if (y.style.display === "none") {
    x.style.display = "block";
  }
  else {
    y.style.display = "none";
  }
}

function gFunction() {
  var x = document.getElementById("service");
  var y = document.getElementById("workflow");
  x.style.display = "none";
  if (x.style.display === "none") {
    y.style.display = "block";
  }
  else {
    x.style.display = "none";
  }
}

var serv = document.getElementById('ourserv');
var work = document.getElementById('mywork');

work.addEventListener('click', () => work.style.backgroundColor = 'white')
work.addEventListener('click', () => serv.style.backgroundColor = 'rgb(13, 9, 90)')
work.addEventListener('click', () => work.style.color = 'rgb(13, 9, 90)')
work.addEventListener('click', () => serv.style.color = 'white')
work.addEventListener('click', () => work.style.border = '2px solid rgb(13, 9, 90)')

serv.addEventListener('click', () => serv.style.backgroundColor = 'white')
serv.addEventListener('click', () => work.style.backgroundColor = 'rgb(13, 9, 90)')
serv.addEventListener('click', () => serv.style.color = 'rgb(13, 9, 90)')
serv.addEventListener('click', () => work.style.color = 'white')
serv.addEventListener('click', () => serv.style.border = '2px solid rgb(13, 9, 90)')