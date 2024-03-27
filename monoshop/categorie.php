<?php

require_once('include\header.php');

if(isset($_GET['nom']) && !empty($_GET['nom'])){
    include("connexion.php");

         // on nettoie l'id envoye
         $nom = strip_tags($_GET['nom']);

         
         $sql = 'SELECT * FROM produits WHERE cathegorie = :nom;';

         //on prepare la requete
         $query = $access->prepare($sql);

         // on "acroche" les parametres (id)
         $query->bindvalue(':nom', $nom, PDO::PARAM_STR);
         
         //on execute la requete
         $query->execute();

         // on recupere la requete
         $produits = $query->fetchAll(pdo::FETCH_ASSOC);

         
}
?>
<?php
require_once('include\naviguation.php');

?>

<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">RESULT SEARCH</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->


					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
                                    <?php foreach($produits as $produit): ?>
										
											<?php 
											$id=$produit['id'];
											if (require("connexion.php")) {
											$likes = $access->prepare("SELECT id_like FROM likes WHERE id_article =?");
											$likes->execute(array($id));
											$likes = $likes->rowCount();

											} ;
											
												
											?>
                                         
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<!-- <img  -->
                                                <img src="<?= $produit['image'] ?>" alt="">
												<div class="product-label">
													<span class="sale"></span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?= $produit['cathegorie']?></p>
												<h3 class="product-name"><a href="#"><?= $produit['nom'] ?></a></h3>
												<h4 class="product-price"><?= $produit['prix'] ?>FCFA<del class="product-old-price"><?= $produit['ancien_prix'] ?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" onclick="lienlike(<?= $produit['id']; ?>)" ><i class="fa fa-heart-o"><?= $likes ?></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="produit.php?id=<?= $produit['id']; ?>"><i class="fa fa-eye"></i></a><span class="tooltipp">detail</span></button>
												</div>
											</div>
											<div class="add-to-cart ">
												<button class="add-to-cart-btn addpanier" onclick="lien(<?= $produit['id']; ?>)"><i class="fa fa-shopping-cart"></i>ajouter a la carte</button>
											</div>
										</div>
										<!-- /product -->
                                       <?php endforeach; ?>
 
                                        
                                        
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<?php
require_once('include\footer.php');
?>