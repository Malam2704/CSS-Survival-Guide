<?php
	session_name("danny");
	session_start();

	include "../../../MAIN/ma3655/dbconn.php";

	// check fi the passwords are the same:
	if(isset($_POST['uname']) && $_POST['uname']!=""){
		//die("Check to see if this person exists and matched: " . $_POST['uname']);

		// Add the star between SELECT and FROM
		$stmp = $mysqli->prepare("SELECT `pass` FROM `groupProject` WHERE `uname` = ? LIMIT 1");

		$stmp->bind_param("s",$_POST['uname']);

		$stmp->execute();
		$stmp->bind_result($res);
		$stmp->fetch();

		if(password_verify($_POST['pass'], $res)){
			$_SESSION['login']=true;
			$_SESSION['name']=$_POST['uname'];
			header('Location: home.php');
		}
		$stmp->close();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<link href="assets/css/styles.css" rel="stylesheet" type="text/CSS">
 	<style type="text/css">
		form div{
			margin: 1em;
		}
 		form div label{
 			float: left;
 			width: 10%;
 		}
 		form div.radio {
 			float: left;
 		}
 		.clearfix {
 			clear: both;
 		}
 	</style>
</head>
<body>
	<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div>
			User Name:
			<input type="text" name="uname" size="30" />
		</div>
		<div>
			Password:
			<input type="password" name="pass" size="30" />
		</div>
		<div class="clearfix">
			<input type="reset" value="Reset Form" />
			<input type="submit" value="Enter Site" />
			<div>
			<input type="button" value="Register" onclick="window.location='register.php'" />
			</div>
		</div>	
	</form>
</body>
</html>
