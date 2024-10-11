<?php
require_once 'dbConnection.php';

class login extends Dbh {
    public function loginUser($email, $password) {
        $sql = "SELECT * FROM sign_up WHERE email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_name'] = $user['username'];

                header("Location: dashboard.php"); 
                exit();
            } else {
                
                echo "Invalid password.";
            }
        } else {
            
            echo "User not found.";
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $loginHandler = new login();
    $loginHandler->loginUser($email, $password);
}
?>