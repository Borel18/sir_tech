<?php
session_start();
    require_once 'C:\xampp\htdocs\sir_tech\compte utilisateur\include\fonctions.php';
    reconnect_auto();
    is_connect();
    require_once 'C:\xampp\htdocs\sir_tech\compte utilisateur\include\header.php';
?>
<?php
if (isset($_SESSION['auth']->id) && isset($_SESSION['auth']->fname)) {
    include "db_conn.php";
    include 'php/user.php';
    $user = getUserById($_SESSION['auth']->id,$conn);

     
    
?>

<div>
<?php
	if ($user) {?>
<h1 >bienvenu dans ton historique de commande <?= $_SESSION['auth'] ->username?></h1>
</div>

<?php
 require_once('connect2.php');

     $email_cust=$_SESSION['auth'] ->email;
     $sql = 'SELECT * FROM `commande` WHERE `email_cust` = :email_cust;';

     //on prepare la requete
     $query = $db->prepare($sql);

     // on "acroche" les parametres (id)
     $query->bindvalue(':email_cust', $email_cust, PDO::PARAM_STR);
     
     //on execute la requete
     $query->execute();

     // on recupere la requete
     $custumer = $query->fetchAll();
	 
		// var_dump($custumer);	
	 
    
?>

<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">historique de commande</h3>
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
                                        foreach ($custumer as $prod) {
                                            $id_com=$prod['id'];
											$statut= "annule";
											// var_dump($prod['id']);
                                            // var_dump($id_com);
                                            $sql = 'SELECT * FROM `com_produit` WHERE `id_com` = :id_com AND statut != :statut ;';

                                            //on prepare la requete
                                            $query = $db->prepare($sql);

                                            // on "acroche" les parametres (id)
                                            $query->bindvalue(':id_com', $id_com, PDO::PARAM_INT);
											$query->bindvalue(':statut', $statut, PDO::PARAM_STR);
     
                                            //on execute la requete
                                            $query->execute();

                                            // on recupere la requete
                                            $historique = $query->fetchAll();
                                            
                                           // var_dump($historique);

                                             foreach ($historique as $hist) {
												$id=$hist['id_prod'];
                                            
												$sql = 'SELECT * FROM `produits` WHERE `id` = :id;';
	  
												//on prepare la requete
												$query = $db->prepare($sql);
	  
												// on "acroche" les parametres (id)
												$query->bindvalue(':id', $id, PDO::PARAM_INT);
		 
												//on execute la requete
												$query->execute();
	  
												// on recupere la requete
												$produits = $query->fetch();
												?>
											   
										    
										
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<!-- <img  -->
                                                <img 
												style="
												  
                                                  height: 300px;
                                                  object-fit:cover;

												"
												src="..\monoshop\<?= $produits['image']?>" alt="">
												<div class="product-label">
													<span class="sale"><?= $hist['statut']; ?></span>
													<span class="new"><?= $prod['date']?></span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category"></p>
												<h3 class="product-name"><a href="#"><?= $produits['nom']?></a></h3>
												<h4 class="product-price"><?= $produits['prix']?><del class="product-old-price"></del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												
											</div>
											<div class="add-to-cart ">
											
											   <button class="add-to-cart-btn addpanier" onclick="lien(<?= $hist['id']; ?>)" ><i class="fa fa-shopping-cart"></i>annuler la commande</button>
											
											
										    
                                            </div>
										</div>
										<!-- /product -->
                                        
                                        
                                        <?php 
											 }
                                            

                                            
											}
											
										
										?>


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
		}else {
			header("Location: login.php");
	exit;
		}
	?>
        
<?php
require_once 'C:\xampp\htdocs\sir_tech\compte utilisateur\include\footer3.php';
?>
<?php }else {
	header("Location: login.php");
	exit;
} ?>
<?php
require_once 'include\footer.php';
?>













































































