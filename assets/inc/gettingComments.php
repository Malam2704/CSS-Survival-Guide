<?php
// error_reporting(E_ALL);
	// ini_set('display_errors', 1);

    // include "../groupdbconn.php";

    // if(isset($_POST['uname']) && $_POST['uname']!=""){
    //     if($mysqli){
    //         // if we are adding a new user
    //         /*
    //             we are using client entered data, therefore we have to use a prepared statement
    //             1)prepare the query
    //             2)bind
    //             3)execute
    //             4)close
    //         */
    //         $nowTime = date("F d Y H:i:s.", filemtime($filename));
    //         $theirName = $_GET["name"];
    //         $comment = $_GET["com"];

    //         $stmt = $mysqli->prepare("INSERT INTO `exercise` (`uname`, `comment`, `last_modified`) VALUES (?, ?, ?)");
    //         //$stmt = $mysqli->prepare("INSERT INTO `chOneComments` (`uname`, `comment`, `last_modified`) VALUES (?, ?, ?)");
                
    //             $stmt->bind_param("sss",$theirName,$comment,$nowTime);
    //             $stmt->execute();
    //             $stmt->close();

    //             // echo $_GET["name"];
    //             // echo $_GET["com"];
    //             // echo $nowTime;
    //             $mysqli->query("INSERT INTO `chOneComments` (`uname`, `comment`, `last_modified`) VALUES ($theirName,$comment,$nowTime)");

    //             // get the first and last from the 240Inserttable
    //             // get the contents of the table and send back...
    //             // $sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";
    //             $sql = "SELECT * FROM `chOneComments` LIMIT 50";
    //             $result = $mysqli->query($sql);
    //             // var_dump($result);
    //             // $row = $result->fetch_assoc();
    //             //$res = $result->fetch_assoc();
    //             if($result){
    //                 // put the first and last elements of the 240Inserttable into 
    //                 // a php array.
    //                 while($rowHolder = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    //                     $records[] = $rowHolder;
    //                 }
    //             }
    //     }
    // }
/**
 * Connect to the database.
 * 
 */
    session_start();
	include "../dbconn.php";
		//if we have a connection 
		if($mysqli){
			// if we are adding a new user
			/*
				we are using client entered data, therefore we have to use a prepared statement
				1)prepare the query
				2)bind
				3)execute
				4)close
			*/
			$stmt = $mysqli->prepare("INSERT INTO `exercise` (`uname`, `comment`, `last_modified`) VALUES (?, ?, ?)");
            $filename = "home.php";
			$nowTime = date("F d Y H:i:s.", filemtime($filename));
            echo $_SESSION['name'];
			$stmt->bind_param("sss",$_SESSION['name'],$_GET["com"],$nowTime);
			$stmt->execute();
			$stmt->close();

			// get the first and last from the 240Inserttable
			// get the contents of the table and send back...
			// $sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";
			$sql = "SELECT * FROM `exercise` LIMIT 50";
			$result = $mysqli->query($sql);
			// var_dump($result);
			// $row = $result->fetch_assoc();
			//$res = $result->fetch_assoc();
			if($result){
				// put the first and last elements of the 240Inserttable into 
				// a php array.
				while($rowHolder = mysqli_fetch_array($result,MYSQLI_ASSOC)){
					$records[] = $rowHolder;
				}
			}
		}

?>