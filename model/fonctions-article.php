<?php 
include_once('connect.php');
include_once('fonctions-helper.php');

/* Gestion des articles */

function getArticles() {
	global $co;
	$request = "SELECT * FROM article ORDER BY id_article DESC, coup_de_coeur DESC";
	$result = mysqli_query($co, $request);
	$array = getArrayFromQueryResult($result);
	return $array; 
}

function getArticleById($id) {
	global $co;
	$request = "SELECT * FROM article WHERE id_article = " . $id;
	$result = mysqli_query($co, $request);
	$array = mysqli_fetch_assoc($result);
	return $array; 
}

function ajouterArticle($titre, $desc, $prix) {
	return ajouterArticleCoupDeCoeur($titre, $desc, $prix, false);
}

// Ajoute un nouvel article et retourne son ID
function ajouterArticleCoupDeCoeur($titre, $desc, $prix, $coupDeCoeur) {
	global $co;
	$request = "INSERT INTO article (`titre`, `description`, `prix`, `date_ajout`, `coup_de_coeur`) VALUES ";
	$request .= "('" . $titre . "', '" . $desc . "', " . $prix . ", NOW(), " . $coupDeCoeur . ")";
	$success = mysqli_query($co, $request);
	return mysqli_insert_id($co);
}

function editerArticle($id, $titre, $desc, $prix) {
	global $co;
	$request = "UPDATE article SET `titre` = '" . $titre . "', `description` = '" . $desc . "', `prix` = " . $prix . " ";
	$request .= " WHERE `id_article` = " . $id;
	$success = mysqli_query($co, $request);
	return $success;
}

function supprimerArticle($id) {
	global $co;
	$request = "DELETE FROM article WHERE `id_article` = " . $id;
	$success = mysqli_query($co, $request);
	return $success;
}

/* Gestion des images des articles */

function getFirstImageForArticle($id) {
	global $co;
	$request = "SELECT * FROM image I, image_article IA WHERE I.id_image = IA.id_image AND IA.id_article =" . $id . " LIMIT 1";
	$result = mysqli_query($co, $request);
	$array = mysqli_fetch_assoc($result);
	return $array; 
}

function getImagesForArticle($id) {
	global $co;
	$request = "SELECT * FROM image I, image_article IA WHERE I.id_image = IA.id_image AND IA.id_article =" . $id;
	$result = mysqli_query($co, $request);
	$array = getArrayFromQueryResult($result);
	return $array; 
}

function ajouterImageSurArticle($idArticle, $nomImg, $tailleImg, $typeImg, $blob) {
	global $co;
	$request = "INSERT INTO `image`(`nom`, `taille`, `type`, `blob`, `date`) ";
	$request .= "VALUES ('" . $nomImg . "','" . $tailleImg . "','" . $typeImg . "','" . addslashes($blob) . "',NOW())";
	$imgUploaded = mysqli_query($co, $request);
	$operationComplete = false;
	if ($imgUploaded) {
		$idImage = mysqli_insert_id($co);
		$request = "INSERT INTO `image_article`(`id_article`, `id_image`) VALUES (" . $idArticle . "," . $idImage . ")";
		$operationComplete = mysqli_query($co, $request);
	}
	return $imgUploaded && $operationComplete;
}

function retirerImageSurArticle($idImage) {
	$request = "DELETE FROM `image_article` WHERE `id_image` = ". $idImage;
	mysqli_query($co, $request);
	$request = "DELETE FROM `image` WHERE `id_image` = ". $idImage;
	mysqli_query($co, $request);
	return true;
}

/* Gestion des coups de coeur */

function getCoupsDeCoeur() {
	global $co;
	$request = "SELECT * FROM article WHERE `coup_de_coeur` = true ORDER BY id_article DESC";
	$result = mysqli_query($co, $request);
	$array = getArrayFromQueryResult($result);
	return $array; 
}

function mettreCoupDeCoeur($idArticle) {
	return actualiserCoupDeCoeur($idArticle, true);
}

function retirerCoupDeCoeur($idArticle) {
	return actualiserCoupDeCoeur($idArticle, false);
}

function actualiserCoupDeCoeur($idArticle, $coupDeCoeur) {
	global $co;
	$request = "UPDATE article SET `coup_de_coeur` = " . $coupDeCoeur;
	$request .= " WHERE `id_article` = " . $id;
	$success = mysqli_query($co, $request);
	return $success;
}

?>