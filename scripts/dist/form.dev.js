"use strict";

function Load() {
  var points = 0;
  var checkBox = document.getElementsByClassName("check");
  var btn = document.querySelector("#btn-comp");
  var arrow = document.querySelector("#arrow-icon");
  btn.addEventListener("click", myFunction);
  arrow.addEventListener("click", arrowClick);

  function myFunction() {
    document.getElementById("form").style.height = "5vh";
    document.getElementById("form-items").style.visibility = "hidden";
    arrow.style.visibility = "visible";
  }

  function arrowClick() {
    if (arrow.classList.contains("open")) {
      arrow.classList.remove("open");
    } else {
      arrow.classList.add("open");
    }
  }
}