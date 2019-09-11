var btn1 = document.querySelector('#button1');
var btn2 = document.querySelector('#button2');
var btn3 = document.querySelector('#button3');


var myNav = document.querySelector('.main-nav');
// var myFoot = document.querySelector('.menu');
var chat = document.querySelector('.dropbtn2');
var myBody = document.querySelector('body');

btn1.addEventListener('click', functionName);

function functionName() {
  myNav.style.backgroundColor = "rgb(196, 35, 199)";
  myBody.style.backgroundColor = "rgb(49, 47, 56)";
  chat.style.backgroundColor = "rgb(196, 35, 199)";
  myNavS.style.backgroundColor = "rgb(196, 35, 199)";

}

btn2.addEventListener('click', functionName2);

function functionName2() {
  myNav.style.backgroundColor = "rgb(155, 14, 204)";
  myBody.style.backgroundColor = "rgb(244, 244, 245)";
  chat.style.backgroundColor = "rgb(155, 14, 204)";

}

btn3.addEventListener('click', functionName3);

function functionName3() {
  myNav.style.backgroundColor = "rgb(14, 141, 204)";
  myBody.style.backgroundColor = "rgb(49, 47, 56)";
  chat.style.backgroundColor = "rgb(14, 141, 204)";

}
