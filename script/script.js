var navStatus = true;

function CloseNav() {
    document.getElementById("nav1").style.left =
    "-350px";
    document.getElementById("nav2").style.left =
    "-350px";
    document.getElementById("nav3").style.left =
    "-350px";
    document.getElementById("nav4").style.left =
    "-350px";
    document.getElementById("nav5").style.left =
    "-350px";
    document.getElementById("nav6").style.left =
    "-350px";
    document.getElementById("nav7").style.left =
    "-350px";
    document.getElementById("nav8").style.left =
    "-350px";
}

//Open Nav1
function ShowNav1(){
    if (navStatus == true) {
        document.getElementById("nav1").style.left =
        "50px";
        document.getElementById("nav2").style.left =
        "-350px";
        document.getElementById("nav3").style.left =
        "-350px";
        document.getElementById("nav4").style.left =
        "-350px";
        document.getElementById("nav5").style.left =
        "-350px";
        document.getElementById("nav6").style.left =
        "-350px";
        document.getElementById("nav7").style.left =
        "-350px";
        document.getElementById("nav8").style.left =
        "-350px";
    } else if (navStatus == false) {
        document.getElementById("nav1").style.left =
        "-350px";
    }
}