<?php

function afficher()
{
    
    if(require_once __DIR__. '/connexion.php')
    {
        $req = $access->prepare("SELECT * FROM com_produit ORDER BY id DESC");
        $req->execute();
        
        $data=$req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        
        $req->closeCursor();

    }
}

?>