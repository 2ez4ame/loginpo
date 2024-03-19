<!-- success.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
</head>
<body>
    <h1>Login Successful!</h1>
    <?php
    // Retrieve the success message from the session (set in process.php)
    @session_start();
    if (isset($_SESSION['success_message'])) {
        echo '<p>' . $_SESSION['success_message'] . '</p>';
        // Clear the success message from the session
        unset($_SESSION['success_message']);
    }
    ?>
   
</body>
</html>
