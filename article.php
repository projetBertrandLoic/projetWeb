<?php 
include_once("header.php"); 
include_once ("model/fonctions-article.php");

$idArticle = (isset($_POST['id'])? $_POST['id']:  (isset($_GET['id'])? $_GET['id']:null )) ;
$article = getArticleById($idArticle);
$images = getImagesForArticle($idArticle);
if($article === null)
{
	?>
		<span class="label label-danger">L'article que vous souhaitez consulter n'existe pas. Vous allez être redirigé.</span>
	<?php
	header ("Refresh: 2;URL=index.php");
	exit;
}

?> 

<div id="product-post">
	<div class="container">	
		<div class="row">
			<div class="col-md-12">
				<div class="heading-section">
					<h2>Acheter nos produits</h2>
					<img src="images/under-heading.png" alt="" />
				</div>
			</div>
		</div>
		<div id="single-blog" class="page-section first-section">
			<div class="container">
				<div class="row">
					<div class="product-item col-md-12">
						<div id="slider">
							<div class="flexslider image image-post">
								<ul class="slides">
									<?php
									foreach ($images as $image) {
										echo '<li>';
										echo '<img src="data:'.$image['type'].';base64,'.base64_encode($image['blob']).'" />';
										echo '</li>';
									}
									?>
								</ul>
							</div>
						</div>
						<div class="product-content">
							<div class="product-title">
								<h3><?=$article['titre'];?></h3>
								<a href= "panier.php?action=ajout&l=<?=$article['id_article'];?>&q=1"><button class="btn btn-primary btn-sm">Acheter</button></a>
							</div>
							<p>Ajouté le <?=$article['date_ajout'];?></p>
							<p><?=$article['description'];?></p>
						</div>
						<div class="divide-line">
						<img src="images/div-line.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>     
	</div>
</div>

<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script src="js/vendor/jquery.gmap3.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<?php include_once("footer.php"); ?> 

    
        
   