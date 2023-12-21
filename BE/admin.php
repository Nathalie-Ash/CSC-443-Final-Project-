<?php
    session_start();
    if (($_SESSION["username"])!="admin"){
        header("location:../index.php");
    }
?>
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

function FetchUsers(){
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
  
    $query="SELECT id, username,email FROM user";
    $stmt=$db->query($query);
    $a_users=array();
    while ($obj = $stmt->fetch(PDO::FETCH_OBJ)) {
		$a_users[]=$obj;
	}
    return $a_users;
}


?>

<?php

        $a_users=FetchUsers();
        for ($i = 0; $i < sizeof($a_users); $i++) {
            echo '<div class="tbl-row">
            <div style="width: 40%; float: left;">
                    <div class="table-cell">' . $a_users[$i]->username . '</div>
                </div>';
        ?>

           
            <div style="width: 10%; float: left;">
                <div class="table-cell">
                    <form name="FrmDelete" class="FrmDelete" method="post" action="deleteUser.php">
                        <input type="hidden" name="id" value="<?php echo $a_users[$i]->id; ?>">
                        <button>Del</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
        <form method="post" action="addUser.php">
        <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <label for="age">Age:</label>
    <input type="number" id="age" name="age"><br><br>
    
    <input type="submit" value="Add User">
</form>
<form method="post" action="modifyUser.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Enter User ID"><br><br>
    
    <label for="newPassword">New Password:</label>
    <input type="password" id="newPassword" name="newPassword" placeholder="Enter New Password"><br><br>
    
    <input type="submit" value="Change Password">
</form>
