<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
    $pageName = "Chapter 1 Quiz";
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

        if ($answer1 == "c") { $totalCorrect++; } else {$wrong = $wrong . "<br/>1";}
        if ($answer2 == "b") { $totalCorrect++; } else {$wrong = $wrong . "<br/>2";}
        if ($answer3 == "d") { $totalCorrect++; } else {$wrong = $wrong . "<br/>3";}
        if ($answer4 == "b") { $totalCorrect++; } else {$wrong = $wrong . "<br/>4";}
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
        <br>Which of the following is NOT a way to add CSS to HTML?<br></b>
        <blockquote>
            <input type="radio" name="q1" value="a"> a. Inline<br>
            <input type="radio" name="q1" value="b"> b. Internal<br>
            <input type="radio" name="q1" value="c"> c. Direct<br>
            <input type="radio" name="q1" value="d"> d. External<br>
        </blockquote>

        <hr/>
        
        <b>Question 2.
        <br>Which of the following would make the given paragraph red?<br></b>
        <blockquote>
            <input type="radio" name="q2" value="a"> a.	&lt;p color=“red”&gt;This is a paragraph.&lt;/p&gt;<br>
            <input type="radio" name="q2" value="b"> b. &lt;p style=“color:red”&gt;This is a paragraph.&lt;/p&gt;<br>
            <input type="radio" name="q2" value="c"> c. &lt;p style=color:red&gt;This is a paragraph.&lt;/p&gt;<br>
            <input type="radio" name="q2" value="d"> d. &lt;p attribute=“color:red”&gt;This is a paragraph.&lt;/p&gt;<br>
        </blockquote>

        <hr/>

        <b>Question 3.
        <br>Where is the link to an external style sheet inserted on an HTML page?<br></b>
        <blockquote>
            <input type="radio" name="q3" value="a"> a. Between &lt;body&gt; tags<br>
            <input type="radio" name="q3" value="b"> b. Between &lt;document&gt; tags<br>
            <input type="radio" name="q3" value="c"> c. Between &lt;resources&gt; tags<br>
            <input type="radio" name="q3" value="d"> d. Between &lt;head&gt; tags<br>
        </blockquote>

        <hr/>
        
        <b>Question 4.
        <br>What tag is used to add internal CSS to an HTML page?<br></b>
        <blockquote>
            <input type="radio" name="q4" value="a"> a. &lt;internal&gt;<br>
            <input type="radio" name="q4" value="b"> b. &lt;style&gt;<br>
            <input type="radio" name="q4" value="c"> c. &lt;css&gt;<br>
            <input type="radio" name="q4" value="d"> d. &lt;property&gt;<br>
        </blockquote>

        <hr/>

        <b>Question 5.
        <br>Assuming an external CSS file is named “styles.css,” which of the following could be a valid way to link the CSS file to an HTML page?<br></b>
        <blockquote>
            <input type="radio" name="q5" value="a"> a. &lt;link rel=“stylesheet” href=“styles.css”&gt;<br>
            <input type="radio" name="q5" value="b"> b. &lt;link rel=“stylesheet” src=“styles.css”&gt;<br>
            <input type="radio" name="q5" value="c"> c. &lt;css rel=“stylesheet” href=“styles.css”&gt;<br>
            <input type="radio" name="q5" value="d"> d. &lt;external rel=“stylesheet” href=“styles.css”&gt;<br>
        </blockquote>

        <hr/>

        <div class="centering">
            <input type="submit" value="Submit Quiz" name="submitButton">
            <input type="reset" value="Clear">
        </div>
    </form>

</body>
</html>