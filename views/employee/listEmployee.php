<?php require_once __DIR__ . "/../../config/config.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL ?>"> <!-- Ensure BASE_URL ends with a slash (/) -->
    
    <title>Update Employee</title>
</head>
<body>
    <h2>Update Employee</h2>
    <form action="updateEmployee" method="post">
        <!-- Hidden field for employee ID -->
        <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($employee['name']); ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($employee['email']); ?>"><br><br>

        <label for="position">Position:</label>
        <input type="text" id="position" name="position" value="<?php echo htmlspecialchars($employee['position']); ?>"><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
