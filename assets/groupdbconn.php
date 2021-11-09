<?php
// access the msqli sql server with the server name, your user name, password, and database
    $mysqli = new mysqli('localhost','iste240t60','Sentry3&engraulidae','iste240t60');
    // $conn is holding an object! $conn->method(), $conn->property
    // lets do a test
    if(mysqli_connect_errno()){//basically if error occurs
        echo "Connection failed: " . mysqli_connect_error();
        exit();
    }else{
        // echo "connection good";
    }
?>