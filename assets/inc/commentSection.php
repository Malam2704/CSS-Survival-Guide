    <br>
    <hr/>
    <h3>Add a Comment</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="postget">		
        First name: <input type="text" id="first" name="name" />
        <br>
        <div style="margin: 1.5em;">Comment: <textarea name="com" id="comment" style="width: 100%;" rows="10"></textarea></div>
        <input type="submit" value="Add to the List" style="padding: 1em;"/>
    </form>

    <div class="commentSection">
        <ul>
        <?php
            foreach($records as $this_row){
                //echo $this_row;
                echo '<li> Username:' . $this_row['uname'] . "<br> Comment: " . $this_row['comment'] . "<br> Last Modified: " . $this_row['last_modified'] . '</li><br><br>';
            }
        ?>
        </ul>
    </div>