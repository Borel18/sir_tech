<?php
if (isset($_GET['id']) && !empty($_GET['id']) ) {
    $id = strip_tags($_GET['id']);
    $statut ="commande livré";
    require_once 'include\db.php';
	$query = "SELECT * FROM com_produit WHERE id= :id AND statut = :statut ";
    $req = $pdo->prepare($query);
    $req ->execute(['id' => $id ,'statut' => $statut]);
											
    $statutm = $req->fetch();

    
    
if ( $statutm) {
    // var_dump($statutm);
    echo("cette commande a deja ete livré et ne peut donc plus etre annulé");
    
    # code...
}else {
    $id = strip_tags($_GET['id']);
    $statut ="en_cour";

    $query = "SELECT * FROM com_produit WHERE id= :id AND statut = :statut ";
    $req = $pdo->prepare($query);
    $req ->execute(['id' => $id ,'statut' => $statut]);
											
    $statutm = $req->fetch();

    
    if ($statutm) {
        echo("cette commande est en cour de livraison son annulation entrainera donc des frais supplementaire");
        // header('location:succes.php');
        // header("location:https://hter.link/AXuoe");
    }else{
        $statut ="annule";
        $query = "SELECT * FROM com_produit WHERE id= :id AND statut = :statut ";
    $req = $pdo->prepare($query);
    $req ->execute(['id' => $id ,'statut' => $statut]);
											
            echo("la commande de ce produit a bien ete Annulé");
        // header("location:https://hter.link/nPnwi");

    
    }
}

    
        
            

   
}
?>