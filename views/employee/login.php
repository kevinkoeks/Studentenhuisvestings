<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
</head>
<body>
    <h2>Employee Login</h2>
    <form action=" " method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
// Start a new session
session_start();

// Include your database connection file
require_once __DIR__ . "/../core/Database.php"; 

// Check if the form is submitted
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database query to check the employee's credentials
    $query = "SELECT * FROM employees WHERE email = :email LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $employee = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify password (assuming you are storing hashed passwords)
    if ($employee && password_verify($password, $employee['password'])) {
        // Authentication successful - set session variables
        $_SESSION['employee_id'] = $employee['id'];
        $_SESSION['employee_email'] = $employee['email'];
        // Redirect to home.php
        header('Location: home.php');
        exit;
    } else {
        // Authentication failed
        echo "<p>Invalid email or password.</p>";
    }
}
?>
