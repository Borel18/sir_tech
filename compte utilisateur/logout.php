<?php
   session_start();

   setcookie("remember","",-1);

   unset($_SESSION['auth']);
   $_SESSION['flash']['success'] = "deconnexion effectué avec sucess";
   header("location:login.php")


?>