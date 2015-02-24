<?php
		include('header.php');
		
		
		
		session_destroy();
		
		?><div class="panel panel-success">Vous etes bien deconnecté</div>
		
		<div >
			<form class="form-horizontal" action='index.php' method="POST">
			</br></br>
				<button class="btn btn-primary" type="submit">Retourner à l'acceuil</button>
		</div>		
		
		
		
		<?php
		header ("Refresh: 2;URL=index.php");
		include_once('footer.php');
		
		?>