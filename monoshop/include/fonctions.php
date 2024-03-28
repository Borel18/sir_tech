<?php

function generateToken($lenght){
    $alphanue = "0123456789abcdefghijklmnopkrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    
    return substr(str_shuffle(str_repeat($alphanue,$lenght)),0,100);
    
}
function is_connect(){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION['auth'])) {
        $_SESSION['flash']['danger'] ="access a ce compte est reservé veillez creer votre compte";
        header("location:found.php");
        exit();
    }
}
function reconnect_auto(){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_COOKIE['remember']) && !isset($_SESSION['auth'])) {
        require_once __DIR__. '/../../falcon/essaie/pages/authentication/card/include/db.php';
        if (!isset($pdo)) {
            global $pdo;
        }
        $remember_token = $_COOKIE['remember'];
        $parts = explode("::",$remember_token);
        $userId = $parts[0];
        $req = $pdo->prepare("SELECT * FROM user WHERE id =?");
        $req ->execute([$userId]);
        $user = $req ->fetch();

        if ($user) {
           $expected = $userId."::".$user->remember_token. sha1($user->id,"borel");
           if ($expected == $_COOKIE['remember']) {
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] ="connexion effectué avec sucess";

            setcookie("remember",$remember_token,time()+60*60*24*7);
            
            header("location:index.php");
            exit();

           }else{
            setcookie("remember","",-1);
           }
        }else{
            setcookie("remember","",-1);
           }
    }
}
?>