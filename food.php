<!DOCTYPE html>
<html>
<head>
    <title>Food Ordering System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        .menu-item {
            margin-bottom: 15px;
        }

        .menu-item input[type="checkbox"] {
            margin-right: 10px;
        }

        .cart-item {
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h2>Menu</h2>
<form method="post" action="">
    <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "food";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch menu items from the database
    $sql = "SELECT * FROM menu";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output each menu item as a checkbox
        while($row = $result->fetch_assoc()) {
            echo "<div class='menu-item'>";
            echo "<input type='checkbox' name='item[]' value='".$row['id']."'>".$row['name']." - $".$row['price'];
            echo "</div>";
        }
    } else {
        echo "No menu items available.";
    }
    $conn->close();
    ?>
    <input type="submit" name="submit" value="Add to Cart">
</form>

<h2>Cart</h2>
<?php
// session_start();

// Check if items are selected and add them to the cart
if(isset($_POST['submit'])) {
    if(isset($_POST['item'])) {
        foreach($_POST['item'] as $item) {
            $_SESSION['cart'][] = $item;
        }
    }
}

// Display items in the cart
if(isset($_SESSION['cart'])) {
    $cart_items = $_SESSION['cart'];
    foreach($cart_items as $item) {
        echo "Item ID: ".$item."<br>";
    }
} else {
    echo "Your cart is empty.";
}
?>

<form method="post" action="">
    <input type="submit" name="place_order" value="Place Order">
</form>

<?php
// Place order
if(isset($_POST['place_order'])) {
    if(isset($_SESSION['cart'])) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        foreach($_SESSION['cart'] as $item) {
            $sql = "INSERT INTO orders (item_id, quantity, total_price) VALUES ('$item', '1', (SELECT price FROM menu WHERE id='$item'))";
            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        unset($_SESSION['cart']);
        echo "Order placed successfully.";
        $conn->close();
    } else {
        echo "Your cart is empty. Please add items to your cart before placing an order.";
    }
}
?>

</body>
</html>
