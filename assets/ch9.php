<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 9: Pseudo-Classes -->
<?php
    $pageName = "Chapter 9: Pseudo-Classes";
    $path = "./";
    $pageNumber = 9;
    include $path . "assets/inc/header.php";
    include "assets/inc/gettingComments.php";
?>
                <p>A pseudo-class can be used to specify a particular state of an element.  The generic format of pseudo-classes is:</p>
                <p>
                    selector:pseudo-class { <br/>
                        &nbsp;property: value; <br/>
                    }
                </p>
                <p>Anchor pseudo-classes are some of the most useful and can be applied to links and their various states of unvisited, visited, hovered, and active.  Styling links is really just a love/hate relationship.  The link pseudo-classes and the order in which to include them in CSS (top to bottom) can be remembered using the mnemonic “LoVe HAte” (LVHA = link, visited, hover, active):</p>
                    <ul>
                        <li>a:link – to style an unvisited link</li>
                        <li>a:visited – to style a visited link</li>
                        <li>a:hover – to style a link that is being hovered or moused over</li>
                        <li>a:active – to style a link that is actively being clicked</li>
                    </ul>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/40a-pseudoClass.png" alt="Example of Pseudo Class HTML"/>
                    <img class="demo" src="assets/images/40b-pseudoClass.png" alt="Example of Pseudo Class CSS"/>
                    <img class="demo" src="assets/images/40c-pseudoClass.png" alt="Example of Pseudo Class Result"/>
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