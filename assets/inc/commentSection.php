    <br>
    <hr style="margin-top: 3em"/>
    <h3>Add a Comment</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="postget">		
        <?php
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
        <input type="submit" value="Add to the List" style="margin: 1.5em;"/>
    </form>

    <div class="commentSection">
        <ul>
        <?php
            foreach($records as $this_row){
                //echo $this_row;
                echo '<li style="list-style-type: none; "> Username:' . $this_row['uname'] . "<br> Comment: " . $this_row['comment'] . "<br> Date Posted: " . $this_row['last_modified'] . '</li><br><br>';
            }
        ?>
        </ul>
    </div>