<?php

$user = "root";
$pass = "root";

try {
    $pdo = new PDO('mysql:host=localhost;dbname=2chan-bbs', $user, $pass);
    echo 'DBとの接続に成功しました';
} catch (PDOException $error) {
    echo $error->getMessage();
}