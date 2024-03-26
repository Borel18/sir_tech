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

         $sql = 'SELECT * FROM `produits` WHERE `id` = :id;';

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
             header('Location: index1.php'); 
         }

}else{
    $_session['erreur']= "URL invalide";
    header('location: index1.php');
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
          <h5 class="card-title">details produits</h5>
          <section class="">
              
              <div><p>id :<?= $produits['id']?> </p></div>
              <div><p>nom:<?= $produits['nom']?> </p></div>
              <div><p>description: <?= $produits['description']?> </p></div>
              <div><p>prix: <?= $produits['prix']?> </p></div>
          </section>
            <p><a href="index1.php?id=<?=$produits['id']?>">retour</a></p>

          
          <!-- Basic Modal -->
          <a >
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
          ajouter le produit en solde
          </button>
          </a>
          <div class="modal fade" id="basicModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Basic Modal</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">detail de la mise en solde</h5>
                    <p class="text-center small">veillez entrer le pour cenntage de reduction</p>
                </div>
                <form class="row g-3" action="updatesolde.php" method="post" >
                <div class="col-12">
                      <label for="id" class="form-label">id</label>
                      <input type="number" name="id" class="form-control" id="id" required value="<?=$produits['id']?>">
                      <div class="invalid-feedback">svp veillez entrer l'id du produit!</div>
                    </div>
                    <div class="col-12">
                      <label for="pourcentage_reduction" class="form-label">pourcentage de reduction</label>
                        <input type="number" name="pourcentage_reduction" class="form-control" id="pourcentage_reduction" required>
                        <div class="invalid-feedback">svp entrer la valeur du pourcentage de reduction</div>
                    </div>

                  
                  
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
                   <a href="updatesolde.php?id=<?=$produits['id']?>"><button type="submit" class="btn btn-primary"id="submit" name="submit">envoyer</button></a>
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

</main><!-- End #main -->

      <main class="container">
          <div class="row">
              
              
          </div>
      </main>
  
  <?php
  // inclure le footer
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\footer.php');
              
?>

