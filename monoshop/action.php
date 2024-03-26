<?php
require_once('config\connexion.php');
// $req = $access->prepare("SELECT * FROM produits ORDER BY id DESC");
// $req->execute();

// $data=$req->fetchAll(PDO::FETCH_OBJ);
// return $data;

if(isset($_GET['t'],$_GET['id']) and !empty($_GET['t']) and !empty($_GET['t'])){
    $getid= (int)$_GET['id'];
    $gett=(int)$_GET['t'];

    $sessionid= 4;
    // echo($_GET['id']);
    $check = $access->prepare("SELECT * FROM produits WHERE id =?");
    $check->execute(array($getid));

    if ($check->rowCount()==1) {
        // echo("bonjour");
        if ($gett == 1) {

            $check_like = $access->prepare("SELECT id_like FROM likes WHERE id_article = ? AND id_user = ? ");
            $check_like->execute(array($getid,$sessionid));
            
            if ($check_like->rowCount() == 1) {
                $del = $access->prepare("DELETE  FROM likes WHERE id_article = ? AND id_user = ? ");
                $del->execute(array($getid,$sessionid));
            
            }else {
                $check = $access->prepare("INSERT INTO likes (id_article,id_user) VALUES (?, ?)");
                $check->execute(array($getid,$sessionid));
            
            }
            
        }
        // echo("bonjour");
        //  header('location: '.$_SERVER['HTTP_REFERER']);
        
    }

}
?>