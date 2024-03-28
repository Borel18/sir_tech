<?php
require_once __DIR__. '/head.php';



?>
<?php

@$keywords=$_GET["keywords"];
@$valider= $_GET["valider"];

// var_dump($_GET["keywords"]);
 if (isset($valider) && !empty(trim($keywords))) {
// 	echo("bonjour");
	$words= explode(" ",trim($keywords));
	for ($i=0; $i<count($words) ; $i++) 
		$kw[$i]="type like '%".$words[$i]."%'";
    require_once __DIR__. '/connexion.php';

	$res=$access->prepare("SELECT*FROM produits WHERE ".implode(" and ",$kw));
	$res->setFetchMode(PDO::FETCH_ASSOC);
	$res->execute();
	$tab=$res->fetchAll();
	
	$afficher="oui";
	
 }

?>


<!-- partial:index.partial.html -->

<div style=" 
	 justify-content: center;
	
	 align-items: center;
	 text-align:center;
	 
	 margin : 0 ;">
	 <center><strong><p style="align-items: center;
	                            font-size: 120px        ">
										<h1 >sir_techshop search</h1></p></strong></center>

	 <p>
	 <form action="" method="get">
	
	<div id="search">
		
		<svg viewBox="0 0 420 60" xmlns="http://www.w3.org/2000/svg">
			<rect class="bar"/>
			
			<g class="magnifier" >
				<circle class="glass"/>
				<line class="handle"  x1="32" y1="32" x2="44" y2="44"></line>
			</g>
	
			<g class="sparks">
				<circle class="spark"/>
				<circle class="spark"/>
				<circle class="spark"/>
			</g>
	
			<g class="burst pattern-one">
				<circle class="particle circle"/>
				<path class="particle triangle"/>
				<circle class="particle circle"/>
				<path class="particle plus"/>
				<rect class="particle rect"/>
				<path class="particle triangle"/>
			</g>
			<g class="burst pattern-two">
				<path class="particle plus"/>
				<circle class="particle circle"/>
				<path class="particle triangle"/>
				<rect class="particle rect"/>
				<circle class="particle circle"/>
				<path class="particle plus"/>
			</g>
			<g class="burst pattern-three">
				<circle class="particle circle"/>
				<rect class="particle rect"/>
				<path class="particle plus"/>
				<path class="particle triangle"/>
				<rect class="particle rect"/>
				<path class="particle plus"/>
			</g>
		</svg>
			<!-- <div> -->
		<input type="text" name="keywords" aria-label="Search for inspiration"/>
		<button  class="search-btn"name="valider" 
		style="background-color : blue;
		border-radius : 30px;
		height: 40px;
		color : white;
		justify-content: center;
	    align-items: center;
	    text-align:center;
	 
	 "><h4>Search</h4>
		
	   </button>
		
			<!-- </div> -->
			
		
	</div>
</form>	
 
	 </p>
												  
	 <center>
	 <?php if (@$afficher=="oui"){  ?>
		<h2>
	 <div id="nbr" style="color:blue"><?=count($tab)." ".(count($tab)>1?"resultats trouvés":"resultat trouvé") ?></div>


		</h2>
<div class="dres">
	 <?php for($i=0;$i<count($tab);$i++){ ?>

       <div class="res">
          <a href="..\..\monoshop\resultsearch.php?nom=<?= $tab[$i]['type'] ?>">
             <h3>
                <ol>
					
                        <li><?php echo $tab[$i]["type"] ?></li>
                    
	            </ol>
              </h3>
            </a>
       </div>
	   <?php } ?>	
</div>
	 


	 <?php } ?>	

	 </center>

	
</div>


<?php

    require_once __DIR__. '/footer.php';

?>
