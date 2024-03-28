<?php
function ajouter($nom,$image)
{
    

    if( require_once __DIR__. '/connexion.php')
    {
        $req = $access->prepare("INSERT INTO categorie(nom,image) VALUES ($nom,$image)");
        $req->execute(array($nom,$image));
        $req->closeCursor();
    }
}
function afficher()
{
    if(require_once __DIR__. '/connexion.php')
    {
        $req = $access->prepare("SELECT * FROM categorie ORDER BY id DESC");
        $req->execute();
        
        $data=$req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}
function afficherCategorie()
{
    if(require_once __DIR__. '/connexion.php')
    {
        $req = $access->prepare("SELECT * FROM categorie ORDER BY id DESC");
        $req->execute();
        
        $data=$req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}
function afficherSolde()
{
    if(require_once __DIR__. '/connexion.php')
    {
        $req = $access->prepare("SELECT * FROM produits WHERE solde IS NOT NULL");
        $req->execute();
        
        $data=$req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}
function supprimer($id)
{
    if(require_once __DIR__. '/connexion.php'){
        $req=$access->prepare("DELETE * FROM categorie WHERE id =?");
        $req->execute(array($id));

    }

}

?>