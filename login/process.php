

<?php

session_start();
require('success.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Replace this with your actual authentication logic
    // For demonstration purposes, I'm assuming successful login here
    // You should query the database to check if the user exists and validate the password

    // Example: If the user exists and the password matches
    if ($username === '$username' && $password === '$password') {
        $_SESSION['success_message'] = "Login successful! Welcome, $username!";
        header("location: success.php");
        exit;
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
   
    </div>
</body>
</html>
