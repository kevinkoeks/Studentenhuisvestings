<?php require_once "../../config/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL ?>"> <!-- Saved the URL in a Global CONSTANT: BASE_URL. Make sure the info is sent to index.php-->
    <?php //require_once "../layouts/header.php" ?>
    <title>Add a New House</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form div {
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Add a New House</h2>
    <form action="addHousing" method="post">
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div>
            <label for="city">City:</label>
            <select id="city" name="city">
                <option value="Amsterdam">Amsterdam</option>
                <option value="Rotterdam">Rotterdam</option>
                <option value="The Hague">The Hague</option>
                <option value="Utrecht">Utrecht</option>
                <option value="Eindhoven">Eindhoven</option>
                <option value="Tilburg">Tilburg</option>
                <option value="Groningen">Groningen</option>
                <option value="Almere">Almere</option>
                <option value="Breda">Breda</option>
                <option value="Nijmegen">Nijmegen</option>
            </select>
        </div>
        <div>
            <label for="type">Type:</label>
            <select id="type" name="type">
                <option value="Apartment">Apartment</option>
                <option value="House">House</option>
                <option value="Studio">Studio</option>
                <option value="Room">Room</option>

                
            </select>
        </div>
        <div>
            <label for="rooms">Number of Rooms:</label>
            <input type="number" id="rooms" name="rooms" min="1" required>
        </div>
        <div>
            <label for="price">Price (€):</label>
            <input type="number" id="price" name="price" step="0.01" required>
        </div>
        <div>
            <label for="available_from">Available From:</label>
            <input type="date" id="available_from" name="available_from" required>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
