<!-- Group 6: ["Hip", "Hip"] -->
<!-- Spring 2021 -->
<!-- ISTE240 Group Project -->
<!-- Chapter 8: Position -->
<?php
    $pageName = "Chapter 8: Position";
    $path = "./";
    $pageNumber = 8;
    include $path . "assets/inc/header.php";
    include "assets/inc/gettingComments.php";
?>
                <p>The position property specifies how an element will be displayed on a page.  Once the position property is set, the top, right, bottom, and left properties can then be used to adjust an element’s location.  The five position values – static, relative, absolute, fixed, and sticky – will be discussed with examples.</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/32a-position.png" alt="Example of Position HTML"/>
                <h3>Static</h3>
                <p>The default position.  An element with position: static; is positioned according to the normal layout of the page and is not affected by top, bottom, left, and right properties.  Inline elements are laid out from left to right and block elements are laid out from top to bottom</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/32b-static.png" alt="Example of Static CSS"/>
                    <img class="demo" src="assets/images/32c-static.png" alt="Example of Static Result"/>
                <h3>Relative</h3>
                <p>An element’s positioning is relative to its original position.  It has its normal position, like with the static value, but now the top, right, bottom, and left properties will work and can adjust – or offset – the element’s position on the page.</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/33a-relative.png" alt="Example of Relative CSS"/>
                    <img class="demo" src="assets/images/33b-relative.png" alt="Example of Relative Result"/>
                <h3>Absolute</h3>
                <p>An element’s positioning is relative to its nearest positioned ancestor or containing block (an element with a position property value other than static).  If there are no positioned ancestors, the document body is referenced and the element will move with page scrolling. </p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/34a-absolute.png" alt="Example of Absolute HTML"/>
                    <img class="demo" src="assets/images/34b-absolute.png" alt="Example of Absolute CSS"/>
                    <img class="demo" src="assets/images/34c-absolute.png" alt="Example of Absolute Result"/>
                <h3>Fixed</h3>
                <p>An element’s positioning is relative to the viewport; therefore, the element remains in the same location and does not appear to move, even if the page is scrolled.  The top, right, bottom, and left properties are used to adjust the position of the element.</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/35a-fixed.png" alt="Example of Fixed HTML"/>
                    <img class="demo" src="assets/images/35b-fixed.png" alt="Example of Fixed CSS"/>
                    <img class="demo" src="assets/images/35c-fixed.png" alt="Example of Fixed Result"/>
                <h3>Sticky</h3>
                <p>An element is positioned according to the user’s scroll.  It will behave like an element with relative position until the viewport reaches a specified position, then it will “stick” in place and behave like an element with fixed position.</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/36a-sticky.png" alt="Example of Sticky HTML"/>
                    <img class="demo" src="assets/images/36b-sticky.png" alt="Example of Sticky CSS"/>
                <p>Before Scrolling:</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/36c-sticky.png" alt="Example of Sticky Result Without Scroll"/>
                <p>After Scrolling:</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/36d-sticky.png" alt="Example of Sticky Result With Scroll"/>
                <h3>z-index</h3>
                <p>The z-index property gives an element a stacking order and essentially tells the browser in what order to draw elements on a page.  This becomes important with overlapping elements.  The lowest z-index value is placed first – or on the bottom – and the highest value is placed last – or on the top.  The default value is 0 and negative values can be used.</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/37a-zIndex.png" alt="Example of z-index HTML"/>
                    <img class="demo" src="assets/images/37b-zIndex.png" alt="Example of z-index CSS"/>
                    <img class="demo" src="assets/images/37c-zIndex.png" alt="Example of z-index Result"/>
                <h3>Float</h3>
                <p>The float property takes an element out of its normal position and shifts it to the left or right until it reaches the edge of its containing box or another floated element.  Typically float is used to wrap text around images.  The default value for float is none, and left, right, or inherit (gets float value of its parent) can be specified.</p>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/38a-float.png" alt="Example of Float CSS"/>
                    <img class="demo" src="assets/images/38b-float.png" alt="Example of Float Result"/>
                <p><b>Tip:</b> When floating a div, give it a width.  Otherwise, the div tries to take up 100% of the width and nothing can float around it.</p>

                <h3>Clear</h3>
                <p>The clear property determines whether an element must be moved below floating elements (cleared).  Typical values are:</p>
                    <ul>
                        <li>none – Default value that allows floating elements on both sides</li>
                        <li>left – Floating elements are not allowed on the left side</li>
                        <li>right – Floating elements are not allowed on the right side</li>
                        <li>both – Floating elements are not allowed on either side.</li>
                    </ul>
                <p>For Example,</p>
                    <!-- insert example here -->
                    <img class="demo" src="assets/images/39a-clear.png" alt="Example of Clear HTML"/>
                    <img class="demo" src="assets/images/39b-clear.png" alt="Example of Clear CSS"/>
                    <img class="demo" src="assets/images/39c-clear.png" alt="Example of Clear Result"/>
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