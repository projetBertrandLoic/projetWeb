<?php  
include_once('model/connect.php');
include_once('header.php');

//  booleen permettant l'inscription si toutes les conditions reunies
$canSuscribe = false;

//////////////////////////////////////////////  DEBUT tests si les variables reçues du formulaire sont vides ou correctes //////////////////////////////////////////

if (!empty($_POST['pseud'])) {
	$login = $_POST['pseud'];
	$_SESSION['pseudo'] = $login;
}else{
	?><span class="label label-warning">Vous n'avez pas entré de pseudo !</span><?php
	echo '</br>';
}

if (!empty($_POST['mdp'])) {
	$mdp = $_POST['mdp'];
	    $_SESSION['mdp'] = $mdp;
}else{
	?><span class="label label-warning">Vous n'avez pas entré de mot de passe !</span><?php
	echo '</br>';
}

if (!empty($_POST['first'])) {
	$prenom = $_POST['first'];
	$_SESSION['prenom'] = $prenom;
}else{
	?><span class="label label-warning">Vous n'avez pas entré de prenom !</span><?php
	echo '</br>';
}

if (!empty($_POST['last'])) {
	$nom = $_POST['last'];
	$_SESSION['nom'] = $nom;
}else{
	?><span class="label label-warning">Vous n'avez pas entré de nom !</span><?php
	echo '</br>';
}

if (empty($_POST['mail'])) {
	?><span class="label label-warning">Vous n'avez pas entré d'adresse mail !</span><?php
	echo '</br>';
	}else if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
			$email = $_POST['mail'];
			$_SESSION['email'] = $email;
		}else{
			?><span class="label label-danger">Votre mail n'est pas valide</span> </br><?php
	}

if (!empty($_POST['adresse'])) {
	$adresse = $_POST['adresse'];
	$_SESSION['adresse'] = $adresse;
}else{
	?><span class="label label-warning">Vous n'avez pas entré d'adresse !</span><?php
	echo '</br>';
}

//////////////////////////////////////////////  FIN tests si les variables reçues du formulaire sont vides ou correctes //////////////////////////////////////////	



// verification si le login existe deja et si le couple login password aussi

	if (!empty($_POST['pseud'])){
	$request = mysqli_query($co,"SELECT login FROM user WHERE '$login' = login") or die ("erreur requete login");
		if (mysqli_num_rows ($request) == 1){
			?><span class="label label-danger">Ce pseudo est deja pris</span>
			</br><?php
			unset($_SESSION['pseudo']);
		}else if ((!empty($_POST['pseud'])) && (!empty($_POST['mdp']))){
				$request = mysqli_query($co,"SELECT login,password FROM user WHERE '$login' = login AND '$mdp' = password") or die ("erreur requete login mot de passe");
				if (mysqli_num_rows ($request) == 1){
					?><span class="label label-danger">Couple pseudo et mot de passe deja existant</span><?php
					unset($_SESSION['pseudo']);
					unset($_SESSION['mdp']);
				}else{
					$canSuscribe = true;
				}	
		}	
	}	
		
// si les conditions sont remplies --> inscription de l'utilisateur en BDD
	if ((!empty($login)) && (!empty($mdp)) && (!empty($prenom)) && (!empty($nom)) && (!empty($email)) &&(!empty($adresse))&& $canSuscribe == true){
			$request = "INSERT INTO user (`login`, `password`, `is_admin`, `nom`, `prenom`, `mail`) VALUES ('$login','$mdp',false,'$nom','$prenom','$email')";
			$resultat = mysqli_query($co, $request) or die ("insertion de l'utilisateur en base impossible");
			$id = mysqli_insert_id ($co);
			?>
			<div class="panel panel-success">Votre inscription a bien été prise en compte "<?php echo $login?>", bienvenu ! Merci de vous logguer</div><?php
			unset($_SESSION['pseudo']);
			unset($_SESSION['mdp']);
			unset($_SESSION['prenom']);
			unset($_SESSION['nom']);
			unset($_SESSION['email']);
			unset($_SESSION['adresse']);
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
