<?php

session_start();

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$database_name = 'calculator';

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $database_name);

if(!$conn) {
    die('Failed');
}