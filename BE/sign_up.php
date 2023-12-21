<?php

require_once("../front end/common/menu.php"); 
require_once 'dbconnect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $fullname = htmlspecialchars($_POST["firstname"]) . ' ' . htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["pass"]);
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username, fullname, email, password) VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($query);
    
   
    if ($stmt->execute([$username, $fullname, $email, $hashed_password])) {
        
        session_start();
        $_SESSION["username"] = $username; 
        header("Location: index.php");
        exit;
    } else {
        header("Location: signup.php?error=registration_failed");
        exit;
    }
} else {
    header("Location: signup.php");
    exit;
}
?>
