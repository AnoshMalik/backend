<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

secure_session_start();

?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8"/>
			<title>Protected Page</title>
			<link rel="stylesheet" href="styles/main.css"/>
		</head>
		<body>
			<?php if(login_check($mysqli) == true) : ?>
			<p>Welcome <?php echo htmlentities($_SESSION['username']);?>!</p>
			<p>
			
				This is just a sample protected page!
			
			</p>
			<p>Return to <a href="index.php">Login page</a></p>
			
			<?php else :?>
			
				<p><span class="error">You are not authorised to access this page</p>
			<?php endif; ?>
		</body>


	</html>