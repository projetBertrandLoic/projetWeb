<?php include_once("header.php");
include_once("model/redirect-if-not-logged.php");
include_once('model/connect.php');


$idUserConnected = $_SESSION['id_client'];

?><div class="panel panel-success">Merci pour votre commande <?php echo $_SESSION['nomUser'];?> !</div>
	
		
	<div class="panel panel-default">
	  <div class="panel-body"> Si nos services vous ont plus , merci de prendre quelques minutes pour le faire savoir aux autres !  </div>
	  
	  
	  <form class="form-horizontal" action='verif_avis.php' method="POST">
	  <div class="panel-footer"><textarea name="avis" placeholder="Votre avis nous intéresse"></textarea></div>
	</div>		
	  <button class="btn btn-primary" type="submit">Envoyer</button>
	  </form>
		
		</div>

<?php
viderPanier($idUserConnected);




include_once("footer.php") ?>