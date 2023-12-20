<?php

require_once(""); /must replace with path to database


$firstname = htmlspecialchars($_POST["firstname"]);
$lastname = htmlspecialchars($_POST["lastname"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["pass"]);
$sex = htmlspecialchars($_POST["sex"]);
$ageGroup = htmlspecialchars($_POST["ageGroup"]);
$language = htmlspecialchars($_POST["language"]);


$hashed_password = password_hash($password, PASSWORD_DEFAULT);


$query = "INSERT INTO tbl_users (firstname, lastname, email, password, sex, age_group, language) VALUES (?, ?, ?, ?, ?, ?, ?)";


$stmt = $db->prepare($query);


if ($stmt->execute([$firstname, $lastname, $email, $hashed_password, $sex, $ageGroup, $language])) {
   
    session_start();
    $_SESSION["username"] = $email;

   
    header("Location: index.php");
} else {
    
    header("Location: signup.php?error=registration_failed");
}
?>
