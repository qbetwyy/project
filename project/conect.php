<?php
$user="root";
$password="";
$host="localhost";
$db="testing";
$dbh = 'mysql:host='.$host.'dbname ='. $db.'; charset=utf8';
$pdo= new PDO ($dbh,$user,$password); 