<!DOCTYPE html>
<html>
<head>
    <title>Invoice - Car Selling Platform</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/invoice.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .invoice-container {
            background-color: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .invoice-header {
            border-bottom: 1px solid #eee;
            margin-bottom: 30px;
            padding-bottom: 20px;
        }
        .invoice-title {
            margin-top: 0;
        }
        .invoice-details {
            margin-bottom: 30px;
        }
        .table {
            margin-bottom: 30px;
        }
        .thank-you {
            margin-top: 30px;
            font-style: italic;
            color: #777;
        }
    </style>
</head>
<body>
    <?php
    require 'connection.php';
    $conn = Connect();
    
    if(!isset($_SESSION['login_customer'])){
        header("location: customerlogin.php");
        exit();
    }
    
    $invoice_number = $_GET['invoice'];
    
    // Get sale details
    $sql_sale = "SELECT s.*, c.*, cust.* 
                 FROM sales s
                 JOIN cars c ON s.car_id = c.carId
                 JOIN customer cust ON s.customer_id = cust.customer_id
                 WHERE s.invoice_number = '$invoice_number'";
    $result_sale = mysqli_query($conn, $sql_sale);
    $sale = mysqli_fetch_assoc($result_sale);
    ?>
    
    <div class="container invoice-container">
        <div class="row invoice-header">
            <div class="col-sm-6">
                <h1 class="invoice-title">Invoice</h1>
                <p>Invoice #: <?php echo $sale['invoice_number']; ?></p>
                <p>Date: <?php echo date('F j, Y', strtotime($sale['sale_date'])); ?></p>
            </div>
            <div class="col-sm-6 text-right">
                <h3>Car Selling Platform</h3>
                <p>123 Main Street, City, Country</p>
                <p>Phone: +1 234 567 890</p>
                <p>Email: info@carsellingplatform.com</p>
            </div>
        </div>
        
        <div class="row invoice-details">
            <div class="col-sm-6">
                <h4>Sold To:</h4>
                <p><?php echo $sale['customer_name']; ?></p>
                <p><?php echo $sale['customer_email']; ?></p>
                <p><?php echo $sale['customer_phone']; ?></p>
            </div>
            <div class="col-sm-6 text-right">
                <h4>Payment Method:</h4>
                <p>Bank Transfer</p>
                <p>Account: 1234567890</p>
                <p>Bank: Example Bank</p>
            </div>
        </div>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Details</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <strong><?php echo $sale['car_name']; ?></strong><br>
                        <?php echo $sale['car_nameplate']; ?>
                    </td>
                    <td>
                        Engine: <?php echo $sale['Engine']; ?>cc<br>
                        Fuel: <?php echo $sale['fuel_type']; ?><br>
                        Gear: <?php echo $sale['Gear_type']; ?>
                    </td>
                    <td>$<?php echo number_format($sale['price'], 2); ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-right"><strong>Subtotal</strong></td>
                    <td>$<?php echo number_format($sale['price'], 2); ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-right"><strong>Tax (10%)</strong></td>
                    <td>$<?php echo number_format($sale['price'] * 0.1, 2); ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-right"><strong>Total</strong></td>
                    <td>$<?php echo number_format($sale['price'] * 1.1, 2); ?></td>
                </tr>
            </tbody>
        </table>
        
        <div class="thank-you">
            <p>Thank you for your purchase!</p>
            <p>Your vehicle documents will be processed within 3-5 business days.</p>
        </div>
        
        <div class="text-center mt-4">
            <button onclick="window.print()" class="btn btn-primary">Print Invoice</button>
            <a href="mybookings.php" class="btn btn-default">Back to My Bookings</a>
        </div>
    </div>
</body>
</html>