<?php

require_once("var.php");

$testimonials=new stdClass();

$testimonials->username=VarExist($_POST["username"]);
$testimonials->testimonial=VarExist($_POST["testimonial"]);



if (InsertUserToDBfromObjet($testimonials)){
    header("location:../front end/testimonial.php");
}else{
    header("location:../testimonial.php");
    echo "failed";
}


function InsertUserToDBfromObjet($testimonials){
  
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
    
    
        $query = "INSERT INTO testimonial (`username`, `testimonial`) VALUES (:username, :testimonial)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':username', $testimonials->username);
        $stmt->bindParam(':testimonial', $testimonials->testimonial);
      
    
        $result = $stmt->execute();
    if ($stmt->rowCount()>0){
        session_start();
        $_SESSION["id"]=$db->lastInsertId();
        $_SESSION["username"]=$testimonials->username;
        $_SESSION["testimonial"]=$testimonials->testimonial;
        return true;
    }else{
        return false;
    }
}

function InsertUserToDBfromArray($testimonials){
    print_r($testimonials);
}
?>