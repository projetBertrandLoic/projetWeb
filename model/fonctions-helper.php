<?php 

 // Retourne le résultat d'une requête sous forme d'un tableau
function getArrayFromQueryResult($mysqli_result) {
	$result_array = array();
	while($row = mysqli_fetch_assoc($mysqli_result))
	{
	    $result_array[] = $row;
	}
	return $result_array;
}

?>