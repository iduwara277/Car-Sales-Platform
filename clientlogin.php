<?php
include('login_client.php'); // Includes Login Script

if(isset($_SESSION['login_client'])){
    header("location: Section/index.php"); //Redirecting
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title> Employee Login </title>
        <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/clientlogin.css">
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
        /* Jumbotron Custom Style */
        .custom-jumbotron {
            background: linear-gradient(120deg, #1a3e72 60%, #274b8e 100%);
            color: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(26,62,114,0.12);
            padding: 40px 30px 30px 30px;
            margin: 40px auto 30px auto;
            max-width: 500px;
            text-align: center;
        }
        .custom-jumbotron h1 {
            font-size: 2.2rem;
            font-weight: bold;
            margin-bottom: 18px;
            color: #ffcc00;
            letter-spacing: 1px;
        }
        .custom-jumbotron p {
            font-size: 1.15rem;
            color: #fff;
            margin-bottom: 0;
        }
        @media (max-width: 600px) {
            .custom-jumbotron {
                padding: 25px 10px 20px 10px;
                max-width: 95%;
            }
            .custom-jumbotron h1 {
                font-size: 1.3rem;
            }
        }
        /* Login Panel Modernization */
        .panel-primary {
            border-radius: 14px;
            box-shadow: 0 4px 24px rgba(26,62,114,0.10);
            border: none;
        }
        .panel-heading {
            background: linear-gradient(90deg, #1a3e72 0%, #274b8e 100%);
            color: #ffcc00 !important;
            font-weight: bold;
            font-size: 1.2rem;
            border-radius: 14px 14px 0 0;
            letter-spacing: 1px;
        }
        .panel-body {
            background: #f9f9f9;
            border-radius: 0 0 14px 14px;
            padding: 30px 25px 20px 25px;
        }
        .form-group label {
            color: #1a3e72;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .form-control {
            border-radius: 6px;
            border: 1px solid #bfc9da;
            box-shadow: none;
            font-size: 1.08rem;
            padding: 10px 12px;
            transition: border 0.2s, box-shadow 0.2s;
        }
        .form-control:focus {
            border-color: #1a3e72;
            box-shadow: 0 0 0 2px #1a3e7240;
        }
        .btn-primary {
            background: linear-gradient(90deg, #1a3e72 0%, #274b8e 100%);
            border: none;
            border-radius: 6px;
            font-weight: bold;
            letter-spacing: 0.5px;
            transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
        }
        .btn-primary:hover, .btn-primary:focus {
            background: #ffcc00;
            color: #1a3e72;
            box-shadow: 0 4px 16px rgba(26,62,114,0.18);
            transform: translateY(-2px) scale(1.03);
        }
        .input-group-btn .btn {
            background: #1a3e72;
            color: #fff;
            border-radius: 0 6px 6px 0;
            border: none;
        }
        .input-group-btn .btn:hover {
            background: #ffcc00;
            color: #1a3e72;
        }
        .panel {
            margin-bottom: 0;
        }
        @media (max-width: 600px) {
            .panel-body {
                padding: 18px 5px 10px 5px;
            }
        }
    </style>
</head>
    <body style="background-image: url('assets/img/blank.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; margin: 0; height: 100vh;">

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
                                <a href="#">History</a>
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
                                     <a href="aboutus.php">About Us</a>
                                </li>
                            </ul>
                        </div>
                        <?php   }
                ?>
                        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        
            <div class="custom-jumbotron">
        <h1><b>Car Sales - Admin Panel</b></h1>
        <p><b>Please LOGIN to continue.</b></p>
    </div>

        <div class="container" style="margin-top: -2%; margin-bottom: 2%;">
            <div class="col-md-5 col-md-offset-4">
                <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
                <div class="panel panel-primary">
                    <div class="panel-heading"> Login </div>
                    <div class="panel-body">

                        <form action="" method="POST">

                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="client_username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
                                    <div class="input-group">
                                        <input class="form-control" id="client_username" type="text" name="client_username" placeholder="Username" required="" autofocus="">
                                        <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="client_password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
                                    <div class="input-group">
                                        <input class="form-control" id="client_password" type="password" name="client_password" placeholder="Password" required="">
                                        <span class="input-group-btn">
                <button class="btn btn-primary" type="button" id="togglePassword" tabindex="-1">
                    <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </button>
            </span>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-xs-4">
                                    <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>

                                </div>

                            </div>
                            <label style="margin-left: 5px;">or</label> <br>
                            <label style="margin-left: 5px;"><a href="clientsignup.php">Create a new account.</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- Footer -->
<footer class="footer" style="background-color:rgb(11, 11, 11); color: white; padding: 50px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h4><b>About Us</b></h4>
                <p>Car Selling Platform is your trusted online destination for buying and selling quality vehicles.</p>
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
document.getElementById('togglePassword').addEventListener('click', function () {
    var pwd = document.getElementById('client_password');
    var icon = this.querySelector('span');
    if (pwd.type === 'password') {
        pwd.type = 'text';
        icon.classList.remove('glyphicon-eye-open');
        icon.classList.add('glyphicon-eye-close');
    } else {
        pwd.type = 'password';
        icon.classList.remove('glyphicon-eye-close');
        icon.classList.add('glyphicon-eye-open');
    }
});
</script>
</html>