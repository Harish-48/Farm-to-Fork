<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Products</title>
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

     <style>
          
          .content_item {
               text-align: center;
               justify-content: center;
          }

          .call {
               float: left;
               font-size: 20px;
               margin-left: 150px;
               margin-top: 25px;
          }

          .text {
               float: left;
               margin-left: 735px;
               margin-top: -50px;
          }

          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

          }

          .lost {
               /* <font-fam></font-fam>; */
               color: black;
               text-align: center;
               height: 8%;
               margin-top: 150px;
               border-radius: 30px;
               font-size: 30px;
               /* margin-top: 5em; */
               background-color: olive;
               margin-top: 120px;
               margin: auto;
          }

          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          h2 {
               color: white;
               margin-top: 3em;
               text-align: center;

          }


          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-top: 2%;
               text-align: center;
               border-radius: 25px;
          }


          .wrapper {
               background-image: 100px;
          }

          .add_button {
               float: right;
               text-align: center;
          }


          h1 {
               font-family: 'Times New Roman', Times, serif;
               color: white;

          }

          .lost {
               font-family: Verdana, Geneva, Tahoma, sans-serif;
               color: black;
               text-align: center;
               margin-top: 220px;
               margin: auto;
          }


          .new {
               text-align: center;
          }

          .button {
               position: relative;
               float: right;
          }

          h2 {
               color: white;
               margin-top: 3em;
               text-align: center;

          }

          .hii {
               float: right;
               margin-right: 5em;
          }

          .ribbon {
               position: relative;
               top: -16px;
               right: -706px;
               float: left;
               top: 0px;
               left: 0px;
               height: 74px;
               background-color: green;
          }

          .over {
               background-color: green;
               border: 1px;
               width: 100%;
               white-space: nowrap;
               height: 70px;


          }

          .subtract {
               float: right;
               border-color: olive;
               margin-right: 12%;
               background-color: #00b300;
               text-align: center;
               /* border-radius: 25px; */
               width: 9%;
               height: 8%;
               margin-top: -5%;
               padding: 5px;

          }

          .items {
               width: 100%;
               margin: auto;
               height: auto;
          }

          /* 
          .productbox {
               float: left;
               margin: 15px;
               margin-left: 30px;
               padding: 15px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 10px;
          } */

          /* .productbox:hover {
               float: left;
               margin: 25px;
               margin-left: 30px;
               padding: 20px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 5px;
               font-weight: bolder;
               height: 325px;
               width: 240px;

          } */

          .slideshow {
               margin-top: 10px;
               margin-left: 100px;
               margin-bottom: 20px;
               float: left;
               border-style: solid;
          }

          

          .time {
               background-color: blue;
               /* margin-left: 20px; */
          }

          .whats {
               text-align: center;
               margin-left: 30%;
          }

          .f1 {
               float: left;
               background-color: #fff;
               border: 1px solid red;
               height: 200px;
               border-radius: 50%;
               width: 200px;
               padding-top: 20px;
               border-style: solid;
               background-image: url("../Images/Website/f2.jpg");
               background-size: 200px 200px;
               background-repeat: no-repeat;
               border-color: #000;
               /* opacity: 5%; */
          }

          .t1 {
               padding-top: 70px;
               text-align: center;
               justify-items: center;
               color: black;
               font-weight: bold;
          }

          .t5 {
               margin-top: -13px;
          }

          .t4 {
               margin-top: -13px;

          }

          .whatsnew {
               /* background-image: url("../Images/Website/back.jpeg"); */

               background-color: blue;

          }

          .f2 {
               margin-left: 130px;
               margin-right: 150px;
          }

          .f3 {
               margin-right: 150px;

          }

          .f4 {
               margin-right: 150px;
          }

          .pictus {
               margin-top: 200px;
               /* background-color: red; */
          }

          .pictus>img {
               height: 100px;

               width: 150px;
          }

          .imag1 {
               margin-top: 20px;
               margin-left: 180px;
          }

          .imag2 {
               margin-top: 20px;

               margin-left: 340px;

          }

          .imag3 {
               margin-top: 20px;

               margin-left: 350px;

          }

          .imag1_under {
               max-width: 250px;
               width: 100%;
               min-height: 100px;
               margin-left: 100px;
               text-align: center;
               font-size: 20px;

          }

          .imag2_under {
               max-width: 250px;
               width: 100%;
               min-height: 100px;
               margin-left: 290px;
               margin-top: 20px;
               text-align: center;
               font-size: 20px;
          }

          .imag3_under {
               max-width: 250px;
               width: 100%;
               font-size: 20px;

               min-height: 100px;
               margin-left: 290px;
               text-align: center;
          }

          .image {
               max-width: 200px;
          }

          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
          }

         

          .caros {
               margin-top: 30px;

          }

          hr {
               border: 0;
               height: 0.5px;
               clear: both;
               display: block;
               width: 99%;
               background-color: black;
               margin-left: 0.5em;
          }

          img {
               max-width: 100%;
               display: inline-block;
          }          

          .firstimage {
               height: 500px;
               width: 100%;
          }

          .mybtn {
               border-color: green;
               border-style: solid;
          }

          .card {
               width: 100%;
               height: 100%;
               margin: 10px;
          }

          .right {
               display: flex;
          }

          .left {
               display: none;
          }

          .cart {
               /* margin-left:10px; */
               margin-right: -9px;
          }

          .profile {
               margin-right: 2px;

          }

          .login {
               margin-right: -2px;
               margin-top: 12px;
               display: none;
          }

          .searchbox {
               width: 60%;
          }

          .lists {
               display: inline-block;
          }

          .moblists {
               display: none;
          }

          .logins {
               text-align: center;
               margin-right: -30%;
               margin-left: 35%;
          }

          .tab {
               width: 100%;

               border-style: solid;
               border-width: 2px;
               padding: 2px;

          }

          th {
               border-color: white;
               border-style: solid;
               border-width: 2px;
               padding: 2px;

          }

          .tableyhead {

               color: red;

          }

          .thy {
               background-color: #555;
               color: white;

          }

          .trow {
               align-content: center;
          }

          .products {
               margin-left: 9%;

          }

          .productbox {
               float: left;
               margin: 15px;
               /* margin-left: 30px; */
               padding: 15px;
               border-style: outline;
               border: 2px solid;
               border-color: green;
               border-radius: 10px;
          }

          .productbox img {
               height: 200px;
               width: 250px;
               border-style: double;
               border: 2px solid;
               border-color: brown;
               border-width: 2px;
               border-radius: 10px;
          }

          .productbox p {
               text-align: center;
               text-decoration: underline;
          }

          .productbox img:hover {
               height: 200px;
               width: 250px;
               border-style: double;
               border: 2px solid;
               border-color: brown;
               border-width: 2px;
               border-radius: 10px;
          }

          .productbox p:hover {
               text-align: center;
               text-decoration: underline;

          }



          /* For medium devices (e.g. tablets) */
          /* @media (min-width: 420px) {
               img {
               max-width: 48%;
               }
          } */
          /* For large devices (e.g. desktops) */
          @media (min-width: 760px) {
               .resizing {
                    height: 500px;
               }
          }

          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .image {
                    max-width: 48%;
               }

               .firstimage {
                    height: auto;
                    width: 90%;
               }

               .card {
                    width: 80%;
                    margin-left: 10%;
                    margin-right: 10%;

               }

               .col {
                    margin-top: 20px;
               }

               .right {
                    display: none;
                    background-color: #ff5500;
               }

               /* 
           .settings{
           margin-left:79%;
       } */
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

             /* General Styles */
         body {
            font-family: 'Poppins', sans-serif;
            background-color: #FFFDD0; /* Cream background */
            color: #000; /* Black text */
            margin: 0;
            padding: 0;
        }

        /* Navigation Bar */
        .navbar1 {
            background: linear-gradient(45deg, #DAA520, #8B0000); /* Warm Gold to Deep Burgundy */
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .navbar1-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Navigation links */
        .navbar1-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex: 1;
        }

        /* Individual navbar1 link */
        .navbar1-link {
            text-decoration: none;
            color: #FFF; /* White text */
            font-size: 1.2rem;
            font-weight: 600;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        /* Hover effect for links */
        .navbar1-link:hover {
            color: #DAA520; /* Change to Warm Gold on hover */
        }

        /* Footer */
        footer {
            margin-top: 40px;
            background-color: rgba(0, 0, 0, 0.8);
            color: #d3d3d3;
            padding: 40px 20px;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-section {
            margin: 10px;
            flex: 1;
            min-width: 250px;
        }

        .footer-section h3 {
            color: #F2C94C;
            margin-bottom: 10px;
        }

        .social-icon {
            color: #d3d3d3;
            margin: 0 15px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .social-icon:hover {
            color: #F2C94C;
        }

        .footer-bottom {
            margin-top: 20px;
        }
        hr{
          color: goldenrod;
        }
     </style>

</head>

<body>





     <body>

                 <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-xl navbar1">
        <div class="navbar1-container">
            <a href="#" class="navbar1-link">
                <img src="logo.png" alt="Logo" style="height:50px;">
            </a>
            <div class="navbar1-links">
                <a href="FarmerHomePage.php" class="navbar1-link">Home</a>
                <a href="FarmerProfile.php" class="navbar1-link">Profile</a>
                <a href="Transactions.php" class="navbar1-link">Order</a>
                <a href="MyProducts.php" class="navbar1-link">Add Product</a>
                <a href="logout.php" class="navbar1-link">Logout</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="proicon">
                <?php
                // Check if user is logged in
                if (!isset($_SESSION['phonenumber'])) {
                    echo "<a href='../auth/FarmerLogin.php'> <div class='text-success logins'></div></a>";
                }
                ?>
            </div>

            
        </div>

        <div class="flex-row-reverse right ">
            <div class="p-2 cart">
                <!-- Placeholder for cart info (commented out) -->
                <!-- <div class="icon2">
                <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green;margin-top:-20px;">&#61562;</i></a>
                <span id="icon" style="color:green"> 5 </span>
                </div> -->
                <div class='loginz'>
                   <?php getFarmerUsername(); ?> 
                </div>
            </div>
            
    </nav>
         
     


          <br>


          <div class=content_item>
               <label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>All Products</b></label>
               <?php
               include("../Includes/db.php");
               if (isset($_SESSION['phonenumber'])) {

                    echo "<a href='InsertProduct.php'>
                    <button class='btn btn-warning btn-lg p-3 m-3 font-weight-bold'>Add New Product <i class='fas fa-plus-square p-2 fa-1x'></i>
                    </button>
                    </a>";
               } else {
                    echo "<a href='../auth/FarmerLogin.php'>
                    <button class='btn btn-warning btn-lg p-3 m-3 font-weight-bold'>Add New Product <i class='fas fa-plus-square p-2 fa-1x'></i>
                    </button>
                    </a>";
               }
               ?>

          </div>

          <br>
          <main>
               <div class="products">
                    <?php
                    include("../Includes/db.php");
                    if (isset($_SESSION['phonenumber'])) {
                         $sess_phone_number = $_SESSION['phonenumber'];
                         getFarmerProducts();
                    } else {
                         echo "<br><br><h1 align = center>Please Login!</h1><br><br><hr>";
                    }
                    ?>
               </div>
               <br> <br>
               <hr>
          </main>
          <div class="row text-center text-xs-center text-sm-left text-md-left">
                         <div class="col aligncenter">
                              <br>
                              <h5>Payment Option</h5>
                              <img src="../Images/Website/paytm1.jpg" alt="paytm">
                              <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
                         </div>
                    </div>
               <!-- Footer -->
    <footer>
        <div class="footer-content">
        
            <div class="footer-section">
                <h3>About Us</h3>
                <p>We are connectiong both the farmers and the restaurant owner.</p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: info@farmetofork.com</p>
                <a href="CallCenter.php" ><p>Phone: +123 456 7890</p></a>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-instagram"></i></a>
            </div>
           

        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 FarmtoFork. All Rights Reserved.</p>
        </div>
    </footer>
     </body>

</html>