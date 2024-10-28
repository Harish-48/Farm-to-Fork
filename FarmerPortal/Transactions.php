<!-- <?php
     include("../Functions/functions.php");
     ?> -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Transaction</title>
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


          .table {
               width: 100%;
               border-collapse: collapse;
          }

          .table td,
          .table th {
               padding: 12px 15px;
               border: 0px solid #ddd;
               text-align: center;
               font-size: 16px;
               color: black;
          }

          .table th {
               background-color: #292b2c;
               color: goldenrod;
          }

          .table tbody tr:nth-child(even) {
               background-color: #f5f5f5;
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
               


               .table thead {
                    display: none;
               }

               .table,
               .table tbody,
               .table tr,
               .table td {
                    display: block;
                    width: 100%;
               }

               .table tr {
                    margin-bottom: 15px;
               }

               .table td {
                    text-align: right;
                    padding-left: 50%;
                    text-align: right;
                    position: relative;
               }

               .table td::before {
                    content: attr(data-label);
                    position: absolute;
                    left: 0;
                    width: 50%;
                    padding-left: 15px;
                    font-size: 15px;
                    font-weight: bold;
                    text-align: left;
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

     </style>

</head>

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

          <div style="display:block;">

               <div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>TRANSACTION HISTORY</b></label></div>
               <br>
          </div>


          <div class="container">

               <table class="table">
                    <thead>
                         <th>Product Name</th>
                         <th>Name</th>
                         <th>Phone Number</th>
                         <th>Delivery Address</th>
                         <th>Quantity</th>
                         <th>Amount</th>
                    </thead>


                    <tbody>
                         <?php

                         global $con;
                         if (isset($_SESSION['phonenumber'])) {
                              $sess_phone_number = $_SESSION['phonenumber'];
                              $sel_price = "select * from orders where phonenumber = '$sess_phone_number'";
                              $run_price = mysqli_query($con, $sel_price);
                              $i = 0;

                              while ($p_price = mysqli_fetch_array($run_price)) {
                                   $product_id = $p_price['product_id'];
                                   $qty = $p_price['qty'];
                                   $total = $p_price['total'];
                                   $address = $p_price['address'];
                                   $phone = $p_price['buyer_phonenumber'];


                                   $pro_price = "select * from products where product_id='$product_id'";
                                   $run_pro_price = mysqli_query($con, $pro_price);
                                   while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                                        $product_title = $pp_price['product_title'];


                                        $query_name = "select * from buyerregistration where buyer_phone = $phone";
                                        $run_query_name = mysqli_query($con, $query_name);
                                        while ($names = mysqli_fetch_array($run_query_name)) {
                                             $buyer_name = $names['buyer_name'];


                         ?>
                                             <tr>
                                                  <td data-label="Product Name"><?php echo $product_title; ?></td>
                                                  <td data-label="Name"><?php echo $buyer_name; ?></td>
                                                  <td data-label="Phone Number"><?php echo $phone; ?></td>
                                                  <td data-label="Address"><?php echo $address; ?></td>
                                                  <td data-label="Quantity"><?php echo $qty; ?></td>
                                                  <td data-label="Price"><?php echo $total; ?></td>
                                             </tr>


                    </tbody>
<?php
                                        }
                                   }
                                   $i++;
                              }
                         } else {
                              echo "<h1 align = center>Please Login First!</h1><br><br><hr>";
                         } ?>
               </table>
          </div> <br> <br>







          <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>We are connectiong both the farmers and the restaurant owner.</p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: info@farmtofork.com</p>
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