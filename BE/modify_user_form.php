<?php
    session_start();
    if (($_SESSION["username"])!="admin"){
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/admin.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            background-color: #f4f4f4; /* Background color for the entire page */
        }

        /* Form Styles */
        form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        form input[type="text"],
        form input[type="email"],
        form input[type="password"],
        form select {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: block;
            margin-bottom: 15px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        form input[type="submit"],
        form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #009688; /* Color for buttons */
            color: white;
            transition: background-color 0.3s;
        }

        form input[type="submit"]:hover,
        form button:hover {
            background-color: #00796b; /* Hover color for buttons */
        }

        form a {
            display: block;
            text-align: center;
            color: #333;
            text-decoration: none;
        }

        form a:hover {
            text-decoration: underline;
        }

        h3 {
            margin-left: 44%;
            margin-bottom: 0%;
        }
    </style>
</head>
<body>
    <h3>Admin Modify User</h3>
    <form method="post" action="modifyUser.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword"><br><br>

        <input type="submit" value="Change Password">
    </form>
</body>
</html>
