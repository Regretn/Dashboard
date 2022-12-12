<?php
include_once("./inc/student_login.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<title>Login landing page</title>
</head>

<body>
	<section class="side">
		<img src="./student/img/teacher.png" alt="">
	</section>

	<section class="main">
		<div class="login-container">
			<p class="title">Welcome to TES</p>
			<div class="separator"></div>
			<p class="welcome-message">Teacher`s Evaluation System</p>

			<form action="./inc/student_login.php" method="post" name="login">
				<div class="form-control">
					<input type="text" placeholder="Username" name="user_name" require_once>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-control">
					<input type="password" placeholder="Password" name="password" required>
					<i class="fas fa-lock"></i>
				</div>

				<button class="submit">Login</button>
			</form>

		</div>
	</section>

</body>

</html>