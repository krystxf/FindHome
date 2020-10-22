function Load() {

    const obyvatele0 = document.querySelector(".checkbox-obyvatele0");
    const obyvatele1 = document.querySelector(".checkbox-obyvatele1");
    const obyvatele2 = document.querySelector(".checkbox-obyvatele2");

    const zivot = document.querySelector(".checkbox-delka-zivota");
    const nezamestnanost = document.querySelector(".checkbox-delka-nezamestnanost");
    const ovzdusi = document.querySelector(".slider-ovzdusi");

    const arrow = document.querySelector("#arrow-icon");
    arrow.addEventListener("click", arrowClick);
    const checkBox = document.getElementsByClassName("check");
    const form = document.querySelector("#form");

    if (obyvatele == 0) {
        const min_obyvatele = 0;
        const max_obyvatele = 100000;
    } else if (obyvatele == 1) {
        const min_obyvatele = 100000;
        const max_obyvatele = 500000;
    } else {
        const min_obyvatele = 500000;
        const max_obyvatele = 5000000;
    }

    console.log(obyvatele.value);

    /*Counter*/
    let points = 0;

    var arr = [];


    function save(nazev) {
        arr.push(nazev);
        //arr.forEach(element => console.log(element.pocet_obyvatel));
    }

    fetch('https://hackathon.madhome.cf/api/get')
        .then(response => response.json())
        .then(data => data.forEach(element => {
            const x = {};
            x.nazev = element.nazev;
            x.znecisteni = parseInt(element.znecisteni);
            x.delkazivota = parseInt(element.delkazivota);
            x.nezamestnanost = parseFloat(element.nezamestnanost);
            x.pocet_obyvatel = parseInt(element.pocet_obyvatel);
            save(x);
        }));

    function filled() {
        if (obyvatele.value) {
            arr.sort((a, b) => (a.pocet_obyvatel0 > b.pocet_obyvatel0) ? 1 : -1);

            arr.sort((a, b) => (a.znecisteni > b.znecisteni) ? 1 : -1);

            for (let index = 0; index < arr.length; index++) {
                console.log(arr[index].znecisteni);
            }

            for (let index = 0; index < arr.length; index++) {
                if (arr[index].znecisteni >= ovzdusi && arr[index].pocet_obyvatel >= min_obyvatele && arr[index].pocet_obyvatel0 <= max_obyvatele) {
                    console.log(arr[index].pocet_obyvatel);
                }
            }
        } else {

        }
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