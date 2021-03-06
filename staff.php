<?php 
include_once("header.php");   
include_once("model/redirect-if-not-logged.php");
include_once("model/fonctions-article.php");
			
$typesArticle = getTypesArticle();
		?>
		<div id="heading">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-content">
                                <h2>Administration</h2>
                                <span>gestion image / menu / coup de coeur</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</br>
		<label for="titre">Envoi d'une image</label>
			
		<form enctype="multipart/form-data" action="verif_staff.php" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="250000" />
			<input type="file" name="fic" size=50 />
			</br>
			<label for="titre">Titre du produit</label>
			<input type="texte" class="form-control" id="testeproduit" name="titre" placeholder="nom du produit" value="<?php if(isset ($_SESSION['titre'])){echo $_SESSION['titre'];} ?>"/>
			</br>
			<label for="prix">Prix du produit</label>
			<input type="float" class="form-control" id="testeproduit" name="prix" placeholder="prix du produit" value="<?php if(isset ($_SESSION['prix'])){echo $_SESSION['prix'];} ?>"/>
			<br>
		
		<!--rajouter titre description prix iscoupdecouer dans la table article-->
			<label for="description">Saississez une description pour l'article</label>
			<input type="texte" class="form-control" id="testeproduit" name="description" placeholder="description du produit" value="<?php if(isset ($_SESSION['description'])){echo $_SESSION['description'];} ?>"/>
			</br>
			
			<label for="type">Choisissez le type d'article</label>
			<select name="type">
				<?php 
				foreach ($typesArticle as $type) {
					echo '<option value="'.$type['id_type_article'].'">'.$type['nom_type'].'</option>';
				}
				?>
			</select>
			</br>
						
			<div class="form-group">
			</br>
				<label class="col-sm-4 control-label">Coup de coeur ?</label>
				<div class="col-sm-8">
					<label class="radio-inline"> <input type="radio" name="coupDeCoeur"  value="1"> Oui </label>
					<label class="radio-inline"> <input type="radio" name="coupDeCoeur"  value="false"> Non </label>						
				</div>
			</div>
			<button type="submit" class="btn btn-default">Envoyer</button>
			
		</form>

		<?php include_once("footer.php") ?>