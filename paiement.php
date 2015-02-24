<?php 
include_once("header.php");
include_once("model/fonction-payment.php");
include_once("model/redirect-if-not-logged.php");

$numeroCarte = (isset($_POST['numeroCarte'])? $_POST['numeroCarte']:  (isset($_GET['numeroCarte'])? $_GET['numeroCarte']:null )) ;
/*$year=(preg_match("#^2{1}[0-9]{3}$#",$_POST['year']));*/

if($numeroCarte !== null)
{
	$numError = "";
	$textError = "";
	
	$carteValide = verifCarte ($numeroCarte, $numError, $textError);
	if ($carteValide) {
		header("Location: merci.php");
	} 
}
$idUserConnected = $_SESSION['id_client'];
$infosPanier = getInfosPanier($idUserConnected);

?>
 
<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          
		  
		  <form action="paiement.php" class="require-validation" id="payment-form" method="post">

				<!-- acune verif actuellement sur le nom de la carte -->
			   <div class='form-row'>
				  <div class='col-xs-12 form-group required'>
					<label class='control-label'>Nom sur la carte</label>
					<input class='form-control' size='4' type='text'>
				  </div>
				</div>
           

			   <div class='form-row'>
				  <div class='col-xs-12 form-group card required'>
					<label class='control-label'>Numero de carte</label>
					<input autocomplete='off' class='form-control card-number' size='20' type='text' name="numeroCarte">
				  </div>
				</div>
				<div class='form-row'>
				  <div class='col-xs-4 form-group cvc required'>
					<label class='control-label'>CVC</label>
					<input autocomplete='off' class='form-control card-cvc' placeholder='ex. 1234' size='4' type='text'>
				  </div>
				  <div class='col-xs-4 form-group expiration required'>
					<label class='control-label'>Expiration</label>
					<input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
				  </div>
				  <div class='col-xs-4 form-group expiration required'>
					<label class='control-label'> </label>
					<input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text' name="year">
				  </div>
				</div>

			   <div class='form-row'>
				  <div class='col-md-12'>
					<div class='form-control total btn btn-info'>
					  Total : <span class='amount'><?=$infosPanier['montantTotal']?></span>€
					</div>
				  </div>
				</div>
				<div class='form-row'>
				  <div class='col-md-12 form-group'>
					<button class='form-control btn btn-primary submit-button' type='submit'>Payer </button>
				  </div>
				</div>
				
          </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>
<?php include_once("footer.php") ?>