<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studentenhuisvesting Home</title>
    <?php require __DIR__ . "/../views/layouts/header.php"; ?>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        footer {
            width: 100%;
            padding: 20px;
            text-align: center;
            background: #f0f0f0;
            border-top: 1px solid #e7e7e7;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Welcome to the Studentenhuisvesting Dashboard</h1>
        <h2>Welcome <?= $_SESSION['employee_name'] ?>! Let's help these students get some housing!</h2>
        <p>Find the best housing options tailored for students.</p> 
        <p>Explore how you can help students with housing, and manage their stay through our platform.</p>
        <!-- Add more sections as needed -->
    </div>
<footer>
    <?php require __DIR__ . "/../views/layouts/footer.php"; ?>
</footer>
</body>
</html>
