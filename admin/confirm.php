<?php
session_start();
require_once 'C:\xampp\htdocs\sir_tech\compte utilisateur\include\db.php';
$userId =(int)$_GET['id'];
$token = $_GET['token'];

$query = "SELECT * FROM admin WHERE id = ? ";
$req = $pdo->prepare($query);
$req->execute([$userId]);
$user = $req->fetch();

if($user && $token == $user-> confirmation_token){
    $query ="UPDATE admin SET confirmation_token = NULL, confirmed_at= now() WHERE id=?";
    $req = $pdo -> prepare($query);
    $req -> execute([$userId]);
    $_SESSION['flash']['success'] = "compte cree avec sucess";
    $_SESSION['auth'] = $user;
    header('location:admin.php');

}else{
    $_SESSION['flash']['danger'] = "ce compte n'existe pas veillez vous enregistrer correctement";
    header('location:register.php');

}



?>