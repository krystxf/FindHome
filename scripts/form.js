function Load() {

    /*Counter*/
    let points = 0;
    /*    pole [mesto][poradi ovzdusi][poradi delka zivota]
    
        delka zivota on
        ovzdusi on
    
        [mesto][skore] = [mesto][poradi ovzdusi] + [mesto][poradi delka zivota]
        */
    var okres = {
        nazev: "",
        kvalitaOvzdusi: "",
        delkaZivota: "",
        nezamestnanost: "",
        zalidneni: "",
    }

    let arr = [];

    fetch('https://hackathon.madhome.cf/api/get')
        .then(response => response.json())
        .then(data => {
            data.forEach(element => {
                okres.nazev = element.nazev;
                okres.kvalitaOvzdusi = element.kvalitaOvzdusi;
                okres.delkaZivota = element.delkaZivota;
                okres.nezamestnanost = element.nezamestnanost;
                okres.zalidneni = element.zalidneni;
                arr.push(okres);
            });
        });

        arr.forEach(element => {
            console.log(element);
        });

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