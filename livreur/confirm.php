<?php
session_start();
require_once 'include\db.php';
$userId =(int)$_GET['id'];
$token = $_GET['token'];

$query = "SELECT * FROM livreur WHERE id = ? ";
$req = $pdo->prepare($query);
$req->execute([$userId]);
$user = $req->fetch();

if($user && $token == $user-> confirmation_token){
    $query ="UPDATE livreur SET confirmation_token = NULL, confirmed_at= now() WHERE id=?";
    $req = $pdo -> prepare($query);
    $req -> execute([$userId]);
    $_SESSION['flash']['success'] = "compte cree avec sucess";
    $_SESSION['auth'] = $user;
    header('location:..\compte admin\index1.php');

}else{
    $_SESSION['flash']['danger'] = "erreur de connexion ce compte n'existe pas veillez vous enregistrer correctement";
    header('location:register.php');

}



?>