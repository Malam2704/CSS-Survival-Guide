<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
$pageName = "Chapter 8 Quiz";
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

        if ($answer1 == "d") { $totalCorrect++; } else {$wrong = $wrong . "<br/>1";}
        if ($answer2 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>2";}
        if ($answer3 == "b") { $totalCorrect++; } else {$wrong = $wrong . "<br/>3";}
        if ($answer4 == "c") { $totalCorrect++; } else {$wrong = $wrong . "<br/>4";}
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
        <br>What properties can be adjusted once the position property is set?<br></b>
        <blockquote>
            <input type="radio" name="q1" value="a"> a. up, down, left, right<br>
            <input type="radio" name="q1" value="b"> b. up, down, over, under<br>
            <input type="radio" name="q1" value="c"> c. north, south, east, west<br>
            <input type="radio" name="q1" value="d"> d. top, right, bottom, left<br>
        </blockquote>

        <hr/>
        
        <b>Question 2.
        <br>What is the default position of an element?<br></b>
        <blockquote>
            <input type="radio" name="q2" value="a"> a. static<br>
            <input type="radio" name="q2" value="b"> b. relative<br>
            <input type="radio" name="q2" value="c"> c. regular<br>
            <input type="radio" name="q2" value="d"> d. fixed<br>
        </blockquote>

        <hr/>

        <b>Question 3.
        <br>What type of positioning will position an element relative to its nearest positioned ancestor or containing block?<br></b>
        <blockquote>
            <input type="radio" name="q3" value="a"> a. relative<br>
            <input type="radio" name="q3" value="b"> b. absolute<br>
            <input type="radio" name="q3" value="c"> c. comparative<br>
            <input type="radio" name="q3" value="d"> d. offset<br>
        </blockquote>

        <hr/>
        
        <b>Question 4.
        <br>What does the z-index property control?<br></b>
        <blockquote>
            <input type="radio" name="q4" value="a"> a. alphabetical order<br>
            <input type="radio" name="q4" value="b"> b. diagonal offset<br>
            <input type="radio" name="q4" value="c"> c. stacking order<br>
            <input type="radio" name="q4" value="d"> d. priority of a function<br>
        </blockquote>

        <hr/>

        <b>Question 5.
        <br>What property can be used to wrap text around images?<br></b>
        <blockquote>
            <input type="radio" name="q5" value="a"> a. float<br>
            <input type="radio" name="q5" value="b"> b. wrap<br>
            <input type="radio" name="q5" value="c"> c. surround<br>
            <input type="radio" name="q5" value="d"> d. flow<br>
        </blockquote>

        <hr/>

        <div class="centering">
            <input type="submit" value="Submit Quiz" name="submitButton">
            <input type="reset" value="Clear">
        </div>
    </form>

</body>
</html>