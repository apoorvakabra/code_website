<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		// $email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>


</head><link rel="stylesheet" href= "login.css">

<link rel="stylesheet" href= "login.css">

<body>


	<header>

		<h2 class="logo" > Logo</h2>
		<nav class="navigation">

			<a href="#"> Home </a>
			<a href="#"> About </a>
			<a href="#"> Services </a>
			<a href="#"> Contact </a>

			<button class="btnLogin-popup"><a href= "login.php"> Login </a> </button>

		</nav>
		<style>
        h2 {
            font-size: 36px; /* Adjust the font size as needed */
            text-align: center; /* Center-align the text */
        }
    </style>

		

	</header>


	<div class="wrapper">

		<span class="icon-close"><ion-icon name="close-circle-outline"></ion-icon></span>

		<div id = "box" class = "form-box register">

				<h2>Registration</h2>

				<form method = "post" action="#">

					<div class="input-box2">

						<span class="icon"><ion-icon name="person"></ion-icon></span>
						<input name = "user_name" type="text" required>

						<label>Username</label>
							
					</div>

					<!-- <div class="input-box">
						<span class="icon"><ion-icon name="mail"></ion-icon></span>
						<input type="email" required>
						<label>Email</label>
							
					</div> -->

					<div class="input-box">
						<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
						<input  type="password" name = "password" required>
						<label>Password</label>
							
					</div> 	
					<div class="remember-forgot">
						<label>
							<input type="checkbox"  > I agree to the terms and condition
						</label>
						
					</div>

					<button id = "button" type="submit" class="btn">
						Register
					</button>

					<div class="login-register">
						<p>Aready have an Account? 
							<a href="login.php" class="login-link">Login</a>
						</p>
					</div>
				</form>
			</div>
		</div>


	<!-- <div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div> -->
</body>
</html>






	

