<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Students</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {background-color: #f9f9f9;}
    </style>
</head>
<body>
    <h1>List of Students</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Address</th>
                <th>City</th>
                <th>Type</th>
                <th>Rooms</th>
                <th>Price</th>
                <th>Available From</th>
                <!-- More table headers here if needed -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listAllHouses as $housing): ?>
                <tr>
                    <td><?php echo htmlspecialchars($housing['id']); ?></td>
                    <td><?php echo htmlspecialchars($housing['address']); ?></td>
                    <td><?php echo htmlspecialchars($housing['city']); ?></td>
                    <td><?php echo htmlspecialchars($housing['type']); ?></td>
                    <td><?php echo htmlspecialchars($housing['rooms']); ?></td>
                    <td><?php echo htmlspecialchars($housing['price']); ?> €</td>
                    <td><?php echo htmlspecialchars($housing['available_from']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
