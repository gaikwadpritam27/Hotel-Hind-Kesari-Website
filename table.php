<!DOCTYPE html>
<html>
<head>
    <title>Table Display</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .view-orders-btn {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            float: right;
            cursor: pointer;
            border-radius: 5px;
        }

        .view-orders-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="header">
    <h1><u>Booking Details</u></h1>
    <br>
    <a href="food_orders.php" class="view-orders-btn">View Food Orders</a>
    <br><br>
</div>

<?php
// Database connection parameters
$server = "localhost";
$username = "root";
$password = "";
$db = "table";

// Create connection
$conn = new mysqli($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from table
$sql = "SELECT * FROM info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Sr.No</th><th>Name</th><th>Email</th><th>Phone</th><th>Date</th><th>Time</th><th>Number of people</th><th>Message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["sr.no"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["no_of_people"]."</td><td>".$row["message"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
