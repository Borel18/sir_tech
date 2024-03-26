<?php
try{
    // connexion a la base de donne
    $db = new PDO('mysql: host=localhost;dbname=espace_membre','root','');
    $db->exec('SET NAMES UTF8');  
}catch(PDOExeption $e){
    echo 'erreur:'. $e->getMessage();
    die(); 

}

?>