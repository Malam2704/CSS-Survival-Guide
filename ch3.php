<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 3: CSS Properties (Color) -->
<?php
    $pageName = "Chapter 3: CSS Properties";
    $path = "./";
    include $path . "assets/inc/header.php";
    include "assets/inc/gettingComments.php";
?>
                <p>CSS properties tell the browser how to style a selected element.  There are hundreds of properties that can be modified and some of the most fundamental will be addressed.</p>

                <h3>Color</h3>
                <p>The color property controls the color of text.  There are multiple ways to express values for this property, but the most common include by name, HEX value, and rgb value.  Many colors have predefined names that can be referenced.  Some are as simple as “green”, while variations of a standard color can sound more descriptive such as “seagreen.”  Hexadecimal values are specified with the general format of #RRGGBB, where RR (red), GG (green), and (BB) blue can have values between 00 (no color) and FF (the most intense color).  #000000 equates to black while #FFFFFF (upper or lowercase) is for white.  RGB values consist of three numbers between 0 and 255 for r (red), g (green), and b (blue), where rgb(0, 0, 0) is black and rgb(255, 255, 255) is white.</p>
                <p>For Example,</p>
                <p>If you want to make all paragraphs on a page red, all of the following would accomplish the same goal:</p>
                    <!-- insert example here -->
                
                <h3>Background-Color</h3>
                <p>Like text color, the background color of elements can also be controlled using the background or background-color property. </p>
                <p>For Example,</p>
                    <!-- insert example here -->

            </main>

            <input type="button" value="Ready to take the Chapter Quiz? Test your knowledge" onclick="window.location='QuizFormCh3.php'"/>

            <?php
                include "assets/inc/commentSection.php";
            ?>

            <?php
                include $path . "assets/inc/footer.php";
            ?>
        </div>
    </body>
</html>