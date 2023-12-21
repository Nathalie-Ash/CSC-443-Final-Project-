<?php

$dbhost="127.0.0.1";
$dbname="db_csc443_eshop";
$dbuser="root";
$dbpass="root";
$db=null;
    try {
		$db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);		
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}

    $username=$_POST["username"];      //define variable $un and assign the username sent from the form
    $password=$_POST["password"];    

    $query="select ID from user where username='".$username."' AND password='".$password."'";
    //echo $query;
    $stmt=$db->query($query);
    $rowCount=$stmt->rowCount();
    echo $rowCount;
    if ($rowCount>0){
        session_start();
        $row = $stmt->fetch();
        $id=$row["id"];
        $_SESSION["id"]=$id;
        $_SESSION["username"]=$un;
        header("location:../front end/home.php");
    }else{
        header("location:../index.php");
    }    
    
?>