<?php
 	include_once('header.php');
 	include_once('model/connect.php');
 
if ((!empty($_POST["login"])) && (!empty($_POST["password"]))){
	$login = $_POST["login"];
	$passwd = $_POST["password"];
	
	// verification des caracteres speciaux
	
	$passwd = mysqli_real_escape_string($co, $passwd); 
	
	
	$resultat = mysqli_query($co,"SELECT * FROM user WHERE login='$login' AND '$passwd'=password") or die("erreur requete client");
	
	// si le client existe, il peut se loguer
	if (mysqli_num_rows($resultat) == 1) {
	
		$tabClient = mysqli_fetch_assoc($resultat);
		$_SESSION['nomUser'] = $tabClient["prenom"];
		$_SESSION['login'] = $tabClient["login"];
		$_SESSION['password'] = $tabClient["password"];
		$_SESSION['is_admin'] = $tabClient["is_admin"];
		$_SESSION['id_client'] = $tabClient["id_user"];
		
		if ($tabClient["is_admin"] == 1){
			header("Location: staff.php");
		}else{
			header("Location: menu.php");	
		}
		
	}
	// si le client n'existe pas, on affiche un message d'erreur 
	else {
		echo "<span class='label label-warning'>Utilisateur inconnu</span>";
	
	?>
		<div >
			<form class="form-horizontal" action='compte.php' method="POST">
			</br></br>
				<button class="btn btn-primary" type="submit">Retourner au Formulaire</button>
		</div>		
		<?php
	}
}

include_once('footer.php');
?>