<!DOCTYPE html>
<html>
<head>
    <title>Studentenhuisvesting Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .navbar {
            display: flex; /* Use flex display for the navbar */
            justify-content: space-between; /* Distribute space between the links */
            align-items: center; /* Center items vertically */
            overflow: hidden;
            background-color: #292E49; /* Deep blue for a professional look */
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Subtle shadow for depth */
            padding: 0 10px; /* Add padding to the left and right */
        }
        .navbar a {
            flex-grow: 1; /* Allow each link to grow and fill the available space */
            text-align: center; /* Center the text within each link */
            display: block;
            color: white;
            padding: 16px 0; /* Adjust padding for top and bottom */
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s; /* Smooth transition for hover effects */
        }
        .navbar a:hover, .navbar a.active {
            background-color: #00416A; /* Lighter blue on hover */
            color: white; /* Keeps text white for better contrast */
        }
        /* Responsive navbar */
        @media screen and (max-width: 600px) {
            .navbar a {
                float: none;
                display: block;
                text-align: left; /* Aligns text to the left for better readability on smaller screens */
                padding: 12px; /* Adjust padding to better fit smaller screens */
            }
            .navbar {
                flex-direction: column; /* Stack links vertically on smaller screens */
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="../views/student/addStudent.php">Add Student</a>
    <a href="../public/student">List Students</a> <!-- Enhanced with CSS for a better look -->
    <a href="../views/housing/addHousing.php">Add House</a>
    <a href="../public/listAllHousing">List Houses</a>
    <a href="../public/updateEmployee">My Profile</a>
    <a href="login.php">Login</a>
</div>

</body>
</html>
