    <br>
    <hr/>
    <h3 id="Comments">Comments</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="postget">		
        <?php
            $commentString ="";
            $noMoreButton = false;
            // If they are signed in their name will eb set as their name,
            // else empty quotes.
            if(isset($_SESSION["name"])){
                $NAME = $_SESSION["name"];
            }else{
                $NAME = "";
            }
        ?>
        <div style="margin-left: 1.5em; margin-right: 1.5em; margin-top: 1.5em">User name: <input type="text" id="first" name="name" value="<?php echo $NAME; ?>"/></div>
        <br>
        <div style="margin-left: 1.5em; margin-right: 1.5em;">Comment: <textarea name="com" id="comment" style="width: 100%;" rows="10" placeholder="Please leave any comments or questions here.  We'd love to hear what you like about our site, how we can improve, what topics you'd like to learn about, and answer any questions you may have on the content we've presented."></textarea></div>
        <div class="text-recaptcha-center commentSubmit">
            <div class="g-recaptcha" data-sitekey="6Lf_PscaAAAAAF81aAPTH7n64x3lTL7LTq-AGCAB"></div>
            <input type="submit" name="quizB" value="Add it to the list" style="margin: 1.5em;"/>
        </div>
    </form>

    <div class="commentSection">
        <ul class="commentUL">
            <?php
                if(sizeof($records) > 10){
                    for ($x = 0; $x <= 10; $x++) {
                        $commentString .= '<li><span class="dateName"> Username: ' . $records[$x]['uname'] . "</span> <span class='dateMod'> Date Posted: " . $records[$x]['last_modified'] . "</span><p> Comment: " . $records[$x]['comment'] . "</p></li><br>";
                    }
                }else{
                    for ($x = 0; $x < sizeof($records); $x++) {
                        $commentString .= '<li><span class="dateName"> Username: ' . $records[$x]['uname'] . "</span> <span class='dateMod'> Date Posted: " . $records[$x]['last_modified'] . "</span><p> Comment: " . $records[$x]['comment'] . "</p></li><br>";
                    }
                }
                // foreach($records as $this_row){
                //     //echo $this_row;
                //     $commentString .= '<li style="list-style-type: none; border: 5px solid #FF5700; " > Username: ' . $this_row['uname'] . "<p> Comment: " . $this_row['comment'] . "</p><p> Date Posted: " . $this_row['last_modified'] . '</p></li><br>';
                // }
                if(sizeof($records) > 10){
                    if(isset($_GET['loaded'])){
                        for ($x = 10; $x < sizeof($records); $x++) {
                            $commentString .= '<li><span class="dateName"> Username: ' . $records[$x]['uname'] . "</span> <span class='dateMod'> Date Posted: " . $records[$x]['last_modified'] . "</span><p> Comment: " . $records[$x]['comment'] . "</p></li><br>";
                        }
                        $noMoreButton = true;
                    }
                }else{
                    $noMoreButton = true;
                }
                echo $commentString;
            ?>
        </ul>
        <form style="text-align: center;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="postget">
            <?php
                $buttonforMore = '<input type="submit" value="Load More Comments" style="margin: 1.5em;" name="loaded"/>';
                if($noMoreButton == true){
                    $buttonforMore = "";
                }
                echo $buttonforMore;
            ?>
        </form>
    </div>