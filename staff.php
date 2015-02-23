<?php include_once("header.php");   
		include ("transfert.php");
		if ( isset($_FILES['fic']))
		{
		transfert();
		}
		?>
		<h1>Bienvenu sur l'interface administrateur</h1>
		</br>
			
		<label for="titre">Envoi d'une image</label>
			
		<form enctype="multipart/form-data" action="#" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="250000" />
			<input type="file" name="fic" size=50 />
			</br>
			<label for="titre">Titre du produit</label>
			<input type="texte" class="form-control" id="testeproduit" name="titre" placeholder="nom du produit" />
			</br>
			<label for="titre">Prix du produit</label>
			<input type="float" class="form-control" id="testeproduit" name="prix" placeholder="prix du produit" />
			<br>
		
		<!--rajouter titre description prix iscoupdecouer dans la table article-->
				<label for="titre">Saississez une description pour l'article</label>
				<input type="texte" class="form-control" id="testeproduit" name="description" placeholder="description du produit" />
				</br>
				<div class="form-group">
					<label class="col-sm-4 control-label">Est ce un coup de coeur ?</label>
					<div class="col-sm-8">
						<label class="radio-inline"> <input type="radio" name="coupDeCoeur"  value="oui" checked> Oui </label>
						<label class="radio-inline"> <input type="radio" name="coupDeCoeur"  value="non"> Non </label>						
					</div>
				</div>

				<button type="submit" class="btn btn-default">Envoyer</button>
			
		</form>
	<?php include_once("footer.php") ?>