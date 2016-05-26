<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 26.05.2016
 * Time: 23:19
 */
$host    = 'localhost';
$db      = 'virgil';
$charset = 'utf8';
$user    = 'root';
$pass    = '';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

$pdo = new PDO($dsn, $user, $pass, $opt);
