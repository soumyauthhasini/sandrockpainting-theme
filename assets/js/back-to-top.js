//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 400px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 400 ||
    document.documentElement.scrollTop > 400
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

// scroll to top with an offset of 350
function backToTop() {
  document.body.scrollTop = 375;
  document.documentElement.scrollTop = 375;
}// JavaScript Document