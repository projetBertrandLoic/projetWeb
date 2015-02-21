<?php include_once("header.php"); ?>
<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
          <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
          
		  
		  <form accept-charset="UTF-8" action="merci.php" class="require-validation" data-cc-on-file="false" 
		  data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" 
		  method="post">
		  
		  <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" />
			<input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" 
			type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" />
		  </div>
           

		   <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Nom sur la carte</label>
                <input class='form-control' size='4' type='text'>
              </div>
            </div>
           

		   <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Numero de carte</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
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
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
            </div>
           


		   <div class='form-row'>
              <div class='col-md-12'>
                <div class='form-control total btn btn-info'>
                  Total:
                  <span class='amount'>€150</span>
                </div>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 form-group'>
                <button class='form-control btn btn-primary submit-button' type='submit'>Payer </button>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Corrigez les erreurs et recommencez
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>
<?php include_once("footer.php") ?>