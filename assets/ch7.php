<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 7: CSS Box Model -->
<?php
    $pageName = "Chapter 7: CSS Box Model";
    $path = "./";
    $pageNumber = 7;
    include $path . "assets/inc/header.php";
    include "assets/inc/gettingComments.php";
?>
                <p>It is important to understand the box model in order to design and layout a web page.  The box model simply means that every element on a web page is considered a box by the browser that consists of content, padding, border, and margin.</p>
                    <img class="demo" src="assets/images/boxmodel.jpg" alt="Box Model Diagram"/>
                <p>The terms “content”, “padding,” “border”, and “margin” can be defined as the following:</p>
                    <ul>
                        <li>Content – What is being displayed.  The content of the box, such as text and images.</li>
                        <li>Padding – The area surrounding the content.  A transparent space between the content and its border.</li>
                        <li>Border – A frame that surrounds the padding and content.</li>
                        <li>Margin – The area surrounding the border.  A transparent space between the border and additional elements.</li>
                    </ul>
                <p>It can be helpful to think of these terms as parts of framed pictures on a wall.  The entire wall represents a web page.  The picture you want to display is the <i>content</i>.  The frame is the <i>border</i>.  Between the frame and the picture, a mat is often used to provide additional decoration and <i>padding</i> between the picture and its frame.  There are times when you want to hang more than one picture on a wall.  When doing so, you would not choose to put the frames right up against each other, but would provide some degree of space or <i>margin</i> between frames. </p>
                    <img class="demo" src="assets/images/boxmodelex.jpg" alt="Box Model Diagram Example"/>
                <p>Remember that specifying the width or height of an element does NOT include the padding, border, or margin.</p>

                <h3>Margin</h3>
                <p>An element has four margins – top, right, bottom, and left.  The margin property can alter all four at once by giving it a single value that will apply to all sides (i.e. margin: 20px;). </p>
                <p>Multiple values can also be listed using a space between each to target specific margins.  When four values are used, margins are targeted clockwise, starting with the top margin (i.e. margin: 20px 10px 15px 5px; where the top margin is 20px, the right margin is 15px, the bottom margin is 10px, and the left margin is 5px).  Using three values would apply to the top, right, and bottom margins respectively and using two values would apply the first value to the top and bottom margins and the second value to the right and left margins.</p>
                <p>Each individual side can also have its margin defined separately using the margin-top, margin-right, margin-bottom, and margin-left properties.</p>
                <p>Commons values for margin include auto – the browser calculates the margin, length values, and percentages.</p>
                <p>Margin Example:</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/31c-margin.png" alt="Example of No Margin HTML"/>
                    <img class="demo" src="assets/images/31d-margin.png" alt="Example of No Margin CSS"/>
                    <img class="demo" src="assets/images/31e-margin.png" alt="Example of No Margin Result"/>
                    <img class="demo" src="assets/images/31f-margin.png" alt="Example of Margin HTML"/>
                    <img class="demo" src="assets/images/31g-margin.png" alt="Example of Margin CSS"/>
                    <img class="demo" src="assets/images/31h-margin.png" alt="Example of Margin Result"/>

                <h3>Padding</h3>
                <p>The format for setting the padding of an element and the available values mimic those of margin.</p>
                <p>An element has four sides of padding – top, right, bottom, and left.  The padding property can alter all four at once by giving it a single value that will apply to all sides (i.e. padding: 20px;).</p>
                <p>Multiple values can also be listed using a space between each to target specific sides.  When four values are used, padding is targeted clockwise, starting with the top padding (i.e. padding: 20px 10px 15px 5px; where the top padding is 20px, the right padding is 15px, the bottom padding is 10px, and the left padding is 5px).  Using three values would apply to the top, right, and bottom padding respectively and using two values would apply the first value to the top and bottom padding and the second value to the right and left padding.</p>
                <p>Each individual side can also have its padding defined separately using the padding-top, padding-right, padding-bottom, and padding-left properties.</p>
                <p>Commons values for padding include auto – the browser calculates the padding, length values, and percentages.</p>
                <p>Padding Example:</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/31i-padding.png" alt="Example of Padding HTML"/>
                    <img class="demo" src="assets/images/31j-padding.png" alt="Example of Padding CSS"/>
                    <img class="demo" src="assets/images/31k-padding.png" alt="Example of Padding Result"/>

                <h3>Border</h3>
                <p>Border properties allow the specification of the style, width, and color of an element’s border using border-style, border-width, and border-color, respectively.</p>
                    <h4>Style</h4>
                    <p>The same border-style can be applied to all four sides using a single value, or – like with margin and padding – different border styles can be specified for different sides.  Values for border-style and a demonstration of their results can be seen below:</p>
                        <!-- Insert (Demo border-styles for dotted, dashed, solid, double, groove, ridge, inset, outset, none, hidden, and mixed) -->
                        <img class="demo" src="assets/images/31a-border-style.png" alt="Example of Border-style HTML"/>
                        <img class="demo" src="assets/images/31b-border-style.png" alt="Example of Border-style CSS"/>
                        <img class="demo" src="assets/images/31c-border-style.png" alt="Example of Border-style Result"/>
                    
                        <h4>Width</h4>
                        <p>The same border-width can be applied to all four sides using a single value, or – like with margin and padding – different border widths can be specified for different sides.  The values thin, medium, and thick can be used, or a size values such as px, cm, em, etc.</p>

                        <h4>Border-color</h4>
                        <p>The border-color can be applied to all four sides using a single value, or – like with margin and padding – different border colors can be specified for different sides.  Any color value can be used to set the border-color.  The color property is addressed in the CSS Properties <!-- link to page --> section, where specifying colors by name, HEX, and RGB values are discussed further.</p>

                        <h4>Shorthand</h4>
                        <p>The border property combines setting the width, style, and color of a border in a single property.  The general format for this property is border: width style color;</p>
                        <p>For Example,</p>
                            <!-- insert example here -->
                            <img class="demo" src="assets/images/31a-border.png" alt="Example of Border CSS"/>
                            <img class="demo" src="assets/images/31b-border.png" alt="Example of Border Result"/>
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