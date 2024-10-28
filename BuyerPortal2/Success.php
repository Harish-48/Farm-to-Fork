  <?php
     include("../Functions/functions.php");
     ?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Success Product Added</title>

       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
       <a href="https://icons8.com/icon/83325/roman-soldier"></a>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
  </head>
  <style>
        /* General body styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFFDD0; /* Cream */
            text-align: center;
            padding: 50px;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Animation for page fade-in effect */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Container styles */
        .container {
            border: 3px solid #006400; /* Deep Green */
            border-radius: 15px;
            padding: 40px;
            background-color: #fff;
            display: inline-block;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transform: scale(0.9);
            animation: scaleUp 1s ease forwards;
        }

        /* Animation for the container */
        @keyframes scaleUp {
            from { transform: scale(0.7); }
            to { transform: scale(1); }
        }

        /* Heading styles */
        h1 {
            color: #006400; /* Deep Green */
            font-size: 2.5em;
            animation: slideIn 1s ease forwards;
        }

        /* Animation for heading sliding in */
        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Text paragraph styling */
        p {
            font-size: 1.2em;
            color: #000000; /* Black */
        }

        /* Button styling */
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background-color: #DAA520; /* Warm Gold */
            color: #fff;
            border: none;
            border-radius: 30px;
            font-size: 1.2em;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        /* Button hover effect 
        .btn:hover {
            background-color: #8B0000; /* Deep Burgundy 
            transform: scale(1.05);
        }*/

        /* Success icon animation */
        .success-icon {
            font-size: 60px;
            color: #DAA520; /* Warm Gold */
            margin-bottom: 20px;
            animation: bounce 1.5s ease infinite;
        }

        /* Animation for bouncing success icon */
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
         
    </style>
</head>
<body>
    <div class="container">
        <!-- Animated success icon -->
        <div class="success-icon">✔</div>

        <!-- Payment success message -->
        <h1>Payment Successful!</h1>
        <p>Thank you for your purchase. Your transaction has been completed successfully.</p>

        <!-- Button linking back to the homepage -->
        <a href="bhome.php" class="btn">Go Back to Home</a>
    </div>
    
</body>

  </html>