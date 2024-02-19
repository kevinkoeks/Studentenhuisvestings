<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Student Creation Success</title>
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
        </style>
    </head>
    <body>
        
        <div class='message'>
            The student was successfully created!
        </div>
        <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <!-- More table headers here if needed -->
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($student['name']); ?></td>
                    <td><?php echo htmlspecialchars($student['email']); ?></td>
                    <td><?php echo htmlspecialchars($student['address']); ?></td>
                    <!-- More student info here -->
                </tr>
        </tbody>
        </table>
    </body>
    </html>

    