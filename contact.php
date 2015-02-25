<?php include_once("header.php"); ?>   

            <div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Nos Contacts</h2>
                                <span>Telephone / Mail / Adresse  <!--<a href="contact.php">Contactez nous</a>--></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="product-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Contactez nous !</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
						<div class="col-md-4 col-md-offset-4">
                            <div class="info">
                                <p>N'hésitez pas, au sujet d'un produit, d'une commande ou pour toutes autres informations complementaires </p>
                                <ul>
                                    <li><i class="fa fa-phone"></i>01 46 46 00 01</li>
                                    <li><i class="fa fa-globe"></i>Plateau du Moulon, Rue Noetzlin, 91400 Orsay</li>
                                    <li><i class="fa fa-envelope"></i><a href="#">RestoRap.com</a></li>
                                </ul>
                            </div>
                        </div>     
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Trouvez nous sur la carte</h2>
                                <img src="images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="googleMap" style="height:420px;"></div>
                        </div>
                    </div>     
                </div>
            </div>

        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false">
        </script>
         
		<!-- utilisation de l'api google pour centrer le restaurant sur une carte --> 
        <script>
		
		var map;
		
        function initialize()
        {
		var orsay = new google.maps.LatLng(48.711763,2.17055,15);
			var map_options = {
			  center: orsay,
			  zoom: 16,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map = new google.maps.Map(document.getElementById("googleMap"), map_options);

			var marker = new google.maps.Marker({
				position: orsay,
				map: map,
				title: 'RestoRap'
			});
        }
		

        google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, "resize", function() 
		{
		 	var center = map.getCenter();
		 	google.maps.event.trigger(map, "resize");
		 	map.setCenter(center); 
		});
        </script>
<?php include_once("footer.php") ?>
   