<?php

// demarer la session
session_start();
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\head.php');
require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\aside.php');
// inclure la connexion a la base 
require_once('connect2.php');
$sql = 'SELECT* FROM `user`WHERE confirmed_at IS NOT NULL';

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
            <h1>liste des clients</h1>
            <table class="table">
                <thead>
                    <th>id</th>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>date inscription</th>
                    <th>action</th>
                </thead>

                <tbody>
                <?php
                // on boucle sur la variable de result
                foreach($result as $user ){
                    ?> 
                    <tr>
                        <td><?= $user['id']?></td>
                        <td><?= $user['username']?></td>
                        <td><?= $user['email']?></td>
                        <td><?= $user['password']?></td>
                        <td><?= $user['confirmed_at']?></td>
                        <td>
                            <a href="detail2.php?id=<?=$user['id']?>">voir</a>
                            <a href="delete2.php?id=<?=$user['id']?>">supprimer</a>
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
  // inclure le footer
  require_once('C:\xampp\htdocs\sir_tech\compte admin\include1\footer.php');
?>