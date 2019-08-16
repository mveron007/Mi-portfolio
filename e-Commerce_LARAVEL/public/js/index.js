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


// addEventListener("load", function() {
// var carouselPhone = document.querySelector('section');
// var mediaResponsive = window.matchMedia('(max-width: 600px)');
//
// function functionName2(mediaResponsive) {
//   if (mediaResponsive.matches) {
//      carouselPhone.classList.remove('container-card');
//   } else {
//     carouselPhone.classList.add('container-card');
//   }
// }
// mediaResponsive.addListener(functionName2);
// });
