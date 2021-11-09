<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 1: How to Add CSS to HTML -->
<?php
    $pageName = "Chapter 1: How to Add CSS to HTML";
    $pageNumber = 1;
    $path = "./";
    include $path . "assets/inc/header.php";
    include "assets/inc/gettingComments.php";
?>
                <p>Before getting started with CSS, make sure you have the following:</p>
                    <ul>
                        <li>An understanding of HTML (Hypertext Markup Language)</li>
                        <li>A simple text editor (or better yet, a code editor such as Brackets or Visual Studio Code)</li>
                    </ul>
                <p>HTML structures the content of a web page through the use of tags, which can then be used to style the page with CSS.</p>
                <p>There are 3 ways to incorporate CSS into an HTML document:</p>
                    <ol>
                        <li>Inline</li>
                        <li>Internal</li>
                        <li>External</li>
                    </ol>

                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
                        </script>
                            <!-- Homepage Leaderboard -->
                            <ins class="adsbygoogle"
                                style="display:inline-block;width:728px;height:90px"
                                data-ad-client="ca-pub-1234567890123456"
                                data-ad-slot="1234567890">
                            </ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                
                <h3 id="#Inline">Inline</h3>
                <p>Inline CSS is used to style a single HTML element using the style attribute.  The basic structure appears as:</p>
                <p>&lt;tagName style="propertyName: value;"&gt;</p>
                <p>For example,</p>
                    <img class="demo" src="assets/images/1-heading.png" alt="Example of Inline CSS"/>
                    <img class="demo" src="assets/images/2-heading.png" alt="Result of above example showing a blue heading"/>
                <p>would make that single h1 heading the color blue.</p>
                <p>Multiple properties can be modified within a single style attribute.</p>
                <p>For example,</p>
                    <img class="demo" src="assets/images/3-paragraphColor.png" alt="Example of styling multiple properties within a single style attribute"/>
                    <img class="demo" src="assets/images/4-paragraphColor" alt="Result of above example showing a paragraph with 24 pixel font colored red with a yellow background"/>
                <p>Generally, using inline CSS should be avoided, as it can muddy HTML code and can create issues relating to maintainability and accessibility.  It can be helpful, however, to quickly insert CSS rules for testing and previewing purposes.</p>

                <h3 id="Internal">Internal</h3>
                <p>Internal CSS is inserted using the style tag within the head section of an HTML page.  Multiple style rules can be included within the style tag to control page properties.</p>
                <p>For example,</p>
                    <img class="demo" src="assets/images/5-backgroundColor.png" alt="Example of Internal CSS"/>
                    <img class="demo" src="assets/images/6-backgroundColor.png" alt="Result of above example showing white font on a purple background"/>
                <p>The entire web page (using the body element) will have a background color of purple, and all paragraphs on the page (using p, the paragraph element) will be colored white and use Arial font or  the default sans-serif font of the browser if Arial is not available.</p>
                <p>In general, a selector decides what part of the page to style.  The selectors in the above example select elements based on tag names, but notice that the angle brackets <...> are NOT included.  Also note the curly braces which contain the property being styled followed by a colon, the property value, then a semicolon.</p>
                <p>Internal CSS can be used if a single web page needs to be styled, but it is often better practice to use External CSS if multiple pages need to be styled.  (Examples on this website will utilize internal CSS).</p>

                <h3 id="External">External</h3>
                <p>External CSS links a separate CSS document (saved with a .css extension) to a web page using the link tag within the head section of an HTML document.  The actual .css document follows the same structure as what would be contained inside the style tag of internal CSS.  Link external CSS by using the following within the head section of an HTML document:</p>
                <p>&lt;head&gt;</p>
                <p>&lt;link rel="stylesheet" href&equals;"styles.css"&gt;</p>
                <p>&lt;/head&gt;</p>
                <p>where rel specifies the relationship between the current HTML document and the linked CSS document and href provides the location of the linked document using an absolute or relative URL.</p>
                <p>External CSS is ideal when styles need to be applied to multiple web pages and can help maintain uniformity among those web pages.  The main benefit is that the look of an entire website can be altered by changing a single file.</p>
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