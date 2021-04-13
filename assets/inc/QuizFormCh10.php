<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
$pageName = "Chapter 10 Quiz";
    $path = "./";
    include $path . "assets/inc/header.php";
?>
    
<?php
    if(isset($_POST['q1']) && isset($_POST['q2']) 
        && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5'])) {
        
        $answer1 = $_POST['q1'];
        $answer2 = $_POST['q2'];
        $answer3 = $_POST['q3'];
        $answer4 = $_POST['q4'];
        $answer5 = $_POST['q5'];

        $totalCorrect = 0;
        $wrong = "The following questions were incorrect: ";

        if ($answer1 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>1";}
        if ($answer2 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>2";}
        if ($answer3 == "c") { $totalCorrect++; } else {$wrong = $wrong . "<br/>3";}
        if ($answer4 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>4";}
        if ($answer5 == "b") { $totalCorrect++; } else {$wrong = $wrong . "<br/>5";}

        if($totalCorrect != 5) {
            echo "<div id='results' style='color:red; font-weight:bold';>" 
                . $totalCorrect . "/ 5 correct</div><br/>";
            echo "<div id='wrong' style='color:red; font-weight:bold';>" 
                . $wrong ."</div><br/>";
            
        } else {
            echo "<div id='results' style='color:green; font-weight:bold';>"
                 . $totalCorrect . "/ 5 correct</div><br/>";
        }      
    }

?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="quiz">
        <b>Question 1.
        <br>True or false?  The order of rules on a style sheet matters.<br></b>
        <blockquote>
            <input type="radio" name="q1" value="a">a. True<br>
            <input type="radio" name="q1" value="b">b. False<br>
        </blockquote>

        <hr/>
        
        <b>Question 2.
        <br>True or false?  CSS rules can be overwritten by other CSS rules.<br></b>
        <blockquote>
            <input type="radio" name="q2" value="a">a. True<br>
            <input type="radio" name="q2" value="b">b. False<br>
        </blockquote>

        <hr/>

        <b>Question 3.
        <br>Which of the following is more specific?<br></b>
        <blockquote>
            <input type="radio" name="q3" value="a">a. element selector<br>
            <input type="radio" name="q3" value="b">b. class<br>
            <input type="radio" name="q3" value="c">c. id<br>
            <input type="radio" name="q3" value="d">d. All 3 are equal in specificity<br>
        </blockquote>

        <hr/>
        
        <b>Question 4.
        <br>Which of the following is least specific?<br></b>
        <blockquote>
            <input type="radio" name="q4" value="a">a. element selector<br>
            <input type="radio" name="q4" value="b">b. class<br>
            <input type="radio" name="q4" value="c">c. id<br>
            <input type="radio" name="q4" value="d">d. All 3 are equal in specificity<br>
        </blockquote>

        <hr/>

        <b>Question 5.
        <br>If two selectors are equally specific and affect the same property, which one will have its rules applied?<br></b>
        <blockquote>
            <input type="radio" name="q5" value="a">a. The one written first on the style sheet<br>
            <input type="radio" name="q5" value="b">b. The one written last on the style sheet<br>
            <input type="radio" name="q5" value="c">c. An error will occur<br>
            <input type="radio" name="q5" value="d">d. The one applied will be unpredictable<br>
        </blockquote>

        <hr/>

        <input type="submit" value="Submit Quiz" >
        <input type="reset" value="Clear">
    </form>

</body>
</html>