<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
$pageName = "Chapter 3 Quiz";
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
        if ($answer2 == "b") { $totalCorrect++; } else {$wrong = $wrong . "<br/>2";}
        if ($answer3 == "c") { $totalCorrect++; } else {$wrong = $wrong . "<br/>3";}
        if ($answer4 == "c") { $totalCorrect++; } else {$wrong = $wrong . "<br/>4";}
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
        <br>What does the color property control?<br></b>
        <blockquote>
            <input type="radio" name="q1" value="a">a. The background color of a page<br>
            <input type="radio" name="q1" value="b">b. The color of text<br>
            <input type="radio" name="q1" value="c">c. The color of paragraphs<br>
            <input type="radio" name="q1" value="d">d. The default color of a browser<br>
        </blockquote>

        <hr/>
        
        <b>Question 2.
        <br>Which of the following style rules would NOT make text green?<br></b>
        <blockquote>
            <input type="radio" name="q2" value="a">a. color: green;<br>
            <input type="radio" name="q2" value="b">b. color: 00ff00;<br>
            <input type="radio" name="q2" value="c">c. color: #00ff00;<br>
            <input type="radio" name="q2" value="d">d. color: rgb(0, 255, 0);<br>
        </blockquote>

        <hr/>

        <b>Question 3.
        <br>Which of the following is a value for white?<br></b>
        <blockquote>
            <input type="radio" name="q3" value="a">a. rgb(0, 0, 0)<br>
            <input type="radio" name="q3" value="b">b. #ffffff<br>
            <input type="radio" name="q3" value="c">c. rgb(255, 255, 255)<br>
            <input type="radio" name="q3" value="d">d. “no color”<br>
        </blockquote>

        <hr/>
        
        <b>Question 4.
        <br>4.	What will the background color of a page be given the following: <br>
            <blockquote>           
            body { <br>
	           &nbsp; background-color: rgb(0, 0, 255); <br>
            }
            </blockquote>
        </b>
        <blockquote>
            <input type="radio" name="q4" value="a">a. red<br>
            <input type="radio" name="q4" value="b">b. green<br>
            <input type="radio" name="q4" value="c">c. blue<br>
            <input type="radio" name="q4" value="d">d. Not enough information to be determined<br>
        </blockquote>

        <hr/>

        <b>Question 5.
        <br>Which of the following is not a valid color value?<br></b>
        <blockquote>
            <input type="radio" name="q5" value="a">a. red<br>
            <input type="radio" name="q5" value="b">b. rgb(255, 0, 0);<br>
            <input type="radio" name="q5" value="c">c. #FF0000<br>
            <input type="radio" name="q5" value="d">d. &lt;red&gt;<br>
        </blockquote>

        <hr/>

        <input type="submit" value="Submit Quiz" >
        <input type="reset" value="Clear">
    </form>

</body>
</html>