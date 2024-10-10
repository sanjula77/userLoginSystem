<?php

include 'dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = $_POST['email'];
    $userName = $_POST['uName'];
    $password_1 = $_POST['pass'];
    $password_2 = $_POST['cnfmPass'];

    $dbh = new Dbh();

    try {
        $dbh->setUserSmtp($email, $userName, $password_1, $password_2);
        echo "User registered successfully!";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
