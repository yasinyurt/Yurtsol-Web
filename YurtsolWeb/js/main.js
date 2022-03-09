//JAVASCRIPT DOCUMENTS

function headerMenu() {
    var head = document.getElementById("header").style.height="135px";
    document.getElementById("fa-bars").style.display="none";
    document.getElementById("fa-times").style.display="block";
}

function closeMenu(){
    var header = document.getElementById("header").style.height="100px";
    document.getElementById("fa-times").style.display="none";
    document.getElementById("fa-bars").style.display="block";
}

//--Responsive Menu Scripts

function resMenuOpen() {
    var header = document.getElementById("header").style.height="210px";
    document.getElementById("res-fa-bars").style.display="none";
    document.getElementById("res-fa-times").style.display="block";
}

function resMenuClose() {
    var header = document.getElementById("header").style.height="78px";
    document.getElementById("res-fa-bars").style.display="block";
    document.getElementById("res-fa-times").style.display="none";  
}

//SOCİAL BUTTONS

function openButton1() {
    var button = document.getElementById("zoom-in-1").style.height="35px";
}
function closeButton1() {
    var button = document.getElementById("zoom-in-1").style.height="0px";
}

function openButton2() {
    var button = document.getElementById("zoom-in-2").style.height="35px";
}
function closeButton2() {
    var button = document.getElementById("zoom-in-2").style.height="0px";
}

function openButton3() {
    var button = document.getElementById("zoom-in-3").style.height="35px";
}
function closeButton3() {
    var button = document.getElementById("zoom-in-3").style.height="0px";
}

function openButton4() {
    var button = document.getElementById("zoom-in-4").style.height="35px";
}
function closeButton4() {
    var button = document.getElementById("zoom-in-4").style.height="0px";
}
