<?php
session_start();
require_once 'C:\xampp\htdocs\sir_tech\admin\include\db.php';
require_once 'C:\xampp\htdocs\sir_tech\admin\include\fonctions.php';
if (!empty($_POST)) {

    $errors =[];
//pseudo
    if(empty($_POST['username']) || !preg_match("#^[a-zA-Z0-9_]+$#",$_POST['username'])){
        $errors['username']= "vote pseudo n'est pas valable";
    }else{
         //SELECT * FROM `user` WHERE `username` = post
         $query = "SELECT * FROM admin WHERE username = ?";
         $req = $pdo->prepare($query);
         $req ->execute([$_POST['username']]);
         if ($req->fetch()) {
            $errors['username']= "ce pseudo a deja été utilisé";
         }
    }
//email
    if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $errors['email']= "vote email n'est pas valable";
    }else{
        //SELECT * FROM `user` WHERE `email` = post
        $query = "SELECT * FROM admin WHERE email = ?";
        $req = $pdo->prepare($query);
        $req ->execute([$_POST['email']]);
        if ($req->fetch()) {
           $errors['email']= "cet email a deja été utilisé";
        }

    }
    //password
    if(empty($_POST['password']) || $_POST['password'] !== $_POST['password_confirm']){
        $errors['password']= "vote mot de passe n'est pas valable";
    }
    if (empty($errors)) {
        $query = "INSERT INTO admin (username,email,password,confirmation_token) VALUES(?,?,?,?)";
        $req = $pdo->prepare($query);
        $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        
        $token = generateToken(100);
        
        $req ->execute([$_POST['username'],$_POST['email'],$password, $token]);
        $userId = $pdo -> lastInsertId();
        
        $mail = $_POST['email'];
        $subject = "confirmation du compte";
        $message = "afin de confirmer votre compte merci de cliquer sur ce lien\n\n
        http://localhost/sir_tech/admin/confirm.php?id=$userId&token=$token";

        mail($mail,$subject,$message);

        $_SESSION['flash']['success'] = "votre compte a été créé avec sucèss. veillez verifier vitre boite email afin de confirmer votre compte";
        header("location:login.php");
        exit();

    }
}

?>
<?php

require_once 'C:\xampp\htdocs\sir_tech\admin\include\header3.php';
?>
    <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Creeton compte</h5>
                    <p class="text-center small">Entrer les details de creation de votre compte</p>
                  </div>    
        
    <form class="row g-3 needs-validation" novalidate action="" method="post">
                    <div class="col-12">
                      <label for="pseudo" class="form-label">nom d'utilisateur</label>
                      <input type="text" name="username" class="form-control" id="pseudo" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please choose a username.</div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password_confirm" class="form-control" id="Password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" >s'inscrire</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>
                  <?php
                  require_once('C:\xampp\htdocs\sir_tech\admin\include\footer3.php');
                  ?>