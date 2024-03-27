<?php
require_once __DIR__. '/include\header.php';
require_once __DIR__. '/config\commande.php';


 $Categorie = afficherCategorie();


?>
<?php
require_once __DIR__. '/include\naviguation.php';


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
require_once __DIR__. '/include\footer.php';

?>