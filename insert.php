<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = htmlspecialchars($_POST["email"]);
    $useName = htmlspecialchars($_POST["uName"]);
    $password = htmlspecialchars($_POST["pass"]);
    $confPass = htmlspecialchars($_POST["cnfmPass"]);
if(empty($email)){
exit();
}

    echo $email;
    echo $useName;
    echo $password;
    echo $confPass;
}