<?php

@$keywords=$_GET["keywords"];
@$valider= $_GET["valider"];
if (isset($valider) && !empty(trim($keywords))) {
	$words= explode(" ",trim($keywords));
	for ($i=0; $i<count($words) ; $i++) 
		$kw[$i]="nom like '%".$words[$i]."%'";
require_once __DIR__. '/connexion.php';

	$res=$access->prepare("SELECT*FROM produits WHERE ".implode(" and ",$kw));
	$res->setFetchMode(PDO::FETCH_ASSOC);
	$res->execute();
	$tab=$res->fetchAll();
	$afficher="oui";
	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
		<input class="input" name="keywords" value="<?php echo $keywords ?>" placeholder="Saisissez la recherche ici">
		<button class="search-btn"name="valider" >Search</button>
  </form>
  <?php if (@$afficher=="oui"){  ?>
		<div>
			<div id="nbr" style="color:red"><?=count($tab)." ".(count($tab)>1?"resultats trouvés":"resultat trouvé") ?></div>
				<ol>
					<?php for($i=0;$i<count($tab);$i++){ ?>
					<a href="resultsearch.php?id=<?= $tab[$i]["id"] ?>">
                        <li style="color:red" ><?php echo $tab[$i]["nom"] ?></li>
                    </a>
				</ol>
					<?php  } ?>
		</div>

                     <?php } ?>
</body>
</html>