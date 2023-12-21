<?php
session_start();
session_unset();
session_destroy();

if (isset($_SESSION['user_id'])) {
    header("Location: home.php");
    exit;
}

setcookie("language", "en", time() + 3600);
if (isset($_COOKIE["language"])) {
    echo $_COOKIE["language"];
} else {
    echo "Language cookie doesn't exist";
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/style.css">

    <title>Login</title>
</head>

<body>
<div class="title-text">
            <p>Login</p>
            <h1>Welcome !</h1>
        </div>
    <div class="form-container">
        <div class="paragraph">
            <form action="BE/login.php" method="POST" id="login-form">
                <label for="un">User Name</label>
                <br>
                <input type="text" name="username" id="un">
                <br>
                <label for="pass">Password</label>
                <br>
                <input type="password" name="password" id="pass">
                <br>
                <input type="button" value="Login" onclick="login()">
                <input type="button" value="Cancel" onclick="ClearForm()">
            </form>
            <a href="./front end/signup.html">Don't have an account? Sign Up !</a>
        </div>
    </div>

    <script>
        function login() {
            var un = document.getElementById("un").value;
            var pass = document.getElementById("pass").value;
            if (un === "" || pass === "") {
                alert("You must fill in the username and the password!");
            } else {
                document.getElementById("login-form").submit();
            }
        }

        function ClearForm() {
            document.getElementById("un").value = "";
            document.getElementById("pass").value = "";
        }
    </script>
</body>

</html>