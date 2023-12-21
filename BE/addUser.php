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
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $userpassword = $_POST['password'];
        $age = $_POST['age'];
    
       
        $hashedPassword = password_hash($userpassword, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO user (`username`, `fullname`, `email`, `password`, `age`) VALUES (:username, :name, :email, :password, :age)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':age', $age);
    
        $result = $stmt->execute();
    
        if ($result) {
            echo "User added successfully";
           
        } else {
            echo "Error adding user";
        }
    }
    
    

    if ($result) {
        
        header("Location: admin.php");
        exit();
    } else {
        echo "Error adding user";
    }
}
?>
