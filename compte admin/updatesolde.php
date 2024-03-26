<?php

// // demarer la session
// session_start();


// // modification des produit


// if (!empty($_POST['id']) 
//     && !empty($_POST['pourcentage_reduction'])) {

//         // inclut la connexion a la base
//         require_once('connect2.php');

//         // on nettoie les donnes envoyes
//         $id = strip_tags($_POST['id']);
//         $pourcentage_reduction = strip_tags($_POST['pourcentage_reduction']);
        
//         // on prepare la requete
//         $sql = 'UPDATE `produits` SET `pourcentage`=:pourcentage WHERE `id`=:id;';
//         $query = $db->prepare($sql);

//         $query->bindPARAM(':id', $id, PDO::PARAM_INT);
//         $query->bindPARAM(':pourcentage_reduction', $pourcentage_reduction, PDO::PARAM_INT);
        
//         //on execute la requete
//         $query->execute();

//         $_SESSION['message'] = "produit modifié";
//              require_once('close.php');

//              header('Location:index1.php');    
// }else{
//     $_SESSION['erreur']= "les champs sont incomplet";
// }
// //  verification de lexistence de l'id
// if(isset($_GET['id']) && !empty($_GET['id'])){
//     require_once('connect2.php');

//     // on nettoie l'id envoy&
//     $id = strip_tags($_GET['id']);

//     $sql = 'SELECT * FROM `produits` WHERE `id` = :id;';
    
//     //on prepare la requete
//     $query = $db->prepare($sql);
//     // on "acroche" les parametres (id)
//     $query->bindvalue(':id', $id, PDO::PARAM_INT);
         
//     //on execute la requete
//     $query->execute();

//     // on recupere la requete
//     $produits = $query->fetch();

//     // on verifie si le produit existe
//     if(!$produits){
//         $_SESSION['erreur'] = "cet id n'existe pas";
//         header('Location: index1.php'); 
//     }

// }else{
// $_SESSION['erreur']= "URL invalide";
// header('location: indexsolde.php');
// } 


?>
<?php
if (!empty($_POST) && !empty($_POST['id']) && !empty($_POST['pourcentage_reduction'])  ) {
    
    require_once('connect2.php');
    $id = strip_tags($_POST['id']);
    $pourcentage_reduction = strip_tags($_POST['pourcentage_reduction']);
    
    $sql = 'UPDATE `produits` SET `pourcentage_reduction`=:pourcentage_reduction , solde=1 WHERE `id`=:id;';
        $query = $db->prepare($sql);

        $query->bindPARAM(':id', $id, PDO::PARAM_INT);
        $query->bindPARAM(':pourcentage_reduction', $pourcentage_reduction, PDO::PARAM_STR);
    // $query = "SELECT * FROM produits WHERE id = :id AND solde IS NULL;";
    // $req = $db->prepare($query);
    // $req ->execute(['pourcentage' => $_POST['pourcentage'] ]);
    $query->execute();
    
    
    $solde = $query->fetch();
    var_dump($solde);
    // header('Location:indexsolde.php');
    
    
}
?>