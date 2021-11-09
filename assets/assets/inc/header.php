<?php
    session_name("sIndex");
    session_start();
    if($_SESSION['login'] != true){
        header("Location: index.php");
    }
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
        <script src="assets/scripts/scripts.js"></script>
        <!-- Captcha API -->
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body>
        <!-- Header logo and site name -->        
        <header class="hero-header">
            <img class="hero-img" src="assets/images/logo_teamName.png" alt="hippo logo with team name Hip Hip Array">
                <h1 class="hero-text">CSS Survival Guide</h1>
        </header>
        <div>
            <nav class="topnav">
                <a class="activeNav" <?php echo (isset($pageName) && $pageName=='CSS Survival Guide') ? 'class="active" ' : '' ?> onclick="threeLine()" href="javascript:void(0);">
                    <img class="nav-icon" src="assets/images/favicon2.png" alt="hippo icon with closed mouth"> 
                    <span class="nav-icon">&#9776;</span> 
                    Select a Chapter 
                </a>
                <div id="myLinks">
                    <a <?php echo (isset($pageName) && $pageName=='CSS Survival Guide') ? 'class="active" ' : '' ?> href="home.php">Home Page</a>
                    <a <?php echo (isset($pageName) && $pageName=='Chapter 1: How to Add CSS to HTML') ? 'class="active" ' : '' ?> href="ch1.php">Chapter 1: Adding CSS To HTML</a>
                    <a <?php echo (isset($pageName) && $pageName=='Chapter 2: CSS Selectors') ? 'class="active" ' : '' ?> href="ch2.php">Chapter 2: CSS Selectors</a>
                    <a <?php echo (isset($pageName) && $pageName=='Chapter 3: CSS Properties') ? 'class="active" ' : '' ?> href="ch3.php">Chapter 3: CSS Properties</a>
                    <a <?php echo (isset($pageName) && $pageName=='Chapter 4: Text Properties') ? 'class="active" ' : '' ?> href="ch4.php">Chapter 4: Text Properties</a>
                    <a <?php echo (isset($pageName) && $pageName=='Chapter 5: CSS Layout') ? 'class="active" ' : '' ?> href="ch5.php">Chapter 5: CSS Layout</a>
                    <a <?php echo (isset($pageName) && $pageName=='Chapter 6: Width, Height, Overflow') ? 'class="active" ' : '' ?> href="ch6.php">Chapter 6: Width, Height, and Overflow</a>
                    <a <?php echo (isset($pageName) && $pageName=='Chapter 7: CSS Box Model') ? 'class="active" ' : '' ?> href="ch7.php">Chapter 7: CSS Box Properties</a>
                    <a <?php echo (isset($pageName) && $pageName=='Chapter 8: Position') ? 'class="active" ' : '' ?> href="ch8.php">Chapter 8: Positions</a>
                    <a <?php echo (isset($pageName) && $pageName=='Chapter 9: Pseudo-Classes') ? 'class="active" ' : '' ?> href="ch9.php">Chapter 9: Pseudo Classes</a>
                    <a <?php echo (isset($pageName) && $pageName=='Chapter 10: Order and Specificity') ? 'class="active" ' : '' ?> href="ch10.php">Chapter 10: Order and Specificity</a>
                </div>
                <!-- <a href="javascript:void(0);" class="icon" onclick="threeLine()">
                    <i class="fa fa-bars"></i>
                </a> -->
                <a class='activeNav' href="clearSession.php" onclick="closeNav()">Logout</a>
            </nav>
        </div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" id="xButton">&times;</a>
                <!-- <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a> -->
                <!-- <button onclick="myFunction()">Try it</button> -->
            </div>

            <span id='sideNavIcon' onclick="openNav(); myFunction();">&#9776; Sections</span>

            <!-- <div style="float: right;">
                <h2>Hello there!</h2>
                <p> Did this calculator prove helpful to you? Then I would highly appreciate small donations via PayPal. You may first want to convert your currency to Euros (€) here.</p>
                <div>PlaceHolder for Api</div>
                <p>… or use this link for shopping on Amazon, without affecting your order.</p>
            </div> -->

            <div class="wrapper">
            <main>
                <h2 class="topTitle"> <?php echo $pageName;?> </h2>