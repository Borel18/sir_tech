<?php
if (!empty($_POST) && !empty($_POST['id']) && !empty($_POST['pourcentage_reduction'])  ) {
    var_dump($_POST['pourcentage_reduction']);
    
    require_once('connect2.php');
    $id = strip_tags($_POST['id']);
    

         $sql = 'SELECT * FROM `produits` WHERE `id` = :id;';

         //on prepare la requete
         $query = $db->prepare($sql);

         // on "acroche" les parametres (id)
         $query->bindvalue(':id', $id, PDO::PARAM_INT);
         
         //on execute la requete
         $query->execute();

         // on recupere la requete
         $produits = $query->fetch();


    $pourcentage_reduction = strip_tags($_POST['pourcentage_reduction']);
    $prix_reduit= (($produits['prix']*$pourcentage_reduction)/100);
    $prix= ($produits['prix']- $prix_reduit);
    
    $sql = 'UPDATE `produits` SET prix=:prix, solde=1,`pourcentage_reduction`=:pourcentage_reduction  WHERE `id`=:id;';
        $query = $db->prepare($sql);

        $query->bindPARAM(':id', $id, PDO::PARAM_INT);
        $query->bindPARAM(':prix', $prix, PDO::PARAM_INT);
        $query->bindPARAM(':pourcentage_reduction', $pourcentage_reduction, PDO::PARAM_INT);
        $query->execute();
    
    
    $solde = $query->fetch();
    require("connexion.php");
         $req = $access->prepare("SELECT  email FROM user ORDER BY id DESC");
         $req->execute();
         
         $email=$req->fetchAll(PDO::FETCH_OBJ);
         
         $req->closeCursor();
         foreach($email as $mail):
          // var_dump( $mail);
          
         $mailler = $mail->email;
         $subject = " sirtechshop a mis un nouveau produit a ete mise en solde";
         $message = "afin de beneficier , veillez suivre ce lien\n\n
         http://localhost/sir_tech/monoshop/solde.php";
         $headers ="content-type: text/plain; charset=utf-8\r\n";
         $headers .="From: sendmailtest95@gmail.com\r\n";
         mail($mailler,$subject,$message,$headers);

         endforeach;
         
    //var_dump($solde);
     header('Location:product-list.php');
    
    
}
?>