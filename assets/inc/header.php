<?php
    session_name("sIndex");
    session_start();
?>
<!-- <header>
    <h1>echo $pagename</h1>
     logo goes below here
    <img src="assets/images/logo">
</header> -->
<html lang="en">
    <head>
        <!-- Your basic head code where it shows what the page is and
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
                    <li ><a href="home.php">Home&nbsp;Page</a>
                    <img class="nav-icon" src="assets/images/favicon2.png" alt="hippo icon with closed mouth">
                    </li>
                    <li ><a href="ch1.php">Chapter 1: Adding CSS To HTML</a></li>
                    <li ><a href="ch2.php">Chapter 2: CSS Selectors</a></li>
                    <li ><a href="ch3.php">Chapter 3: CSS Properties</a></li>
                    <li ><a href="ch4.php">Chapter 4: Text Properties</a></li>
                    <li ><a href="ch5.php">Chapter 5: CSS Layout</a></li>
                    <li ><a href="ch6.php">Chapter 6: Width, Height, and Overflow</a></li>
                    <li ><a href="ch7.php">Chapter 7: CSS Box Properties</a></li>
                    <li ><a href="ch8.php">Chapter 8: Positions</a></li>
                    <li ><a href="ch9.php">Chapter 9: Pseudo Classes</a></li>
                    <li ><a href="ch10.php">Chapter 10: Order and Specificity</a></li>
                </ul>
            </nav>
            

            <div class="wrapper">
            <main>
                <h2> <?php echo $pageName;?> </h2>