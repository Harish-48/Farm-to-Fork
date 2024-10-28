 <?php
 include("../Includes/db.php");
 session_start();
 $sessphonenumber = $_SESSION['phonenumber'];
 $sql = "select * from farmerregistration where farmer_phone = '$sessphonenumber' ";
 $run_query = mysqli_query($con, $sql);
 while ($row = mysqli_fetch_array($run_query)) {
     $name = $row['farmer_name'];
     $phone = $row['farmer_phone'];
     $address = $row['farmer_address'];
     $pan = $row['farmer_pan'];
     $bank = $row['farmer_bank'];
     $state = $row['farmer_state'];
     $district = $row['farmer_district'];
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmer Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="../portal_files/jquery.min.js.download"></script>
    <script src="../portal_files/popper.min.js.download"></script>
    <script src="../portal_files/bootstrap.min.js.download"></script>

    <style>
        /* Footer styles */
		.footer {
			background: linear-gradient(45deg, #DAA520, #8B0000);
			color: #FFF;
			text-align: center;
			padding: 10px;
			position: relative;
			bottom: 0;
			width: 100%;
            margin-top: 15px;
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

        h1 {
            text-align: center;
            color: #F2C94C;
            margin-bottom: 20px;
        }

        .profile-form {
            background-color: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            max-width: 520px;
            margin: auto;
            margin-top: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            background-color: rgba(255, 255, 255, 0.2);
            border: 1px solid #000;
            border-radius: 10px;
            color: #black;
            padding: 10px;
            width: 100%;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 22px;
            font-weight: bold;
            color: #FFF;
            background-color: #DAA520 ;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #8B0000;
            color: #FFF;
        }

        textarea {
            resize: none;
            height: 50px;
            text-align: center;
        }
        .say {
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
            width: 100%;
        }
        .say:hover {
            background-color: #8B0000;
            color: #FFF;
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
        }
        
    </style>
</head>

<body>
<div >
        <a href="FarmerHomepage.php"> <button class="say1"><i class="bi bi-house-door-fill fa-1x"> Back</i></button></a>
    </div>
    <div class="profile-form">
        <h1>FARMER'S PROFILE</h1>
        <form action="EditProfile.php" method="post">
            <div class="form-group">
                <label>Name:</label>
                <textarea readonly><?php echo $name ?></textarea>
            </div>
            <div class="form-group">
                <label>Phone Number:</label>
                <textarea readonly><?php echo $phone ?></textarea>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <textarea readonly><?php echo $address ?></textarea>
            </div>
            <div class="form-group">
                <label>State:</label>
                <textarea readonly><?php echo $state ?></textarea>
            </div>
            <div class="form-group">
                <label>District:</label>
                <textarea readonly><?php echo $district ?></textarea>
            </div>
            <div class="form-group">
                <label>Pan Number:</label>
                <textarea readonly><?php echo $pan ?></textarea>
            </div>
            <div class="form-group">
                <label>Account Number:</label>
                <textarea readonly><?php echo $bank ?></textarea>
            </div>
            <input type="submit" name="editProf" value="Edit Profile">
            
        </form>

        <div class="again">
            <a href="ChangePassword.php"><button class="say">Change Password</button></a>
        </div>
    </div>
    <div class="footer">
        &copy; 2024 FarmtoFork. All rights reserved.
    </div>
</body>

</html>
