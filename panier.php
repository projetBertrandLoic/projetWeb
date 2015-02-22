<?php include_once("header.php"); 

include_once("model/fonctions-panier.php");

// TODO : Remplacer l'ID par celui de l'utilisateur connecté
$idUserConnected = 1;

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh'))) $erreur=true;

   //récuperation des variables en POST ou GET
   $idArticle = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;//idArticle
   $qte = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;//quantite

   //On traite $qte qui peut etre un entier simple ou un tableau d'entier
   if (is_array($qte)){
      $qtesArticle = array();
      $i=0;
      foreach ($qte as $contenu){
         $qtesArticle[$i++] = intval($contenu);
      }
   }
   else
   $qte = intval($qte);
}

if (!$erreur){
   switch($action){
      Case "ajout":
		// pour ajouter un article, faire une requête type "panier.php?action=ajout&l=ID_ARTICLE&q=QUANTITE_ARTICLE"
		 ajouterArticleDansPanier($idUserConnected, $idArticle, $qte);
         break;
      Case "suppression":
		// pour supprimer un article, faire une requête type "panier.php?action=suppression&l=ID_ARTICLE"
		 retirerArticleDePanier($idUserConnected, $idArticle);
         break;
      Case "refresh" :
		 $panier = getPanier($idUserConnected);
		 if ($panier != null && count($panier) == count($qtesArticle)) {
			 $i = 0;
			 foreach ($panier as $ligne){
				modifierQteArticleDansPanier($idUserConnected, $ligne['id_article'], round($qtesArticle[$i]));
				$i++;
			 }
		 }
         break;
      Default:
         break;
   }
}
?>   

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="heading-section">
				<h2>Votre panier</h2>
				<img alt="" src="images/under-heading.png">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<form method="post" action="panier.php">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Libellé</th>
							<th>Quantité</th>
							<th>Prix Unitaire</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$panier = getPanier($idUserConnected);
						$infosPanier = getInfosPanier($idUserConnected);
						
						if ($panier != null) {
							foreach ($panier as $ligne){
							?>
							<tr>
								<td><?=$ligne['titre'];?></td>
								<td>
									<input type="text" size="4" name="q[]" value="<?=$ligne['quantite'];?>"/>
								</td>
								<td><?=$ligne['prix'];?>€</td>
								<td><a href="panier.php?action=suppression&l=<?=$ligne['id_article'];?>">Supprimer</a></td>
							</tr>
							<?php
							}
							// Affichage du montant total
							?>
							<tr>
								<td><strong>Total</strong></td>
								<td><?=$infosPanier['nbProduits'];?></td>
								<td><?=$infosPanier['montantTotal'];?>€</td>
								<td></td>
							</tr>
							<?php
						} else {
							?>
							<tr><td>Votre panier est vide </td></tr>
							<?php
						}
						?>
					</tbody>
				</table>
				<input type="submit" value="Rafraichir"/>
				<input type="hidden" name="action" value="refresh"/>
			</form>
		</div>
	</div>
</div>

<?php include_once("footer.php"); ?>




	