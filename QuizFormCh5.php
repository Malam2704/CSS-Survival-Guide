<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
$pageName = "Chapter 5 Quiz";
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
        if ($answer2 == "c") { $totalCorrect++; } else {$wrong = $wrong . "<br/>2";}
        if ($answer3 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>3";}
        if ($answer4 == "d") { $totalCorrect++; } else {$wrong = $wrong . "<br/>4";}
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
        <br>What is the default layout of elements on a web page?<br></b>
        <blockquote>
            <input type="radio" name="q1" value="a">a. Regular flow<br>
            <input type="radio" name="q1" value="b">b. Normal flow<br>
            <input type="radio" name="q1" value="c">c. Default flow<br>
            <input type="radio" name="q1" value="d">d. Elements do not appear on a page until specified by CSS<br>
        </blockquote>

        <hr/>
        
        <b>Question 2.
        <br>What are the two types of elements?<br></b>
        <blockquote>
            <input type="radio" name="q2" value="a">a. Inline and Outline<br>
            <input type="radio" name="q2" value="b">b. Inner and Outer<br>
            <input type="radio" name="q2" value="c">c. Inline and Block<br>
            <input type="radio" name="q2" value="d">d. Block and Linear<br>
        </blockquote>

        <hr/>

        <b>Question 3.
        <br>What tag is an example of an inline element?<br></b>
        <blockquote>
            <input type="radio" name="q3" value="a">a. &lt;a&gt;<br>
            <input type="radio" name="q3" value="b">b. &lt;div&gt;<br>
            <input type="radio" name="q3" value="c">c. &lt;p&gt;<br>
            <input type="radio" name="q3" value="d">d. &lt;h1&gt;<br>
        </blockquote>

        <hr/>
        
        <b>Question 4.
        <br>What tag is an example of a block element?<br></b>
        <blockquote>
            <input type="radio" name="q4" value="a">a. &lt;a&gt;<br>
            <input type="radio" name="q4" value="b">b. &lt;img&gt;<br>
            <input type="radio" name="q4" value="c">c. &lt;span&gt;<br>
            <input type="radio" name="q4" value="d">d. &lt;div&gt;<br>
        </blockquote>

        <hr/>

        <b>Question 5.
        <br>True or False?  A span tag can be given a class name.<br></b>
        <blockquote>
            <input type="radio" name="q5" value="a">a. True<br>
            <input type="radio" name="q5" value="b">b. False<br>
        </blockquote>

        <hr/>

        <input type="submit" value="Submit Quiz" >
        <input type="reset" value="Clear">
    </form>

</body>
</html>