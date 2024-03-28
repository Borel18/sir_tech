<?php
session_start();

require_once __DIR__. '/include/db.php';


if (isset($_GET['id']) && isset($_GET['token'])) {

$userId =(int)$_GET['id'];
$token = $_GET['token'];


$query = "SELECT * FROM user WHERE id = ? 
AND reset_token= ? 
AND reset_at > DATE_SUB(NOW(), INTERVAL 130 MINUTE) 
AND confirmed_at IS NOT NULL ";
$req = $pdo->prepare($query);
$req->execute([$userId, $token]);

$user = $req->fetch();

if($user){
  if (!empty($_POST)) {
    if(!empty($_POST['password']) || $_POST['password'] == $_POST['password_confirm'] ){
      $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
      $query= "UPDATE user SET password = ?,reset_token = NULL,reset_at = NULL WHERE id = ?"; 
      $pdo -> prepare($query)-> execute([$password,$userId]);
      $_SESSION['flash']['sucess'] = "votre mot de passe a bien ete reinitialisé";
      $_SESSION['auth']= $user;
      header('location:index.php');
      exit();
    }else{
      $_SESSION['flash']['danger'] ="le mot de passe et la confirmation ne correspondent pas";  
    }
  }
  
//     $query ="UPDATE user SET confirmation_token = NULL, confirmed_at= now() WHERE id=?";
//     $req = $pdo -> prepare($query);
//     $req -> execute([$userId]);
//     $_SESSION['flash']['success'] = "compte cree avec sucess";
//     $_SESSION['auth'] = $user;
//     header('location:reset.php');

}else{
    $_SESSION['flash']['danger'] = "temps ecouler veillez reessayer le processus de reinitiallisation";
    header('location:login.php');
    exit();
 }
} else {
  header('location:login.php');
  exit();
}







?>
<?php

require_once __DIR__. '/include/header3.php';



  ?>
  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">reinitialisation du mot de passe</h5>
                    <p class="text-center small">Entrer votre nouveau mot de passe</p>
                  </div>
<form class="row g-3 needs-validation" action="" method="post" novalidate >

<div class="col-12">
  <label for="password" class="form-label">mot de passe</label>
    <input type="password" name="password" class="form-control" id="password" required>
    <div class="invalid-feedback">svp entrer votre  votre mot de passe</div>
</div>
<div class="col-12">
  <label for="password" class="form-label">confirmation mot de passe</label>
    <input type="password" name="password_confirm" class="form-control" id="password" required>
    <div class="invalid-feedback">svp votre confirmation nest pas valide</div>
</div>
</div>
<div class="col-12">
  <button class="btn btn-primary w-100" type="submit">renouveler</button>
</div>
<div class="col-12">
  <p class="small mb-0">Don't have account? <a href="register.php">Create an account</a></p>
</div>
</form>
  <?php
require_once __DIR__. '/include/footer3.php';
?>