function Load() {

    /*Counter*/
    let points = 0;

    const checkBox = document.getElementsByClassName("check");
    let arrow = document.querySelector("#arrow-icon");
    let form = document.querySelector("#form");

    arrow.addEventListener("click", arrowClick);

    /*Arrow animation*/
    function arrowClick() {
        if(arrow.classList.contains("open")){
            arrow.classList.remove("open");
            document.getElementById("form-items").style.visibility = "hidden";
            form.style.height = "8vh";
            arrow.style.bottom = "77%";
            arrow.style.margin = "0.5em";
        }
        else{
            arrow.classList.add("open");
            document.getElementById("form-items").style.visibility = "visible";
            form.style.height = "50vh";
            arrow.style.bottom = "35%";
        }
    }




}