<?php
include_once('connect.php');
include_once('fonctions-helper.php');

function getPanier($idUser) {
	global $co;
	$request = "SELECT * FROM ligne_panier LP, article A WHERE LP.id_article = A.id_article ";
	$request .= "AND LP.id_user = " . $idUser;
	$result = mysqli_query($co, $request);
	$array = getArrayFromQueryResult($result);
	return $array; 
}

// Indique le nombre de produits et le montant total du panier d'un utilisateur donné
function getInfosPanier($idUser) {
	global $co;
	$request = "SELECT COALESCE(SUM(LP.quantite), 0) AS 'nbProduits', COALESCE(SUM(LP.quantite * prix), 0) AS 'montantTotal'";
	$request .= "FROM ligne_panier LP, article A WHERE LP.id_article = A.id_article ";
	$request .= "AND LP.id_user = " . $idUser;
	$result = mysqli_query($co, $request);
	$array = mysqli_fetch_assoc($result);
	return $array; 
}

function ajouterArticleDansPanier($idUser, $idArticle, $quantite) {
	global $co;
	$request = "INSERT INTO ligne_panier (`id_article`, `id_user`, `quantite`) VALUES ";
	$request .= "(" . $idArticle . ", " . $idUser . ", " . $quantite . ")";
	$success = mysqli_query($co, $request);
	return mysqli_insert_id($co);
}

function modifierQteArticleDansPanier($idUser, $idArticle, $quantite) {
	global $co;
	$request = "UPDATE ligne_panier SET `quantite` = " . $quantite . " ";
	$request .= " WHERE `id_article` = " . $idArticle . " AND `id_user` = " . $idUser;
	$success = mysqli_query($co, $request);
	return $success;
}

function retirerArticleDePanier($idUser, $idArticle) {
	global $co;
	$request = "DELETE FROM ligne_panier WHERE `id_article` = " . $idArticle . " AND `id_user` = " . $idUser;
	$success = mysqli_query($co, $request);
	return $success;
}

function viderPanier($idUser) {
	global $co;
	$request = "DELETE FROM ligne_panier WHERE `id_user` = " . $idUser;
	$success = mysqli_query($co, $request);
	return $success;
}

?>