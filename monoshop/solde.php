<?php
require_once('include\header.php');
 require_once('config\commande.php');

 $Categorie = afficherCategorie();


?>
<?php
require_once('include\naviguation.php');

?>




        <!-- HOT DEAL SECTION -->
		<!-- /HOT DEAL SECTION -->

		<?php

 require_once('config\commande.php');

 $Solde = afficherSolde();


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
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
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
                                        <?php 
											$id=$solde->id;
											if (require("connexion.php")) {
											$likes = $access->prepare("SELECT id_like FROM likes WHERE id_article =?");
											$likes->execute(array($id));
											$likes = $likes->rowCount();

											} ;
                                            ?>
											
                        
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
													<button class="add-to-wishlist" onclick="lienlike(<?= $solde->id; ?>)"><a href="produit.php?id=<?= $solde->id; ?>"></a><i class="fa fa-heart-o"><?= $likes ?></i></a><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href="produit.php?id=<?= $solde->id; ?>"><i class="fa fa-eye"></a></i><span class="tooltipp">Detail</span></button>
												</div>
											</div>
											<div class="add-to-cart ">
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
require_once('include\footer.php');
?>