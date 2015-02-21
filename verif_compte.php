<?php  
include_once('model/connect.php');
include_once("header.php");

if (!empty($_POST['pseud'])) {
	$login = $_POST['pseud'];
}else{
	echo "Vous n'avez pas entré de pseudo !";
	echo '</br>';
}
if (!empty($_POST['mdp'])) {
	$mdp = $_POST['mdp'];
}else{
	echo "Vous n'avez pas entré de mot de passe !";
	echo '</br>';
}
if (!empty($_POST['first'])) {
	$prenom = $_POST['first'];
}else{
	echo "Vous n'avez pas entré de prénom !";
	echo '</br>';
}
if (!empty($_POST['last'])) {
	$nom = $_POST['last'];
}else{
	echo "Vous n'avez pas entré de nom !";
	echo '</br>';
}
if (!empty($_POST['mail'])) {
	$email = $_POST['mail'];
}else{
	echo "Vous n'avez pas entré de mail !";
	echo '</br>';
}


	
	
	$request = mysqli_query($co,"SELECT login FROM user WHERE '$login' = login") or die ("erreur requete login");
	if (mysqli_num_rows ($request) == 1){
		echo "<script type='text/javascript'> alert('Ce pseudo existe deja, desolé') </script>";
		//header("Location:compte.php");
	}
	
	$request = mysqli_query($co,"SELECT login,password FROM user WHERE '$login' = login AND '$mdp' = password") or die ("erreur requete login mot de passe");
	if (mysqli_num_rows ($request) == 1){
		echo "<script type='text/javascript'> alert('Le couple login et mot de passe existe deja') </script>";
		//header("Location:compte.php");
	}else{
		$resultat = mysqli_query($co, "INSERT INTO user VALUES ('','$login','$mdp','','$nom','$prenom','$email')") or die ("insertion de l'utilisateur en base impossible");
		$id = mysqli_insert_id ($co);
	
	}
	
include_once("footer.php");?>