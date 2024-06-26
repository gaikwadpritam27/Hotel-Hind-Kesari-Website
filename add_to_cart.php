<?php
session_start();
include 'db_config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    $sql = "INSERT INTO cart (product_id) VALUES ('$productId')";
    if ($conn->query($sql) === TRUE) {
        header("Location: menu.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
