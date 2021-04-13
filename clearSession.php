<?php
    session_name("danny");
    session_start();
    session_destroy();
    header('Location: index.php');
?>
