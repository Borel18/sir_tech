<?php
require 'db.class.php';
require 'panier.class.php';
require 'like.class.php';
$DB = new DB();
$panier = new panier($DB);
$like = new like($DB);
?>