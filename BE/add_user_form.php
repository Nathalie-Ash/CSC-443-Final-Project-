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

/* Form Styles */
form {
  max-width: 400px;
  margin-top:0;
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
  /* margin-bottom: 20px; */
  border: 1px solid #ddd;
  border-radius: 5px;
  display: block;
}

form label {
  display: block;
  /* margin-bottom: 5px; */
  font-weight: bold;
}

form input[type="button"],
form input[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  background-color: #009688;
  color: white;
  transition: background-color 0.3s;
}

form input[type="button"]:hover,
form input[type="submit"]:hover {
  background-color: #00796b;
}

form a {
  display: block;
  text-align: center;
  /* margin-top: 20px; */
  color: #333;
  text-decoration: none;
}

form a:hover {
  text-decoration: underline;
}

    </style>
</head>
<body>
    <h3 style="margin-left:44%;margin-bottom:0%;">Admin Add User</h3>
<form method="post" action="addUser.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age"><br><br>
    
    <input type="submit" value="Add User">
</form> 
    </body>
    </html>