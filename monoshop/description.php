<?php

// demarer la session
session_start();
// inclure le header

require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\head.php');
 
// est ce que l'id existe et nest pas vide dans lurl
if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect2.php');

         // on nettoie l'id envoye
         $id = strip_tags($_GET['id']);

         $sql = 'SELECT * FROM `user` WHERE `id` = :id;';

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
             header('Location: index2.php'); 
         }

}else{
    $_session['erreur']= "URL invalide";
    header('location: index2.php');
} 
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>detail client</title>
  </head>
  <body>
      <main class="container">
          <div class="row">
              <section class="col-1">
              <h1>details client  </h1>
              <p>id : <?= $user['id']?> </p>
              <p>pseudo: <?= $user['username']?> </p>
              <p>email: <?= $user['email']?> </p>
              <p>mot de passe: <?= $user['password']?> </p>
              <p>jeton de confirmation: <?= $user['confirmation_token']?> </p>
              <p>date de confirmation du compte: <?= $user['confirmed_at']?> </p>
              </section>
              <a href="index2.php?id=<?=$user['id']?>">retour</a>
          </div>
      </main>
  </body>
  </html>
<?php
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\footer.php');
?>