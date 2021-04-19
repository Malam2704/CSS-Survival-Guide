<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
$pageName = "Chapter 7 Quiz";
    $path = "./";
    include $path . "assets/inc/header.php";
?>
    
    <?php
    if(isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5'])) {
       
        $answer1 = $_POST['q1'];
        $answer2 = $_POST['q2'];
        $answer3 = $_POST['q3'];
        $answer4 = $_POST['q4'];
        $answer5 = $_POST['q5'];

        $totalCorrect = 0;
        $wrong = "The following questions were incorrect: ";

        if ($answer1 == "d") { $totalCorrect++; } else {$wrong = $wrong . "<br/>1";}
        if ($answer2 == "b") { $totalCorrect++; } else {$wrong = $wrong . "<br/>2";}
        if ($answer3 == "d") { $totalCorrect++; } else {$wrong = $wrong . "<br/>3";}
        if ($answer4 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>4";}
        if ($answer5 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>5";}

        if($totalCorrect != 5) {
            echo "<div id='results' style='color:red; font-weight:bold';>$totalCorrect / 5 correct</div><br/>";
            echo "<div id='wrong' style='color:red; font-weight:bold';>$wrong</div><br/>";
            
        } else {
            echo "<div id='results' style='color:green; font-weight:bold';>$totalCorrect / 5 correct</div><br/>";
        }      
    }

    ?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="quiz">
        <b>Question 1.
        <br>Which of the following is NOT a component of the CSS box model?<br></b>
        <blockquote>
            <input type="radio" name="q1" value="a">a. content<br>
            <input type="radio" name="q1" value="b">b. padding<br>
            <input type="radio" name="q1" value="c">c. border<br>
            <input type="radio" name="q1" value="d">d. width<br>
        </blockquote>

        <hr/>
        
        <b>Question 2.
        <br>If specifying four values for margin, what is the correct order of the margins that are affected?<br></b>
        <blockquote>
            <input type="radio" name="q2" value="a">a. top, left, bottom, right<br>
            <input type="radio" name="q2" value="b">b. top, right, bottom, left<br>
            <input type="radio" name="q2" value="c">c. right, bottom, left, top<br>
            <input type="radio" name="q2" value="d">d. left, top, right, bottom<br>
        </blockquote>

        <hr/>

        <b>Question 3.
        <br>What is the term for the area surrounding the content that is between the content and its border?<br></b>
        <blockquote>
            <input type="radio" name="q3" value="a">a. margin<br>
            <input type="radio" name="q3" value="b">b. clear space<br>
            <input type="radio" name="q3" value="c">c. fluff<br>
            <input type="radio" name="q3" value="d">d. padding<br>
        </blockquote>

        <hr/>
        
        <b>Question 4.
        <br>The border property combines what properties?<br></b>
        <blockquote>
            <input type="radio" name="q4" value="a">a. border-width, border-style, border-color<br>
            <input type="radio" name="q4" value="b">b. border-thickness, border-style, border-color<br>
            <input type="radio" name="q4" value="c">c. border-width, border-type, border-color<br>
            <input type="radio" name="q4" value="d">d. border-thickness, border-type, border-color<br>
        </blockquote>

        <hr/>

        <b>Question 5.
        <br>Which of the following is NOT a valid border-style?<br></b>
        <blockquote>
            <input type="radio" name="q5" value="a">a. line<br>
            <input type="radio" name="q5" value="b">b. solid<br>
            <input type="radio" name="q5" value="c">c. groove<br>
            <input type="radio" name="q5" value="d">d. inset<br>
        </blockquote>

        <hr/>

        <input type="submit" value="Submit Quiz" >
        <input type="reset" value="Clear">
    </form>

</body>
</html>