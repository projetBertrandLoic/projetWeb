<?php

include_once("header.php");   
include_once("model/redirect-if-not-logged.php");
include_once ("transfert.php");
$transferable = false;
	
if (!empty($_POST['titre'])){
	$titre = $_POST['titre'];
	$_SESSION['titre'] = $titre;
}else{
	?><span class="label label-danger">Titre manquant</span><?php
	header ("Refresh: 2;URL=staff.php");
	echo "</br>";
}

if (!empty($_POST['prix'])){
	$prix = $_POST['prix'];
	$_SESSION['prix'] = $prix;
	
}else{
	?><span class="label label-danger">Prix manquant</span><?php
	header ("Refresh: 2;URL=staff.php");
	echo "</br>";
}

if (!empty($_POST['description'])){
	$description = $_POST['description'];
	$_SESSION['description'] = $description;
	
}else{
	?><span class="label label-danger">Description manquante</span><?php
	header ("Refresh: 2;URL=staff.php");
	echo "</br>";
}


if (empty($_FILES['fic'])){
	?><span class="label label-danger">Image manquante</span><?php
	echo "</br>";
}	
		
if ((!empty($_POST['titre'])) && (!empty($_POST['prix'])) && (!empty($_POST['description'])) && (!empty($_FILES['fic'])) ){
	$transferable = true;
}else{
	?><span class="label label-danger">Il vous manque des éléments , verifiez et réessayer</span><?php
}	
	
if ($transferable == true){
transfert(ajouterArticleCoupDeCoeur("$titre","$description","$prix",true));
?><div class="panel panel-success">Vous avez bien inseré votre nouvel article</div><?php
header ("Refresh: 5;URL=staff.php");	
}
		
include_once("footer.php");   		