<?php
		include("header.php");
		unset($_SESSION['nomUser']);
		unset($_SESSION['login']);
		unset($_SESSION['password']);
		unset($_SESSION['is_admin']);
		unset($_SESSION['id_client']);
		
		
		?><span class="label label-success">Vous etes bien deconnecté</span>
		
		<div >
			<form class="form-horizontal" action='index.php' method="POST">
			</br></br>
				<button class="btn btn-primary" type="submit">Retourner à l'acceuil</button>
		</div>		
		
		
		
		<?php
		include_once('footer.php');
		
		?>