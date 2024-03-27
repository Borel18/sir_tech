<?php
// connexion a la base de donne
try {
    //code...
$access=new pdo("mysql:host=localhost;dbname=espace_membre;charset=utf8","root","");
$access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);


} catch (Exception $e) {

    $e->getMessage();
}

?>
