<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering Website</title>
    <style>
        /* Add your CSS styles here */
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
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 10px;
        }
        nav ul li a:hover {
            background-color: #ddd;
        }
        main {
            padding: 20px;
        }
        .product {
            float: left;
            width: 30%;
            margin: 1%;
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        .product img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        .add-to-cart {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
        }
        .add-to-cart:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Food Ordering Website</h1>
    </header>

    <nav>
        <!-- Navigation links -->
        <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="checkout.php">Checkout</a></li>
        </ul>
    </nav>

    <main>
        <?php
        // Connect to database
        $db = new mysqli('localhost', 'root', '', 'food');

        // Check connection
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }

        // Fetch products from the database
        $sql = "SELECT * FROM products";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='{$row['image']}' alt='{$row['name']}'>";
                echo "<h3>{$row['name']}</h3>";
                echo "<p>{$row['description']}</p>";
                echo "<p>Price: {$row['price']}</p>";
                echo "<button class='add-to-cart' onclick='addToCart({$row['id']})'>Add to Cart</button>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
        $db->close();
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Food Ordering Website</p>
    </footer>

    <script>
        function addToCart(productId) {
            // You can implement the functionality to add the product to the cart here
            alert("Product added to cart with ID: " + productId);
        }
    </script>
</body>
</html>
