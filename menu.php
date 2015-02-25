<?php 
include_once("header.php"); 
include_once ("model/fonctions-article.php");

$typesArticle = getTypesArticle();
?>   

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
								<?php 
								foreach ($typesArticle as $type) {
									echo '<li><span class="filter" data-filter=".'.$type['code_type'].'">'.$type['nom_type'].'</span></li>';
								}
								?>
						   </ul>
                        </div>
                    </div>

						<div class="row" id="Container">	
							<?php 
								include_once ("model/fonctions-article.php");
								
								$articles = getArticles();
								
								foreach ($articles as $item){
									$image = getFirstImageForArticle($item['id_article']);
							?>
							
								<div class="col-md-3 col-sm-6 mix portfolio-item <?=$item['code_type'];?>">       
									<div class="portfolio-wrapper">                
										<div class="portfolio-thumb">
											<?php 
											if ($image != null) {
												echo '<img src="data:'.$image['type'].';base64,'.base64_encode($image['blob']).'" />';
											} else {
												?>
												<img alt="" src="images/Stop.png">											
												<?php
											}
											?>
											<div class="hover">
												<a class="fancybox" href=""><?php echo '<img src="data:'.$image['type'].';base64,'.base64_encode($image['blob']).'" />';?></a>
												<!--<div class="hover-iner">

												</div>
													-->
											
											</div>
										</div>  
										<div class="label-text">
											<h3><a href="article.php?id=<?=$item['id_article']?>"><?=$item['titre'];?></a></h3>
											<span class="text-category"><?=$item['prix'];?>€</span>
											<a href= "panier.php?action=ajout&l=<?=$item['id_article'];?>&q=1"<button class="btn btn-primary btn-sm">Ajouter</button><a>
									   </div>
									</div>          
								</div>
								
								<?php
							}?>
						</div>
				</div>          
            </div>


<?php include_once("footer.php"); ?>   