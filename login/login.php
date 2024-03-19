<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'appointment_db';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error_message = ''; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["passwordd"];

    // Replace this with your actual authentication logic
    // For demonstration purposes, I'm assuming successful login here
    // You should query the database to check if the user exists and validate the password

    // Example: If the user exists and the password matches
    if ($email === '$email' && $password === '$password') {
        // Redirect to success page or perform other actions
        header("location: success.php");
        exit;
    } else {
       $error_message = "Invalid email or password. Please try again";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="card shadow">
        <form method="post" action="process.php">
            <input class="input-log" type="email" name="email" placeholder="Email">
            <input class="input-log" type="password" name="password" placeholder="Password">
            <div class="checkbox">
                <input class="checkbtn" type="checkbox" id="rememberMe" name="rememberMe">
                <label for="rememberMe">Remember me</label>
            </div>
            <button class="login-btn" type="submit">Login</button>
            <?php if (!empty($error_message)) : ?>
                <!-- Display error message only if it's not empty -->
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
        </form>
        <h6 class="reg">Don't have an account? <a href="register.php">Register</a></h6>
    </div>
</body>
</html>
