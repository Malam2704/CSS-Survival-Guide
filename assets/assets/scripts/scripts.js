// Sidebar Nav function to open it
function openNav() {
    document.getElementById("mySidenav").style.width = "11em";
    document.getElementById("mySidenav").style.zIndex = "1";
    document.getElementById("xButton").style.padding = 0 + "em";
    // document.body.style = "margin-left: 10em; transition: 0.5s;";
    //document.getElementsByClassName("wrapper")[0].style = "margin-left: 30%; transition: 1s;";
}

// Sidebar nav function to close it
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style = "margin-left: 0%; transition: 0.5s;";
    document.getElementById("mySidenav").innerHTML = "<a href='javascript:void(0)' class='closebtn' onclick='closeNav()' id='xButton'>&times;</a>";
    document.getElementById("xButton").style.padding = 0 + "em";
    //document.getElementsByClassName("wrapper")[0].style = "margin-left: 15%; transition: 1s;";
}

// sidebar nav function to get all the h3's and turn them intp an a element
// to redirect them to the h3 with the id tag
function myFunction(){
    var titles = document.querySelectorAll("h3");
    for (var i = 0; i < titles.length; i++) {
        var h = document.createElement("H3");
        var a = document.createElement("A");
        var hThreeText = titles[i].innerText.replace(" ","_");
        var t = document.createTextNode(titles[i].innerText);
        a.appendChild(t);
        titles[i].setAttribute('id', hThreeText);
        a.setAttribute('href', '#' + hThreeText);
        h.appendChild(a);
        document.getElementById("mySidenav").appendChild(a);
    }
}

// Mobile nav
function threeLine() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  // Re Cpatcha API
