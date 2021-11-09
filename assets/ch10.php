<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 10: Order and Specificity -->
<?php
    $pageName = "Chapter 10: Order and Specificity";
    $path = "./";
    $pageNumber = 10;
    include $path . "assets/inc/header.php";
    include "assets/inc/gettingComments.php";
?>
                <p>Some CSS rules are considered to be more specific than others.  When rules conflict with one another, CSS specificity determines what rules are applied to an element.  Generally, an id is more specific than a class, which is more specific than an element selector.  (id > class > element). </p>
                <p>In the case that two selectors are equally specific, the last one wins because CSS rules are applied top down.  If two identical CSS rules exist, the one further down the page will overwrite the previous rule and that rule’s value will be applied.  For example, body {color: blue;} written toward the top of the CSS stylesheet would have no effect if the rule body {color: green;} is written further down the stylesheet.  The color green would be applied to the body.</p>

            </main>

            <?php
                include "assets/inc/quizButton.php";
            ?>

            <?php
                include "assets/inc/commentSection.php";
            ?>

            <?php
                include $path . "assets/inc/footer.php";
            ?>
        </div>
    </body>
</html>