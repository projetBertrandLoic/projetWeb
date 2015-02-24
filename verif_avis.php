<?php include_once("header.php");
include_once("model/redirect-if-not-logged.php");
include_once('model/connect.php');


$date = date("Y-m-d H:i:s");

if (isset($_SESSION['id_client'])) {
	$id_user = $_SESSION['id_client'];
}
echo $id_user;

echo $date;
if (isset($_POST['avis'])) {
	$avis = $_POST['avis'];
}else{
	?>
	<div class="modal-body">
	<div class="panel panel-warning">Nous esperons vous avoir satisfait, à bientot !</div>
	</div>
	<?php
	
}
echo $avis;	

	if ((!empty($id_user)) && (!empty($date)) && (!empty($avis))){
		$request = "INSERT INTO avis_client ('id_user', 'date', 'texte') VALUES ('$id_user','$date','$avis')";
		$resultat = mysqli_query($co, $request) or die ("insertion de l'avis en base impossible");
		$id = mysqli_insert_id ($co);
	}
	
	
	
	
	
	//sleep (4);	
	header("Location: index.php");	


?>
