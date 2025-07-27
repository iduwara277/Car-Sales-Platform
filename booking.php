<!DOCTYPE html>
<html>
<?php 
 include('session_customer.php');
if(!isset($_SESSION['login_customer'])){
    session_destroy();
    header("location: customerlogin.php");
}
?> 
<title>Book Car </title>
<head>
    <script type="text/javascript" src="assets/ajs/angular.min.js"> </script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <style>
        .navbar-custom {
            background: linear-gradient(90deg,rgb(88, 100, 117) 0%, #274b8e 100%) !important;
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
        .car-details-box {
            background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(26,62,114,0.13);
            padding: 36px 28px 24px 28px;
            margin: 40px auto 30px auto;
            border: 1px solid #b3c6e0;
            max-width: 480px;
            text-align: left;
            position: relative;
            overflow: hidden;
            animation: fadeInScale 1s cubic-bezier(.4,2,.6,1) 0s 1;
        }
        @keyframes fadeInScale {
            0% { opacity: 0; transform: scale(0.8); }
            100% { opacity: 1; transform: scale(1); }
        }
        .car-details-box h5 {
            color: #1a3e72;
            font-size: 1.18rem;
            font-weight: 600;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
        }
        .car-details-box h5 b {
            color: #274b8e;
            margin-left: 8px;
            font-weight: 700;
            font-size: 1.13rem;
        }
        .car-details-box h5::before {
            content: '\f1b9';
            font-family: 'FontAwesome';
            color: #ffcc00;
            font-size: 1.1rem;
            margin-right: 10px;
            display: inline-block;
        }
        .car-details-box h5:nth-child(2)::before { content: '\f2c2'; }
        .car-details-box h5:nth-child(3)::before { content: '\f155'; }
        .car-details-box h5:nth-child(4)::before { content: '\f1e6'; }
        .car-details-box h5:nth-child(5)::before { content: '\f244'; }
        .car-details-box h5:nth-child(6)::before { content: '\f013'; }
        .car-details-box {
            margin-bottom: 30px;
        }
        @media (max-width: 600px) {
            .car-details-box {
                padding: 18px 6px 12px 6px;
                max-width: 98vw;
            }
            .car-details-box h5 {
                font-size: 1rem;
            }
        }
        /* --- Modern Booking Form Panel --- */
        .form-area {
            background: rgba(255,255,255,0.85);
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(26,62,114,0.13);
            padding: 38px 32px 32px 32px;
            margin-bottom: 40px;
            border: 1px solid #b3c6e0;
            animation: fadeInScale 1.1s cubic-bezier(.4,2,.6,1) 0s 1;
        }
        .form-area form {
            width: 100%;
        }
        .form-area input[type="text"],
        .form-area input[type="email"],
        .form-area input[type="password"],
        .form-area input[type="number"],
        .form-area select {
            border-radius: 8px;
            border: 1.5px solid #b3c6e0;
            padding: 12px 14px;
            font-size: 1.08rem;
            margin-bottom: 18px;
            width: 100%;
            background: #f7fafd;
            transition: border 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(26,62,114,0.04);
        }
        .form-area input:focus, .form-area select:focus {
            border-color: #274b8e;
            outline: none;
            box-shadow: 0 0 0 2px #b3c6e0;
        }
        .form-area label {
            font-weight: 600;
            color: #1a3e72;
            margin-bottom: 6px;
            display: block;
        }
        /* --- Animated Book Now Button --- */
        .btn-warning.pull-right {
            background: linear-gradient(90deg, #ffcc00 0%, #ffe066 100%);
            color: #1a3e72;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            padding: 12px 32px;
            font-size: 1.13rem;
            box-shadow: 0 4px 16px rgba(255,204,0,0.13);
            transition: background 0.2s, color 0.2s, transform 0.15s;
            position: relative;
            overflow: hidden;
        }
        .btn-warning.pull-right:hover, .btn-warning.pull-right:focus {
            background: linear-gradient(90deg, #ffe066 0%, #ffcc00 100%);
            color: #274b8e;
            transform: translateY(-2px) scale(1.04);
            box-shadow: 0 8px 24px rgba(255,204,0,0.18);
        }
        /* --- Modern Footer --- */
        .site-footer {
            background: linear-gradient(90deg, #274b8e 0%, #88aee7 100%);
            color: #fff;
            padding: 32px 0 18px 0;
            margin-top: 60px;
            border-top-left-radius: 32px;
            border-top-right-radius: 32px;
            box-shadow: 0 -2px 16px rgba(26,62,114,0.08);
            font-family: 'Lato', sans-serif;
        }
        .site-footer h5 {
            color: #ffcc00;
            font-size: 1.13rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .site-footer h5::before {
            content: '\f1b9';
            font-family: 'FontAwesome';
            color: #fff;
            font-size: 1.2rem;
            margin-right: 8px;
        }
        .site-footer hr {
            border-top: 2px solid #ffcc00;
            margin-bottom: 18px;
        }
        @media (max-width: 600px) {
            .form-area {
                padding: 16px 4px 12px 4px;
            }
            .site-footer {
                padding: 18px 0 8px 0;
                border-top-left-radius: 18px;
                border-top-right-radius: 18px;
            }
            .site-footer h5 {
                font-size: 1rem;
            }
        }
    </style>
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="assets/js/custom.js"></script> 
 <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body ng-app=""> 


      <!-- Navigation -->
     <!-- Navigation -->
     <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Car Salling Platform </a>
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
    
<div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="bookingconfirm.php" method="POST">
        <br style="clear: both">
          <br>

        <?php
        $carId = $_GET["id"];
        $sql1 = "SELECT * FROM cars WHERE carId = '$carId'";
        $result1 = mysqli_query($conn, $sql1);

        
        
        

        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                
                $car_name = $row1["car_name"];
                $car_nameplate = $row1["car_nameplate"];
                $car_price = $row1["car_price"];
                $Engine= $row1["Engine"];
                $fuel_type = $row1["fuel_type"];
                $Gear_type = $row1["Gear_type"];
               
               
            }
        }

        ?>

          <!-- <div class="form-group"> -->
              
                <div class="car-details-box">
    <h5> Selected Car:&nbsp;  <b><?php echo($car_name);?></b></h5>
    <h5> Number Plate:&nbsp;<b> <?php echo($car_nameplate);?></b></h5>
    <h5> Price:&nbsp;<b> <?php echo($car_price);?></b></h5>
    <h5> Engine:&nbsp;<b> <?php echo($Engine);?></b></h5>
    <h5> Fuel Type:&nbsp;<b> <?php echo($fuel_type);?></b></h5>
    <h5> Gear Type:&nbsp;<b> <?php echo($Gear_type);?></b></h5>
</div>
         <!-- </div> -->
         
          <!-- <div class="form-group"> -->
            
          <!-- </div>      -->
          
        
       
       
       
       
       
       
       
       
        
  
  
  
                
        











































                <!-- </form> -->
                <div ng-switch="myVar1">
                

                <?php
                        $sql3 = "SELECT * FROM driver d WHERE d.driver_availability = 'yes' AND d.client_username IN (SELECT cc.client_username FROM clientcars cc WHERE cc.carId = '$carId')";
                        $result3 = mysqli_query($conn, $sql3);

                        if(mysqli_num_rows($result3) > 0){
                            while($row3 = mysqli_fetch_assoc($result3)){
                                $driver_id = $row3["driver_id"];
                                $driver_name = $row3["driver_name"];
                                $driver_gender = $row3["driver_gender"];
                                $driver_phone = $row3["driver_phone"];

                ?>

                <div ng-switch-when="<?php echo($driver_id); ?>">
                    <h5>Driver Name:&nbsp; <b><?php echo($driver_name); ?></b></h5>
                    <p>Gender:&nbsp; <b><?php echo($driver_gender); ?></b> </p>
                    <p>Contact:&nbsp; <b><?php echo($driver_phone); ?></b> </p>
                </div>
                <?php }} ?>
                </div>
                <input type="hidden" name="hidden_carId" value="<?php echo $carId; ?>">
                
         
           <input type="submit"name="submit" value="Book Now" class="btn btn-warning pull-right">     
        </form>
        
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