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
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <!-- More table headers here if needed -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= htmlspecialchars($student['id']); ?></td>
                    <td><?= htmlspecialchars($student['name']); ?></td>
                    <td><?= htmlspecialchars($student['email']); ?></td>
                    <td><?= htmlspecialchars($student['address']); ?></td>
                    <!-- More student info here -->
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
