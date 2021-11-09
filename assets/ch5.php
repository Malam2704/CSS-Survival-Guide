<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 5: CSS Layout -->
<?php
    $pageName = "Chapter 5: CSS Layout";
    $path = "./";
    $pageNumber = 5;
    include $path . "assets/inc/header.php";
    include "assets/inc/gettingComments.php";
?>
        
                <p>Elements on web pages are laid out according to normal flow unless otherwise specified.  Normal flow is the manner in which elements are displayed on a page before any adjustments are made to their layout. </p>
                <p>Recall from HTML that there are two types of elements: inline and block.  Inline elements do not have a new line after them.  Examples include &lt;a&gt; and &lt;img&gt.  Block elements have a new line after them without the need for a &lt;br&gt; tag.  Examples include headings, paragraphs, lists, etc.  By default, a block level element has a width that is 100% of the width of its parent element and a height tall enough for its content.</p>
                <p>When targeting specific elements with CSS, consider using the &lt;span&gt; tag, an inline container, or the &lt;div&gt; tag, a block container.  Both tags can be given an ID or class name, which can then be styled.</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/26-span.png" alt="Example of HTML span"/>
                    <img class="demo" src="assets/images/27-span.png" alt="Example of CSS span"/>
                    <img class="demo" src="assets/images/28-span.png" alt="Example of span"/>
                <p>The upcoming chapters will discuss properties that will allow for the alteration of the default page layout.</p>

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