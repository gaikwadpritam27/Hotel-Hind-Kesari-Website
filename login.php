<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        body {
            background-image: url('https://img.freepik.com/premium-vector/network-connection-background-abstract-style_23-2148875738.jpg'); /* Replace 'background-image.jpg' with your image file path */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            /* filter: blur(5px); Adjust the blur intensity as needed
            -webkit-filter: blur(5px); For Safari and older versions of Chrome */
        }


        .container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .btn {
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 3px;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        h1{
            color: white;
        }
    </style>
</head>
<body>
<h1>
    <center>
        <u>
            Admin Login
        </u>
    </center>
</h1>
<div class="container">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" class="btn">Login</button>
    </form>
</div>

</body>
</html>




<?php
session_start();

// Check if username and password are provided and match hardcoded values
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded username and password (Replace these with your actual credentials)
    $valid_username = "admin";
    $valid_password = "password";

    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful, redirect to the page displaying table content
        $_SESSION['loggedin'] = true;
        header("Location: table.php");
        exit;
    } else {
        // Invalid credentials, redirect back to the login page with an error message
        header("Location: login.php?error=Invalid credentials");
        exit;
    }
}
?>
