<?php include_once("header.php"); ?>   
	 
<div class="" id="loginModal">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3>Avez vous un compte ?</h3>
	</div>
	<div class="modal-body">
		<div class="well">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#login" data-toggle="tab">Nom</a></li>
				<li><a href="#create" data-toggle="tab">Creer un compte</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="login">
					<form class="form-horizontal" action='' method="POST">
						<fieldset>
							<div id="legend">
								<legend class="">Login</legend>
							</div>    
							<div class="control-group">
								<!-- Username -->
								<label class="control-label"  for="username">Username</label>
								<div class="controls">
									<input type="text" id="username" name="username" placeholder="" class="input-xlarge">
								</div>
							</div>
							
							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
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
					<form id="tab">
						<label>Pseudo</label>
						<input type="text" value="" class="input-xlarge">
						<label>Prenom</label>
						<input type="text" value="" class="input-xlarge">
						<label>Last Name</label>
						<input type="text" value="" class="input-xlarge">
						<label>Email</label>
						<input type="text" value="" class="input-xlarge">
						<label>Addresse</label>
						<textarea value="Smith" rows="3" class="input-xlarge">
						</textarea>
						
						<div>
							<button class="btn btn-primary">Creer un compte</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>

<?php include_once("footer.php"); ?>