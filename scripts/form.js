function Load() {

    /*Counter*/
    let points = 0;
    var pocetObyvatel;
    var znecisteni; //mensi je horsi
    var nezamestnanost;
    var delkaZivota;

    fetch('https://hackathon.madhome.cf/api/obyvatelstvo2')
        .then(response => response.json())
        .then(data => console.log(data));

    fetch('https://hackathon.madhome.cf/api/znecisteni')
        .then(response => response.json())
        .then(data => console.log(data));

    fetch('https://hackathon.madhome.cf/api/delkazivota')
        .then(response => response.json())
        .then(data => console.log(data));

    fetch('https://hackathon.madhome.cf/api/nezamestnanost')
        .then(response => response.json())
        .then(data => console.log(data));


    let checkBox = document.getElementsByTagName("chck");
    let arrow = document.querySelector("#arrow-icon");
    let form = document.querySelector("#form");

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