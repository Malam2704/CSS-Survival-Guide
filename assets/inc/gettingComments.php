<?php
		// session_name("sIndex");
		// session_start();
        error_reporting(E_ALL);
	    ini_set('display_errors', 1);
        include "groupdbconn.php";
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
			if(isset($_GET['name']) && isset($_GET['com']) && $_GET['com'] != ""){
				$stmt = $mysqli->prepare("INSERT INTO `commentSection` (`uname`, `comment`, `last_modified`) VALUES (?, ?, now())");
				$filename = "home.php";
//				$nowTime = date("F d Y H:i:s.", filemtime($filename));
				$stmt->bind_param("ss",$_GET["name"],$_GET["com"]);
				$stmt->execute();
				$stmt->close();
				$_GET = array();
				unset($_GET);
			}
			

			// get the first and last from the 240Inserttable
			// get the contents of the table and send back...
			// $sql = "SELECT Lastname, Age FROM Persons ORDER BY Lastname";
			$sql = "SELECT * FROM `commentSection`";
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