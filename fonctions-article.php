 <?php 
 include_once('connect.php');

  /* Gestion des articles */
 
 function getArticles() {
	 global $co;
	 $request = "SELECT * FROM article";
	 $result = mysqli_query($co, $request);
	 $array = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
	 global $co;
	 $request = "INSERT INTO article (`titre`, `description`, `prix`, `date_ajout`, `coup_de_coeur`) VALUES ";
	 $request .= "('" . $titre . "', '" . $desc . "', " . $prix . ", NOW(), false)";
	 $success = mysqli_query($co, $request);
	 return $success;
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
 
  //ajouterArticle("Nouvel article", "Une desc", 50);
  //supprimerArticle(2);
 $arr = getArticles();
 var_dump($arr);
 
 /* Gestion des images des articles */
 
 function getImagesForArticle() {
	 
 }
 
 function ajouterImageSurArticle() {
	 
 }
 
 function retirerImageSurArticle() {
	 
 }
 
 /* Gestion des coups de coeur */
 
 function getCoupsDeCoeur() {
	 
 }
 
 function mettreCoupDeCoeur() {
	 
 }
 
 function retirerCoupDeCoeur() {
	 
 }

 ?>