<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Entity Creation Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f0f0;
            color: #333;
        }
        .message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    
    <div class='message'>
        Was successfully created!
    </div>
    <div>
        <?php if (isset($student["name"])): ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <!-- Dynamic number of other columns if needed -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($student['name']); ?></td>
                    <td><?php echo htmlspecialchars($student['email']); ?></td>
                    <td><?php echo htmlspecialchars($student['address']); ?></td>
                    <!-- More student data here -->
                </tr>
            </tbody>
        </table>
        <?php elseif (isset($employee["name"])): ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- Dynamic number of other columns if needed -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($employee['name']); ?></td>
                    <td><?php echo htmlspecialchars($employee['email']); ?></td>
                </tr>
            </tbody>
        </table>
    <?php elseif (isset($housing["address"])): ?>
        <table>
            <thead>
                <tr>
                    <th>Address</th>
                    <th>City</th>
                    <th>Type</th>
                    <th>Rooms</th>
                    <th>Price</th>
                    <th>Available From</th>
                    <!-- Dynamic number of other columns if needed -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($housing['address']); ?></td>
                    <td><?php echo htmlspecialchars($housing['city']); ?></td>
                    <td><?php echo htmlspecialchars($housing['type']); ?></td>
                    <td><?php echo htmlspecialchars($housing['rooms']); ?></td>
                    <td><?php echo htmlspecialchars($housing['price']); ?> €</td>
                    <td><?php echo htmlspecialchars($housing['available_from']); ?></td>
                    <!-- More housing data here -->
                </tr>
            </tbody>
        </table>
    <?php else: ?>
        <p>Unknown entity type.</p>
    <?php endif; ?>
    </div>
</body>
</html>
