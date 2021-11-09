<?php
    if(isset($_POST['submitButton']) && (!isset($_POST['q1']) || !isset($_POST['q2']) || !isset($_POST['q3']) || !isset($_POST['q4']) || !isset($_POST['q5']))){
?>
        <script>
            alert("Answer all the questions bro!");
        </script>
<?php
    }
?>