<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 2: CSS Selectors -->
<?php
    $pageName = "Chapter 2: CSS Selectors";
    $path = "./";
    $pageNumber = 2;
    include $path . "assets/inc/header.php";
    include "assets/inc/gettingComments.php";
?>
                <p>How do you target the components of a web page that need to be styled?  CSS selectors!</p>
                <p>A CSS selector is the first part of a CSS rule and tells the browser which HTML element(s) should be selected to receive the specified property values within the rule.</p>
                <p>There are many CSS selectors and many combinations of CSS selectors that will allow specific HTML elements to be targeted, but the simplest are by type, id, and class.</p>

                <h3 class="spaceContains">The Type (or Name) Selector</h3>
                <p>Selects elements by tag name.  Angle brackets are NOT used.</p>
                <p>For example,</p>
                    <!-- insert example here-->
                <img class="demo" src="assets/images/7-cssSelector.png" alt="Example of Type Selectors"/>
                <h3 class="spaceContains">ID Selector</h3>
                <p>Selects a <i>single</i> element with a given id.</p>
                <p>Steps: Create a unique id name, add it as an id attribute in an HTML tag for a single element, and write a style rule in CSS that starts with # followed by the id name.</p>
                <p>For example,</p>
                <p>HTML:</p>
                    <!-- insert example here -->
                <img class="demo" src="assets/images/8-htmlHeaderId.png" alt="Example of HTML Id"/>
                <p>CSS:</p>
                    <!-- insert example here -->
                <img class="demo" src="assets/images/9-cssHeaderId.png" alt="Example of CSS Id"/>
                <h3 class="spaceContains">Class Selector</h3>
                <p>Selects all elements with a given class.</p>
                <p>Steps: Create a class name, add it as a class attribute in HTML tags to one or more elements, and write a style rule in CSS that starts with a period (.) followed by the class name.</p>
                <p>For Example,</p>
                <p>HTML:</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/10-htmlClassSelector.png" alt="Example of HTML Class Selector"/>
                <p>CSS:</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/11-cssClassSelector.png" alt="Example of CSS Class Selector"/>
                <h3 class="spaceContains">Using Multiple Selectors & Grouping</h3>
                <p>CSS selectors can be grouped or combined to create more specific selections.  Some of the most common methods will be addressed.</p>
                <p>Grouping CSS Selectors:</p>
                <p>Commas can be used to select multiple elements.</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/12-multipleSelectors.png" alt="Example of Multiple CSS Selectors"/>
                <h3 class="spaceContains">Descendant Selector</h3>
                <p>A space can be used to target all elements that are descendants of a specified element.</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/13-descendantSelector.png" alt="Example of Descendant Selector"/>
                <h3 id="Element.class">Element.class</h3>
                <p>A period can be used to select all elements with a particular class name.</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/14-elementClass.png" alt="Example of Element Class"/>
                <h3 class="spaceContains">Naming Conventions</h3>
                <p>There are certain rules to follow when creating ids and class names.</p>
                <ul>
                    <li>Must begin with a letter A-Z or a-z</li>
                    <li>Can be followed by: letters (A-Za-z), digits (0-9), hyphens ("-"), and underscores ("_")</li>
                    <li>camelCase: not mandatory, but instead of using hyphens or underscores for combining words, the first letter of each word is capitalized, except for the first word</li>
                </ul>
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