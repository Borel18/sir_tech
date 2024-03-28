<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
require_once __DIR__. '/include/db.php';
require_once __DIR__. '/include/fonctions.php';
// verifier si le formulaire est vide ou pas vide et lemail egualement nest pas vide
if (!empty($_POST) && !empty($_POST['email'])) {
  $query = "SELECT * FROM user WHERE email = ? AND confirmed_at IS NOT NULL";
  // on cree une requete
  $req = $pdo->prepare($query);
  // on execute la requete
  $req ->execute([$_POST['email']]);

$user = $req ->fetch();

if ($user) {
  
  $reset_token = generateToken(100); 
  $query= "UPDATE user SET reset_token = ?,reset_at = NOW() WHERE id=?";
  // on cree une requete
  $req = $pdo->prepare($query);
  // on execute la requetew
  $req ->execute([$reset_token,$user->id]);
  $mail = $_POST['email'];
  $subject = "renitialisation du mot de passe";
  $message = "afin de reinitialiser votre mot de passe. merci de cliquer sur le lien\n\n
  http://localhost/sir_tech/compte%20utilisateur/reset.php?id=$user->id&token=$reset_token";
  $headers ="content-type: text/plain; charset=utf-8\r\n";
  $headers .="From: sendmailtest95@gmail.com\r\n";
  mail($mail,$subject,$message,$headers);

  $_SESSION['flash']['success'] = "les instructions du rappel de mot de passe vous a ete rapellé dans votre email";
  header("location:login.php");
  exit();
}else{
  $_SESSION['flash']['danger'] = "aucun compte n'est associ& a cet email";
  
}
}
?>
 <?php
require_once __DIR__. '/include/header3.php';


  ?>
  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">reinitialion du compte</h5>
                    <p class="text-center small">veillez entrer votre email pour l'identification</p>
                  </div>
<form class="row g-3 needs-validation" action="" method="post" novalidate >

<div class="col-12">
  <label for="email" class="form-label"> email</label>
    <input type="email" name="email" class="form-control" id="email" required>
    <div class="invalid-feedback">svp entrer votre  votre email</div>
</div>
</div>
<div class="col-12">
  <button class="btn btn-primary w-100" type="submit">soumettre</button>
</div>
<div class="col-12">
  <p class="small mb-0">Don't have account? <a href="register.php">Create an account</a></p>
</div>
</form>
  <?php
require_once __DIR__. '/include/footer3.php';

?>