<?php 
session_start(); 
error_reporting(-1);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <title>Loic et Bertrand Responsive</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- utilisation de la bibliotheque css de bootstrap pour beneficier du responsive design-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style_misc.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/testimonails-slider.css">

		
        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
		
    </head>
    <body>
            <header>
                <div id="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="utilisateurs">
                                    <?php if(!isset($_SESSION['nomUser'])){
										echo "<a href='compte.php'> Mon compte</a>";
									}else{
										 echo "<a href='deconnexion.php'> Deconnexion</a>";
                                    	 echo "Bonjour, ".$_SESSION['nomUser'];
									}?>
                                </div>
                            </div>
							
							
			<!--**************************************************bloc du panier****************************************************-->
							
                            <div class="col-md-4">
                                <div class="cart-info">
								
								<!--mon panier chercher dans la bd les produits -->
                                    <i class="fa fa-shopping-cart"></i>
									<?php
										include("model/fonctions-panier.php");
										// TODO : Remplacer avec l'ID de l'utilisateur connecté
										
										$idUserConnected = 1;
										$infosPanier = getInfosPanier($idUserConnected);
										
										if ($infosPanier != null) {
											?>
												<a href='panier.php'>(<?=$infosPanier['nbProduits'];?> articles)</a> dans votre panier (<a href='#'>€<?=$infosPanier['montantTotal'];?></a>)
											<?php
										} else {
											?>
												<a href='panier.php'>(0 article)</a> dans votre panier (<a href='#'>€0.00</a>)
											<?php
										}
									?>
                                </div>
                            </div>
							<!--*****************************************************fin de bloc du panier*****************************************************-->
							
                        </div>
                    </div>
                </div>
                <div id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="logo">
                                    <a href="#"><img src="images/logo.png" title="LoicEtBertrand" alt="logo de loic et bertrand" ></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.php">Accueil</a></li>
                                        <li><a href="menu.php">Menu</a></li>
										<li><a href="panier.php">Mon panier</a></li>
                                        <li><a href="contact.php">Nous contacter</a></li>
                                    </ul>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
