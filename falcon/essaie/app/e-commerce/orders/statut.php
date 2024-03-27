<?php
    

if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['statut']) && !empty($_GET['statut'])) {
    $id = strip_tags($_GET['id']);
    $statut = "annule";
    
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
    echo("cette commande a ete annule par le commanditaire et ne peut donc pas change de statut");
    # code...
}else {
    $statut = strip_tags($_GET['statut']);
    $sql = 'UPDATE `com_produit` SET `statut`=:statut WHERE `id`=:id;';
        $query = $db->prepare($sql);

        $query->bindPARAM(':id', $id, PDO::PARAM_INT);
        $query->bindPARAM(':statut', $statut, PDO::PARAM_STR);
        

        //on execute la requete
        $query->execute();
        echo("le statut de la commande a bien ete modifier");

    # code...
   
}

    
        
            

   
}
?>