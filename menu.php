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
                        <div class="col-md-3 col-sm-6 mix portfolio-item Pizza">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product1.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product1_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pizza</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">Vege Pizza</a></h3>
                                    <span class="text-category">$16.00</span>
                               <button class="btn btn-primary btn-sm">Ajouter</button>
							   </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item ginger">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product2.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product2_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Ginger</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">Ginger Tea</a></h3>
                                    <span class="text-category">$24.00</span>
									<button class="btn btn-primary btn-sm">Ajouter</button>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item pizza">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product3.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product3_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pizza</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">Vege Green Salad</a></h3>
                                    <span class="text-category">$12.00</span>
									<button class="btn btn-primary btn-sm">Ajouter</button>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item pasta">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product4.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product4_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pasta</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">Herbal Hot Tea</a></h3>
                                    <span class="text-category">$8.00</span>
									<button class="btn btn-primary btn-sm">Ajouter</button>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item drink">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product5.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product5_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Drink</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">Fruit Salad</a></h3>
                                    <span class="text-category">$16.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item hamburger">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product6.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product6_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Hamburger</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">Big Hamburger</a></h3>
                                    <span class="text-category">$8.00</span>
                                </div>
                            </div>          
                        </div>
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
                                    <h3><a href="article.php">Chocolate Cake</a></h3>
                                    <span class="text-category">$14.00</span>
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
                                    <h3><a href="article.php">Pizza Taste</a></h3>
                                    <span class="text-category">$15.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item hamburger">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product3.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product3_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Hamburger</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">Hot Meat Grilled</a></h3>
                                    <span class="text-category">$16.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item drink">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product2.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product2_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Drink</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">New Ginger Taste</a></h3>
                                    <span class="text-category">$18.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item ginger">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product1.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product1_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Ginger</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">Hot Coffee</a></h3>
                                    <span class="text-category">$16.00</span>
                                </div>
                            </div>          
                        </div>
                        <div class="col-md-3 col-sm-6 mix portfolio-item pasta">       
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="images/product6.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product6_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pasta</span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><a href="article.php">SUMMER FRUIT SALADE</a></h3>
                                    <span class="text-category">$16.00</span>
                                </div>
                            </div>          
                        </div>
                    </div>	
				</div>
				
                    <div class="pagination">
                        <div class="row">   
                            <div class="col-md-12">
                                <ul>    
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">>></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>            
            </div>


<?php include_once("footer.php"); ?>   