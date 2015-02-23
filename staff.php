<?php include_once("header.php");   
		include ("transfert.php");
		if ( isset($_FILES['fic']) )
		{
		transfert();
		}
		?>
			
		<h4>Envoi d'une image</h4>
			
		<form enctype="multipart/form-data" action="#" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="250000" />
			<input type="file" name="fic" size=50 />
			
			<label for="titre">Titre du produit</label>
			<input type="texte" class="form-control" id="testeproduit" placeholder="nom du produit" />
			
			<label for="titre">Prix du produit</label>
			<input type="number" class="form-control" id="testeproduit" placeholder="prix du produit" />
		
		
		<!--rajouter titre description prix iscoupdecouer dans la table article-->
				<h3>Saississez une description pour l'article</h3>
				<textarea class="form-control" rows="3"></textarea>
				<h3>Est ce un coup de coeur?</h3>
				<div class="radio">
				  <label><input type="radio" name="optradio">Oui</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="optradio">Non</label>
				</div>
				<button type="submit" class="btn btn-default">Envoyer</button>
			
		</form>
	<?php include_once("footer.php") ?>