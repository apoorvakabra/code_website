<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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

		<!-- <h2 class="logo" > Logo</h2> -->
		<img src="logo.png" alt="Image" class="top-left-image">	
		<!-- <nav class="navigation">

			<a href="#"> Home </a>
			<a href="#"> About </a>
			<a href="#"> Services </a>
			<a href="#"> Contact </a>

			<button class="btnLogin-popup"> <a href = "login.php"> Login </a> </button>

		</nav> -->

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

			<h1>Login</h1>
			
			<form method = "post" action="#">
				<div class="input-box">
					<span class="icon"><ion-icon name="mail"></ion-icon></span>
					<input type="text" name="user_name" required>

					<label>Username</label>
						
				</div>
				<div class="input-box">
					<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
					<input type="password" name="password" required>
					<label>Password</label><br>
						
				</div> 	


				<!-- remeber forgot to be done later -->

				<!-- <div class="remember-forgot">
					<label>
						<input type="checkbox"  > Remember Me
					</label>
					<a href="#">Forgot Password?</a>
				</div> -->	


				<button id = "button" type="submit" class="btn">
					Login
				</button>


				<div class="login-register">
					<p>Don't have an Account? 
						<a href="register.php" class="register-link">Register Now!</a>
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

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name"><br><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html> -->