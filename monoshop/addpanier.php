<?php
require_once __DIR__. '/_header.php';


// $json = array('error'=>true);

if (isset($_GET{'id'})) {
    # code...
    $produit=$DB->query('SELECT id FROM produits WHERE id=:id',array('id'=>$_GET['id']));
    // var_dump($produit);
    if(empty($produit)){
        echo("ce produit nexiste pas ");
    }
    $panier->add($produit[0]->id);
    // $json['error'] = false;
    // $json['total'] = $panier->total();
    // $json['count'] = $panier->count();
    
    echo('le produit a bien ete ajouté a votre panier ');

}else {
    echo("vous navez pas selectionné de produits a ajouter au panier");
}
//  echo json_encode($json);

?>