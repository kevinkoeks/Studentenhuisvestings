<?php require_once "../../config/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL ?>"> <!-- Saved the URL in a Global CONSTANT: BASE_URL. Make sure the info is sent to index.php-->
    
    <title>Document</title>
</head>
<body>
    <h2>Add Student</h2>
    <form action="addStudent" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>



