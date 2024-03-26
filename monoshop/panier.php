<?php
require_once('C:\xampp\htdocs\sir_tech\monoshop\include\header.php');
require_once('C:\xampp\htdocs\sir_tech\monoshop\include\naviguation.php');

?>

<!-- Cart -->
<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty"><?= $panier->count(); ?></div>
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
													<h3 class="product-name"><a href="#"><?= $produit->nom ?></a></h3>
													<h4 class="product-price"><?= $produit->prix ?>FCFA</h4>
                                                    <div class="qty"><?= $_SESSION['panier'][$produit->id];  ?></div>
													
                                                    <a href="panier.php?delpanier=<?=$produit->id;?>"><i class="fa-solid fa-light fa-trash cart-remove" ></i></a>
												</div>
												<?php 
                                        endforeach  
                                        ?>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
                                        
										<div class="cart-summary">
										    <small><?=count($produits);  ?>produit(s) ajoute au panier</small>
											<h5>SUBTOTAL: <?= $panier->total() ?>FCFA</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout:   <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
                                
								<!-- /Cart -->
<?php
require_once('C:\xampp\htdocs\sir_tech\monoshop\include\footer.php');

?>