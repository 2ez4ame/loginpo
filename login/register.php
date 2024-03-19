<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'appointment_db'; // Replace with your actual database name

// Create a new MySQLi connection
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["passwordd"];
    $confirmPassword = $_POST["confirm-password"];

 
    if ($password !== $confirmPassword) {
        $error_message = "Passwords do not match. Please try again.";
    } else {
        
        $sql = "INSERT INTO users (email, passwordd) VALUES ('$email', '$password')";

        if ($conn->query($sql) === TRUE) {
           
            session_start();
            $_SESSION['registration_success'] = true;

            
            header("location: login.php");
            exit;
        } else {
            // Handle database insertion failure
            $error_message = "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>
<body>
    <div class="card shadow">
        <form method="post" action="login.php">
            <input class="input-log" type="email" name="email" placeholder="Email">
            <input class="input-log" type="password" name="passwordd" placeholder="Password">
            <input class="input-log" type="password" name="confirm-password" placeholder="Confirm password">
            <button class="register-btn" type="submit">Register</button>
            <?php if (isset($_SESSION['registration_success'])) : ?>
                <p style="color: green;">Successfully registered! You can now log in.</p>
                <?php unset($_SESSION['registration_success']); ?>
            <?php endif; ?>
        </form>
        <h6 class="reg">Already have an account? <a href="login.php">Login</a></h6>
    </div>
</body>
</html>
