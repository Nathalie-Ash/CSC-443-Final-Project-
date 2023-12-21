<?php
$dbhost = "127.0.0.1";
$dbname = "bookingsystem";
$dbuser = "root";
$dbpass = "";
$db = null;

try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $newPass = $_POST['newPassword'];

   
    $hashedPassword = password_hash($newPass, PASSWORD_DEFAULT);

    $query = "UPDATE user SET `password` = :hashedPassword WHERE `username` = :username";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':hashedPassword', $hashedPassword); 
    $stmt->bindParam(':username', $username);

    $result = $stmt->execute();

    if ($result) {
        echo "Password updated successfully for user: " . $username;
    } else {
        echo "Error updating password";
    }
}
?>
