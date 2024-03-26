<?php
// demarer la session
session_start();
 
// est ce que l'id existe et nest pas vide dans lurl
if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect2.php');

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
         $user = $query->fetch();

         // on verifie si le produit existe
         if(!$user){
             $_SESSION['erreur'] = "cet id n'existe pas";
             header('Location: indexCategorie.php');
             die(); 
         }

         $sql = 'DELETE FROM `categorie` WHERE `id` = :id;';
         //on prepare la requete
         $query = $db->prepare($sql);

         // on "acroche" les parametres (id)
         $query->bindvalue(':id', $id, PDO::PARAM_INT);
         
         //on execute la requete
         $query->execute();
         $_SESSION['message'] = "categorie supprimé";
         header('Location: indexCategorie.php'); 

}else{
    $_session['erreur']= "URL invalide";
    header('location: indexCategorie.php');
} 
