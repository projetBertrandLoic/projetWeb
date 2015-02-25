<?php include_once("header.php"); ?>            
			
	<!--******************************************bloc des images defilantes***************************************-->
          
		  <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <div class="slider-caption">
                            <h1>Nos menus</h1>
                            <p>Venez consulter notre large selection d'hamburger</p>
                            <a href="menu.php">Commander</a>
                        </div>
                      <img src="images/slide1.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Nos desserts</h1>
                            <p>Les meilleurs desserts jamais vu en Fast-Food </p>
                            <a href="menu.php">Commander</a>
                        </div>
                      <img src="images/slide2.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Nos Boissons</h1>
                            <p><font color="black">Un tres grand choix de boissons pour vous satisfaire</font></p>
                            <a href="menu.php">J'ai soif</a>
                        </div>
                      <img src="images/slide4.jpg" alt="" />
                    </li>
                  </ul>
                </div>
            </div>

	<!--****************************************************fin du bloc des images defilantes***********************************************-->
	
	
	
	
	<!--****************************************************bloc des presentation des services************************************************-->
            <div id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Notre engagement</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <h4>Passez une commande</h4>
                                <p>Des recettes originales de burger sont proposées, à base de viande pur bœuf, poulet ou poisson pané. Avec la livraison à domicile gratuite, profitez-en sans attendre. </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>Les coups de coeur</h4>
                                <p>Chaques semaines nous vous proposons une selections particuliere de nos produits sur cette page. Laissez vous tenter par les coup de coeur du chef</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bell"></i>
                                </div>
                                <h4>Pret a vous servir</h4>
                                <p>Nous livrons a domicile, mais nous avons aussi de nombreuses tables et des serveurs si vous souhaitez profiter de la vue du plateau du moulon.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <h4>Nos affichons la satisfaction client</h4>
                                <p>Vous nous aimez, ou vous avez un commentaire a faire. N'hesitez pas ! Nous affichons en toute transparence ce que vous pensez de nous.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

	<!--******************************************fin de bloc des presentations des services****************************************-->

	
	
	
	
	<!--******************************************************bloc coups de coeurs*************************************************-->

            <div id="Coup-de-Coeur">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Nos coups de coeur</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
					
						<?php 
							include_once ("model/fonctions-article.php");
							
							// Alimentation auto de la base à chaque refresh, à virer
							// Fin alim
							
							$coupsDeCoeur = getCoupsDeCoeur();
						
							foreach ($coupsDeCoeur as $item){
								$image = getFirstImageForArticle($item['id_article']);
								?>
								<div class='col-md-4 col-sm-6'>
									<div class='blog-post'>
										<div class='blog-thumb'>
											<?php 
											if ($image != null) {
												echo '<img src="data:'.$image['type'].';base64,'.base64_encode($image['blob']).'" />';
											} else {
												?>
												<img alt="" src="images/Stop.png">											
												<?php
											}
											?>
										</div>
										<div class='blog-content'>
											<div class='content-show'>
												<h4><a href='article.php'> <?=$item['titre']?></a></h4>
												<span> <?=$item['date_ajout']?> </span>
											</div>
											<div class='content-hide'>
												<p> <?=$item['description']?> </p>
												<a href= "panier.php?action=ajout&l=<?=$item['id_article'];?>&q=1"<button class="btn btn-primary btn-sm">Ajouter</button><a>
											</div>
										</div>
									</div>
								</div>
								<?php
							}
						?>
                    
                    </div>
                </div>
            </div>
	<!--******************************************fin du bloc coups de coeur **************************************************-->

	
	
	<!--**********************************************bloc des avis clients*****************************************************-->
	
            <div id="testimonails">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Ce qu'ils pensent de nous</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonails-slider">
                              <ul class="slides">
								<?php 
								include_once ("model/fonctions-user.php");
								$comments = getAvis();
							
								foreach ($comments as $comment){
									echo "<li>";
									echo "<div class='testimonails-content'>";
									echo"<p>".$comment['texte']."</p>";
									echo"<h6>".$comment['prenom']." ".$comment['nom'].", ".$comment['date']."</h6>";
									echo "</div>";
									echo "</li>";
									?>
									
									<?php
								}
								?> 
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			<!--**********************************************************fin des bloc des avis clients***************************************************-->
			
<?php include_once("footer.php") ?>