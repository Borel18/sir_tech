<?php
// demarer la session
session_start();
 
// est ce que l'id existe et nest pas vide dans lurl
if(isset($_GET['id']) && !empty($_GET['id'])){
  require_once __DIR__. '/connect2.php';
    
         // on nettoie l'id envoye
         $id = strip_tags($_GET['id']);

         $sql = 'SELECT * FROM `categorie` WHERE `id` =:id;';

         //on prepare la requete
         $query = $db->prepare($sql);

         // on "acroche" les parametres (id)
         $query->bindvalue(':id', $id, PDO::PARAM_INT);
         
         //on execute la requete
         $query->execute();

         // on recupere la requete
         $produits = $query->fetch();

         // on verifie si le produit existe
         if(!$produits){
             $_SESSION['erreur'] = "cet id n'existe pas";
             header('Location:product-list.php');
             die(); 
         }

         $sql = 'DELETE FROM `categorie` WHERE `id` = :id;';
         //on prepare la requete
         $query = $db->prepare($sql);

         // on "acroche" les parametres (id)
         $query->bindvalue(':id', $id, PDO::PARAM_INT);
         
         //on execute la requete
         $query->execute();
         $_SESSION['message'] = "produit supprimé";
         header('Location:categorie-list.php'); 

}else{
    $_session['erreur']= "URL invalide";
    header('location: product-list.php');
} 
