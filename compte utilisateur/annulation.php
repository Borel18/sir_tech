<?php
if (isset($_GET['id']) && !empty($_GET['id']) ) {
    $id = strip_tags($_GET['id']);
    
    require_once('connect.php');
    $statut ="commande livré";
    
    $sql = 'SELECT * FROM `com_produit` WHERE `id` = :id AND statut=:statut ';

    //on prepare la requete
    $query = $db->prepare($sql);

    // on "acroche" les parametres (id)
    $query->bindvalue(':id', $id, PDO::PARAM_INT);
    $query->bindvalue(':statut', $statut, PDO::PARAM_STR);
    
    //on execute la requete
    $query->execute();

    // on recupere la requete
    $statutm = $query->fetch();
    
if ( $statutm) {
    // var_dump($statutm);
    echo("cette commande a deja ete livré et ne peut donc plus etre annulé");
    
    # code...
}else {
    $id = strip_tags($_GET['id']);
    $statut ="en_cour";
    
    require_once('connect.php');

    $sql = 'SELECT * FROM `com_produit` WHERE `id` = :id AND statut=:statut ';

    //on prepare la requete
    $query = $db->prepare($sql);

    // on "acroche" les parametres (id)
    $query->bindvalue(':id', $id, PDO::PARAM_INT);
    $query->bindvalue(':statut', $statut, PDO::PARAM_STR);
    
    //on execute la requete
    $query->execute();

    // on recupere la requete
    $statutm = $query->fetch();
    if ($statutm) {
        echo("cette commande est en cour de livraison son annulation entrainera donc des frais supplementaire");
        // header('location:succes.php');
        // header("location:https://hter.link/AXuoe");
    }else{
        $statut ="annule";
        $sql = 'UPDATE `com_produit` SET `statut`=:statut WHERE `id`=:id;';
            $query = $db->prepare($sql);
    
            $query->bindPARAM(':id', $id, PDO::PARAM_INT);
            $query->bindPARAM(':statut', $statut, PDO::PARAM_STR);
            
    
            //on execute la requete
            $query->execute();
            echo("la commande de ce produit a bien ete Annulé");
        // header("location:https://hter.link/nPnwi");

    
    }
}

    
        
            

   
}
?>