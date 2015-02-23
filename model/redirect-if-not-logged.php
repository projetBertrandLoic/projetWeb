<?php
// Redirection en cas d'utilisateur non connecté
if (!isset($_SESSION['id_client']) || $_SESSION['id_client'] === null) {
	header("Location: compte.php?info");
}
?>