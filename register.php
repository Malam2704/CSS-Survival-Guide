<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	include "assets/inc/validations.php";
	include "groupdbconn.php";
	$registered = 0;
	$errorString = "";
	
	// We use a registered variable that will determine actions
	// if pass don't match, it sets register to 2, if it's not a len of 8+
	// it sets it to 3
	// if everything works register is 1.
	// If statemetn below to tell user they needs to fix, or redirect to index
	if(isset($_POST['uname']) && $_POST['uname']!=""){
		if(passMatch()){
			if(passlength()){
				if($mysqli){
					$stmp = $mysqli->prepare("INSERT INTO `groupProjectLoginAccounts` (`uname`,`email`, `pass`) VALUES (?, ?, ?)");
					
					$hashedPassword = password_hash($_POST['pass'], PASSWORD_DEFAULT);
					$uMail = sanitize($_POST['email']);
					$uName = sanitize($_POST['uname']);
					
					$eMessage = "Hello, you have made an account with user " . 
						$_POST['uname'] . " and with a password of " . $_POST['pass'];
					mail($uMail,"CSS Survival Guide Account Created",$eMessage);
					mail("mohammedal2144@gmail.com", $subject ,$message . " by " .$theirEmail);
					
					$stmp->bind_param("sss",$uName,$uMail,$hashedPassword);
					$stmp->execute();
					$stmp->close();
					$registered = 1;
				}
			}else{
				$registered = 3;
			}
		}else{
			$registered = 2;
		}
	}

	function passlength(){
		if(strlen($_POST['pass']) >= 8){
			return true;
		}else{
			return false;
		}
	}

	function passMatch(){
		if(strcmp($_POST['pass'],$_POST['pass2'])==0){
			return true;
		}else{
			return false;
		}
	}

	// write our own html sanitize function
	// String we want to sanitize along with a lenght defualt at 50
	function sanitize($str,$length=30){
		//trim the stirng gettin rid of leading and trailing blank spaces.
		$str = trim($str);
		// gets rid of all the html elements, and changes them
		$str = htmlentities($str, ENT_QUOTES);
		return substr($str,0,$length);
	}

	if($registered == 1){
		//echo "<h3 style='color:blue;'>Registration is Successful!</h3>";
		header('Location: index.php');
	}else if($registered == 2){
		$errorString = "<h3 class='everything' style='color:red;'> Passwords need to match </h3>";
	}else if($registered == 3){
		$errorString = "<h3 class='everything' style='color:red;'>Passwords need to be atleast 8 characters</h3>";
	}else if($registered == -1){
		$errorString = "<h3 class='everything' style='color:red;'>Please enter a Username this time!</h3>";
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
				User Name:
				<input type="text" name="uname" size="30" />
			</div>
			<div class="everything">
				Email: 
				<input type="email" name="email" size="30" />
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
				echo $errorString;
			?>
		</form>
	</body>
</html>
