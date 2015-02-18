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
                            <a href="produits.php">Commander</a>
                        </div>
                      <img src="images/slide1.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Nos desserts</h1>
                            <p>Nulla id iaculis ligula. Vivamus mattis quam eget urna tincidunt consequat. Nullam 
                            <br><br>consectetur tempor neque vitae iaculis. Aliquam erat volutpat.</p>
                            <a href="single-post.html">Commander</a>
                        </div>
                      <img src="images/slide2.jpg" alt="" />
                    </li>
                    <li>
                        <div class="slider-caption">
                            <h1>Nos Boissons</h1>
                            <p>Maecenas fermentum est ut elementum vulputate. Ut vel consequat urna. Ut aliquet 
                            <br><br>ornare massa, quis dapibus quam condimentum id.</p>
                            <a href="single-post.html">J'ai soif</a>
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
							include_once ("connect.php");
							$coupsDeCoeur=mysqli_query($co,"select * from images");
						
							while ($tab = mysqli_fetch_assoc($coupsDeCoeur)){
								
								echo "<div class='col-md-4 col-sm-6'><div class='blog-post'><div class='blog-thumb'>";
								echo '<img src="data:'.$tab['img_type'].';base64,'.base64_encode($tab['img_blob']).'"/>';
								echo "</div>";
								echo "<div class='blog-content'>";
                                echo "<div class='content-show'>";
                                echo "<h4><a href='single-post.html'>".$tab['img_titre']."</a></h4>";
                                echo "<span>".$tab['img_date']."</span>";
                                echo "</div>";
                                echo "<div class='content-hide'>";
                                echo "<p>".$tab['img_desc']."</p>";
                                echo "</div></div>";
								echo "</div></div>";
							}
						?>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blogpost1.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">Le Sandwich poulet royal</a></h4>
                                        <span>29 Sep 2015</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blogpost2.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">Les meilleur des gouts</a></h4>
                                        <span>23 Sep 2015</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blogpost3.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">La Pizza du chef </a></h4>
                                        <span>14 Sep 2084</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blogpost4.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">ALimentation equilibré</a></h4>
                                        <span>25 Aug 2084</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blogpost5.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">Nos ptit' dej</a></h4>
                                        <span>17 Aug 2015</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="images/blogpost6.jpg" alt="" />
                                </div>
                                <div class="blog-content">
                                    <div class="content-show">
                                        <h4><a href="single-post.html">Jus de fruit frais</a></h4>
                                        <span>12 Aug 2015</span>
                                    </div>
                                    <div class="content-hide">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit. Sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
										$comment=mysqli_query($co,"select commentaire,nomClient from avisclients");
									
											while ($tab = mysqli_fetch_assoc($comment)){
												echo "<li>";
												echo "<div class='testimonails-content'>";
												echo"<p>".$tab['commentaire']."</p>";
												echo"<h6>".$tab['nomClient']."</h6>";
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