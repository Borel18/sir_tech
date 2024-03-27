<?php
require_once __DIR__. '/db.class.php';
require_once __DIR__. '/panier.class.php';
require_once __DIR__. '/like.class.php';

$DB = new DB();
$panier = new panier($DB);
$like = new like($DB);
?>