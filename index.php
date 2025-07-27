<!DOCTYPE html>
<html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Selling Platform</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Navbar Modern Touch */
        .navbar-custom {
            background: linear-gradient(90deg, #1a3e72 0%, #274b8e 100%) !important;
            border: none;
            box-shadow: 0 2px 8px rgba(26,62,114,0.08);
            padding: 10px 0;
            transition: background 0.3s;
        }
        .navbar-custom .navbar-brand {
            color: #ffcc00 !important;
            font-weight: bold;
            font-size: 1.6rem;
            letter-spacing: 1px;
        }
        .navbar-custom .navbar-nav > li > a {
            color: #fff !important;
            font-size: 1.08rem;
            padding: 12px 18px;
            border-radius: 4px;
            transition: background 0.2s, color 0.2s;
        }
        .navbar-custom .navbar-nav > li > a:hover,
        .navbar-custom .navbar-nav > li.active > a,
        .navbar-custom .navbar-nav > li > a:focus {
            background: #ffcc00 !important;
            color: #1a3e72 !important;
        }
        .navbar-custom .navbar-toggle {
            border: none;
            background: #ffcc00;
        }
        .navbar-custom .navbar-toggle .icon-bar {
            background: #1a3e72;
        }
        .navbar-custom .dropdown-menu {
            background: #274b8e;
            border-radius: 0 0 8px 8px;
            border: none;
        }
        .navbar-custom .dropdown-menu > li > a {
            color: #fff;
            transition: background 0.2s, color 0.2s;
        }
        .navbar-custom .dropdown-menu > li > a:hover {
            background: #ffcc00;
            color: #1a3e72;
        }
        @media (max-width: 768px) {
            .navbar-custom .navbar-nav > li > a {
                padding: 10px 12px;
            }
        }

        /* Video Animation Hero Section */
        .video-hero-container {
            position: relative;
            width: 100vw;
            min-height: 340px;
            max-height: 60vh;
            overflow: hidden;
            margin-bottom: 0;
            z-index: 1;
        }
        .video-bg {
            position: absolute;
            top: 0; left: 0;
            width: 100vw;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            filter: brightness(0.7) saturate(1.2);
        }
        .video-overlay {
            position: absolute;
            top: 0; left: 0;
            width: 100vw;
            height: 100%;
            background: linear-gradient(120deg, rgba(26,62,114,0.7) 0%, rgba(39,75,142,0.5) 100%);
            z-index: 2;
        }
        .video-hero-content {
            position: relative;
            z-index: 3;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            min-height: 340px;
            max-height: 60vh;
            text-align: center;
            color: #fff;
            top: 0;
            left: 0;
            width: 100vw;
            padding-top: 60px;
        }
        .video-hero-title {
            font-size: 2.6rem;
            font-weight: 800;
            letter-spacing: 2px;
            color: #ffcc00;
            text-shadow: 0 4px 24px rgba(26,62,114,0.25);
            margin-bottom: 12px;
            animation: fadeInDown 1.2s cubic-bezier(.4,2,.6,1);
        }
        .video-hero-title i {
            margin-right: 12px;
            color: #fff;
            text-shadow: 0 2px 8px #1a3e72;
        }
        .video-hero-sub {
            font-size: 1.25rem;
            font-weight: 500;
            color: #fff;
            text-shadow: 0 2px 8px #1a3e72;
            animation: fadeInUp 1.3s cubic-bezier(.4,2,.6,1);
        }
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(40px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 768px) {
            .video-hero-title { font-size: 1.5rem; }
            .video-hero-content { min-height: 180px; padding-top: 30px; }
            .video-hero-container { min-height: 180px; max-height: 30vh; }
        }
    </style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Car Selling Platform  </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="entercar.php">Add Car</a></li>
            </ul>
            </li>
          </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">Admin</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>
                    <li>
                        <a href="aboutus.php"> About Us </a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <marquee><h2><b>WELCOME TO CAR SELLING PLATFORM</b></h2></marquee>
    <div class="bgimg-1">
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading" style="color: black"><b>CAR SALES</b></h1>
                            <p class="intro-text">
                               <b> Online Car Selling Service</b>
                            </p>
                            <a href="#sec2" class="btn btn-circle page-scroll blink">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <!-- Video Animation Hero Section -->
<div class="video-hero-container">
    <video class="video-bg" autoplay muted loop playsinline poster="assets/img/bg01.jpg">
        <source src="assets/img/car.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="video-overlay"></div>
    <div class="video-hero-content">
        <h1 class="video-hero-title"><i class="fas fa-car"></i> Experience the Future of Car Sales</h1>
        <p class="video-hero-sub">Buy, Sell, and Discover Cars with Style</p>
    </div>
</div>

    <div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;"><b>Available Cars</b></h3>
<br>
        <section class="menu-content">
            <?php   
            $sql1 = "SELECT * FROM cars WHERE car_availability='yes'";
            $result1 = mysqli_query($conn,$sql1);

            if(mysqli_num_rows($result1) > 0) {
                while($row1 = mysqli_fetch_assoc($result1)){
                    $carId = $row1["carId"];
                    $car_name = $row1["car_name"];
                    $car_nameplate = $row1["car_nameplate"];
                    $car_price = $row1["car_price"];
                    $fuel_type = $row1["fuel_type"];
                    $Gear_type = $row1["Gear_type"];
                    $Engine = $row1["Engine"];
                    $car_img = $row1["car_img"];
               
                    ?>
            <a href="booking.php?id=<?php echo($carId) ?>">
            <div class="sub-menu">
            

            <img class="card-img-top" src="<?php echo $car_img; ?>" alt="Card image cap">
            <h5><b> <?php echo $car_name; ?> </b></h5>
            <h5><b> <?php echo $car_nameplate; ?> </b></h5>
             <h5><b> <?php echo $car_price; ?> </b></h5>
            

            
            </div> 
            </a>
            <?php }}
            else {
                ?>
<h1> No cars available : </h1>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>

    <div class="bgimg-2">
        <div class="caption">
            <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
    </div>

    
    <!-- Container (Contact Section) -->
    <!-- -->
    <!-- Footer HTML -->

    <!-- Footer HTML -->

<!-- Footer -->
<footer class="footer" style="background-color:rgb(11, 11, 11); color: white; padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4><b>About Us</b></h4>
                <p>Car Selling Platform is your trusted online destination for buying and selling quality vehicles.
            </div>
            
            <div class="col-md-4">
                <h4><b>Quick Links</b></h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="clientlogin.php">Admin Login</a></li>
                    <li><a href="customerlogin.php">Customer Login</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
            </div>
            
            <div class="col-md-4">
                <h4><b>Contact Us</b></h4>
                <ul class="footer-contact">
                    <li><i class="fas fa-map-marker-alt"></i> Kiriporuwa , Erepola , Eheliyagoda , Sri Lanka</li>
                    <li><i class="fas fa-phone"></i> +94740391664</li>
                    <li><i class="fas fa-envelope"></i> info@carsellingplatform.com</li>
                </ul>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-google"></i></a>

                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top: 30px; border-top: 1px solid #444; padding-top: 20px;">
                <p>&copy; <?php echo date("Y"); ?> Car Selling Platform. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<style>
        .footer {
            background: linear-gradient(90deg, #1a3e72 0%, #274b8e 100%);
            color: #fff;
            padding: 50px 0 0 0;
            font-size: 1.05rem;
        }
        .footer h4 {
            color: #ffcc00;
            margin-bottom: 18px;
            font-weight: bold;
        }
        .footer-links {
            list-style: none;
            padding: 0;
        }
        .footer-links li {
            margin-bottom: 10px;
        }
        .footer-links a {
            color: #fff;
            text-decoration: none;
            transition: color 0.2s;
        }
        .footer-links a:hover {
            color: #ffcc00;
        }
        .footer-contact {
            list-style: none;
            padding: 0;
        }
        .footer-contact li {
            margin-bottom: 10px;
        }
        .social-icons {
            margin-top: 15px;
        }
        .social-icons a {
            display: inline-block;
            width: 36px;
            height: 36px;
            line-height: 36px;
            margin-right: 8px;
            background: #fff;
            color: #1a3e72;
            border-radius: 50%;
            text-align: center;
            font-size: 1.2rem;
            transition: background 0.2s, color 0.2s;
        }
        .social-icons a:hover {
            background: #ffcc00;
            color: #1a3e72;
        }
        .footer .row {
            margin-bottom: 0;
        }
        .footer .col-md-12 {
            border-top: 1px solid #fff2;
            margin-top: 30px;
            padding-top: 20px;
        }
        @media (max-width: 768px) {
            .footer .row > div {
                margin-bottom: 30px;
            }
        }
    </style>
<script>
        function myMap() {
            myCenter = new google.maps.LatLng(25.614744, 85.128489);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: true,
                draggable: true,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }
    </script>
    <script>
        function sendGaEvent(category, action, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: action,
                eventLabel: label
            });
        };
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCuoe93lQkgRaC7FB8fMOr_g1dmMRwKng&callback=myMap" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.ani.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets/js/theme.js"></script>
    
    
</body>

</html>