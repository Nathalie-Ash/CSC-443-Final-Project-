<?php

require_once("var.php");

$user=new stdClass();

$user->fullname=VarExist($_POST["fullname"]);
$user->username=VarExist($_POST["username"]);
$user->email=VarExist($_POST["email"]);
$user->password=VarExist($_POST["password"]); // Updated to match the form field name
$user->age=VarExist($_POST["age"]);


if (InsertUserToDBfromObjet($user)){
    header("location:../front end/home.php");
}else{
    header("location:../index.php");
}


function InsertUserToDBfromObjet($user){
  
    $dbhost="127.0.0.1";
    $dbname="bookingsystem";
    $dbuser="root";
    $dbpass="";
    $db=null;
        try {
            $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);		
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    
    
        $query = "INSERT INTO user (`username`, `fullname`, `email`, `password`, `age`) VALUES (:username, :name, :email, :password, :age)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':username', $user->username);
        $stmt->bindParam(':name', $user->fullname);
        $stmt->bindParam(':email', $user->email);
        $stmt->bindParam(':password', $user->password);
        $stmt->bindParam(':age', $user->age);
    
        $result = $stmt->execute();
    if ($stmt->rowCount()>0){
        session_start();
        $_SESSION["id"]=$db->lastInsertId();
        $_SESSION["username"]=$user->username;
        return true;
    }else{
        return false;
    }
}

function InsertUserToDBfromArray($user){
    print_r($user);
}
?>