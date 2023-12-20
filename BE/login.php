<?php

session_start();


require_once 'path/to/your/database_connection_file.php'; // Update with the actual path


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if (!empty($email) && !empty($password)) {
       
        $query = "SELECT id, password FROM tbl_users WHERE email = :email";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

       
        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

        
            if (password_verify($password, $user['password'])) {
                
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $email;

              
                header("Location: index.php");
                exit;
            } else {
               
                $login_err = "Invalid email or password.";
            }
        } else {
    
            $login_err = "Invalid email or password.";
        }
    } else {
    
        $login_err = "Please enter both email and password.";
    }
}


if (isset($login_err)) {
    echo $login_err;
}
?>
