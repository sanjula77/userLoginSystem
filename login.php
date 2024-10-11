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
                // User is authenticated. You can start a session or perform any other actions.
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_name'] = $user['username'];

                header("Location: dashboard.php"); // Redirect to the dashboard page
                exit();
            } else {
                // Invalid password
                echo "Invalid password.";
            }
        } else {
            // User not found
            echo "User not found.";
        }
    }
}

// Usage example
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $loginHandler = new login();
    $loginHandler->loginUser($email, $password);
}
?>