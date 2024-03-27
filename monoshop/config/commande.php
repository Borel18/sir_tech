<?php
function ajouter($image,$nom,$prix,$desc,$cathegorie,$ancien)
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("INSERT INTO produits(image,nom,prix,description,cathegorie,ancien_prix) VALUES ($image,$nom,$prix,$desc)");
        $req->execute(array($image,$nom,$prix,$desc,$cathegorie,$ancien));
        $req->closeCursor();
    }
}
function afficher()
{
    if(require("connexion.php"))
    {
        $req = $access->prepare("SELECT * FROM produits WHERE solde IS NULL ORDER BY id DESC");
        $req->execute();
        
        $data=$req->fetchAll(PDO::FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
}
function afficherCategorie()
{
    if(require("connexion.php"))
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
    if(require("connexion.php"))
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
    if(require("connexion.php")){
        $req=$access->prepare("DELETE * FROM produits WHERE id =?");
        $req->execute(array($id));

    }

}
?>