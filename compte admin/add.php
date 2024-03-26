<?php
  // demarer une session

  session_start(); 
  require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\head.php');
  require_once('connect2.php'); 
  if($_POST){
      if(!empty($_POST['id'])
      && !empty($_POST['image'])
     && !empty($_POST['nom'])
     && !empty($_POST['description'])
     && !empty($_POST['prix'])){       
        // on inclut la connection a la base
   
  
       // on nettoie les donnnees envoyees
       $id = strip_tags($_POST['id']);
       $image = strip_tags($_POST['image']);
       $nom = strip_tags($_POST['nom']);
       $description = strip_tags($_POST['description']);
       $prix = strip_tags($_POST['prix']);
       
         // on prepare la requete 

        $sql = 'INSERT INTO `produits` (`id`,`image`,`nom`,`description`,`prix`) VALUES
        (:id,:image, :nom, :description,:prix);';

         $query = $db->prepare($sql);

         $query->bindPARAM(':id', $id, PDO::PARAM_INT);
         $query->bindPARAM(':image', $image, PDO::PARAM_STR);
         $query->bindPARAM(':nom', $nom, PDO::PARAM_STR);
         $query->bindPARAM(':description', $description, PDO::PARAM_STR);
         $query->bindPARAM(':prix', $prix, PDO::PARAM_INT);

         $query->execute();

         $_SESSION['message'] = "produit ajoute ajouter";
         require_once('close.php');

          header('location:index1.php'); 
      }else{
          $_SESSION['erreur'] = " les champs du formulaire sont incomplet"; 
      }  
      
  }
?>


      <main class="container">
        <div class="row">
        <?php
          if(!empty($_session['erreur'])) {
            echo '<div class="alert alert-danger" role="alert">
                '. $_SESSION['erreur'].'    
            </div>'; 
                  $_SESSION['erreur'] = "";
         }
          ?>

         <h1>ajouter un produit</h1>
         
         <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Ajouter un Produit</h5>
                    <p class="text-center small">Entrer les details du produit a ajouter</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="" method="post">
                    <div class="col-12">
                      <label for="id" class="form-label">id</label>
                      <input type="number" name="id" class="form-control" id="id" required >
                      <div class="invalid-feedback">svp veillez entrer l'id du produit!</div>
                    </div>
                    <div class="col-12">
                      <label for="image" class="form-label">lien de limage</label>
                      <input type="name" name="image" class="form-control" id="image" required >
                      <div class="invalid-feedback">svp veillez entrer le titre de l'image</div>
                    </div>


                    <div class="col-12">
                      <label for="nom" class="form-label">nom</label>
                      <input type="text" name="nom" class="form-control" id="nom" required >
                      <div class="invalid-feedback">svp veillez entrer le nom du produit!</div>
                    </div>
                    
                    <div class="col-12">
                      <label for="description" class="form-label">description</label>
                      <textarea name="description" id="description" cols="30" rows="10" class="form-control"required></textarea>
                      <div class="invalid-feedback">svp veillez entrer la description du produit!</div>
                    </div>

                    <div class="col-12">
                      <label for="prix" class="form-label">prix</label>
                      <input type="number" name="prix" class="form-control" id="prix" required >
                      <div class="invalid-feedback">veillez entrer le prix de larticle!</div>
                    </div>

                    
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Ajouter</button>
                    </div>
                    <a href="index1.php">retour</a>
                    
                  </form>

                </div>
              </div>

              
<?php
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\footer.php');
?>