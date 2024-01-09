<?php

$servername = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$database_name = '';

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $database_name);

if(!$conn) {
    die('Failed');
}

$sql = "
    CREATE DATABASE IF NOT EXISTS calculator;
    USE calculator;
    CREATE TABLE IF NOT EXISTS history (
        id INT PRIMARY KEY AUTO_INCREMENT,
        history_result VARCHAR(255)
    );
    INSERT INTO history (history_result) VALUES
        ('1 + 2 = 3'),
        ('2 * 15 = 30'),
        ('12 / 2 = 6'),
        ('2 ^ 5 = 32'),
        ('8 - 2 = 6'),
        ('2 ^ 8 = 256');
";

if ($conn->multi_query($sql) === TRUE) {
    header('location:index.php');
} else {
    echo "Error executing SQL statements";
}

$conn->close();
