<?php

// demarer la session
session_start();
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\head.php');
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\aside.php');
// inclure la connexion a la base 
require_once('connect2.php');
$sql = 'SELECT* FROM `categorie`';

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
                '. $_SESSION['message'].'    
            </div>'; 
                  $_SESSION['message'] = "";
         }
          ?>
          
            <h1>liste des categorie</h1>
    <section class="section">
      <div class="row">
        <div class="col-lg-6">
            <div class="card-body">
            <a href="\sir_tech\compte admin\addCat.php" >
              <button type="button" class="btn btn-primary rounded-pill">ajouter une catégorie</button>
            </a>
            </div>
        
    </section>
            
            <table class="table">
                <thead>
                    <th>id</th>
                    <th>nom</th>
                    <th>lien de l'image</th>
                    <th>action</th>
                </thead>

                <tbody>
                <?php
                // on boucle sur la variable de result
                foreach($result as $categorie ){
                    ?> 
                    <tr>
                        <td><?= $categorie['id']?></td>
                        <td><?= $categorie['nom']?></td>
                        <td><?= $categorie['image']?></td>
                        
                        <td>
                            <a href="detailCat.php?id=<?=$categorie['id']?>">voir</a>
                            <a href="editCat.php?id=<?=$categorie['id']?>">modifier</a>
                            <a href="deleteCat.php?id=<?=$categorie['id']?>">supprimer</a>
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