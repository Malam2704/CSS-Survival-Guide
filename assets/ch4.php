<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 4: Text Properties -->
<?php
    $pageName = "Chapter 4: Text Properties";
    $path = "./";
    $pageNumber = 4;
    include $path . "assets/inc/header.php";
    include "assets/inc/gettingComments.php";
?>
                <p>Beyond color, there are numerous characteristics about text that can be manipulated.</p>

                <h3 id="Font-Family">Font-Family</h3>
                <p>The font-family property controls the font of an element.  Generic font types such as “serif”, “sans-serif”, “cursive” “fantasy”, and “monospace” can be referenced or more specific font names such as “Arial” can be used.  Not all browsers support all fonts, so it is best practice to use the font-family name that you want followed by the generic family name so that the browser can pick a related font type if the named font is unavailable.</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/17-fontFamily.png" alt="Example of Font Family"/>
                <p><b>Tip:</b> When specifying a font-family that is more than one word, use quotation marks (i.e. “Times New Roman”)</p>

                <h3 id="Font-Size">Font-Size</h3>
                <p>Font size can be adjusted using the font-size property and there are several value types that can be specified:</p>
                <table>
                    <tr>
                        <th>Type:</th>
                        <th>Description:</th>
                    </tr>
                    <tr>
                        <td>Absolute-size keywords</td>
                        <td>Based on the user’s default font size</td>
                    </tr>
                    <tr>
                        <td>Relative-size keywords</td>
                        <td>Relative to the parent element’s font size</td>
                    </tr>
                    <tr>
                        <td>Pixels</td>
                        <td>Static value, exactly the number of pixels in height</td>
                    </tr>
                    <tr>
                        <td>Percentage</td>
                        <td>Percentage value relative to parent element’s font size</td>
                    </tr>
                    <tr>
                        <td>Ems</td>
                        <td>Relative to the font-size of the element</td>
                    </tr>
                    <tr>
                        <td>Rems</td>
                        <td>Relative to the font-size of the root element</td>
                    </tr>
                </table>
                <p>Examples:</p>
                    <!-- insert examples here -->
                    <img class="demo" src="assets/images/18-fontSizes.png" alt="Example of HTML Font Sizes"/>
                    <img class="demo" src="assets/images/19-fontSizes.png" alt="Example of CSS Font Sizes"/>
                    <img class="demo" src="assets/images/20-fontSizes.png" alt="Example of Font Sizes"/>
                <p><b>Tip:</b> Do NOT include a space between a value and its unit.  (i.e. 18px, not 18 px)</p>

                <h3 class="spaceContains">Font Styles & Shorthand</h3>
                <p>Text can be assigned a different style with the property font-style.  Examples of values are italic, normal, and oblique.</p>
                <p>The font-weight property controls – you guessed it – the weight of the font.  Examples of values are bold, bolder, normal, light, and lighter.</p>
                <p>Multiple font properties can be altered with the shorthand font property.  Properties that can be targeted are font-style, font-variant, font-weight, font-size/line-height, and font-family.  Font-size and font-family values must be specified when using the shorthand.  The general format is as follows:</p>
                <p>font: font-style font-variant font-weight font-size/line-height font-family;</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/21-italics.png" alt="Example of Italics CSS"/>
                    <img class="demo" src="assets/images/21a-italics.png" alt="Example of Italics Result"/>
                <h3 class="spaceContains">Additional Text Properties</h3>
                <p>Text properties are plentiful.  There are many more than what has already been covered.  The following are additional text properties that are widely utilized:</p>
                    <h4>line-height</h4>
                    <p>Specifies the height of a line, or the space between lines of text.</p>
                    <p>Values are similar to those used with font-size and can be defined by number, length, or percentage values.</p>
                    <p>For Example,</p>
                        <!-- insert example here -->
                        <img class="demo" src="assets/images/22a-lineHeight.png" alt="Example of Line Height HTML"/>
                        <img class="demo" src="assets/images/22b-lineHeight.png" alt="Example of Line Height Result Default"/>
                        <img class="demo" src="assets/images/22c-lineHeight.png" alt="Example of Line Height CSS"/>
                        <img class="demo" src="assets/images/22d-lineHeight.png" alt="Example of Line Height Result With CSS"/>
                    <h4>text-align</h4>
                    <p>Specifies the horizontal alignment of text.</p>
                    <p>Common values are left, right, center, and justify.</p>
                    <p>For Example,</p>
                        <!-- insert example here -->
                        <img class="demo" src="assets/images/23-textAlign.png" alt="Example of Text Align CSS"/>
                        <img class="demo" src="assets/images/23a-textAlign.png" alt="Example of Text Align Result"/>
                    <h4>text-decoration</h4>
                    <p>A shorthand property that styles the decorative lines on text.  While it can address text-decoration-line, text-decoration-color, and text-decoration-style properties, it is often used to add or remove an underline from text:</p>
                    <p>For Example,</p>
                        <!-- insert example here -->
                        <img class="demo" src="assets/images/24-textDecoration.png" alt="Example of Text Decoration CSS"/>
                        <img class="demo" src="assets/images/24a-textDecoration.png" alt="Example of Text Decoration Result"/>
                    <h4>opacity</h4>
                    <p>Specifies the opacity of an element, which determines the element’s transparency.  Values include number from 0.0 (fully transparent or “see-through”) to 1.0 (fully opaque).</p>
                    <p>For Example,</p>
                        <!-- insert example here -->
                        <img class="demo" src="assets/images/25a-opacity.png" alt="Example of Opacity HTML"/>
                        <img class="demo" src="assets/images/25b-opacity.png" alt="Example of Opacity CSS"/>
                        <img class="demo" src="assets/images/25c-opacity.png" alt="Example of Opacity Result"/>
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