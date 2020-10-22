"use strict";

function Load() {
  var obyvatele0 = document.querySelector(".checkbox-obyvatele0");
  var obyvatele1 = document.querySelector(".checkbox-obyvatele1");
  var obyvatele2 = document.querySelector(".checkbox-obyvatele2");
  var zivot = document.querySelector(".checkbox-delka-zivota");
  var nezamestnanost = document.querySelector(".checkbox-delka-nezamestnanost");
  var ovzdusi = document.querySelector(".slider-ovzdusi");
  var arrow = document.querySelector("#arrow-icon");
  arrow.addEventListener("click", arrowClick);
  var checkBox = document.getElementsByClassName("check");
  var form = document.querySelector("#form");

  if (obyvatele == 0) {
    var _min_obyvatele = 0;
    var _max_obyvatele = 100000;
  } else if (obyvatele == 1) {
    var _min_obyvatele2 = 100000;
    var _max_obyvatele2 = 500000;
  } else {
    var _min_obyvatele3 = 500000;
    var _max_obyvatele3 = 5000000;
  }

  console.log(obyvatele.value);
  /*Counter*/

  var points = 0;
  var arr = [];

  function save(nazev) {
    arr.push(nazev); //arr.forEach(element => console.log(element.pocet_obyvatel));
  }

  fetch('https://hackathon.madhome.cf/api/get').then(function (response) {
    return response.json();
  }).then(function (data) {
    return data.forEach(function (element) {
      var x = {};
      x.nazev = element.nazev;
      x.znecisteni = parseInt(element.znecisteni);
      x.delkazivota = parseInt(element.delkazivota);
      x.nezamestnanost = parseFloat(element.nezamestnanost);
      x.pocet_obyvatel = parseInt(element.pocet_obyvatel);
      save(x);
    });
  });

  function filled() {
    if (obyvatele.value) {
      arr.sort(function (a, b) {
        return a.pocet_obyvatel0 > b.pocet_obyvatel0 ? 1 : -1;
      });
      arr.sort(function (a, b) {
        return a.znecisteni > b.znecisteni ? 1 : -1;
      });

      for (var index = 0; index < arr.length; index++) {
        console.log(arr[index].znecisteni);
      }

      for (var _index = 0; _index < arr.length; _index++) {
        if (arr[_index].znecisteni >= ovzdusi && arr[_index].pocet_obyvatel >= min_obyvatele && arr[_index].pocet_obyvatel0 <= max_obyvatele) {
          console.log(arr[_index].pocet_obyvatel);
        }
      }
    } else {}
  }

  function arrowClick() {
    if (arrow.classList.contains("open")) {
      arrow.classList.remove("open");
      document.getElementById("form-items").style.visibility = "hidden";
      form.style.height = "8vh";
      arrow.style.bottom = "76%";
      filled();
    } else {
      arrow.classList.add("open");
      document.getElementById("form-items").style.visibility = "visible";
      arrow.style.bottom = "35%";
      form.style.height = "50vh";
    }
  }
}