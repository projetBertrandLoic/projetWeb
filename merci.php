<?php include_once("header.php");
include_once("model/redirect-if-not-logged.php");

$idUserConnected = $_SESSION['id_client'];
viderPanier($idUserConnected);

echo " Merci ";

include_once("footer.php") ?>