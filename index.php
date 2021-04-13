<?php
	session_name("danny");
	session_start();
	// check fi the passwords are the same:
	if(isset($_POST['uname']) && $_POST['uname']!=""){
		die("Check to see if this person exists and matched: " . $_POST['uname']);

		include("conn.php");

		// Add the star between SELECT and FROM
		$stmp = $mysqli->prepare("SELECT FROM '240Login' WHERE 'uname' = ? LIMIT 1");

		$stmp->bind_param("s",$_POST['uname']);

		$stmp->execute();
		$stmp->bind_result($res);
		$stmp->fetch();

		if(password_verify($_POST['pass'], $res)){
			$_SESSION['login']=true;
			$_SESSION['name']=$_POST['uname'];
			header('Location: page.php');
		}
		$stmp->close();
		// $result = $stmp->get_result();

		// while($row = $result->fetch_assoc() ){
		// 	$actualHashedPassword = $row['pass'];
		// 	echo $actualHashedPassword . " CHECK IF THE SAME AS ";
		// }

		// if(password_verify($_POST['pass'], $actualHashedPassword)){
		// 	$isValidUser = true;
		// 	die("You  have succefully logged in!");
		// }else{
		// 	$isValidUser = true;
		// 	die("access denied");
		// }

		// if($isValidUser){
		// 	echo "Valid";
		// }else{
		// 	echo "Invalid";
		// }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8" />
	<title>Login</title>
 	<style type="text/css">
 		form div
 		{
 			margin: 1em;
 		}
 		form div label
 		{
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
