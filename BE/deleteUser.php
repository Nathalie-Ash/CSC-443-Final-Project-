<?php
require_once("var.php");
$id=VarExist($_POST["id"]);

function DeleteUser($id){
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

    $query="DELETE FROM user where id=$id";
    $stmt=$db->prepare($query);
    $stmt->execute();
    if ($stmt->rowCount()>0){
        return 1;
    }else{
        return 0;
    }
}

echo (DeleteUser($id));
       
?>
