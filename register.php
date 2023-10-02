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
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv ="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale =1.0">

<title> 

	Website With Login & Registration

</title>

<link rel="stylesheet" href= "login.css">

</head>

<body>

	<header>

		<img src="logo.png" alt="Image" class="top-left-image">	
		<!-- <nav class="navigation">

			<a href="#"> Home </a>
			<a href="#"> About </a>
			<a href="#"> Services </a>
			<a href="#"> Contact </a>

			<button class="btnLogin-popup"> Login </button> -->

		<!-- </nav> -->

		<style>
	        h1 {
	            font-size: 36px; /* Adjust the font size as needed */
	            text-align: center; /* Center-align the text */
	            color: #caff00;
	            margin-top: 40px;
	        }
   		 </style>


	</header>

	<div class="wrapper">

		<span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>

		<div id = "box" class = "form-box login">

			<h1>Registration</h1>
			
			<form method = "post" action="#">

				<div class="input-box">

					<span class="icon"><ion-icon name="mail"></ion-icon></span>
					<input type="text" name="user_name" required>

					<label>Username</label>
						
				</div>
				<div class="input-box">
					<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
					<input  type="password" name="password" required>
					<label>Password</label>
						
				</div> 	


				<!-- remeber forgot to be done later -->

				<!-- <div class="remember-forgot">
					<label>
						<input type="checkbox"  > Remember Me
					</label>
					<a href="#">Forgot Password?</a>
				</div> -->	


				<button id = "button" type="submit" class="btn">
					Register
				</button>


				<div class="login-register">
					<p>Already have an Account? 
						<a href="login.php" class="login-link">Login</a>
					</p>
				</div>
			</form>
		</div>
	</div>


	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
	<script src="script.js"></script>

</body>
</html>

