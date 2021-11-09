<div class="centering">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" class="text-recaptcha-center">
        <div class="g-recaptcha" data-sitekey="6Lf_PscaAAAAAF81aAPTH7n64x3lTL7LTq-AGCAB"></div>
        <input type="submit" id='quizButton' name="quizB" value="Ready to take the Chapter Quiz? Test your knowledge"/>
    </form>

    <div class="captchaStatus">
        <?php
            if(isset($_GET['quizB'])){
                $secretKey = '6Lf_PscaAAAAAAayb5a3rBKQIkGbn_uC1mKdswAX';
                $responseKey = $_GET['g-recaptcha-response'];
                $userIP = $_SERVER['REMOTE_ADDR'];
                $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . "&response=" . $responseKey . "&remoteip=" . $userIP;

                $response = file_get_contents($url);
                $response = json_decode($response);

                if($responseKey){
        ?>  
                    <script>
                        window.location='QuizFormCh<?php echo $pageNumber ?>.php'
                    </script>
        <?php
                }
            }
        ?>
    </div>
</div>