<?php  
include_once('model/connect.php');
include_once('header.php');

$canSuscribe = false;

if (!empty($_POST['pseud'])) {
	$login = $_POST['pseud'];
}else{
	?><span class="label label-warning">Vous n'avez pas entré de pseudo !</span><?php
	echo '</br>';
}

if (!empty($_POST['mdp'])) {
	    $mdp = $_POST['mdp'];
}else{
	?><span class="label label-warning">Vous n'avez pas entré de mot de passe !</span><?php
	echo '</br>';
}

if (!empty($_POST['first'])) {
	$prenom = $_POST['first'];
}else{
	?><span class="label label-warning">Vous n'avez pas entré de prenom !</span><?php
	echo '</br>';
}

if (!empty($_POST['last'])) {
	$nom = $_POST['last'];
}else{
	?><span class="label label-warning">Vous n'avez pas entré de nom !</span><?php
	echo '</br>';
}

if (empty($_POST['mail'])) {
	?><span class="label label-warning">Vous n'avez pas entré d'adresse mail !</span><?php
	echo '</br>';
	}else if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
			$email = $_POST['mail'];
		}else{
			?><span class="label label-danger">Votre mail n'est pas valide</span> </br><?php
	}


if (!empty($_POST['adresse'])) {
	$adresse = $_POST['adresse'];
}else{
	?><span class="label label-warning">Vous n'avez pas entré d'adresse !</span><?php
	echo '</br>';
}

	
	if (!empty($_POST['pseud'])){
	$request = mysqli_query($co,"SELECT login FROM user WHERE '$login' = login") or die ("erreur requete login");
		if (mysqli_num_rows ($request) == 1){
			?><span class="label label-danger">Ce pseudo est deja pris</span>
			</br><?php
		}else if ((!empty($_POST['pseud'])) && (!empty($_POST['mdp']))){
				$request = mysqli_query($co,"SELECT login,password FROM user WHERE '$login' = login AND '$mdp' = password") or die ("erreur requete login mot de passe");
				if (mysqli_num_rows ($request) == 1){
					?><span class="label label-danger">Couple pseudo et mot de passe deja existant</span><?php
				}else{
					$canSuscribe = true;
				}	
		}	
	}	
	
	
	if ((!empty($login)) && (!empty($mdp)) && (!empty($prenom)) && (!empty($nom)) && (!empty($email)) &&(!empty($adresse))&& $canSuscribe == true){
		$resultat = mysqli_query($co, "INSERT INTO user VALUES ('','$login','$mdp','','$nom','$prenom','$email','$adresse')") or die ("insertion de l'utilisateur en base impossible");
		$id = mysqli_insert_id ($co);
		?><span class="label label-success">Votre inscription a bien été prise en compte "<?php echo $login?>", bienvenu ! </span><?php
	}

	
?>
<div >
	<form class="form-horizontal" action='compte.php' method="POST">
	</br></br>
		<button class="btn btn-primary" type="submit">Retourner au Formulaire</button>
</div>		
<?php
include_once('footer.php');
	
	?>
