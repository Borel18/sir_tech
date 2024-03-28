<?php
session_start();
require_once __DIR__. '/include/fonctions.php';

    reconnect_auto();
    is_connect();
require_once __DIR__. '/include/header.php';

?>
<?php
if (isset($_SESSION['auth']->id) && isset($_SESSION['auth']->fname)) {

require_once __DIR__. '/db_conn.php';
require_once __DIR__. '/php/user.php';

    $user = getUserById($_SESSION['auth']->id,$conn);

     
    
?>
<div>
<?php
	if ($user) {?>
<h1 >bienvenu dans ton compte <?= $_SESSION['auth'] ->username?></h1>
</div>


<div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="shadow w-350 p-3 text-center">
    		<img src="upload/<?=$user['pp']?>"
    		     class="img-fluid rounded-circle ronde" 
                 style= "width: 300px;
                         height: 300px;
                         object-fit:cover;
                         /* object-position: bottom right; */
                         border-radius: 100%;">
            <h3 class="display-4 "><?=$user['fname']?></h3>
            <a href="edit.php" class="btn btn-primary"style= "width: 100px">
            	edit profile
            </a>
			<a href="logout.php" class="btn btn-warning"style= "width: 100px">
            	Logout
            </a>

		</div>
    </div>
    <?php

		}else {
			header("Location: login.php");
	exit;
		}
	?>
        
<?php
require_once __DIR__. '/include/footer3.php';
?>
<?php }else {
	header("Location: login.php");
	exit;
} ?>
<?php
require_once __DIR__. '/include/footer.php';
?>