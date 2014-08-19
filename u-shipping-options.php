<?php include('inc/head.php'); ?>
		<div class="container">		
			<h1 style="margin: 15px 0 0 0;">Shipping Options</h1>
			<form class="shipping-options">
				<ul>
					<li id="fo143li1" class="notranslatefocused">
						<fieldset>
							<div>
								<input id="radioDefault_1" name="Field1" type="hidden" value="">
								<span class="border-bottom border-top radio-select creditcard">
									<input id="Field1_0" name="Field1" type="radio" checked="checked">
									<label class="choice" for="Field1_0">
										Economy (5-10 Days) <span class="shipping-price">Free</span>
									</label>
								</span>
								<span class="border-bottom radio-select creditcard">
									<input id="Field1_1" name="Field1" type="radio">
									<label class="choice" for="Field1_1">
										Standard (3-5 Days) <span class="shipping-price">$8.95</span>
									</label>
								</span>
								<span class="border-bottom radio-select creditcard">
									<input id="Field1_2" name="Field1" type="radio">
									<label class="choice" for="Field1_2">
										Two Business Days <span class="shipping-price">$14.95</span>
									</label>
								</span>
								<span class="border-bottom radio-select creditcard">
									<input id="Field1_3" name="Field1" type="radio">
									<label class="choice" for="Field1_3">
										Next Business Days <span class="shipping-price">$24.95</span>
									</label>
								</span>
							</div>
						</fieldset>
					</li>
				</ul>
			</form>
			<div class="next">		
				<div>	
					<a href="checkout-signed-in3.php" class="btn primary3 blue">Save</a>
				</div>
				<div>	
					<a href="checkout-signed-in3.php" class="cancel">Cancel</a>
				</div>
			</div>
		</div>
<?php include('inc/footer.php'); ?>