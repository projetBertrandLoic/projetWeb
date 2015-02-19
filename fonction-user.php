<?php

 include_once("connect.php");
 
if (!empty($_POST["login"]) && !empty($_POST["password"])  {

	$login = $_POST["login"];
	$passwd = $_POST["password"];
	
	
	
	$resultat = mysqli_query($co,"SELECT login, password FROM user WHERE login='$login' AND '$passwd'=password") or die("erreur requete client");
	
	// si le client existe, il peut se loguer
	if (mysqli_num_rows($resultat) == 1) {
	
		$result_ok_client = mysqli_fetch_assoc($resultat);
		$id_client = $result_id_client["id_client"];
		
		
	}
	// si le client n'existe pas, on affiche un message d'erreur 
	else {
		echo "Erreur Login ou mot de passe invalide";
	}

	mysqli_close($co);
}


?>