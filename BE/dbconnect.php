<?php 
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

?>