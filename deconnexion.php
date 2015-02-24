<?php
		include('header.php');
		
		
		
		session_destroy();
		
		?><div class="panel panel-success">Vous etes bien deconnecté</div>
		<?php
		header ("Refresh: 2;URL=index.php");
		include_once('footer.php');
		
		?>