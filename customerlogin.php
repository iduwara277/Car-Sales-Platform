<?php
include('login_customer.php'); // Includes Login Script

if(isset($_SESSION['login_customer'])){
header("location: index.php"); //Redirecting
}
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title> Customer Login  </title>
    </head>
    <link rel="shortcut icon" type="image/png" href="assets/img/p.png">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
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

    <body>
        
        
        
        
        
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
    
    
    
    
    

        
            <div class="custom-jumbotron">
        <h1><b>Car Sales - Customer Login</b></h1>
        <p><b>Please LOGIN to continue.</b></p>
    </div>
        </div>
<div class="video-background">
<div style="position:relative;width:140px;height: 200px;">

<video autoplay loop muted playsinline>
<source src="assets\img\car.mp4" type="video/mp4">
</video>
</div>
</div>
        <div class="container" style="margin-top: -2%; margin-bottom: 2%; color: black">
            <div class="col-md-5 col-md-offset-4">
                <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
                <div class="panel panel-primary">
                    <div class="panel-heading"> Login </div>
                    <div class="panel-body">






                        <form action="" method="POST">

                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="customer_username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
                                    <div class="input-group">
                                        <input class="form-control" id="customer_username" type="text" name="customer_username" placeholder="Username" required="" autofocus="">
                                        <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="customer_password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
                                    <div class="input-group">
                                        <input class="form-control" id="customer_password" type="password" name="customer_password" placeholder="Password" required="">
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
                            <label style="margin-left: 5px;"><a href="customersignup.php">Create a new account.</a></label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
document.getElementById('togglePassword').addEventListener('click', function () {
    var pwd = document.getElementById('customer_password');
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
    </body>
   
   
   
   
   
   
   
   
   
   

    </html>