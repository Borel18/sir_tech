<?php
require_once __DIR__. '/_header.php';

?>
<?php
@$keywords=$_GET["keywords"];
@$valider= $_GET["valider"];
if (isset($valider) && !empty(trim($keywords))) {
	$words= explode(" ",trim($keywords));
	for ($i=0; $i<count($words) ; $i++) 
		$kw[$i]="nom like '%".$words[$i]."%'";
	include("connexion.php");
	$res=$access->prepare("SELECT * FROM produits WHERE ".implode(" and ",$kw));
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

		<title>Electro - HTML Ecommerce Template</title>

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
								<a href="#" class="logo">
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
									<form action="" method="get">
									<input class="input" name="keywords" value="<?php echo $keywords ?>" placeholder="Saisissez la recherche ici">
									<button class="search-btn"name="valider" >Search</button>
								    </form>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

             </header>
             
             <?php if (@$afficher=="oui"){  ?>
									<div>
										<div id="nbr" style="color:red"><?=count($tab)." ".(count($tab)>1?"resultats trouvés":"resultat trouvé") ?></div>
										<ol>
										<?php for($i=0;$i<count($tab);$i++){ ?>
                                            <a href="produit.php?id=<?= $tab[$i]["id"] ?>">
											<li style="color:red" ><?php echo $tab[$i]["nom"] ?></li>
                                            </a>
										</ol>
										<?php  } ?>
									</div>

                                    <?php } ?>

                        <!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
