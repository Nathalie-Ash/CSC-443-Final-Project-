<?php
require_once 'dbconnect.php'; 

class User {
    public $username;
    public $firstname;
    public $lastname;
    public $email;
    public $password;

    public function __construct($username, $firstname, $lastname, $email, $password) {
        $this->username = $username;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }

    public function save() {
        global $pdo; 
        $hashed_password = password_hash($this->password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user (username, fullname, email, password) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        return $stmt->execute([$this->username, $this->firstname . ' ' . $this->lastname, $this->email, $hashed_password]);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["pass"]);
    $confirmPassword = htmlspecialchars($_POST["confirmPassword"]);

    if ($password !== $confirmPassword) {
        header("Location: sign_up.php?error=password_mismatch");
        exit;
    }

    $user = new User($username, $firstname, $lastname, $email, $password);

    if ($user->save()) {
        session_start();
        $_SESSION["username"] = $user->username;
        header("Location: index.php");
    } else {
        header("Location: sign_up.php?error=registration_failed");
    }
} else {
    header("Location: sign_up.php");
    exit;
}
?>
