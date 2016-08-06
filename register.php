<?
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';

?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset = "UTF-8">
			<title>Login : Registration Form</title>
			<script src="js/sha512.js"></script>
			<script src="js/forms.js"></script>
			<link rel="stylesheet" href="styles/main.css"/>
		</head>
		<body>
			<h1>REGISTER WITH US</h1>
			<?php
				if(!empty($error_msg)){
					echo $error_msg;
				}
			?>
			
			<ul>
				<li>Usernames may contain only digits, upper and lower case letter and underscores</li>
				<li>Emails must have a valid email format</li>
				<li>Passwords must be at least 6 characters long</li>
				<li>Passwords must contain
					<ul>
						<li>At least one uppercase letter</li>
						<li>At least one lowercase letter</li>
						<li>At least one number</li>						
					</ul>
				</li>
				<li>Your password and confirmation must match</li>
			</ul>
			<form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST" name="registration_form">
			Username : <input type="text"  name="username" id="username"/>
			Email : <input type="text" name="email" id="email" />
			Password : <input type="password" name="password" id="password" />
			Confirm Password: <input type="password" name="confirm_password" id="confirm_password" />
			<br>
			<input type="button" value="Register" onclick="return regformhash(this.form,this.form.username,this.form.email,this.form.password,this.form.confirm_password);"/>
			</form>
			
			<p>Return to the <a href="index.php">Login Page</a>.</p>
		</body>


	</html>