<!DOCTYPE html>
<html>
<head>
    <title>Studentenhuisvesting Dashboard</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            overflow: hidden;
            background-color: #333;
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="../views/student/addStudent.php">Add Student</a>
    <a href="../public/student">List Student</a> <!-- Works thanks to the .htaccess file. Sends it to index.php for routing -->
    <a href="login.php">Login</a>
</div>


<div>
    <!-- Your page content here -->
</div>

</body>
</html>
