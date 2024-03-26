<?php
require_once('C:\xampp\htdocs\sir_tech\monoshop\include\header.php');
require_once('C:\xampp\htdocs\sir_tech\monoshop\include\naviguation.php');
require 'StripePayement.php';
?>
<?php
$cart=  $_SESSION['panier'];

$payement= new StripePayement(STRIPE_SECRET);

$payement->startPayement

?>