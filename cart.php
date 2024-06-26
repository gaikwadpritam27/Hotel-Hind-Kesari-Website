<?php

// Start session to access cart items
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cart_items";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Empty the cart and delete items from the database
if(isset($_POST['empty_cart'])) {
    // Delete all items from the database
    $sql = "TRUNCATE TABLE orders";
    if ($conn->query($sql) !== TRUE) {
        echo "Error emptying cart: " . $conn->error;
    }
    
    // Empty the cart session
    unset($_SESSION['cart']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>
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
        h1, h2 {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
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
    </style>
</head>
<body>
    <header>
        <h1>View Cart</h1>
    </header>
    <div class="cart">
        <center>
            <h2>Cart</h2>
        </center>
        <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($_SESSION['cart'] as $item): ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td>Rs. <?php echo $item['price']; ?></td>
                            <td><?php echo $item['quantity']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div>
                <h3>Total: Rs. <?php echo array_reduce($_SESSION['cart'], function($carry, $item) { return $carry + $item['price'] * $item['quantity']; }, 0); ?></h3>
                <center>
                <form method="post">
                    <button class="button" type="submit" name="empty_cart">Empty Cart</button>
                </form>
                <br><br>
                    <a href="checkout.php" class="button">Proceed to Checkout</a>
                    <br><br>
                    <a href="menu.php" class="button">Menu</a>
                </center>
            </div>
        <?php else: ?>
            <center>
            <p>Your cart is empty</p>
            <a href="menu.php" class="button">Menu</a>
            </center>
        <?php endif; ?>
    </div>
</body>
</html>
