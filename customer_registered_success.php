<html>

  <head>
    <title> customer Signup  </title>
  </head>
  <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
  <link rel="stylesheet" type = "text/css" href ="assets/bootstrap/css/bootstrap.min.css">
  <style>
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

    .jumbotron.success-message {
      background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%);
      border-radius: 24px;
      box-shadow: 0 8px 32px rgba(26,62,114,0.13);
      padding: 48px 32px 36px 32px;
      margin: 40px auto 30px auto;
      border: 1px solid #b3c6e0;
      max-width: 540px;
      text-align: center;
      position: relative;
      overflow: hidden;
      animation: fadeInScale 1s cubic-bezier(.4,2,.6,1) 0s 1;
    }
    @keyframes fadeInScale {
      0% { opacity: 0; transform: scale(0.8); }
      100% { opacity: 1; transform: scale(1); }
    }
    .jumbotron.success-message h2 {
      color: #1a3e72;
      font-size: 2.1rem;
      font-weight: 700;
      margin-bottom: 12px;
      letter-spacing: 1px;
      text-shadow: 0 2px 8px #fff8;
    }
    .jumbotron.success-message h1 {
      color: #274b8e;
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 18px;
      letter-spacing: 0.5px;
      text-shadow: 0 2px 8px #fff6;
    }
    .jumbotron.success-message p {
      color: #1a3e72;
      font-size: 1.15rem;
      font-weight: 500;
      margin-bottom: 0;
    }
    .jumbotron.success-message a {
      color: #fff;
      background: linear-gradient(90deg, #1a3e72 0%, #274b8e 100%);
      padding: 8px 22px;
      border-radius: 6px;
      font-weight: bold;
      font-size: 1.08rem;
      text-decoration: none;
      margin-left: 8px;
      box-shadow: 0 2px 8px #1a3e7233;
      transition: background 0.2s, color 0.2s, box-shadow 0.2s;
      display: inline-block;
    }
    .jumbotron.success-message a:hover {
      background: #ffcc00;
      color: #1a3e72;
      box-shadow: 0 4px 16px #ffcc0033;
      text-decoration: none;
    }
    .jumbotron.success-message::before {
      content: '\f058';
      font-family: 'FontAwesome';
      position: absolute;
      top: -30px;
      right: -30px;
      font-size: 7rem;
      color: #1a3e7215;
      z-index: 0;
      pointer-events: none;
    }
    @media (max-width: 600px) {
      .jumbotron.success-message {
        padding: 24px 8px 18px 8px;
        max-width: 98vw;
      }
      .jumbotron.success-message h2 {
        font-size: 1.2rem;
      }
      .jumbotron.success-message h1 {
        font-size: 1.1rem;
      }
    }
  </style>

  <body style="background-image: url('assets/img/bg02.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; margin: 0; height: 100vh;">

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

  <!-- Navigation -->
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Car Selling Platform </a>
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
              
              <li> <a href="clientview.php">View</a></li>

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
                    <ul class="nav navbar-nav">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="prereturncar.php">Return Now</a></li>
              <li> <a href="mybookings.php"> My Bookings</a></li>
            </ul>
            </li>
          </ul>
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

<?php

require 'connection.php';
$conn = Connect();

$customer_name = $conn->real_escape_string($_POST['customer_name']);
$customer_username = $conn->real_escape_string($_POST['customer_username']);
$customer_email = $conn->real_escape_string($_POST['customer_email']);
$customer_phone = $conn->real_escape_string($_POST['customer_phone']);
$customer_address = $conn->real_escape_string($_POST['customer_address']);
$customer_password = $conn->real_escape_string($_POST['customer_password']);

$query = "INSERT into customers(customer_name,customer_username,customer_email,customer_phone,customer_address,customer_password) VALUES('" . $customer_name . "','" . $customer_username . "','" . $customer_email . "','" . $customer_phone . "','" . $customer_address ."','" . $customer_password ."')";
$success = $conn->query($query);

if (!$success){
	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<div class="container">
	<div class="jumbotron success-message">
		<h2> <?php echo "Welcome $customer_name!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="customerlogin.php">HERE</a></p>
	</div>
</div>

    </body>
    <footer class="site-footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h5>© <?php echo date("Y"); ?> Car Sales</h5>
            </div>
        </div>
    </div>
</footer>
</html>