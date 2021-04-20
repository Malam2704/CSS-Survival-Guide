<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include "groupdbconn.php";
	$registered = 0;

	if(isset($_POST['email']) && $_POST['email']!=""){

		if($mysqli){
			// $stmp = $mysqli->prepare("INSERT INTO `groupProject` (`uname`, `pass`) VALUES (?, ?)");
			// $hashedPassword = password_hash($_POST['pass'], PASSWORD_DEFAULT);

			// $stmp->bind_param("ss",$_POST['uname'],$hashedPassword);
			// $stmp->execute();
			// $stmp->close();
			// $registered += 1;

			$theirMail = $_POST['email'];
            $sql = "SELECT * FROM `groupProject` WHERE `email` = $theirMail";
			// var_dump($result);
			// $row = $result->fetch_assoc();
			//$res = $result->fetch_assoc();
			if($result = $mysqli->query($sql)){
				printf("select returned %d rows<br/><br/>",$results->num_rows);
				// put the first and last elements of the 240Inserttable into 
				// a php array.
				while($rowHolder = mysqli_fetch_array($result,MYSQLI_ASSOC)){
					$records[] = $rowHolder;
				}
			}
			echo $theirMail;
			$messageStart = " Your User name and password is " . $records[0];
			echo $messageStart;
            mail($theirMail, "CSS Survival Guide Login Info", $messageStart);
		}
	}


	function passMatch(){
		if(strcmp($_POST['pass'],$_POST['pass2'])==0){
			return true;
		}else{
			return false;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Register</title>
	<link href="assets/css/styles.css" rel="stylesheet" type="text/CSS">
 	<style type="text/css">
	 	body{
			background-image: url("assets/images/login_background.jpg");
		}
		[type="button"],[type="reset"],[type="submit"] {
			background-color: #23222c;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			border: 2px solid white;
		}
	 	.headtitle{
			color: orange;
			font-size: 250%;
			margin-top: 220px;
		}
		.everything{
			width: 500px;
			text-align: center;
			margin-right: auto;
			margin-left: auto;
		}
 		form div{
 			margin: 1em;
 		}
 		form div label{
 			float: left;
 			width: 10%;
 		}
 		form div.radio{
 			float: left;
 		}
 		.clearfix{
 			clear: both;
 		}
		@media only screen and (max-width:600px){
			.everything,.headtitle{
				margin: 0;
				width: 100%;
			}
		}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<h1 class="everything headtitle">Create Your Account</h1>
		<div class="everything">
			Email: 
			<input type="email" name="email" size="30" />
		</div>
		<div class="clearfix everything">
			<input type="reset" value="Reset Fields" style="margin: 1.5em; padding: 0.5em"/>
			<input type="submit" value="Send Email" style="margin: 1.5em; padding: 0.5em"/>
		</div>
		<?php
			if($registered >= 1){
				//echo "<h3 style='color:blue;'>Registration is Successful!</h3>";
				header('Location: index.php');
			}
		?>
	</form>
</body>
</html>