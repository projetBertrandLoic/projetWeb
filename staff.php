<?php include_once("header.php");   
		include ("transfert.php");
		if ( isset($_FILES['fic']) )
		{
		transfert();
		}
		?>
			
		<h3>Envoi d'une image</h3>
			
		<form enctype="multipart/form-data" action="#" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="250000" />
			<input type="file" name="fic" size=50 />
			
		
				<h3>Saississez un commentaire pour le coup de coeur</h3>
				<textarea class="form-control" rows="3"></textarea>
				<input type="submit" value="Envoyer" />
			
		</form>
	<?php include_once("footer.php") ?>