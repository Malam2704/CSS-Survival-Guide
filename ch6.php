<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 6: Width, Height, Overflow -->
<?php
    $pageName = "Chapter 6: Width, Height, Overflow";
    $path = "./";
    include $path . "assets/inc/header.php";
    include "assets/inc/gettingComments.php";
?>
                <h3>Width</h3>
                <p>The width property controls the width of an element.   By default, a &lt;div&gt; element takes up 100% width of a page unless a specific width is specified.  Several other elements can have their width adjusted such as paragraphs, images, input fields, etc.  It is important to note that padding, borders, and margins are NOT included in the width of an element.  These properties will be discussed in the next chapter.</p>
                <p>The maximum and/or minimum width of elements can also be specified using the max-width and min-width properties.  These properties will override width.</p>
                <p>The default width value of an element is auto, where the browser automatically calculates the width.  Width values can be expressed with length values (px, cm, etc.) and percentage values (50%, etc.).</p>
                <p><b>Tip:</b> Only specify the width OR height value for an image so that the browser can automatically determine the unspecified value and maintain the proportions of the image.</p>
                <p>For Example,</p>
                    <!-- insert example here -->

                <h3>Height</h3>
                <p>The height property controls the height of an element.   Like the width property, it is important to note that padding, borders, and margins are NOT included in the height of an element.</p>
                <p>The maximum and/or minimum height of elements can also be specified using the max-height and min-height properties.  These properties will override height.</p>
                <p>The default height value of an element is auto, where the browser automatically calculates the height to ensure that its content is properly displayed.  Height values can be expressed with length values (px, cm, etc.) and percentage values (50%, etc.).  The overflow property determines what happens when content does not fit within the specified height of its container.</p>
                <p><b>Tip: </b> Only specify the width OR height value for an image so that the browser can automatically determine the unspecified value and maintain the proportions of the image.</p>
                <p>Height Example:</p>
                    <!-- insert example here -->

                <h3>Overflow</h3>
                <p>The overflow property determines what occurs if content overflows – or extends beyond – an element’s container.  It is only a factor when there is a block element of a specified height.  If all of the content cannot fit within its block element container, the browser needs to know how to display or not display the extra content.</p>
                <p>Common overflow property values:</p>
                    <ul>
                        <li>visible – default value.  The overflow is not clipped and the content is displayed outside of the element’s box</li>
                        <li>hidden – The overflow is clipped and the content is cut off with no display of the overflow</li>
                        <li>scroll – The overflow is clipped and a scroll bar is added to enable viewing the overflowed content</li>
                        <li>auto – Similar to scroll, but scroll bars are only added if needed</li>
                    </ul>
                <p>The overflow-x and overflow-y properties allow specification of what occurs with overflow horizontally and vertically.  (Be careful when introducing too many scroll bars that can be cumbersome to users.)</p>
                
            </main>

            <input type="button" value="Ready to take the Chapter Quiz? Test your knowledge" onclick="window.location='QuizFormCh6.php'"/>

            <?php
                include "assets/inc/commentSection.php";
            ?>

            <?php
                include $path . "assets/inc/footer.php";
            ?>
        </div>
    </body>
</html>