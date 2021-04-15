<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include "../groupdbconn.php";
	$registered = 0;

	if(isset($_POST['uname']) && $_POST['uname']!=""){

		if($mysqli){
			$stmp = $mysqli->prepare("INSERT INTO `groupProject` (`uname`, `pass`) VALUES (?, ?)");
			$hashedPassword = password_hash($_POST['pass'], PASSWORD_DEFAULT);

			$stmp->bind_param("ss",$_POST['uname'],$hashedPassword);
			$stmp->execute();
			$stmp->close();
			$registered += 1;
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
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<h1 class="everything headtitle">Create Your Account</h1>
		<div class="everything">
			User Name:
			<input type="text" name="uname" size="30" />
		</div>
		<div class="everything">
			Password:
			<input type="password" name="pass" size="30" />
		</div>
		<div class="everything">
			Password (again):
			<input type="password" name="pass2" size="30" />
		</div>
		<div class="clearfix everything">
			<input type="reset" value="Reset Fields" style="margin: 1.5em; padding: 0.5em"/>
			<input type="submit" value="Create Account" style="margin: 1.5em; padding: 0.5em"/>
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
