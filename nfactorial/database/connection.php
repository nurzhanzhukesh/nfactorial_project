<?php
$driver = 'mysql';
$servername = 'localhost';
$username = 'root';
$password = '';
$charset = 'utf8';
$dbname = 'nfactorial';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try {
    $pdo = new PDO (
        "$driver:host=$servername; dbname=$dbname;charset=$charset", $username, $password, $options
    );
} 
catch (PDOException $i) {
    die("Ошибка подключения к БД");
}

