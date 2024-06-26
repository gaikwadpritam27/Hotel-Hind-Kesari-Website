<?php

// Start session to access cart items
session_start();

// Function to calculate subtotal
function calculateSubtotal() {
    if(isset($_SESSION['cart'])) {
        return array_reduce($_SESSION['cart'], function($carry, $item) { return $carry + $item['price'] * $item['quantity']; }, 0);
    } else {
        return 0;
    }
}

// Empty the cart
if(isset($_POST['empty_cart'])) {
    unset($_SESSION['cart']);
}

// Generate QR code
$amount_to_pay = calculateSubtotal();
$qr_code_url = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=your_payment_link_here?amount=' . $amount_to_pay;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            margin: 20px auto;
            width: 80%;
        }
        .payment-form {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            background-color: #f9f9f9;
            text-align: center;
        }
        .button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            display: inline-block;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #45a049;
        }
        .qr-code {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Payment</h1>
    </header>
    <div class="container">
        <div class="payment-form">
            <h2>Payment Details</h2>
            <p>Amount to Pay: Rs. <?php echo $amount_to_pay; ?></p>
            <div class="qr-code">
                <img src="<?php echo $qr_code_url; ?>" alt="QR Code">
            </div>
            <p>Scan the QR code to make payment.</p>
            <form method="post">
                <button class="button" type="submit" name="empty_cart">Empty Cart</button>
            </form>
        </div>
    </div>
</body>
</html>
