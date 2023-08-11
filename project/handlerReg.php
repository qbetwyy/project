<?php
    $name = $_POST['name']; 
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $mysqli = new mysqli(hostname:"localhost", username: "root",password:"root", database:"php1611");
    //$mysqli->query("");
     $mysqli->query("INSERT INTO `users`( `name`, `lastname`, `email`, `pass`")'VALUES'('$name','$lastname','$email','$pass')");