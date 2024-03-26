<?php
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\head.php');

// modification des produit
// demarer la session
session_start();


if (!empty($_POST['id']) 
    && !empty($_POST['image'])
    && !empty($_POST['nom'])
    && !empty($_POST['prix'])
    && !empty($_POST['ancien_prix'])
    && !empty($_POST['qualite'])
    && !empty($_POST['reduction'])
    && !empty($_POST['categorie'])
    && !empty($_POST['description'])) {

        // inclut la connexion a la base
        require_once('connect2.php');

        // on nettoie les donnes envoyes
        $id = strip_tags($_POST['id']);
        $image = strip_tags($_POST['image']);
        $nom = strip_tags($_POST['nom']);
        $prix = strip_tags($_POST['prix']);
        $ancien_prix = strip_tags($_POST['ancien_prix']);
        $qualite = strip_tags($_POST['qualite']);
        $reduction = strip_tags($_POST['reduction']);
        $categorie = strip_tags($_POST['categorie']);
        $description= strip_tags($_POST['description']);

        // on prepare la requete
        $sql = 'UPDATE `solde` SET `image`=:image,`nom`=:nom,`prix`=:prix,`ancien_prix`=:ancien_prix,
        `qualite`=:qualite,`reduction`=:reduction,`categorie`=:categorie,`description`=:description WHERE `id`=:id;';
        $query = $db->prepare($sql);

        $query->bindPARAM(':id', $id, PDO::PARAM_INT);
        $query->bindPARAM(':image', $image, PDO::PARAM_STR);
        $query->bindPARAM(':nom', $nom, PDO::PARAM_STR);
        $query->bindPARAM(':prix', $prix, PDO::PARAM_INT);
        $query->bindPARAM(':ancien_prix', $ancien_prix, PDO::PARAM_INT);
        $query->bindPARAM(':qualite', $qualite, PDO::PARAM_STR);
        $query->bindPARAM(':reduction', $reduction, PDO::PARAM_INT);
        $query->bindPARAM(':categorie', $categorie, PDO::PARAM_STR);
        $query->bindPARAM(':description', $description, PDO::PARAM_STR);
        

        //on execute la requete
        $query->execute();

        $_SESSION['message'] = "produit modifié";
             

             header('Location:indexSolde.php');    
}else{
    $_SESSION['erreur']= "les champs sont incomplet";
}
//  verification de lexistence de l'id
if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect2.php');

    // on nettoie l'id envoy&
    $id = strip_tags($_GET['id']);

    $sql = 'SELECT * FROM `solde` WHERE `id` = :id;';
    
    //on prepare la requete
    $query = $db->prepare($sql);
    // on "acroche" les parametres (id)
    $query->bindvalue(':id', $id, PDO::PARAM_INT);
         
    //on execute la requete
    $query->execute();

    // on recupere la requete
    $solde= $query->fetch();

    // on verifie si le produit existe
    if(!$solde){
        $_SESSION['erreur'] = "cet id n'existe pas";
        header('Location: index1.php'); 
    }

}else{
$_SESSION['erreur']= "URL invalide";
header('location: index1.php');
} 


?>

     <main class ="container">
        <div class="row">
        <?php
          if(!empty($_session['erreur'])) {
            echo '<div class="alert alert-danger" role="alert">
            '. $_session['message '].'    
            </div>'; 
                  $_SESSION['erreur'] = "";
         }
          ?>
          
         <main>
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
                    <h5 class="card-title text-center pb-0 fs-4">Modifier Le Produit </h5>
                    <p class="text-center small">Entrer les modifications apporte au produit</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="" method="post">
                  <div class="col-12">
                      <label for="id" class="form-label">id</label>
                      <input type="text" name="id" class="form-control" id="id" required value="<?=$solde['id']?>">
                      <div class="invalid-feedback">svp veillez entrer le l'id svp!</div>
                    </div> 
                  <div class="col-12">
                      <label for="image" class="form-label">image</label>
                      <input type="text" name="image" class="form-control" id="image" required value="<?=$solde['image']?>">
                      <div class="invalid-feedback">svp veillez entrer le lien de l'image du produit!</div>
                    </div>
                    <div class="col-12">
                      <label for="nom" class="form-label">nom</label>
                      <input type="text" name="nom" class="form-control" id="" required value="<?=$solde['nom']?>">
                      <div class="invalid-feedback">svp veillez entrer le nom du produit!</div>
                    </div>
                    <div class="col-12">
                      <label for="prix" class="form-label">nouveau prix</label>
                      <input type="number" name="prix" class="form-control" id="prix" required value="<?=$solde['prix']?>">
                      <div class="invalid-feedback">svp veillez entrer le nouveau prix du produit!</div>
                    </div>
                    <div class="col-12">
                      <label for="ancien_prix" class="form-label">ancien prix</label>
                      <input type="number" name="ancien_prix" class="form-control" id="ancien_prix" required value="<?=$solde['ancien_prix']?>">
                      <div class="invalid-feedback">svp veillez entrer l'ancien montant du produit!</div>
                    </div>
                    <div class="col-12">
                      <label for="qualite" class="form-label">qualité</label>
                      <input type="text" name="qualite" class="form-control" id="qualite" required value="<?=$solde['qualite']?>">
                      <div class="invalid-feedback">svp veillez preciser la qualité du produit</div>
                    </div>
                    <div class="col-12">
                      <label for="reduction" class="form-label">reduction</label>
                      <input type="text" name="reduction" class="form-control" id="reduction" required value="<?=$solde['reduction']?>">
                      <div class="invalid-feedback">svp veillez entrer la valeur de la reduction</div>
                    </div>
                    <div class="col-12">
                      <label for="categorie" class="form-label">categorie</label>
                      <input type="text" name="categorie" class="form-control" id="prix" required value="<?=$solde['categorie']?>">
                      <div class="invalid-feedback">veillez entrer la categorie de larticle!</div>
                    </div>
                    <div class="col-12">
                      <label for="description" class="form-label">description</label>
                      <textarea name="description" id="description" cols="30" rows="10" class="form-control" required value="<?=$solde['description']?>"></textarea>
                      <div class="invalid-feedback">svp veillez entrer la description du produit!</div>
                    </div>

                    

                    
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">modifier</button>
                    </div>
                    <a href="indexSolde.php">retour</a>
                    
                  </form>

                </div>
              </div>

       
<?php
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\footer.php');
?>