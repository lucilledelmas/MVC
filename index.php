<?php
require_once "./vendor/autoload.php";
try{
    $pdo = new \PDO("mysql:host=localhost;dbname=kandt","root","root");
    $pdo->query("SET NAMES 'UTF8';");
}catch(PDOException $e){
    die($e->getMessage());
}
$page = new \Controller\pageController($pdo);
$page->displayAction();