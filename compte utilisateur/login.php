<?php
session_start();
require_once __DIR__. '/include/header3.php';
require_once __DIR__. '/include/db.php';
require_once __DIR__. '/include/fonctions.php';

    reconnect_auto();  

    if (!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $query = "SELECT * FROM user WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL";
        $req = $pdo->prepare($query);
        $req ->execute(['username' => $_POST['username'] ]);
        $user = $req->fetch();
        if ($user && password_verify($_POST['password'],$user->password)) {
            $_SESSION['auth'] = $user;
            $_SESSION['flash']['success'] =" connexion effectué avec sucess";
            
             if (isset($_POST['remember'])) {
              $remember_token =  generateToken(100);
              $query ="UPDATE user SET remember_token = ? WHERE id= ?";
              $pdo->prepare($query)->execute([$remember_token,$user->id]);

              setcookie("remember",$user->id."::".$remember_token. sha1($user->id,"borel"),time()+60*60*24*7);

             }

            header("location:index.php");
            exit();
            
        }else {
            $_SESSION['flash']['danger'] ="identifiant ou mot de passe incorrect";
        }

    }
?>
<?php

?>
    <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Connexion au compte</h5>
                    <p class="text-center small">veillez entrer les informations d'access</p>
      </div>
    <form class="row g-3 needs-validation" action="" method="post" novalidate >

                    <div class="col-12">
                      <label for="pseudo" class="form-label">nom utilisateur ou  email</label>
                        <input type="text" name="username" class="form-control" id="pseudo" required>
                        <div class="invalid-feedback">svp entrer votre pseudo ou votre email</div>
                    </div>

                    <div class="col-12">
                      <label for="Password" class="form-label">mot de passe <a href="remember.php">mot de passe oublié</a> </label>
                      <input type="password" name="password" class="form-control" id="Password" required>
                      <div class="invalid-feedback">veillez entrer votre mot de passe svp</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="1" >
                        <label class="form-check-label" for="password">se souvenir de moi</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">se connecter</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="register.php">Crer un compte</a></p>
                    </div>
                  </form>
    <?php
require_once __DIR__. '/include/footer3.php';

?>

