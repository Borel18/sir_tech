
<?php
session_abort();
require_once 'C:\xampp\htdocs\sir_tech\monoshop\include\db.php';
require_once 'C:\xampp\htdocs\sir_tech\monoshop\include\fonctions.php';


//echo("veillez remplir ces informations pour enregistrer votre commande");
$_SESSION['erreur'] = "";
if ( !empty($_POST['username'])  && !empty($_POST['check']) && !empty($_POST['password']) && !empty($_POST['payment-2'])) {
	
	$query = "SELECT * FROM user WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL";
	$req = $pdo->prepare($query);
	$req ->execute(['username' => $_POST['username'] ]);
	$user = $req->fetch();
	
	if ($user && password_verify($_POST['password'],$user->password)) {
		$name=$user->fname;
		$last_name=$user->username;
		$email=$user->email;
		$pp=$user->pp;
		$query = "INSERT INTO custumer (
			name,
			last_name,
			email,
			date,
			pp) VALUES(?,?,?,NOW(),?)";
			$req = $pdo->prepare($query);
			$req ->execute([
			$name,
			$last_name,
			$email,
			$pp
			]);
		$_SESSION['auth'] = $user;
		require('include\header2.php');



		$bdd=new PDO('mysql:host=localhost;dbname=espace_membre','root','');
		$ids=array_keys($_SESSION['panier']);
									//  var_dump($ids);
		if(empty($ids)){
		   $produits = array();
		}else {
		   $produits = $DB->query('SELECT*FROM produits WHERE id IN ('.implode(',',$ids).')');
										
		}		
									
										
								   
		if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
		   require_once('connect2.php'); 
		   $email_cust= strip_tags($user->email);
		   $prix_total = strip_tags($panier->total());
   
		   // on prepare la requete 

		   $sql = 'INSERT INTO `commande` (`prix_total`,`email_cust`,`date`) VALUES
		   (:prix_total,:email_cust,NOW());';

		   $query = $db->prepare($sql);

		   $query->bindPARAM(':prix_total', $prix_total, PDO::PARAM_INT);
		   $query->bindPARAM(':email_cust', $email_cust, PDO::PARAM_STR);
		   $query->execute();
		   $usercom = $db -> lastInsertId();
	 
		   foreach ($produits as $prod ) {
		
			 $id_com = strip_tags($usercom);
			 $id_prod = strip_tags($prod->id);
			 $quantite = strip_tags($_SESSION['panier'][$prod->id]);
			
			 $sql = 'INSERT INTO `com_produit` (`id_com`,`id_prod`,`quantite`) VALUES
			 (:id_com,:id_prod,:quantite);';

			 $query = $db->prepare($sql);

			 $query->bindPARAM(':id_com', $id_com, PDO::PARAM_INT);
			 $query->bindPARAM(':id_prod', $id_prod, PDO::PARAM_INT);
			 $query->bindPARAM(':quantite', $quantite, PDO::PARAM_INT);
	 
			 $query->execute();
	 
			}
	

		
			 echo("la commande a bien ete realise veillez procedez au paiement");

			//  unset($_SESSION['panier']);
		
		
		 
		header("location:https://hter.link/AXuoe");
		exit();
	}

		
	}else {
		echo("identifiant ou mot de passe incorrect!! aucun compte ne correspond a ces informations");
	}


}else if (!empty($_POST)) {

	
	$success =[];
// full name
//pseudo
if(empty($_POST['name']) || !preg_match("#^[a-zA-Z0-9_]+$#",$_POST['name'])){
	$_SESSION['erreur']= "vote pseudo n'est pas valable";
}
//pseudo
	if(empty($_POST['lastname']) || !preg_match("#^[a-zA-Z0-9_]+$#",$_POST['lastname'])){
		$_SESSION['erreur']="vote pseudo n'est pas valable";
	}
//email
	if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$_SESSION['erreur']= "vote email n'est pas valable";
		
	}else{
		//SELECT * FROM `user` WHERE `email` = post
		$query = "SELECT * FROM user WHERE email = ?";
		$req = $pdo->prepare($query);
		$req ->execute([$_POST['email']]);
		if ($req->fetch()) {
			$_SESSION['erreur']= "cet email a deja été utilisé";
		  // echo("cet email a deja été utilisé") ;
		}

	}
	
	
	if (empty($_SESSION['erreur']) && !empty($_POST['payment-2'])) {
		
		$query = "INSERT INTO custumer (
		name,
		last_name,
		email,
		address,
		city,
		pays,
		tel,
		date) VALUES(?,?,?,?,?,?,?,NOW())";
		$req = $pdo->prepare($query);
		$req ->execute([
		$_POST['name'],
		$_POST['lastname'],
		$_POST['email'],
		$_POST['address'],
		$_POST['city'],
		$_POST['pays'],
		$_POST['tel'],
		]);
		$custumer = $pdo -> lastInsertId();
		
		// 
		
		require('include\header2.php');



		$bdd=new PDO('mysql:host=localhost;dbname=espace_membre','root','');
		$ids=array_keys($_SESSION['panier']);
									//  var_dump($ids);
		if(empty($ids)){
		   $produits = array();
		}else {
		   $produits = $DB->query('SELECT*FROM produits WHERE id IN ('.implode(',',$ids).')');
										
		}		
									
										
								   
		if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
		   require_once('connect2.php'); 
		   $email_cust= strip_tags($_POST['email']);
		   $prix_total = strip_tags($panier->total());
   
		   // on prepare la requete 

		   $sql = 'INSERT INTO `commande` (`prix_total`,`email_cust`,`date`) VALUES
		   (:prix_total,:email_cust,NOW());';

		   $query = $db->prepare($sql);

		   $query->bindPARAM(':prix_total', $prix_total, PDO::PARAM_INT);
		   $query->bindPARAM(':email_cust', $email_cust, PDO::PARAM_STR);
		   $query->execute();
		   $usercom = $db -> lastInsertId();
	 
		   foreach ($produits as $prod ) {
		
			 $id_com = strip_tags($usercom);
			 $id_prod = strip_tags($prod->id);
			 $quantite = strip_tags($_SESSION['panier'][$prod->id]);
			
			 $sql = 'INSERT INTO `com_produit` (`id_com`,`id_prod`,`quantite`) VALUES
			 (:id_com,:id_prod,:quantite);';

			 $query = $db->prepare($sql);

			 $query->bindPARAM(':id_com', $id_com, PDO::PARAM_INT);
			 $query->bindPARAM(':id_prod', $id_prod, PDO::PARAM_INT);
			 $query->bindPARAM(':quantite', $quantite, PDO::PARAM_INT);
	 
			 $query->execute();
	 
			}
			$success['validation']="la commande a bien ete realise veillez procedez au paiement";

	
			//  unset($_SESSION['panier']);
		
			  header("location:https://hter.link/AXuoe");
		

		}

		
		exit();

	}
}



