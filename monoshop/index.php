<?php
require_once __DIR__. '/include/header.php';
require_once __DIR__. '/config/commande.php';



 $Categorie = afficherCategorie();


?>
<?php
require_once __DIR__. '/include/naviguation.php';


?>


<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<?php foreach($Categorie as $categorie): ?>
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="<?= $categorie->image ?>" alt="">
							</div>
							<div class="shop-body">
								<h3><?= $categorie->nom ?><br>Collection</h3>
								<a href="categorie.php?nom=<?= $categorie->nom ?>" class="cta-btn">Decouvrir <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
					<?php endforeach; ?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?php
require_once __DIR__. '/config/commande.php';

 $Produits = afficher();


?>
<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
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
										
										<?php foreach($Produits as $produit): ?>
											<?php 
											$id=$produit->id;
                                            

											if (require_once __DIR__. '/connexion.php') {
											$likes = $access->prepare("SELECT id_like FROM likes WHERE id_article =?");
											$likes->execute(array($id));
											$likes = $likes->rowCount();

											} ;
											
												
											?>
                                         
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<!-- <img  -->
                                                <img style="
												  
                                                  height: 300px;
                                                  object-fit:cover;

												"
												 src="<?= $produit->image ?>" 
												 alt="">
												<div class="product-label">
													<span class="sale"></span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?= $produit->cathegorie?></p>
												<h3 class="product-name"><a href="#"><?= $produit ->nom ?></a></h3>
												<h4 class="product-price"><?= $produit ->prix ?>FCFA<del class="product-old-price"><?= $produit->ancien_prix ?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist" onclick="lienlike(<?= $produit->id; ?>)" ><i class="fa fa-heart-o"><?= $likes ?></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="produit.php?id=<?= $produit->id; ?>"><i class="fa fa-eye"></i></a><span class="tooltipp">detail</span></button>
												</div>
											</div>
											<div class="add-to-cart ">
												<button class="add-to-cart-btn addpanier" onclick="lien(<?= $produit->id; ?>)"><i class="fa fa-shopping-cart"></i>ajouter a la carte</button>
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
        <!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<?php
require_once __DIR__. '/config/commande.php';

 
 $Solde = afficherSolde();

 $Categorie = afficherCategorie();
?>
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Solde</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab2">HOT DEALS</a></li>
								<?php foreach($Categorie as $categorie): ?>

									<li><a   href="categorie.php?nom=<?= $categorie->nom ?>"><?= $categorie->nom ?></a></li>

								<?php endforeach; ?>


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
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										
									<?php foreach($Solde as $solde): ?>
                        
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img 
												style="
												  
                                                  height: 300px;
                                                  object-fit:cover;

												"
												src="<?= $solde->image ?>" alt="">
												<div class="product-label">
													<span class="new">solde</span>
													<span class="sale"><?= $solde->pourcentage_reduction ?>%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"><?= $solde->cathegorie ?></p>
												<h3 class="product-name"><a href="#"><?= $solde->nom ?></a></h3>
												<h4 class="product-price"><?= $solde->prix ?> <del class="product-old-price"><?= $solde->ancien_prix ?></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
												<button class="add-to-wishlist" onclick="lienlike(<?= $solde->id; ?>)" ><i class="fa fa-heart-o"><?= $likes ?></i><span class="tooltipp">add to wishlist</span></button>

													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="produit.php?id=<?= $solde->id; ?>"><i class="fa fa-eye"></a></i><span class="tooltipp">Detail</span></button>
												</div>
											</div>
											<div class="add-to-cart">
											<button class="add-to-cart-btn addpanier" onclick="lien(<?= $solde->id; ?>)"><i class="fa fa-shopping-cart"></i>ajouter a la carte</button>

											</div>
										</div>
										<!-- /product -->


										<?php endforeach; ?>
										
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?php
require_once __DIR__. '/include/footer.php';

?>