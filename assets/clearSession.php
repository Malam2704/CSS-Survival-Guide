<?php
    session_name("sIndex");
    session_start();
    session_destroy();
    header('Location: index.php');
?>
