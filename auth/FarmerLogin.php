<?php
include("../Includes/db.php");
//session_start();
include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Farmer Login Portal</title>
	<!-- <link rel="stylesheet" type="text/css" href="../Styles/FarmerLogin.css"> -->
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

		/* Footer styles */
		.footer {
			background: linear-gradient(45deg, #DAA520, #8B0000);
			color: #FFF;
			text-align: center;
			padding: 10px;
			position: absolute;
			bottom: 0;
			width: 100%;
		}

		/* Form and Button Styling */
		body {
			font-family: 'Raleway', sans-serif;
			margin: 0;
			font-size: .9rem;
			font-weight: 400;
			line-height: 1.6;
			color: #000000; /* Black */
			text-align: left !important;
			background-color: #FFFDD0; /* Cream */
			text-align: center;
			background-size: 100%;
		}

		.my-form {
			padding-top: 1.5rem;
			padding-bottom: 1.5rem;
		}

		.card-header {
			background: linear-gradient(45deg, #DAA520, #8B0000);
			color: #FFF; /* Warm Gold for the heading */
			font-weight: bold;
		}

		.card-body {
			border-color: #8B0000; /* Deep Burgundy */
		}

		.btn {
			background: linear-gradient(45deg, #DAA520, #8B0000);
			color: #FFF; /* Warm Gold */
			border: 1px solid #DAA520; /* Warm Gold */
		}

		.btn:hover {
			background-color: rgba(218, 165, 32, 0.2); /* Lighter Warm Gold */
			border-color: #8B0000; /* Deep Burgundy */
		}

		/* Link Styling */
		a {
			color: #8B0000; /* Deep Burgundy */
		}

		a:hover {
			color: #DAA520; /* Warm Gold */
		}

		/* Form Label Styling */
		.form-group label {
			color: black; /* Deep Green */
		}

		/* Media Query for Mobile Devices */
		@media only screen and (min-device-width:320px) and (max-device-width:480px) {
			.right {
				display: none;
				background-color: #ff5500;
			}

			.left {
				display: flex;
			}

			.moblogo {
				display: none;
			}

			.logins {
				text-align: center;
				margin-right: 35%;
				padding: 15px;
			}

			.searchbox {
				width: 95%;
				margin-right: 5%;
				margin-left: 0%;
			}

			.moblists {
				display: inline-block;
				text-align: center;
				width: 100%;
			}
		}
		.say1 {
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            color: #FFF;
            background-color: #DAA520;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
			margin-left: 10px;
			font-family: 'Raleway', sans-serif;
        }
	</style>
</head>

<body>
	<div >
        <a href="BuyerLogin.php"> <button class="say1"><i class="bi bi-house-door-fill fa-1x"> Restaurant Login</i></button></a>
    </div>
	<main class="my-form">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header text-left">
							<h4>Farmer Login</h4>
						</div>
						<div class="card-body">
							<form name="my-form" action="FarmerLogin.php" method="post">

								<div class="form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-right"><i class="fas fa-phone-alt mr-2"></i><b>Phone Number</b></label>
									<div class="col-md-6">
										<input type="text" id="phone_number" class="form-control" name="phonenumber" placeholder="Phone Number" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="p1" class="col-md-4 col-form-label text-md-right"><i class="fas fa-lock mr-2"></i><b>Password</b></label>
									<div class="col-md-6">
										<input id="p1" class="form-control" type="password" name="password" placeholder="Password" required>
									</div>
								</div>

								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn" name="login" value="Login">
										Login
									</button>
								</div>
								<br>
								<div class="col-md-6 offset-md-4">
									<label id="forgotPassword"><a href="FarmerForgotPassword.php"><b> Forgot your password </b></a></label>
									<br>
									<label id="account"><a href="FarmerRegister.php"><b> Create New Account</b></a></label>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<div class="footer">
		&copy; 2024 FarmtoFork. All rights reserved.
	</div>
</body>

</html>


<?php
if (isset($_POST['login'])) {

	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	$ciphering = "AES-128-CTR";
	$iv_length = openssl_cipher_iv_length($ciphering);
	$options = 0;
	$encryption_iv = '2345678910111211';
	$encryption_key = "DE";
	$encryption = openssl_encrypt(
		$password,
		$ciphering,
		$encryption_key,
		$options,
		$encryption_iv
	);
	// echo $encryption;

	$query = "select * from farmerregistration where farmer_phone = '$phonenumber' and farmer_password = '$encryption'";
	echo $query;
	$run_query = mysqli_query($con, $query);
	$count_rows = mysqli_num_rows($run_query);
	if ($count_rows == 0) {
		echo "<script>alert('Please Enter Valid Details');</script>";
		echo "<script>window.open('FarmerLogin.php','_self')</script>";
	}
	while ($row = mysqli_fetch_array($run_query)) {
		$id = $row['farmer_id'];
	}

	$_SESSION['phonenumber'] = $phonenumber;
	echo "<script>window.open('../FarmerPortal/farmerHomepage.php','_self')</script>";
}

?>