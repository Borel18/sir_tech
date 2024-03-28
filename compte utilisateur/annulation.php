<?php
if (isset($_GET['id']) && !empty($_GET['id']) ) {
    $id = strip_tags($_GET['id']);
    $statut ="commande livré";
    require_once __DIR__. '/include/db.php';

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
        
    }else{
        $statut ="annule";
        $query= "UPDATE com_produit SET statut = ? WHERE id = ?" ; 
        $pdo -> prepare($query)-> execute([$statut,$id]);
              
       
        echo("la commande de ce produit a bien ete Annulé");
        
    	
    }
}

    
        
            

   
}
?>