<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
    $pageName = "Chapter 2 Quiz";
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
        if ($answer2 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>2";}
        if ($answer3 == "a") { $totalCorrect++; } else {$wrong = $wrong . "<br/>3";}
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
        <br>How do you target the components of a web page to style?<br></b>
        <blockquote>
            <input type="radio" name="q1" value="a">a. CSS options<br>
            <input type="radio" name="q1" value="b">b. CSS targets<br>
            <input type="radio" name="q1" value="c">c. CSS selectors<br>
            <input type="radio" name="q1" value="d">d. CSS items<br>
        </blockquote>

        <hr/>
        
        <b>Question 2.
        <br>Where is a selector found within a CSS rule?<br></b>
        <blockquote>
            <input type="radio" name="q2" value="a">a. Before the curly braces<br>
            <input type="radio" name="q2" value="b">b. Inside the curly braces<br>
            <input type="radio" name="q2" value="c">c. After the curly braces<br>
            <input type="radio" name="q2" value="d">d. Before and after the curly braces<br>
        </blockquote>

        <hr/>

        <b>Question 3.
        <br>How many elements are targeted with an ID selector?<br></b>
        <blockquote>
            <input type="radio" name="q3" value="a">a. 1<br>
            <input type="radio" name="q3" value="b">b. 2<br>
            <input type="radio" name="q3" value="c">c. The number of elements with the given ID name<br>
            <input type="radio" name="q3" value="d">d. ID is not a valid selector<br>
        </blockquote>

        <hr/>
        
        <b>Question 4.
        <br>How many elements are targeted with a class selector?<br></b>
        <blockquote>
            <input type="radio" name="q4" value="a">a. 1<br>
            <input type="radio" name="q4" value="b">b. 2<br>
            <input type="radio" name="q4" value="c">c. The number of elements with the given class name<br>
            <input type="radio" name="q4" value="d">d. Class is not a valid selector<br>
        </blockquote>

        <hr/>

        <b>Question 5.
        <br>What is the correct way to target all span elements that are inside a heading (h1)?<br></b>
        <blockquote>
            <input type="radio" name="q5" value="a">a. h1(span)<br>
            <input type="radio" name="q5" value="b">b. span(h1)<br>
            <input type="radio" name="q5" value="c">c. span, h1<br>
            <input type="radio" name="q5" value="d">d. h1 span<br>
        </blockquote>

        <hr/>

        <input type="submit" value="Submit Quiz" >
        <input type="reset" value="Clear">
    </form>

</body>
</html>