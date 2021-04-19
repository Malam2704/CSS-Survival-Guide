<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
$pageName = "Chapter 9 Quiz";
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

        if ($answer1 == "c") { $totalCorrect++; } else {$wrong = $wrong . "<br/>1";}
        if ($answer2 == "d") { $totalCorrect++; } else {$wrong = $wrong . "<br/>2";}
        if ($answer3 == "d") { $totalCorrect++; } else {$wrong = $wrong . "<br/>3";}
        if ($answer4 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>4";}
        if ($answer5 == "c") { $totalCorrect++; } else {$wrong = $wrong . "<br/>5";}

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
        <br>What does a pseudo-class specify?<br></b>
        <blockquote>
            <input type="radio" name="q1" value="a">a. real vs imaginary elements<br>
            <input type="radio" name="q1" value="b">b. displayed vs hidden elements<br>
            <input type="radio" name="q1" value="c">c. an element’s state<br>
            <input type="radio" name="q1" value="d">d. an element’s importance<br>
        </blockquote>

        <hr/>
        
        <b>Question 2.
        <br>What does an anchor tag represent?<br></b>
        <blockquote>
            <input type="radio" name="q2" value="a">a. punctuation<br>
            <input type="radio" name="q2" value="b">b. the last tag on a page<br>
            <input type="radio" name="q2" value="c">c. a footnote<br>
            <input type="radio" name="q2" value="d">d. a link<br>
        </blockquote>

        <hr/>

        <b>Question 3.
        <br>Which of the following is NOT an anchor pseudo-class?<br></b>
        <blockquote>
            <input type="radio" name="q3" value="a">a. visited<br>
            <input type="radio" name="q3" value="b">b. hover<br>
            <input type="radio" name="q3" value="c">c. active<br>
            <input type="radio" name="q3" value="d">d. clicked<br>
        </blockquote>

        <hr/>
        
        <b>Question 4.
        <br>Of the following anchor pseudo-classes, which would be listed first in a style sheet?<br></b>
        <blockquote>
            <input type="radio" name="q4" value="a">a. link<br>
            <input type="radio" name="q4" value="b">b. active<br>
            <input type="radio" name="q4" value="c">c. visited<br>
            <input type="radio" name="q4" value="d">d. hover<br>
        </blockquote>

        <hr/>

        <b>Question 5.
        <br>What does a:active style?<br></b>
        <blockquote>
            <input type="radio" name="q5" value="a">a. a visited link<br>
            <input type="radio" name="q5" value="b">b. a link that is being hovered over<br>
            <input type="radio" name="q5" value="c">c. a link that is actively being clicked<br>
            <input type="radio" name="q5" value="d">d. None of the above<br>
        </blockquote>

        <hr/>

        <input type="submit" value="Submit Quiz" >
        <input type="reset" value="Clear">
    </form>

</body>
</html>