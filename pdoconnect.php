<?php
date_default_timezone_set("Asia/Riyadh");
$dsn = 'mysql:host=localhost;dbname=data';
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 
$pdo = new PDO($dsn, $username, $password, $options);
//$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
if (!$pdo) {
   echo 'not connect';
   }
?>