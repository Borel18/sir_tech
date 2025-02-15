<?php
require '_header.php';
// require '_header2.php';
?>
<?php
@$keywords=$_GET["keywords"];
@$valider= $_GET["valider"];
if (isset($valider) && !empty(trim($keywords))) {
	$words= explode(" ",trim($keywords));
	for ($i=0; $i<count($words) ; $i++) 
		$kw[$i]="nom like '%".$words[$i]."%'";
	include("connexion.php");
	$res=$access->prepare("SELECT nom FROM produits WHERE ".implode(" and ",$kw));
	$res->setFetchMode(PDO::FETCH_ASSOC);
	$res->execute();
	$tab=$res->fetchAll();
	$afficher="oui";
	
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - E-commerce </title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="fontawesome-free-6.4.0-web\css\all.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="..\acceuil\about.php"><i class="fa fa-phone"></i> +237 657 236 074</a></li>
						<li><a href="..\acceuil\about.php"><i class="fa fa-envelope-o"></i> sendmailtest95@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i>Dschang Foto Tamtam</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i> FCFA</a></li>
						<li><a href="..\compte utilisateur\index.php"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<a href="..\search\dist\index.php">
									<form action="" method="get">
									<input class="input" name="keywords" value="<?php echo $keywords ?>" placeholder="Saisissez la recherche ici">
									<button class="search-btn"name="valider" >Search</button>
								    </form>
									</a>


                                    <?php if (@$afficher=="oui"){  ?>
									<div>
										<div id="nbr" style="color:red"><?=count($tab)." ".(count($tab)>1?"resultats trouvés":"resultat trouvé") ?></div>
										<ol>
										<?php for($i=0;$i<count($tab);$i++){ ?>
											<li style="color:red" ><?php echo $tab[$i]["nom"] ?></li>
										</ol>
										<?php  } ?>
									</div>

                                    <?php } ?>
							</div>
						</div>
						
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="favori.php">
										<i class="fa fa-heart-o"></i>
										<span>favoris</span>
										<div class="qty" id="total1"><?= $like->count(); ?></div>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty"id="count"><?= $panier->count(); ?></div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
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
												<div class="product-widget">
													<div class="product-img">
														<img src="<?= $produit->image ?>" alt="">
													</div>
													<div class="product-body">
														<h3 class="product-name"><a href="#"><a href="#"><?= $produit->nom ?></a></h3>
														<h4 class="product-price"><span class="qty"><?= $_SESSION['panier'][$produit->id];  ?></span><?= $produit->prix ?>FCFA</h4>
														
														<a href="index.php?delpanier=<?=$produit->id;?>"><i class="fa-solid fa-light fa-trash cart-remove" ></i></a>
													</div>
												</div>
											<?php 
												endforeach  
											?>
										</div>
										
										<div class="cart-summary">
											<small><?=count($produits);  ?>produit(s) ajoute au panier</small>
											<h5>SUBTOTAL:<?= $panier->total() ?>FCFA</h5>
										</div>
										<div class="cart-btns">
											<a href="viewcart.php">View Cart</a>
											<a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->