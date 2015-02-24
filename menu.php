<?php include_once("header.php"); ?>   

            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Notre menu</h2>
                                <span>Index / <a href="about-us.html">Produits</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="products-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="product-heading">
                                <h2>Ptite faim ?</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
								<li><span class="filter" data-filter="all">Tous</span></li>
                                <!-- <li><span class="filter" data-filter=".ginger">Ginger</span></li>-->           
								
								<li><span class="filter" data-filter=".hamburger">Hamburger</span></li>
								<li><span class="filter" data-filter=".pizza">Pizza</span></li>
                                <li><span class="filter" data-filter=".drink">Boissons</span></li>
								<li><span class="filter" data-filter=".pasta">Dessert</span></li>
						   </ul>
                        </div>
                    </div>
				
					<!--
					<?php 
							include_once ("model/connect.php");
							$imgMenu=mysqli_query($co,"select * from images");
						
							while ($tab = mysqli_fetch_assoc($imgMenu)){
								
								echo "<div class='row' id='Container'>";
								echo '<img src="data:'.$tab['img_type'].';base64,'.base64_encode($tab['img_blob']).'"/>';
								echo "</div>";
								echo "<div class='blog-content'>";
                                echo "<div class='content-show'>";
                                echo "<h4><a href='single-post.html'>".$tab['img_titre']."</a></h4>";
                                echo "<span>".$tab['img_date']."</span>";
								echo "<button class='btn btn-primary btn-sm'>Ajouter</button>";
                                echo "</div>";
                                echo "<div class='content-hide'>";
                                echo "<p>".$tab['img_desc']."</p>";
                                echo "</div></div>";
								echo "</div></div>";
							}
						?>
						-->
						<div class="row" id="Container">	
							<?php 
								include_once ("model/fonctions-article.php");
								
								// Alimentation auto de la base à chaque refresh, à virer
								//ajouterArticleCoupDeCoeur("Hello world", "Ceci est un article Hello World", 9999.99, true);
								// Fin alim
								
								$articles = getArticles();
								
								foreach ($articles as $item){
									$image = getFirstImageForArticle($item['id_article']);
							?>
							
								<div class="col-md-3 col-sm-6 mix portfolio-item Pizza">       
									<div class="portfolio-wrapper">                
										<div class="portfolio-thumb">
											<?php 
											if ($image != null) {
												echo '<img src="data:'.$image['type'].';base64,'.base64_encode($image['blob']).'" />';
											} else {
												?>
												<img alt="" src="images/blogpost6.jpg">											
												<?php
											}
											?>
											<div class="hover">
												<div class="hover-iner">
													<a class="fancybox" href=""><?php echo '<img src="data:'.$image['type'].';base64,'.base64_encode($image['blob']).'" />'?></a>

												</div>
											</div>
										</div>  
										<div class="label-text">
											<h3><a href="article.php?id=<?=$item['id_article']?>"><?=$item['titre']?></a></h3>
											<span class="text-category"><?=$item['prix']?>€</span>
											<a href= "panier.php?action=ajout&l=<?=$item['id_article']?>&q=1"<button class="btn btn-primary btn-sm">Ajouter</button><a>
									   </div>
									</div>          
								</div>
								
								<?php
							}?>
						</div>
						
						
						
						
				
                    <div class="row" id="Container">
                       
                       
                        <div class="col-md-3 col-sm-6 mix portfolio-item pizza">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product7.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product7_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pizza</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">Burger D'la Mort</a></h3>
                                    <span class="text-category">14.00$</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item pasta">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product8.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product8_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pasta</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">Pizza Chicken Shit</a></h3>
                                    <span class="text-category">15.00$</span>
                                </div>
                            </div>          
                        </div>
                        
                   
                    </div>	
				</div>
				</div>            
            </div>


<?php include_once("footer.php"); ?>   