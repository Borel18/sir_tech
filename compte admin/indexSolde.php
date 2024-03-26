<?php

// demarer la session
session_start();
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\head.php');
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\aside.php');
// inclure la connexion a la base 
require_once('connect2.php');
$sql = 'SELECT* FROM `produits` WHERE solde IS NOT NULL ';

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
            <h1>liste des produits en solde</h1>
            <table class="table">
                <thead>
                    <th>id</th>
                    <th>nom</th>
                    <th>lien de l'image</th>
                    <th>ancien prix</th>
                    <th>prix</th>
                    <th>action</th>
                </thead>

                <tbody>
                <?php
                // on boucle sur la variable de result
                foreach($result as $solde ){
                    ?> 
                    <tr>
                        <td><?= $solde['id']?></td>
                        <td><?= $solde['nom']?></td>
                        <td><?= $solde['image']?></td>
                        <td><?= $solde['ancien_prix']?></td>
                        <td><?= $solde['prix']?>FCFA</td>
                        <td>
                            <a href="detailSolde.php?id=<?=$solde['id']?>">voir</a>
                            
                            <a href="editSolde.php?id=<?=$solde['id']?>">modifier</a>
                            
                            <a href="deleteSolde.php?id=<?=$solde['id']?>">supprimer</a>
                            
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