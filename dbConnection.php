<?php
$con = new mysqli(hostname: "localhost", username: "root", password: "", database: "login_system");
if($con){
    echo "Connected Successfully";
    }else{
    die(mysqli_error($con));
    }
    ?>