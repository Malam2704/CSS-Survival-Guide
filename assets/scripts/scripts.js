function openNav() {
    document.getElementById("mySidenav").style.width = "15%";
    document.body.style = "margin-left: 15%; transition: 0.5s;";
    //document.getElementsByClassName("wrapper")[0].style = "margin-left: 30%; transition: 1s;";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style = "margin-left: 0%; transition: 0.5s;";
    //document.getElementsByClassName("wrapper")[0].style = "margin-left: 15%; transition: 1s;";
}

function makeSidenav(){
    var titles = document.getElementsByTagName("h3");
    for (var i = 0; i < titles.length; i++) {
        var h = document.createElement("H3");
        var t = document.createTextNode("Hello World");
        h.appendChild(t);
        document.getElementById("mySidenav").appendChild(h);
    }
}