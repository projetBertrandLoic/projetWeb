<?php include_once("header.php");?>   
	
<div class="" id="loginModal">
	<div class="modal-header">
		<?php 
		$info = (isset($_POST['info'])? $_POST['info']:  (isset($_GET['info'])? $_GET['info']:null )) ;
		if($info !== null)
		{ 
			?>
			<h3 class="bg-warning">Veuillez vous connecter pour poursuivre votre navigation sur le site.</h3>
			<?php
		}
		?>
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
					<form class="form-horizontal" action='verif-user.php' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Se connecter</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="username">Pseudo</label>
								<div class="controls">
									<input type="text" id="username" name="login" placeholder="" class="input-xlarge">
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
									<button class="btn btn-success"type="submit">Login</button>
								</div>
							</div>
						</fieldset>
					</form>                
				</div>
				<div class="tab-pane fade" id="create">

					<form id="tab" method="POST" id="Inscrire" action="verif_compte.php">
						
					
						<label><h4>Pseudo</h4></label>
						<input type="text" name="pseud" value="<?php if(isset ($_SESSION['pseudo'])){echo $_SESSION['pseudo'];} ?>" class="input-large">
						<label><h4>Mot de passe</h4></label>
						<input type="password" name="mdp" value="<?php if(isset ($_SESSION['mdp'])){echo $_SESSION['mdp'];} ?>" size= "100" MAXLENGTH="8" class="input-xlarge">
						<span class=""> 8 caractéres maximum</span>
						</br>
						<label><h4>Prenom</h4></label>
						<input type="text" name="first" value="<?php if(isset ($_SESSION['prenom'])){echo $_SESSION['prenom'];} ?>" class="input-xlarge">
						<label><h4>Nom de famille</h4></label>
						<input type="text" name="last" value="<?php if(isset ($_SESSION['nom'])){echo $_SESSION['nom'];} ?>" class="input-xlarge">
						<label><h4>Email</h4></label>
						<input type="text" name="mail" value="<?php if(isset ($_SESSION['email'])){echo $_SESSION['email'];} ?>" class="input-xlarge">
						<label><h4>Adresse</h4></label>
						<input type="text" name="adresse" value="<?php if(isset ($_SESSION['adresse'])){echo $_SESSION['adresse'];} ?>" class="input-xlarge">
						</br>
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