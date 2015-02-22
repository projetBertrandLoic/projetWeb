<?php 
include_once('connect.php');
include_once('fonctions-helper.php');

function getAvis (){
	global $co;
	$request = "select * from avis_client AC, user U where AC.id_user=u.id_user";
	$comment = mysqli_query($co, $request);
	$array = getArrayFromQueryResult($comment);
	return $array;
}

function ajouterAvis ($idUser, $texte){

}

?>