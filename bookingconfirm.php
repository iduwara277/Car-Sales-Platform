<!DOCTYPE html>
<html>
<?php 
 include('session_customer.php');
if(!isset($_SESSION['login_customer'])){
    session_destroy();
    header("location: customerlogin.php");
}
?>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bookingconfirm.css" />
    <style>
        /* ...existing navbar styles... */
        .jumbotron.booking-confirmed {
            background: linear-gradient(120deg, #e0ffe8 0%, #d0f1ff 100%);
            border-radius: 28px;
            box-shadow: 0 8px 32px rgba(26,62,114,0.13);
            padding: 56px 32px 36px 32px;
            margin: 48px auto 30px auto;
            border: 1px solid #b3e0c6;
            max-width: 600px;
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: fadeInScale 1.2s cubic-bezier(.4,2,.6,1) 0s 1;
        }
        @keyframes fadeInScale {
            0% { opacity: 0; transform: scale(0.8); }
            100% { opacity: 1; transform: scale(1); }
        }
        .jumbotron.booking-confirmed h1 {
            color: #1abc9c;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 18px;
            letter-spacing: 1.5px;
            text-shadow: 0 2px 12px #fff8;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
            animation: popIn 1.2s cubic-bezier(.4,2,.6,1);
        }
        @keyframes popIn {
            0% { transform: scale(0.7) rotate(-10deg); opacity: 0; }
            60% { transform: scale(1.1) rotate(2deg); opacity: 1; }
            100% { transform: scale(1) rotate(0); }
        }
        .jumbotron.booking-confirmed h1 .glyphicon-ok-circle {
            color: #27ae60;
            font-size: 2.8rem;
            margin-right: 10px;
            animation: bounceIn 1.2s cubic-bezier(.4,2,.6,1);
        }
        @keyframes bounceIn {
            0% { transform: scale(0.2); opacity: 0; }
            60% { transform: scale(1.3); opacity: 1; }
            100% { transform: scale(1); }
        }
        .jumbotron.booking-confirmed::before {
            content: '\f560';
            font-family: 'FontAwesome';
            position: absolute;
            top: -40px;
            right: -40px;
            font-size: 8rem;
            color: #1abc9c15;
            z-index: 0;
            pointer-events: none;
            animation: fadeInIcon 2s;
        }
        @keyframes fadeInIcon {
            0% { opacity: 0; right: -80px; }
            100% { opacity: 1; right: -40px; }
        }
        .jumbotron.booking-confirmed h2, .jumbotron.booking-confirmed h3 {
            color: #274b8e;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
            text-shadow: 0 2px 8px #fff6;
        }
        .jumbotron.booking-confirmed h3 span {
            color: #2980b9;
            font-weight: bold;
            font-size: 1.25rem;
            background: #eaf6ff;
            border-radius: 6px;
            padding: 2px 10px;
            margin-left: 6px;
            transition: background 0.3s, color 0.3s;
        }
        .jumbotron.booking-confirmed h3 span:hover {
            background: #ffcc00;
            color: #1a3e72;
        }
        @media (max-width: 600px) {
            .jumbotron.booking-confirmed {
                padding: 24px 8px 18px 8px;
                max-width: 98vw;
            }
            .jumbotron.booking-confirmed h1 {
                font-size: 1.3rem;
            }
        }

        /* Fix: apply invoice-box class to the invoice section's box */
        .invoice-box {
            background: linear-gradient(120deg, #f8fafc 0%, #e3eafc 100%);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(26,62,114,0.10);
            padding: 36px 28px 24px 28px;
            margin: 40px auto 30px auto;
            border: 1px solid #b3c6e0;
            max-width: 540px;
            text-align: left;
            position: relative;
            overflow: hidden;
            animation: fadeInScale 1s cubic-bezier(.4,2,.6,1) 0s 1;
        }
        .invoice-box h3, .invoice-box h4, .invoice-box h5 {
            color: #1a3e72;
            font-weight: 600;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
        }
        .invoice-box h3 {
            color: #ff9800;
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 18px;
            text-align: center;
        }
        .invoice-box h4 {
            font-size: 1.13rem;
            margin-bottom: 10px;
        }
        .invoice-box h4 strong {
            color: #274b8e;
            font-weight: 700;
        }
        .invoice-box h4 span, .invoice-box h4 b {
            color: #2980b9;
            font-weight: 600;
            background: #eaf6ff;
            border-radius: 6px;
            padding: 2px 10px;
            margin-left: 6px;
            transition: background 0.3s, color 0.3s;
        }
        .invoice-box h4 span:hover, .invoice-box h4 b:hover {
            background: #ffcc00;
            color: #1a3e72;
        }
        .invoice-box h5 {
            color: #1a3e72;
            font-size: 1.08rem;
            margin-bottom: 18px;
            text-align: center;
        }
        @media (max-width: 600px) {
            .invoice-box {
                padding: 18px 6px 12px 6px;
                max-width: 98vw;
            }
            .invoice-box h3 {
                font-size: 1.1rem;
            }
            .invoice-box h4 {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <body style="background-image: url('assets/img/cardeal.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; margin: 0; height: 100vh;">

<?php

    $customer_username = $_SESSION["login_customer"];
    // Use the correct POST key name: hidden_carId
    $carId = $conn->real_escape_string($_POST['hidden_carId']);

    // Fetch car details from cars table
    $sql0 = "SELECT car_name, car_nameplate,car_price, Engine, fuel_type, Gear_type FROM cars WHERE carId = '$carId'";
    $result0 = $conn->query($sql0);
    if ($result0 && $result0->num_rows > 0) {
        $car = $result0->fetch_assoc();
        $car_name = $car['car_name'];
        $car_nameplate = $car['car_nameplate'];
        $car_price = $car['car_price'];
        $Engine = $car['Engine'];
        $fuel_type = $car['fuel_type'];
        $Gear_type = $car['Gear_type'];
    } else {
        $car_name = '';
        $car_nameplate = '';
        $car_price = '';
        $Engine = '';
        $fuel_type = '';
        $Gear_type = '';
    }
   
   
   
   
   


    
    
    
    


    $return_status = "NR"; // not returned
    $fare = "NA";


    
    
    
    
    
    
    
    

    $sql1 = "INSERT into rentedcars(customer_username, car_name, car_nameplate, car_price, Engine, fuel_type, Gear_type, carId) 
    VALUES('" . $customer_username . "','" . $car_name . "','" . $car_nameplate . "', '" . $car_price . "','" . $Engine . "','" . $fuel_type . "','" . $Gear_type . "','" . $carId . "')";
    $result1 = $conn->query($sql1);

    $sql2 = "UPDATE cars SET car_availability = 'no' WHERE carId = '$carId'";
    $result2 = $conn->query($sql2);



   $sql4 = "SELECT * 
         FROM cars c
         JOIN rentedcars rc ON c.carId = rc.carId
         JOIN clients cl ON rc.customer_username = customer_username
         WHERE c.carId = '$carId'";
$result4 = $conn->query($sql4);
   


    if (mysqli_num_rows($result4) > 0) {
        while($row = mysqli_fetch_assoc($result4)) {
            $carId = $row["carId"];
            $customer_username = $row["customer_username"];
            $car_name = $row["car_name"];
            $car_nameplate = $row["car_nameplate"];
            $car_price = $row["car_price"];
            $Engine = $row["Engine"];
            $fuel_type = $row["fuel_type"];
            $Gear_type = $row["Gear_type"];
          
          
            
            
            
            
            
            
        }
    }

    if (!$result1 | !$result2 ){
        die("Couldnt enter data: ".$conn->error);
    }

?>
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Car Sales Platform </a>
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
                        <a href="faq/index.php"> About Us </a>
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
        <div class="jumbotron booking-confirmed">
            <h1 class="text-center"><span class="glyphicon glyphicon-ok-circle"></span> Booking Confirmed.</h1>
            <h2 class="text-center"> Thank you for using Car Selling System! We wish you have a safe ride. </h2>
            <h3 class="text-center"> <strong>Your Order Number:</strong> <span><?php echo "$carId"; ?></span> </h3>
        </div>
    </div>
    <br>

    <!-- Invoice Section Start -->
    <div class="container" id="invoice-section">
        <h5 class="text-center">Please read the following information about your order.</h5>
        <div class="invoice-box">
            <div style="text-align: center;">
                <h3>Your booking has been received and placed into out order processing system.</h3>
                <br>
                <h4>Please make a note of your <strong>order number</strong> now and keep in the event you need to communicate with us about your order.</h4>
                <br>
                <h3>Invoice</h3>
                <br>
            </div>
            <div>
                <h4> <strong>Date: </strong> <?php echo date("Y-m-d"); ?> </h4>
                <br>
                <h4> <strong>Customer Name: </strong> <?php echo $customer_username; ?> </h4>
                <br>
                <h4> <strong>Vehicle Name: </strong> <?php echo $car_name; ?></h4>
                <br>
                <h4> <strong>Vehicle Number:</strong> <?php echo $car_nameplate; ?></h4>
                <br>
                <h4> <strong>Vehicle Price:</strong> <?php echo $car_price; ?></h4>
                <br>
                <h4> <strong>Vehicle Engine Type:</strong> <?php echo $Engine; ?></h4>
                <br>
                <h4> <strong>Vehicle Fuel Type:</strong> <?php echo $fuel_type; ?></h4>
                <br>
                <h4> <strong>Vehicle Gear Type:</strong> <?php echo $Gear_type; ?></h4>
                <br>
            </div>
        </div>
    
       </div>
    <!-- Invoice Section End -->
    <br>
    <!-- Print Invoice Button (right aligned) -->
    <div class="text-right" style="margin-right: 400px;">
        <button class="btn btn-primary" onclick="printInvoice()">Print Invoice</button>
    </div>

    <script>
    function printInvoice() {
        var printContents = document.getElementById('invoice-section').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        location.reload(); // Reload to restore event handlers and state
    }
    </script>
</body>

    <!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   Car Sales </a>
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
                        <a href="clientlogin.php">Employee</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Customer</a>
                    </li>
                    <li>
                        <a href="#"> FAQ </a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<footer class="site-footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-6">
                <h5>© <?php echo date("Y"); ?> Car Selling Platform</h5>
            </div>
        </div>
    </div>
</footer>

</html>