<?php
require_once __DIR__. '/include\header.php';
require_once __DIR__. '/include\naviguation.php';

?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">View Cart</h3>
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

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
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
						
						
					</div>
					<!-- /Order Details -->
				
                
                
                
                </div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

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
require_once __DIR__. '/include\footer.php';


?>