if (!empty($_SESSION['erreur'])) {
	# code...
	$a=$_SESSION['erreur'];
}

require_once('C:\xampp\htdocs\sir_tech\monoshop\include\header.php');
require_once('C:\xampp\htdocs\sir_tech\monoshop\include\naviguation.php');

//var_dump($a);

?>

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="index.php">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->


		<form zaction="" method="post" novalidate>
							
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
<?php
// var_dump($_SESSION['erreur']);
//var_dump($a);

if(isset($a)){

	$errors=$a;
?>
<div class="alert alert-danger"><?php  echo $errors?></div>
<?php

unset($_SESSION['erreur']);	
}
?>

				
					<div class="col-md-7">

					
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>


							
							
							 <div class="form-group">
								<input class="input" type="text" name="name" placeholder="First Name" id="firstname" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="lastname" placeholder="Last Name" id="lastname" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email" id="email" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" id="address" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City" id="city" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="pays" placeholder="Country" id="pays" required>
							</div>
							<div class="form-group">
								<input class="input" type="number" name="tel" placeholder="Telephone" id="tel" required>
							</div> 
							
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" name= "check" id="create-account">
									<label for="create-account">
										<span></span>
										j'ai deja un compte
									</label>
									<div class="caption">
									<p>veillez entrer votre nom d'utilisateur</p>
										<input class="input" type="text" name="username" placeholder="Enter votre nom dutilisateur">
										<p>veillez entrer votre mot de passe svp</p>
										<input class="input" type="password" name="password" placeholder="veillez entrer votre mot de passe svp">

									</div>
								</div>
								
							</div>
							
						</div>
						<!-- /Billing Details -->

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					</div>


					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
                        
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							
                                    <?php
                                        $ids=array_keys($_SESSION['panier']);
                                        //  var_dump($ids);
                                        if(empty($ids)){
                                            $produits = array();
                                        }else {
                                            $produits = $DB->query('SELECT*FROM produits WHERE id IN ('.implode(',',$ids).')');
                                            
                                        }					
                                        // var_dump($produits);
                                        
                                        foreach ($produits as $produit) :
                                            
                                    ?>
							<div class="order-products">
								
								<div class="order-col">
									<div><?= $_SESSION['panier'][$produit->id];  ?> <?= $produit->nom ?></div>
									<div><?= $produit->prix ?>FCFA</div>
								</div>
                                
							</div>
                            <?php 
                                    endforeach  
                                ?>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total"><?= $panier->total() ?>FCFA</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment-1" id="payment-1">
								<label for="payment-1">
									<span></span>
									payer apres livraison
								</label>
								<div class="caption">
									<p>ce choix pourrait entrainer dimportant frais ecommerce.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment-2" id="payment-2" >
								<label for="payment-2">
									<span></span>
									payer maintenant
								</label>
								<div class="caption">
									<p>ce choix pourrait entrainer dimportant frais ecommerce.</p>
								</div>
							</div>
							
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms" required>
							<label for="terms" >
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						in
						<button class="primary-btn order-submit"  type="submit">passer la commande</button>
					</div>
					
					<!-- /Order Details -->
                </div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		</form>

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

        <?php
require_once('C:\xampp\htdocs\sir_tech\monoshop\include\footer.php');

?>