<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
$pageName = "Chapter 4 Quiz";
    $path = "./";
    include $path . "assets/inc/header.php";
?>
    
    <?php
    include $path . "assets/inc/quizCommon.php";
    if(isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5'])) {
       
        $answer1 = $_POST['q1'];
        $answer2 = $_POST['q2'];
        $answer3 = $_POST['q3'];
        $answer4 = $_POST['q4'];
        $answer5 = $_POST['q5'];

        $totalCorrect = 0;
        $wrong = "The following questions were incorrect: ";

        if ($answer1 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>1";}
        if ($answer2 == "c") { $totalCorrect++; } else {$wrong = $wrong . "<br/>2";}
        if ($answer3 == "b") { $totalCorrect++; } else {$wrong = $wrong . "<br/>3";}
        if ($answer4 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>4";}
        if ($answer5 == "d") { $totalCorrect++; } else {$wrong = $wrong . "<br/>5";}

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
        <br>What property controls the type of font?<br></b>
        <blockquote>
            <input type="radio" name="q1" value="a"> a. font-family<br>
            <input type="radio" name="q1" value="b"> b. font-type<br>
            <input type="radio" name="q1" value="c"> c. font-style<br>
            <input type="radio" name="q1" value="d"> d. font.setFont<br>
        </blockquote>

        <hr/>
        
        <b>Question 2.
        <br>Which of the following is NOT a valid font-size value?<br></b>
        <blockquote>
            <input type="radio" name="q2" value="a"> a. 12px<br>
            <input type="radio" name="q2" value="b"> b. 1.2em<br>
            <input type="radio" name="q2" value="c"> c. 12<br>
            <input type="radio" name="q2" value="d"> d. 1.2rem<br>
        </blockquote>

        <hr/>
        
        <b>Question 3.
        <br>Which of the following would NOT work?<br></b>
        <blockquote>
            <input type="radio" name="q3" value="a"> a. font-size: 12px;<br>
            <input type="radio" name="q3" value="b"> b. font-size: 12 px;<br>
            <input type="radio" name="q3" value="c"> c. font: italic 12px fantasy;<br>
            <input type="radio" name="q3" value="d"> d. font-size: larger;<br>
        </blockquote>

        <hr/>
        
        <b>Question 4.
        <br>What does the line-height property control?<br></b>
        <blockquote>
            <input type="radio" name="q4" value="a"> a. The space between lines of text<br>
            <input type="radio" name="q4" value="b"> b. The height of capitalized letters<br>
            <input type="radio" name="q4" value="c"> c. The horizontal distance between letters name<br>
            <input type="radio" name="q4" value="d"> d. None of the above<br>
        </blockquote>

        <hr/>

        <b>Question 5.
        <br>What font-size unit creates a value that is relative to the font-size of the element?<br></b>
        <blockquote>
            <input type="radio" name="q5" value="a"> a. px<br>
            <input type="radio" name="q5" value="b"> b. pt<br>
            <input type="radio" name="q5" value="c"> c. rem<br>
            <input type="radio" name="q5" value="d"> d. em<br>
        </blockquote>

        <hr/>

        <div class="centering">
            <input type="submit" value="Submit Quiz" name="submitButton">
            <input type="reset" value="Clear">
        </div>
    </form>

</body>
</html>