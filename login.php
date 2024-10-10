<?php
session_start();  
include 'dbConnection.php';  

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = $_POST['email'];
    $password = $_POST['pass'];

    $dbh = new Dbh();

    try {
        $user = $dbh->loginUser($email, $password);  
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");  
        } else {
            echo "Invalid email or password!";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
