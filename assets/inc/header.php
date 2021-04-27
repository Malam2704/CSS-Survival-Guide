<?php
    session_name("sIndex");
    session_start();
?>
<!-- <header>
    <h1>echo $pageNamename</h1>
     logo goes below here
    <img src="assets/images/logo">
</header> -->
<html lang="en">
    <head>
        <!-- Your basic head code where it shows what the pageName is and
        getting the viewports and reference css sheets -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title> <?php echo $pageName;?> </title> 
        <!-- Stylesheet -->
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
        <!-- load favicon image in browser tab-->
        <link rel="icon" href="assets/images/favicon2.png"> 
        <!-- Js Scripts -->
        <!-- <script src="assets/scripts/scripts.js"></script> -->
    </head>
    <body>
        <!-- Header logo and site name -->        
        <header class="hero-header">
            <img class="hero-img" src="assets/images/logo_teamName.png" alt="hippo logo with team name Hip Hip Array">
                <h1 class="hero-text">CSS Survival Guide</h1>
        </header>
        <div>
            <nav>
                <ul>
                    <li <?php echo (isset($pageName) && $pageName=='CSS Survival Guide') ? 'class="active" ' : '' ?>><a href="<?php echo $path; ?>home.php">Home&nbsp;Page</a>
                    <img class="nav-icon" src="assets/images/favicon2.png" alt="hippo icon with closed mouth">
                    </li>
                    <li <?php echo (isset($pageName) && $pageName=='Chapter 1: How to Add CSS to HTML') ? 'class="active" ' : '' ?>><a href="ch1.php">Chapter 1: Adding CSS To HTML</a></li>
                    <li <?php echo (isset($pageName) && $pageName=='Chapter 2: CSS Selectors') ? 'class="active" ' : '' ?>><a href="ch2.php">Chapter 2: CSS Selectors</a></li>
                    <li <?php echo (isset($pageName) && $pageName=='Chapter 3: CSS Properties') ? 'class="active" ' : '' ?>><a href="ch3.php">Chapter 3: CSS Properties</a></li>
                    <li <?php echo (isset($pageName) && $pageName=='Chapter 4: Text Properties') ? 'class="active" ' : '' ?>><a href="ch4.php">Chapter 4: Text Properties</a></li>
                    <li <?php echo (isset($pageName) && $pageName=='Chapter 5: CSS Layout') ? 'class="active" ' : '' ?>><a href="ch5.php">Chapter 5: CSS Layout</a></li>
                    <li <?php echo (isset($pageName) && $pageName=='Chapter 6: Width, Height, Overflow') ? 'class="active" ' : '' ?>><a href="ch6.php">Chapter 6: Width, Height, and Overflow</a></li>
                    <li <?php echo (isset($pageName) && $pageName=='Chapter 7: CSS Box Model') ? 'class="active" ' : '' ?>><a href="ch7.php">Chapter 7: CSS Box Properties</a></li>
                    <li <?php echo (isset($pageName) && $pageName=='Chapter 8: Position') ? 'class="active" ' : '' ?>><a href="ch8.php">Chapter 8: Positions</a></li>
                    <li <?php echo (isset($pageName) && $pageName=='Chapter 9: Pseudo-Classes') ? 'class="active" ' : '' ?>><a href="ch9.php">Chapter 9: Pseudo Classes</a></li>
                    <li <?php echo (isset($pageName) && $pageName=='Chapter 10: Order and Specificity') ? 'class="active" ' : '' ?>><a href="ch10.php">Chapter 10: Order and Specificity</a></li>
                </ul>
            </nav>
            <script>
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

                function myFunction(){
                    var titles = document.getElementsByTagName("h3");
                    for (var i = 0; i < titles.length; i++) {
                        var h = document.createElement("H3");
                        var t = document.createTextNode("Hello World");
                        h.appendChild(t);
                        document.getElementById("mySidenav").appendChild(h);
                    }
                }
            </script>

            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <!-- <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a> -->
                <button onclick="myFunction()">Try it</button>
            </div>

            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Jump to Sections</span>

            <div class="wrapper">
            <main>
                <h2 style="font-size: 250%; margin-top: 3em; margin-bottom: 1.75em; text-decoration:underline; text-align:center"> <?php echo $pageName;?> </h2>