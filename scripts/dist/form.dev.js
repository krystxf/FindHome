"use strict";

function Load() {
  /*Counter*/
  var points = 0;
  var pocetObyvatel;
  var znecisteni; //mensi je horsi

  var nezamestnanost;
  var delkaZivota;
  fetch('https://hackathon.madhome.cf/api/obyvatelstvo2').then(function (response) {
    return response.json();
  }).then(function (data) {
    return console.log(data);
  });
  fetch('https://hackathon.madhome.cf/api/znecisteni').then(function (response) {
    return response.json();
  }).then(function (data) {
    return console.log(data);
  });
  fetch('https://hackathon.madhome.cf/api/delkazivota').then(function (response) {
    return response.json();
  }).then(function (data) {
    return console.log(data);
  });
  fetch('https://hackathon.madhome.cf/api/nezamestnanost').then(function (response) {
    return response.json();
  }).then(function (data) {
    return console.log(data);
  });
  var checkBox = document.getElementsByTagName("chck");
  var arrow = document.querySelector("#arrow-icon");
  var form = document.querySelector("#form");
  arrow.addEventListener("click", arrowClick);
  /*Arrow animation*/

  function arrowClick() {
    if (arrow.classList.contains("open")) {
      arrow.classList.remove("open");
      document.getElementById("form-items").style.visibility = "hidden";
      form.style.height = "8vh";
      arrow.style.bottom = "77%";
      arrow.style.margin = "0.5em";
    } else {
      arrow.classList.add("open");
      document.getElementById("form-items").style.visibility = "visible";
      form.style.height = "50vh";
      arrow.style.bottom = "35%";
    }
  }
}