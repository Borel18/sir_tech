<?php
// demarer la session
session_start();

require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\head.php');

// modification des produit


if (!empty($_POST['id']) 
    && !empty($_POST['nom'])
    && !empty($_POST['description'])
    && !empty($_POST['prix'])) {

        // inclut la connexion a la base
        require_once('connect2.php');

        // on nettoie les donnes envoyes
        $id = strip_tags($_POST['id']);
        $nom = strip_tags($_POST['nom']);
        $description = strip_tags($_POST['description']);
        $prix = strip_tags($_POST['prix']);

        // on prepare la requete
        $sql = 'UPDATE `produits` SET `nom`=:nom,`description`=:description,`prix`=:prix WHERE `id`=:id;';
        $query = $db->prepare($sql);

        $query->bindPARAM(':id', $id, PDO::PARAM_INT);
        $query->bindPARAM(':nom', $nom, PDO::PARAM_STR);
        $query->bindPARAM(':description', $description, PDO::PARAM_STR);
        $query->bindPARAM(':prix', $prix, PDO::PARAM_INT);

        //on execute la requete
        $query->execute();

        $_SESSION['message'] = "produit modifié";
             

             header('Location:index1.php');    
}else{
    $_SESSION['erreur']= "les champs sont incomplet";
}
//  verification de lexistence de l'id
if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect2.php');

    // on nettoie l'id envoy&
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
                    <h5 class="card-title text-center pb-0 fs-4">Modifier Le Produit</h5>
                    <p class="text-center small">Entrer les modifications apporte au produit</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="" method="post">
                    <div class="col-12">
                      <label for="id" class="form-label">id</label>
                      <input type="number" name="id" class="form-control" id="id" required value="<?=$produits['id']?>">
                      <div class="invalid-feedback">svp veillez entrer l'id du produit!</div>
                    </div>

                    <div class="col-12">
                      <label for="nom" class="form-label">nom</label>
                      <input type="text" name="nom" class="form-control" id="nom" required value="<?=$produits['nom']?>">
                      <div class="invalid-feedback">svp veillez entrer le nom du produit!</div>
                    </div>

                    <div class="col-12">
                      <label for="description" class="form-label">description</label>
                      <input type="text" name="description" class="form-control" id="description" required value="<?=$produits['description']?>">
                      <div class="invalid-feedback">svp veillez entrer la description du produit!</div>
                    </div>

                    <div class="col-12">
                      <label for="prix" class="form-label">prix</label>
                      <input type="number" name="prix" class="form-control" id="prix" required value="<?=$produits['prix']?>">
                      <div class="invalid-feedback">veillez entrer le prix de larticle!</div>
                    </div>

                    
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">modifier</button>
                    </div>
                    <a href="index1.php">retour</a>
                    
                  </form>

                </div>
              </div>

       
<?php
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\footer.php');
?>