<?php require_once __DIR__ . "/../../config/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL ?>"> <!-- Ensure the info is sent to index.php -->

    <title>Employee Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #333;
        }
        input[type=email], input[type=password] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type=submit], .register-btn {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type=submit] {
            background-color: #007bff;
            color: white;
        }
        .register-btn {
            background-color: #28a745;
            color: white;
            text-align: center;
            display: block;
            text-decoration: none;
            margin-top: 10px;
        }
        input[type=submit]:hover {
            background-color: #0056b3;
        }
        .register-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <form action="login" method="post">
        <h2>Employee Login</h2>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        
        <input type="submit" name="login" value="Login">
        <!-- Register button -->
        <a href="../views/employee/register.php" class="register-btn">Register</a>
    </form>
</body>
</html>

