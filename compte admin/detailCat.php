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

         $sql = 'SELECT * FROM `categorie` WHERE `id` = :id;';

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
<main id="main" class="main">

<div class="pagetitle">
  <h1>Modal</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Components</li>
      <li class="breadcrumb-item active">Modal</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">details client</h5>
          <section class="">
              <p>id : <?= $user['id']?> </p>
              <p>nom: <?= $user['nom']?> </p>
              <p>lien de li'image: <?= $user['image']?> </p>
              </section>
              <a href="indexCategorie.php?id=<?=$user['id']?>">retour</a>
          </div>
          <div class="modal-footer">
                  
                </div>
                </form>
              </div>
            </div>
          </div><!-- End Basic Modal-->
        </div>
      </div>
    </div>
  </div>
</section>
      </main>
  
<?php
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\footer.php');
?>