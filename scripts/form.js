function Load() {


    const zivot = document.querySelector(".checkbox-delka-zivota");
    const nezamestnanost1 = document.querySelector(".checkbox-delka-nezamestnanost");
    const ovzdusi = document.querySelector(".slider-ovzdusi");

    const arrow = document.querySelector("#arrow-icon");
    arrow.addEventListener("click", arrowClick);
    const checkBox = document.getElementsByClassName("check");
    const form = document.querySelector("#form");

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
        //drawJaxvine();
        var obyvatele = document.getElementsByName('obyvatele');
        var min_obyvatele;
        var max_obyvatele;
        if (obyvatele[0].checked == 1) {
            min_obyvatele = 0;
            max_obyvatele = 50000;
        } else if (obyvatele[1].checked == 1) {
            min_obyvatele = 50000;
            max_obyvatele = 500000;
        } else {
            min_obyvatele = 500000;
            max_obyvatele = 5000000;
        }
        //console.log(zivot.checked);
        //console.log(max_obyvatele);
        var pole = [];
        drawOkres(pole);
        for (let index = 0; index < arr.length; index++) {
            if (arr[index].pocet_obyvatel >= min_obyvatele && arr[index].pocet_obyvatel <= max_obyvatele) {
                let allow = false;
                if (zivot.checked && arr[index].delkazivota > 77){
                    if (nezamestnanost1.checked && arr[index].nezamestnanost < 2){
                        if (arr[index].znecisteni > ovzdusi.value){
                            allow = true;
                        }
                    }
                    else if (!nezamestnanost1.checked){
                        if (arr[index].znecisteni > ovzdusi.value){
                            allow = true;
                        }
                    }
                }
                else if (!zivot.checked){
                    if (nezamestnanost1.checked && arr[index].nezamestnanost < 2){
                        if (arr[index].znecisteni > ovzdusi.value){
                            allow = true;
                        }
                    }
                    else if (!nezamestnanost1.checked){
                        if (arr[index].znecisteni > ovzdusi.value){
                            allow = true;
                        }
                    }
                }                

                if (allow) 
                    pole.push(arr[index].nazev);



                if (arr[index].nazev == "Praha 1") {
                    for (let i = 1; i <= 10; i++) {
                        pole.push("Praha " + i);
                    }
                    pole.push("Praha - západ");
                    pole.push("Praha - východ");
                }
                //console.log(arr[index].nazev + " - " + arr[index].pocet_obyvatel);
            }
        }
        drawOkres(pole);

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
            arrow.style.bottom = "44%";
            form.style.height = "41vh";
        }
    }
}