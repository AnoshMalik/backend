<?php 
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';


secure_session_start();

if(login_check($mysqli)==true){
	$logged = 'in';
	
}else{
	$logged = 'out';
}


?>

<!DOCTYPE html>
	<html>
		<head>
			<title></title>
			<link rel="stylesheet" href="styles/main.css">
			<script src="js/sha512.js"></script>
			<script src="js/forms.j"></script>
		</head>
		<body>
			<?php
				if(isset($_GET['error'])){
					echo '<p class="error">Error Logging in!</p>';
					
				}
			?>
			
			<form action="includes/process_login.php" method="post" name="login_form">
				Email : <input type="text" name="email"/>
				Password : <input type="password" name="password" id="password"/>
				<input type="button" value="Login" onclick="formhash(this.form,this.form.password);">
			</form>
			
			<?php
				if(login_check($mysqli) == true){
					echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']). '.</p>';
					
					echo '<p>Do you want to change user? <a href="includes/logout.php">Log Out</a>.</p>';
					}else{
							echo '<p>Currently logged ' . $logged . '.</p>';
							echo "<p>Dont have an account? <a href='register.php'>Make one!</a></p>";
					}
			
			
			?>	
			
			
		</body>


	</html>