<?php include_once("header.php");?>   
	
<div class="" id="loginModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Avez vous un compte ?</h3>
	</div>
	<div class="modal-body">
		<div class="well">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#login" data-toggle="tab">Se Connecter</a></li>
				<li><a href="#create" data-toggle="tab">Creer un compte</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="login">
					<form class="form-horizontal" action='' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Se connecter</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="username">Pseudo</label>
								<div class="controls">
									<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Mot de passe</label>
								<div class="controls">
									<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							
							<div class="control-group">
								<!-- Button -->
								<div class="controls">
									<button class="btn btn-success">Login</button>
								</div>
							</div>
						</fieldset>
					</form>                
				</div>
				<div class="tab-pane fade" id="create">
					<form id="tab" method="POST" id="Inscrire" action="verif_compte.php">
						<label><h4>Pseudo</h4></label>
						<input type="text" name="pseud" value="" class="input-xlarge">
						<label><h4>Mot de passe</h4></label>
						<input type="password" name="mdp" value="" size= "100" MAXLENGTH="8" class="input-xlarge">
						<span class=""> 8 caractéres maximum</span>
					</br>
						<label><h4>Prenom</h4></label>
						<input type="text" name="first" value="" class="input-xlarge">
						<label><h4>Nom de famille</h4></label>
						<input type="text" name="last" value="" class="input-xlarge">
						<label><h4>Email</h4></label>
						<input type="text" name="mail" value="" class="input-xlarge">
						<label><h4>Addresse</h4></label>
						</br>
						<textarea value="adresse" rows="3" name="adresse" class="input-xlarge">
						</textarea> 
						
						<div>
							<button class="btn btn-primary" type="submit">Creer un compte</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>

<?php include_once("footer.php"); ?>