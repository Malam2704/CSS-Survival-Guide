    <br>
    <hr/>
    <h3>Add a Comment</h3>
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
        <input type="submit" value="Add it to the list" style="margin: 1.5em;"/>
    </form>

    <div class="commentSection">
        <ul class="commentUL">
            <?php
                if(sizeof($records) > 10){
                    for ($x = 0; $x <= 10; $x++) {
                        $commentString .= '<li> Username: ' . $records[$x]['uname'] . "<p> Comment: " . $records[$x]['comment'] . "</p><p> Date Posted: " . $records[$x]['last_modified'] . '</p></li><br>';
                    }
                }else{
                    for ($x = 0; $x < sizeof($records); $x++) {
                        $commentString .= '<li> Username: ' . $records[$x]['uname'] . "<p> Comment: " . $records[$x]['comment'] . "</p><p> Date Posted: " . $records[$x]['last_modified'] . '</p></li><br>';
                    }
                }
                // foreach($records as $this_row){
                //     //echo $this_row;
                //     $commentString .= '<li style="list-style-type: none; border: 5px solid #FF5700; " > Username: ' . $this_row['uname'] . "<p> Comment: " . $this_row['comment'] . "</p><p> Date Posted: " . $this_row['last_modified'] . '</p></li><br>';
                // }
                if(sizeof($records) > 10){
                    if(isset($_GET['loaded'])){
                        for ($x = 10; $x < sizeof($records); $x++) {
                            $commentString .= '<li> Username: ' . $records[$x]['uname'] . "<p> Comment: " . $records[$x]['comment'] . "</p><p> Date Posted: " . $records[$x]['last_modified'] . '</p></li><br>';
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