<?php
require_once __DIR__. '/include\fonctions.php';
require_once __DIR__. '/include\header.php';
require_once __DIR__. '/include\naviguation.php';

 
// reconnect_auto();
// echo($_COOKIE[]);

?>
<?php
if(isset($_GET['del'])){
require_once __DIR__. '/config\connexion.php';

	
	$getid= (int)$_GET['del'];
	
	$sessionid= 4;
	$check_like = $access->prepare("SELECT id_like FROM likes WHERE id_article = ? AND id_user = ? ");
	$check_like->execute(array($getid,$sessionid));
		
	$del = $access->prepare("DELETE  FROM likes WHERE id_article = ? AND id_user = ? ");
	$del->execute(array($getid,$sessionid));

	$like->del($_GET['del']);
}
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
							<h3 class="title">Favoris</h3>
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
                                    <?php
                                             $ids=array_keys($_SESSION['like']);
											//  var_dump($ids);
											 //  var_dump($ids);
											if(empty($ids)){
												$produits = array();
											}else {
												$produits = $DB->query('SELECT*FROM produits WHERE id IN ('.implode(',',$ids).')');
                                            	
											}					
                                            // var_dump($produits);
                                            // var_dump($produits);
											foreach ($produits as $produit) :
                                            
                                            ?>
										 
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<!-- <img  -->
                                                <img src="<?= $produit->image ?>" alt="">
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
													<button class="add-to-wishlist" ><a href="favori.php?del=<?= $produit->id?>"><i class="fa fa-heart-o"></i></a><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><a href=""><i class="fa fa-eye"></i></a><span class="tooltipp">detail</span></button>
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
		</div>
		<!-- /SECTION -->
        <?php
require_once __DIR__. '/include\footer.php';
		
?>