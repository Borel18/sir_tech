<?php

// demarer la session
session_start();
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\head.php');
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\aside.php');
// inclure la connexion a la base 
require_once('connect2.php');
$sql = 'SELECT* FROM `produits`';

// on prepqre lq requete
$query = $db->prepare($sql);

// executer la requete
$query->execute();

// on stoce le resultat dans le tableau associatif
$result = $query->fetchAll(pdo::FETCH_ASSOC);
 require_once('close.php');
?>

        <?php
         require_once ('C:\xampp\htdocs\sir_tech\compte admin\include1\dashboard.php');
          if(!empty($_session['erreur'])) {
            echo '<div class="alert alert-danger" role="alert">
                '. $_SESSION['erreur'].'    
                  </div>'; 
                  $_SESSION['erreur'] = "";
         }
          ?>
          <?php
          if(!empty($_session['message'])) {
            echo '<div class="alert alert-success " role="alert">
                '. $_SESSION['messageh .'].'    
            </div>'; 
                  $_SESSION['message'] = "";
         }
          ?>
          
            <h1>liste des produits</h1>
    <section class="section">
      <div class="row">
        <div class="col-lg-6">
            <div class="card-body">
            <a href="\sir_tech\compte admin\add.php" >
              <button type="button" class="btn btn-primary rounded-pill">ajouter un produit</button>
            </a>
            </div>
        
    </section>
            
            <table class="table">
                <thead>
                    <th>id</th>
                    <th>nom</th>
                    <th>lien de l'image</th>
                    <th>description</th>
                    <th>prix</th>
                    <th>action</th>
                </thead>

                <tbody>
                <?php
                // on boucle sur la variable de result
                foreach($result as $produits ){
                    ?> 
                    <tr>
                        <td><?= $produits['id']?></td>
                        <td><?= $produits['nom']?></td>
                        <td><?= $produits['image']?></td>
                        <td><?= $produits['description']?></td>
                        <td><?= $produits['prix']?>FCFA</td>
                        <td>
                            <a href="detail.php?id=<?=$produits['id']?>">voir</a>
                            <a href="edit.php?id=<?=$produits['id']?>">modifier</a>
                            <a href="delete.php?id=<?=$produits['id']?>">supprimer</a>
                        </td>
                    </tr>
                    
                    <?php
                }

                ?>
                
              
              </tbody>
            </table>
            
        </div>
     </main>
<?php
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\footer.php');
?>