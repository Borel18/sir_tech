<?php
session_start();

// inclure le header
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\head.php');
// demarer la session
 
// est ce que l'id existe et nest pas vide dans lurl
if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect2.php');

         // on nettoie l'id envoye
         $id = strip_tags($_GET['id']);

         $sql = 'SELECT * FROM `solde` WHERE `id` = :id;';

         //on prepare la requete
         $query = $db->prepare($sql);

         // on "acroche" les parametres (id)
         $query->bindvalue(':id', $id, PDO::PARAM_INT);
         
         //on execute la requete
         $query->execute();

         // on recupere la requete
         $solde = $query->fetch();

         // on verifie si le produit existe
         if(!$solde){
             $_SESSION['erreur'] = "cet id n'existe pas";
             header('Location: indexSolde.php'); 
         }

}else{
    $_session['erreur']= "URL invalide";
    header('location:indexSolde.php');
} 
?>
<?php
 require_once('C:\xampp\htdocs\sir_tech\monoshop\config\commande.php');

 $Solde = afficher();


?>

      <main class="container">
          <div class="row">
              <section class="col-1">
              <h1>details produit en solde </h1>
              <p>id : <?= $solde['id']?> </p>
              <p>lien de l'image: <?= $solde['image']?> </p>
              <p>nom: <?= $solde['nom']?> </p>
              <p>nouveau prix: <?= $solde['prix']?> </p>
              <p>ancien prix: <?= $solde['ancien_prix']?> </p>
              <p>qualité: <?= $solde['qualite']?> </p>
              <p>reduction: <?= $solde['reduction']?>%</p>
              <p>categorie: <?= $solde['categorie']?> </p>
              <p>description: <?= $solde['description']?> </p>
              </section>
              <a href="indexSolde.php">retour</a>
          </div>
      </main>
  
 <?php
  // inclure le footer
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\footer.php');
              
?>