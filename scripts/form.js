function Load() {


    const obyvatele = document.querySelector(".checkbox-obyvatele");
    const zivot = document.querySelector(".checkbox-delka-zivota");
    const nezamestnanost = document.querySelector(".checkbox-delka-nezamestnanost");
    const ovzdusi = document.querySelector(".checkbox-ovzdusi");

    const arrow = document.querySelector("#arrow-icon");
    arrow.addEventListener("click", arrowClick);
    const checkBox = document.getElementsByClassName("check");
    const form = document.querySelector("#form");




    /*Counter*/
    let points = 0;
    /*    pole [mesto][poradi ovzdusi][poradi delka zivota] OK
    
        delka zivota on
        ovzdusi on
    
        [mesto][skore] = [mesto][poradi ovzdusi] + [mesto][poradi delka zivota]
        */

    var arr = [];

    var okres = {
        nazev: "",
        kvalitaOvzdusi: null,
        delkaZivota: null,
        nezamestnanost: null,
        zalidneni: "",
        skore: null,
    }

    function save(nazev) {
        arr.push(nazev);
        //arr.forEach(element => console.log(element.pocet_obyvatel));
    }

    fetch('https://hackathon.madhome.cf/api/get')
        .then(response => response.json())
        .then(data => data.forEach(element => {
            const x = Object.create(okres);
            x.nazev = element.nazev;
            x.znecisteni = element.znecisteni;
            x.delkazivota = element.delkazivota;
            x.nezamestnanost = element.nezamestnanost;
            x.pocet_obyvatel = element.pocet_obyvatel;
            save(x);
        }));

    function filled() {
        if (obyvatele.checked == true) {
            arr.sort((a, b) => (a.pocet_obyvatel > b.pocet_obyvatel) ? 1 : -1);

            for (let index = 0; index < arr.length; index++) {
                console.log(arr[index].pocet_obyvatel);
            }
        } else {

        }
    }

    function arrowClick() {
        if (arrow.classList.contains("open")) {
            arrow.classList.remove("open");
            document.getElementById("form-items").style.visibility = "hidden";
            form.style.height = "8vh";
            arrow.style.bottom = "77%";
            arrow.style.margin = "0.5em";
            filled();
        } else {
            arrow.classList.add("open");
            document.getElementById("form-items").style.visibility = "visible";
            form.style.height = "50vh";
            arrow.style.bottom = "35%";
        }
    }
}