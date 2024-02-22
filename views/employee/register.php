<?php require_once "../../config/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL ?>"> <!-- Saved the URL in a Global CONSTANT: BASE_URL. Make sure the info is sent to index.php-->

    <title>Create Employee Account</title>
</head>
<body>
    <h2>Create Employee Account</h2>
    <form action="register" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="position">Position:</label>
        <select id="position" name="position">
            <option value="Administration">Administration</option>
            <option value="Supervisor">Supervisor</option>
        </select>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" name="register" value="Create Account">
    </form>
</body>
</html>

