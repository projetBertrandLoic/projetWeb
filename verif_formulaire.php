
<?php 

if (empty($_POST['pseudo'])) {
	echo "vous n'avez pas rempli de Pseudo";
	echo '</br>';
	}else{
	  $nom = $_POST['pseudo'];
	  echo "Votre nom est : ".$pseudo;
	  echo '</br>';

if (empty($_POST['motDePasse'])) {
	echo "vous n'avez pas rempli de Mot de Passe";
	echo '</br>';
	}else if (!preg_match("#^[0-9]{2}[a-zA-Z]{6}$#",$_POST['motDePasse'])){ 
		echo "Votre mot de passe ne commence pas par 2 chiffres suivis de 6 lettres";
		echo '</br>';
		}
	else{	
	  $mdp = $_POST['motDePasse'];
	  echo $mdp;
	  echo '</br>';
	} 
if (empty($_POST['prenom'])) {
	echo "vous n'avez pas rempli de Prénom";
	echo '</br>';
	}else{
	  $prenom = $_POST['prenom'];
	  echo "Votre prenom est : ".$prenom;
	  echo '</br>';
	} 
if (empty($_POST['nom'])) {
	echo "vous n'avez pas rempli de Nom";
	echo '</br>';
	}else{
	  $nom = $_POST['nom'];
	  echo "Votre nom est : ".$nom;
	  echo '</br>';
	}

if (empty($_POST['email'])) {	
	echo "vous n'avez pas rempli votre E-mail";
	echo '</br>';
	}else if (!preg_match("#^[a-zA-Z0-9]*@[a-zA-Z0-9]*\.[a-z]{2,3}$#",$_POST['email'])){ 
		echo "Votre adresse mail n'est pas valide";
		echo '</br>';
	}else{
	  $email = $_POST['email']; 
	  echo $email;
	  echo '</br>';			
	} 	 	
?>
