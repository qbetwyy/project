<?php
    $name = $_POST['name']; 
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $mysqli = new mysqli(hostname:"localhost", username: "root",password:"root", database:"php1611");
    $result = $mysqli->query("SELECT * FROM `users` WHERE email = '$email'");
    $test = -1;
    if($test)echo "hello";
    //if($result->num_rows) 
    var_dump ($result);
    //$mysqli->query("INSERT INTO `users`( `name`, `lastname`, `email`, `pass`") VALUES ('$name','$lastname','$email','$pass')"); 
    