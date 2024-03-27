<?php

require_once __DIR__. '/_header.php';
require_once __DIR__. '/config/connexion.php';


// $req = $access->prepare("SELECT * FROM produits ORDER BY id DESC");
// $req->execute();

// $data=$req->fetchAll(PDO::FETCH_OBJ);
// return $data;

if(isset($_GET['id'])  ){
    $getid= (int)$_GET['id'];
    

    $sessionid= 4;
    // echo($_GET['id']);
    $check = $access->prepare("SELECT * FROM produits WHERE id =?");
    $check->execute(array($getid));

    if ($check->rowCount()==1) {
        // echo("bonjour");
        

            $check_like = $access->prepare("SELECT id_like FROM likes WHERE id_article = ? AND id_user = ? ");
            $check_like->execute(array($getid,$sessionid));
            
            if ($check_like->rowCount() == 1) {
            die("vous avez deja ajouté ce produit en favorie");
            }else {
                $check = $access->prepare("INSERT INTO likes (id_article,id_user) VALUES (?, ?)");
                $check->execute(array($getid,$sessionid));
                if (isset($_GET{'id'})) {
                    # code...
                    
                    $product=$DB->query('SELECT id FROM produits WHERE id=:id',array('id'=>$_GET['id']));
                    // var_dump($produit);
                    if(empty($product)){
                        echo("ce produit nexiste pas ");
                    }
                    
                    $like->add($product[0]->id);
                    // $json['error'] = false;
                    // $json['total'] = $panier->total();
                    // $json['count'] = $panier->count();
                
                
                    echo('le produit a bien ete ajouté en favorie ');
                    
                
                }else {
                    echo("vous navez pas selectionné de produits a ajouter au favorie");
                }
                //  echo json_encode($json);
                
                
            }
            
        
        // echo("bonjour");
        //  header('location: '.$_SERVER['HTTP_REFERER']);
        
    }

}

// $json = array('error'=>true);


