<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('background-image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }


        .container{
        	position: relative;
		    width: 667px;
            height: 516px;
			background: transparent;
			border: 2px solid rgba(255, 255, 255, 0.5);
			border-radius: 20px;
			backdrop-filter: blur(20px);
			box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
/*			display: flex;*/
			justify-content: center;
			align-items: center;
            text-align: center;
			overflow: hidden;
			transform: scale(1.0);
			transition: transform .5s ease, height .2s ease;

        }

        

        .container h1 {
            color: #e1ff00;
            font-size: 52px;
            margin-bottom: -13px;
        }

        .welcome-text {
            margin: 20px 0;
        }

        .welcome-text p {
            color: #00fdff;
            font-size: 30px;
        }

        .details {
            margin-top: 40px;
            margin-left: 25px;  
            text-align: left;
        }

        .details h2 {
            color: #ffffff;
            font-size: 27px;
            margin-bottom: 20px;
        }

        .details p {
            color:#ffffff;
            font-size: 22px;
            margin: 10px 0;
        }


        .logout-button {
            background-color: #f800ff;
            color: #fff;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 25px;
            margin-top: 35px;
            transition: background-color 0.2s ease-in-out;
        }

        .logout-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello,  <?php echo $user_data['user_name']; ?>!</h1>
        <div class="welcome-text">
          
            <p> Welcome to our website.</p>

        </div>
        <div class="details">
            <h2>Your Details:</h2>
            <p><strong><u>Name</u>:</strong> <?php echo $user_data['user_name']; ?> </p>
            <p><strong><u>Amount Invested</u>:</strong> INR 0</p>
            <p><strong><u>Profit</u>:</strong> INR 0</p>
            <p><strong><u>Total Amount</u>:</strong> INR 0</p>
        </div>
        <button class="logout-button"><a href = "logout.php" > Logout </a> </button>
    </div>
</body>
</html>
