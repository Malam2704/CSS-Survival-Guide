<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
$pageName = "Chapter 6 Quiz";
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

        if ($answer1 == "b") { $totalCorrect++; } else {$wrong = $wrong . "<br/>1";}
        if ($answer2 == "d") { $totalCorrect++; } else {$wrong = $wrong . "<br/>2";}
        if ($answer3 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>3";}
        if ($answer4 == "d") { $totalCorrect++; } else {$wrong = $wrong . "<br/>4";}
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
        <br>What is the default width of a &lt;div&gt;?<br></b>
        <blockquote>
            <input type="radio" name="q1" value="a">a. 0<br>
            <input type="radio" name="q1" value="b">b. 100%<br>
            <input type="radio" name="q1" value="c">c. It depends on the browser<br>
            <input type="radio" name="q1" value="d">d. A &lt;div&gt; has no width until it is specified<br>
        </blockquote>

        <hr/>
        
        <b>Question 2.
        <br>Which of the following is NOT included in the width of an element<br></b>
        <blockquote>
            <input type="radio" name="q2" value="a">a. padding<br>
            <input type="radio" name="q2" value="b">b. borders<br>
            <input type="radio" name="q2" value="c">c. margin<br>
            <input type="radio" name="q2" value="d">d. All of the above<br>
        </blockquote>

        <hr/>

        <b>Question 3.
        <br>What happens if you specify the height of an element and not the width?<br></b>
        <blockquote>
            <input type="radio" name="q3" value="a">a. The browser automatically calculates the width and proportions are maintained<br>
            <input type="radio" name="q3" value="b">b. There is no width and the element will not be visible on the screen<br>
            <input type="radio" name="q3" value="c">c. The element will appear distorted, regardless of what height is set<br>
            <input type="radio" name="q3" value="d">d. An error will occur<br>
        </blockquote>

        <hr/>
        
        <b>Question 4.
        <br>Which of the following is NOT a valid property?<br></b>
        <blockquote>
            <input type="radio" name="q4" value="a">a. width<br>
            <input type="radio" name="q4" value="b">b. min-width<br>
            <input type="radio" name="q4" value="c">c. max-width<br>
            <input type="radio" name="q4" value="d">d. total-width<br>
        </blockquote>

        <hr/>

        <b>Question 5.
        <br>What overflow value is required if you want a scroll bar added to enable viewing of overflowed content?<br></b>
        <blockquote>
            <input type="radio" name="q5" value="a">a. true<br>
            <input type="radio" name="q5" value="b">b. yes<br>
            <input type="radio" name="q5" value="c">c. scroll<br>
            <input type="radio" name="q5" value="d">d. scrollbar<br>
        </blockquote>

        <hr/>

        <input type="submit" value="Submit Quiz" >
        <input type="reset" value="Clear">
    </form>

</body>
</html>