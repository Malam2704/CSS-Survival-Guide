<?php
	session_name("danny");
	session_start();

	$loginattempts = 0;
	include "../groupdbconn.php";

	// check fi the passwords are the same:
	if(isset($_POST['uname']) && $_POST['uname']!=""){
		//die("Check to see if this person exists and matched: " . $_POST['uname']);
		$Username = $_POST['uname'];
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
		}else{
			$loginattempts += 1;
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
			form div,form h1,form h3{
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
			@media only screen and (max-width:600px){
			.everything,.headtitle{
				margin: 0;
				width: 100%;
			}
		}
		</style>
	</head>
	<body>
		<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<h1 class="everything headtitle">The CSS Survival Guide</h1>
			<div class="everything">
				User Name:
				<input type="text" name="uname" size="30" />
			</div>
			<div class="everything">
				Password:
				<input type="password" name="pass" size="30" />
			</div>
			<div class="clearfix everything">
				<input type="reset" value="Reset Form" style="margin: 1.5em; padding: 0.5em"/>
				<input type="submit" value="Enter Site" style="margin: 1.5em; padding: 0.5em"/>
				<input type="button" value="Register" style="margin: 1.5em; padding: 0.5em" onclick="window.location='register.php'" />
			</div>
			<?php
				if($loginattempts >= 1){
					echo "<h3 style='color:red;'>User does not exist, please register!</h3>";
				}
			?>	
		</form>
	</body>
</html>
