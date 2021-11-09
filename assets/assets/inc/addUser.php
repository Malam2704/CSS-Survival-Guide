<?php
	/**
	* Connects to the database.
	* Return false if connection failed.
	*/
	// Gets the data from the register.php page and isnerts it into the
	// accounts table on the database
	include "../../dbconn.php";
	if($mysqli){
		if(!empty($_GET['name']) && !empty($_GET['com'])){
			$stmt = $mysqli->prepare("INSERT INTO `240Ajax2198` (first,last) values (?,?)");
			$stmt->bind_param("ss",$_GET["name"],$_GET["com"]);
			$stmt->execute();
			$stmt->close();
		}
		$query = "SELECT * FROM `240Ajax2198`";
		$res = $mysqli->query($query);
		if($res){
			while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
				//shove all the elements into an array.
				$records[] = $rowHolder;
			}
		} 
	}

	//Code header() is to make sure we get new data - clears the cache!
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	header('Content-Type: application/json');
	echo json_encode($records);
?>