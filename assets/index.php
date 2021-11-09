<?php
    session_name("sIndex");
    session_start();
	$loginattempts = 0;
	include "groupdbconn.php";

	// check fi the passwords are the same:
	if(isset($_POST['uname']) && $_POST['uname']!=""){
		//die("Check to see if this person exists and matched: " . $_POST['uname']);
		$Username = $_POST['uname'];
		// Add the star between SELECT and FROM
		$stmp = $mysqli->prepare("SELECT `pass` FROM `groupProjectLoginAccounts` WHERE `uname` = ? LIMIT 1");

		$stmp->bind_param("s",$_POST['uname']);

		$stmp->execute();
		$stmp->bind_result($res);
		$stmp->fetch();

		if(password_verify($_POST['pass'], $res)){
			$_SESSION['login']=true;
			$_SESSION['pass']=$_POST['pass'];
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
		<!-- <link href="assets/css/styles.css" rel="stylesheet" type="text/CSS"> -->
		<link href="assets/css/intro.css" rel="stylesheet" type="text/CSS">
	</head>
	<body>
		<img id="index-logo" src="assets/images/indexPageLogo" alt="Hip Hip Array's logo and team name image"/>

		<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class=index-txt-bg>
			<h1 class="everything headtitle" style ="color:#FF5700; font-weight: 700;">CSS Survival Guide</h1>
			<div class="everything">
				User Name:
				<input type="text" name="uname" size="30" />
			</div>
			<div class="everything">
				Password:
				<input type="password" name="pass" size="30" />
			</div>
			</div>
			<div class="clearfix everything">
				<input type="reset" value="Reset Fields" style="margin: 1.5em; padding: 0.5em"/>
				<input type="button" value="Forgot Password" style="margin: 1.5em; padding: 0.5em" onclick="window.location='forgot.php'" />
				<input type="submit" value="Enter Site" style="margin: 1.5em; padding: 0.5em"/>
				<input type="button" value="Register" style="margin: 1.5em; padding: 0.5em" onclick="window.location='register.php'" />
			</div>
			<?php
				if($loginattempts >= 1){
					echo "<h3 class='everything' style='color:red;'>User does not exist, please register!</h3>";
				}
			?>	
		</form>
	</body>
</html>
