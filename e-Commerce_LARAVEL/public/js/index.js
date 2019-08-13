addEventListener("load", function() {
var btnMenu = document.querySelector('.menu-item');
var contMenu = document.querySelector('.drop-link');


btnMenu.addEventListener('click', functionName);

function functionName() {
  if (contMenu.style.display === "none") {
    contMenu.style.display = "block";
  } else {
    contMenu.style.display = "none";
  }


}
});
