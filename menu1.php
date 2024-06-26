<?php




// Define menu items
$menu = [
    ['name' => 'Udid Papad Roast', 'price' => 20.00],
    ['name' => 'Udid Masala Papad', 'price' => 40.00],
    ['name' => 'Cheese Rumali Khakara', 'price' => 240.00],
    ['name' => 'Soyabeen Chilly', 'price' => 210.00],
    ['name' => 'Paneer Chilly', 'price' => 250.00],
    ['name' => 'Alu Vadi', 'price' => 160.00],
    ['name' => 'Chana Koliwada', 'price' => 140.00],
    ['name' => 'Kothimbir vadi', 'price' => 150.00],
    ['name' => 'Ukaad Mutton', 'price' => 320.00],
    ['name' => 'Mutton Thali', 'price' => 300.00],
    ['name' => 'Finger Chips', 'price' => 150.00],
    ['name' => 'Chicken ukkad', 'price' => 240.00],
    ['name' => 'Sukh Chicken', 'price' => 260.00],
    ['name' => 'Chicken Kheema', 'price' => 250.00],
    ['name' => 'Kharda Mutton', 'price' => 360.00],
    ['name' => 'Mutton Kheema', 'price' => 270.00],
    ['name' => 'Special Mutton Thali', 'price' => 360.00],
    ['name' => 'Prawns Thali', 'price' => 400.00],
    ['name' => 'Pomfret Thali', 'price' => 400.00],
    ['name' => 'Surmai Thali', 'price' => 400.00],
    ['name' => 'Spl Prawns Thali', 'price' => 650.00],
    ['name' => 'Spl Pomfret Thali', 'price' => 680.00],
    ['name' => 'Spl Surmai Thali', 'price' => 680.00],
    ['name' => 'Shev Bhaji', 'price' => 180.00],
    ['name' => 'Mix veg', 'price' => 190.00],
    ['name' => 'Veg Kolhapuri', 'price' => 200.00],
    ['name' => 'Veg Jaipuri', 'price' => 260.00],
    ['name' => 'Veg Deewani Handi', 'price' => 300.00],
    ['name' => 'veg Patiala', 'price' => 280.00],
    ['name' => 'Masala Bhendi', 'price' => 425.00],
    ['name' => 'Dal Fry', 'price' => 150.00],
    ['name' => 'Dal Tadka', 'price' => 170.00],
    ['name' => 'Kaju Paneer Masala', 'price' => 330.00],
    ['name' => 'Panner Masala', 'price' => 220.00],
    ['name' => 'Paneer Butter Masala', 'price' => 260.00],
    ['name' => 'Paneer Bhurji', 'price' => 280.00],
    ['name' => 'Panner Kolhapuri', 'price' => 270.00],
    ['name' => 'Matar Paneer', 'price' => 210.00],
    ['name' => 'Kaju Curry', 'price' => 270.00],
    ['name' => 'Kaju Masala', 'price' => 290.00],
    ['name' => 'Palak Paneer Masala', 'price' => 260.00],
    ['name' => 'Chapati', 'price' => 20.00],
    ['name' => 'Bajra Bhakri', 'price' => 30.00],
    ['name' => 'Tandul Bhakari', 'price' => 40.00],
    ['name' => 'Jwari Bhakari', 'price' => 40.00],
    ['name' => 'Rice', 'price' => 90.00],
    ['name' => 'Dal Khichada', 'price' => 180.00],
    ['name' => 'Chaas', 'price' => 40.00],
    ['name' => 'Rabadi Vati', 'price' => 100.00],
    ['name' => 'Gulabjaam', 'price' => 60.00],
    ['name' => 'Pineapple Shira', 'price' => 100.00],
    ['name' => 'Doodhi Halwa', 'price' => 90.00],
    ['name' => 'Gul Tup Bhaat', 'price' => 70.00]
];

// Start session to access cart items
session_start();

// Add item to cart
if(isset($_POST['add_to_cart'])) {
    $item_index = $_POST['item_index'];
    if(isset($_SESSION['cart'][$item_index])) {
        $_SESSION['cart'][$item_index]['quantity']++;
    } else {
        $_SESSION['cart'][$item_index] = ['name' => $menu[$item_index]['name'], 'price' => $menu[$item_index]['price'], 'quantity' => 1];
    }
}

// Remove item from cart
if(isset($_POST['remove_from_cart'])) {
    $item_index = $_POST['item_index'];
    unset($_SESSION['cart'][$item_index]);
}

// Place order
if(isset($_POST['place_order'])) {
    // Code to process order (e.g., save to database, send confirmation email, etc.)
    // Clear cart after placing order
    unset($_SESSION['cart']);
}

// Add item to cart and database
// if(isset($_POST['add_to_cart'])) {
//     $item_index = $_POST['item_index'];
//     if(isset($_SESSION['cart'][$item_index])) {
//         $_SESSION['cart'][$item_index]['quantity']++;
//     } else {
//         // Add item to cart
//         $_SESSION['cart'][$item_index] = ['name' => $menu[$item_index]['name'], 'price' => $menu[$item_index]['price'], 'quantity' => 1];
//         // Insert item into database
//         $name = $_SESSION['cart'][$item_index]['name'];
//         $price = $_SESSION['cart'][$item_index]['price'];
//         $quantity = $_SESSION['cart'][$item_index]['quantity'];
//         $sql = "INSERT INTO orders (name, price, quantity) VALUES ('$name', '$price', '$quantity')";
//         if ($conn->query($sql) !== TRUE) {
//             echo "Error: " . $sql . "<br>" . $conn->error;
//         }
//     }
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering Website</title>
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
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .menu-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .menu-table th, .menu-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .menu-table th {
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
        <h1>Hind Kesari</h1>
    </header>
    <div class="menu">
        <center>
        <h2>Menu</h2>
        </center>
        <table class="menu-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($menu as $index => $item): ?>
                    <tr>
                        <td><?php echo $item['name']; ?></td>
                        <td>Rs. <?php echo $item['price']; ?></td>
                        <td>
                            <form method="post">
                                <input type="hidden" name="item_index" value="<?php echo $index; ?>">
                                <button class="button" type="submit" name="add_to_cart">Add to Cart</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br><br>
        <center>
            <div>
                <a href="cart.php" class="button">View Cart</a>
            </div>
        </center>
        <br><br>
    </div>
</body>
</html>
