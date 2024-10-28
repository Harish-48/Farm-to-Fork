<?php
     include("../Functions/functions.php");
     ?>

 <!DOCTYPE html>

 <html>

 <head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Farmer Homepage</title>
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
        @import url("https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

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
        

        /* Header Styling */
        .header {
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(45deg, #DAA520, #8B0000);
            border-radius: 15px;
            margin: 20px auto;
            color: #FFF; /* White text for header */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        /* Gallery Section */
        .gallery {
            margin-top: 30px;
            text-align: center;
        }

        .gallery-title {
            font-size: 2.5rem;
            color: #F2C94C;
            margin-bottom: 20px;
        }

        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        /* Gallery Item */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        /* Gallery Image */
        .gallery-image {
            width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }

        /* Hover Effect */
        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        /* Features Section */
        .features {
            margin: 60px 0;
            text-align: center;
        }

        .features-title {
            font-weight: bold;
            color: #F2C94C;
            font-size: 2.5rem;
            margin-bottom: 40px;
        }

        /* Wrapper for Features Cards */
        .features-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        /* Feature Card Styles */
        .feature-card {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        /* Hover Effect for Feature Cards */
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
        }

        /* Feature Content */
        .card-title {
            color: #F2C94C;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        .card-text {
            color: #d3d3d3;
            font-size: 1rem;
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

         /* Responsive Navbar */
         @media (max-width: 768px) {
            .navbar1-links {
                display: none; /* Hide links by default on small screens */
            }

            .navbar-toggler {
                border-color: rgba(255, 255, 255, 0.5); /* White border for toggle */
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30' fill='%23fff'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E"); /* White icon */
            }
        }
        .section__container {
            max-width: var(--max-width);
            margin: auto;
            padding: 5rem 1rem;
            }

            .section__header {
            margin-bottom: 1rem;
            font-size: 2.5rem;
            font-weight: 600;
            font-family: var(--header-font);
            color: var(--primary-color);
            }

            .section__description {
            font-size: 1.1rem;
            color: var(--text-light);
            }

        .header__container {
        display: grid;
        overflow: hidden;
        }

        .header__image {
        grid-area: 1/1/2/2;
        }

        .header__image img {
        max-width: 900px;
        margin-left: auto;
        }

        .header__content {
        grid-area: 1/1/2/2;
        display: flex;
        align-items: center;
        }

        .header__content > div {
        max-width: 500px;
        padding: 4rem 1rem;
        background-color: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(10px);
        }

        .header__content h1 {
        margin-bottom: 1rem;
        font-size: 4rem;
        font-weight: 600;
        font-family: var(--header-font);
        color: var(--primary-color);
        }

        .header__content p {
        font-size: 1.2rem;
        color: var(--text-light);
        }
        .I{
            display: flex;
            width: 100%;

        }
        * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

        
:root {
  --primary-color: #e5c641;
  --text-dark: #171717;
  --text-light: #737373;
  --extra-light: #f4f6f5;
  --white: #ffffff;
  --max-width: 1200px;
  --header-font: "Merriweather", serif;
}
.about__header {
  display: flex;
  flex-direction: column;
  gap: 2rem;
}

.about__header .section__description {
  max-width: 600px;
}

.about__btn {
  width: fit-content;
  padding: 0.75rem 1.5rem;
  outline: none;
  border: none;
  font-size: 1rem;
  color: var(--white);
  white-space: nowrap;
  background-color: var(--primary-color);
  border-radius: 5px;
  transition: 0.3s;
  cursor: pointer;
}

.about__content {
  margin-top: 2rem;
  display: grid;
  gap: 2rem;
}

.about__grid {
  display: grid;
  gap: 2rem;
}

.about__image {
  overflow: hidden;
  height: 40rem;
  width: 30rem;
}

.about__card h3 {
  margin-bottom: 0.5rem;
  font-size: 2.5rem;
  font-weight: 600;
  color: var(--primary-color);
}

.about__card h4 {
  margin-bottom: 0.5rem;
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--primary-color);
}

.about__card p {
  color: var(--text-light);
}
@media (width > 540px) {
 

  .about__grid {
    grid-template-columns: repeat(2, 1fr);
  }

 
}

@media (width > 768px) {
 
  .header__container {
    padding-top: 0;
  }

  .about__header {
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
  }

  .about__content {
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
  }

  .about__image {
    grid-area: 1/2/2/3;
  }

 
 
}

@media (width > 1024px) {
 
  .about__grid {
    gap: 4rem 2rem;
  }
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

       <!-- Header Section -->
       <header class="header">
        <h1>Welcome to Our Farmer Community</h1>
        <p>Your one-stop destination for everything farming!</p>
    </header>
    <header class="section__container header__container" id="home">
      <div class="header__image">
        <img src="WhatsApp Image 2024-08-12 at 20.59.51.jpeg" alt="header" class="I"/>
      </div>
      <div class="header__content">
        <div>
          <h1>We Connect You Directly With Buyers</h1>
          <p>
            Seamlessly Connecting You with Buyers to Enhance Your Market Access,
             Get Fair Price for Produce and Avoid Wastage..
          </p>
        </div>
      </div>
    </header>
    <section class="section__container about__container" id="about">
      <div class="about__header">
        <div>
          <h2 class="section__header">About us</h2>
          <p class="section__description">
            Empowering Farmers and Consumers Through Seamless Connections and Innovative Solutions
          </p>
        </div>
        <button class="about__btn">Learn More</button>
      </div>
      <div class="about__content">
        <div class="about__image">
          <img src="About101.png" alt="about" class="I" />
        </div>
        <div class="about__grid">
          <div class="about__card">
            <h3>1.</h3>
            <h4>Who we are</h4>
            <p>
              A platform connecting you with our Farmers
            </p>
          </div>
          <div class="about__card">
            <h3>2.</h3>
            <h4>What do we do</h4>
            <p>
              We connect you with our FARMERS.
            </p>
          </div>
          <div class="about__card">
            <h3>3.</h3>
            <h4>How do we help</h4>
            <p>With our vast network we gurantee to provide you the best in less than the market rate</p>
          </div>
          <div class="about__card">
            <h3>4.</h3>
            <h4>Create success story</h4>
            <p>
              With access to all the farmers grow your business.
            </p>
          </div>
        </div>
      </div>
    </section>
   

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>About Us</h3>
                <p>Your information about the organization goes here.</p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: info@farme2fork.com</p>
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
<script>
    const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const navSearch = document.getElementById("nav-search");

navSearch.addEventListener("click", (e) => {
  navSearch.classList.toggle("open");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".header__image img", {
  ...scrollRevealOption,
  origin: "right",
});
ScrollReveal().reveal(".header__content div", {
  duration: 1000,
  delay: 500,
});
ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOption,
  delay: 1000,
});
ScrollReveal().reveal(".header__content p", {
  ...scrollRevealOption,
  delay: 1500,
});

ScrollReveal().reveal(".deals__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".about__image img", {
  ...scrollRevealOption,
  origin: "right",
});
ScrollReveal().reveal(".about__card", {
  duration: 1000,
  interval: 500,
  delay: 500,
});

</script>

<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
 </html>