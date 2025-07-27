<html>

<head>
    <title> customer Signup   </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
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

        .jumbotron {
            background: linear-gradient(90deg, #f8fafc 0%, #e3eafc 100%);
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(26,62,114,0.08);
            padding: 40px 30px 30px 30px;
            margin-bottom: 30px;
            border: 1px solid #e0e7ef;
        }
        .jumbotron h1.text-center {
            color: #1a3e72;
            font-size: 2.4rem;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }
        .jumbotron p.text-center {
            color: #274b8e;
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 0;
        }
        @media (max-width: 767px) {
            .jumbotron {
                padding: 25px 10px 20px 10px;
            }
            .jumbotron h1.text-center {
                font-size: 1.5rem;
            }
            .jumbotron p.text-center {
                font-size: 1rem;
            }
        }

        .panel.panel-primary {
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(26,62,114,0.10);
            border: 1px solid #e0e7ef;
            background: #fff;
        }
        .panel-heading {
            background: linear-gradient(90deg, #1a3e72 0%, #274b8e 100%);
            color: #ffcc00 !important;
            font-weight: bold;
            font-size: 1.3rem;
            border-radius: 16px 16px 0 0;
            padding: 18px 24px;
            letter-spacing: 1px;
        }
        .panel-body {
            padding: 28px 24px 18px 24px;
        }
        .form-group label {
            color: #1a3e72;
            font-weight: 600;
            font-size: 1.08rem;
        }
        .input-group .form-control {
            border-radius: 6px 0 0 6px;
            border: 1px solid #bfc9da;
            box-shadow: none;
            font-size: 1.05rem;
            padding: 10px 14px;
        }
        .input-group-btn .btn {
            border-radius: 0 6px 6px 0;
            background: #ffcc00;
            color: #1a3e72;
            border: none;
            font-size: 1.1rem;
        }
        .input-group-btn .btn:hover {
            background: #1a3e72;
            color: #ffcc00;
        }
        button[type="submit"].btn-primary {
            background: linear-gradient(90deg, #1a3e72 0%, #274b8e 100%);
            border: none;
            color: #ffcc00;
            font-weight: bold;
            font-size: 1.1rem;
            border-radius: 6px;
            padding: 10px 28px;
            transition: background 0.2s, color 0.2s;
        }
        button[type="submit"].btn-primary:hover {
            background: #ffcc00;
            color: #1a3e72;
        }
        @media (max-width: 767px) {
            .panel-body {
                padding: 16px 6px 10px 6px;
            }
            .panel-heading {
                font-size: 1.1rem;
                padding: 12px 10px;
            }
        }
    </style>
</head>

<body style="background-image: url('assets/img/bg03.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; margin: 0; height: 100vh;">
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
    <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">Car Sales - Registration</h1>
            <br>
            <p class="text-center">Get started by creating customer account</p>
        </div>
    </div>

    <div class="container" style="margin-top: -1%; margin-bottom: 2%;">
        <div class="col-md-5 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading"> Create Account </div>
                <div class="panel-body">

                    <form role="form" action="customer_registered_success.php" method="POST">

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="customer_name"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_name" type="text" name="customer_name" placeholder="Your Full Name" required="" autofocus="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="customer_username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_username" type="text" name="customer_username" placeholder="Your Username" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="customer_email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_email" type="email" name="customer_email" placeholder="Email" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
              </span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="customer_phone"><span class="text-danger" style="margin-right: 5px;">*</span> Phone: </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_phone" type="text" name="customer_phone" placeholder="Phone" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-contact" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label for="customer_address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
                                <div class="input-group">
                                    <input class="form-control" id="customer_address" type="text" name="customer_address" placeholder="Address" required="">
                                    <span class="input-group-btn">
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
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
                  <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                                    </span>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="form-group col-xs-4">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>

                        </div>
                        <label style="margin-left: 5px;">or</label> <br>
                        <label style="margin-left: 5px;"><a href="customerlogin.php">Have an account? Login.</a></label>

                    </form>

                </div>

            </div>

        </div>
    </div>
</body>
<footer class="site-footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h5><b>© <?php echo date("Y"); ?> Car Sales<b></h5>
            </div>
        </div>
    </div>
</footer>

</html>