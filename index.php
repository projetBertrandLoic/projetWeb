<?php include_once("header.php"); ?>            
			
	<!--******************************************bloc des images defilantes***************************************-->
          
		  <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <div class="slider-caption">
                            <h1>Nos menus</h1>
                            <p>Donec justo dui, semper vitae aliquam euzali, ornare pretium enim. Maecenas molestie diam
                            <br><br>eget tellus luctus fermentum.</p>
                            <a href="menu.php">Commander</a>
                        </div>
                      <img src="images/slide1.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Nos desserts</h1>
                            <p>Nulla id iaculis ligula. Vivamus mattis quam eget urna tincidunt consequat. Nullam 
                            <br><br>consectetur tempor neque vitae iaculis. Aliquam erat volutpat.</p>
                            <a href="menu.php">Commander</a>
                        </div>
                      <img src="images/slide2.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Nos Boissons</h1>
                            <p>Maecenas fermentum est ut elementum vulputate. Ut vel consequat urna. Ut aliquet 
                            <br><br>ornare massa, quis dapibus quam condimentum id.</p>
                            <a href="menu.php">J'ai soif</a>
                        </div>
                      <img src="images/slide3.jpg" alt="" />
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
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>Les coups de coeur</h4>
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bell"></i>
                                </div>
                                <h4>Pret a vous servir</h4>
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <h4>Nos affichons la satisfaction client</h4>
                                <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu  sagittis vel diam in, malesuada malesuada risus. Aenean a sem leoneski.</p>
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
							include_once ("fonctions-article.php");
							
							// Alimentation auto de la base à chaque refresh, à virer
							//ajouterArticleCoupDeCoeur("Hello world", "Ceci est un article Hello World", 9999.99, true);
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
												<img alt="" src="images/blogpost6.jpg">											
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
										include_once ("connect.php");
										$comment=mysqli_query($co,"select texte,id_user from avis_client");
									
											while ($tab = mysqli_fetch_assoc($comment)){
												echo "<li>";
												echo "<div class='testimonails-content'>";
												echo"<p>".$tab['texte']."</p>";
												echo"<h6>".$tab['id_user']."</h6>";
												echo "</div>";
												echo "</li>";
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