<?php 

$openBilling = $_GET["id"];
$error = $_GET["status"];


?>
<?php include('inc/head.php'); ?>
		<div class="flow" style="margin-bottom: 0;">
			<ul>
				<li  class="link">
					<a href="checkout-g-2.php">Addresses</a>
				</li>
				<li  class="active">
					<a href="#">Payment</a>
				</li>
				<li class="inactive">
					<a href="#">Review</a>
				</li>
			</ul>
		</div>
		<div class="container <?php echo $error; ?>">		
<!-- 			<h1>Payment info</h1> -->
			<div class="error-messsage" style="margin-top: 10px; margin-bottom: 0px;">
				<p>Please correct the errors below. If you continue to experience issues call customer service at 1.800.233.7159</p>			
			</div>
			<form class="">
				<ul>
					<li id="fo143li1" class="notranslatefocused">
						<fieldset>
							<div>
								<input id="radioDefault_1" name="Field1" type="hidden" value="">
								<span class="creditcard card" style="margin-top: 5px; border-bottom: none;">
									<input id="Field1_0" name="Field1" type="radio" checked="checked">
									<label class="choice" for="Field1_0">
										<strong>Pay with Card</strong>
									</label>
										<div class="card-fields js-card-fields" style="border-top: none; border-bottom: none;margin-top: 24px;">
											<input placeholder="Card Number" class="cc-num float-label" type="text" pattern="\d*">
												<div class="what-phone error-input" style="margin-bottom: 5px;">Card Number is required</div>
											<div class="exp" style="">
												<div class="clear"></div>
												
												<div class="month" style="position: relative;">
													<p class="lable-title">Month</p>
													<select class="styled-select">
														<option value="">Month</option>
														<option value="01">01 - Jan</option>
														<option value="02">02 - Feb</option>
														<option value="03">03 - Mar</option>
														<option value="04">04 - Apr</option>
														<option value="05">05 - May</option>
														<option value="06">06 - Jun</option>
														<option value="07">07 - Jul</option>
														<option value="08">08 - Aug</option>
														<option value="09">09 - Sep</option>
														<option value="10">10 - Oct</option>
														<option value="11">11 - Nov</option>
														<option value="12">12 - Dec</option>
													</select>
												</div>
												<p class="dash">/</p>
												<div class="year" style="position: relative;">
													<p class="lable-title">Year</p>
													<select class="styled-select">
														<option value="">Year</option>
														<option value="2014">2014</option>
														<option value="2015">2015</option>
														<option value="2016">2016</option>
														<option value="2017">2017</option>
														<option value="2018">2018</option>
														<option value="2019">2019</option>
														<option value="2020">2020</option>
														<option value="2021">2021</option>
														<option value="2022">2022</option>
														<option value="2023">2023</option>
														<option value="2024">2024</option>
													</select>
												</div>
											</div>
							
											<div class="sec">
												<input class="cc-cvc float-label" placeholder="Security Code" type="number" pattern="\d*" style="margin-bottom: 10px;">
												<div class="what-phone error-input" style="margin-bottom: 5px;">Security code is required</div>
												<a href="#" class="Whats-this js-whats-this">What's this?</a>
											</div>
											
											<div class="clear"></div>
											
										</div>
									</label>
								</span>
								<span class="paypal  radio-select paypal-pay">
									<input id="Field1_1" name="Field1" type="radio">
									<label class="choice" for="Field1_1">
										<img src="img/paypal.png">
										<a href="#">What is PayPal?</a>
									</label>
								</span>
							</div>
						</fieldset>
					</li>
				</ul>
			</form>

			<div class="redeem" style="margin-top: 25px;">
				<h4>Have a <a href="javascript:;" class="js-open-promo">promo code</a>?</h4>
				<div class="promo-form">
					<input type="text" placeholder="Enter code">
					<a href="javascript:;" class="btn primary3 blue icon">Redeem</a>
					<div class="clear"></div>
				</div>
				<div class="promo-form-success">
					<p style="color: red; margin-top: -10px;">There was an error claiming the coupon.</p>
					<div class="clear"></div>
				</div>
				<h4>Have a <a href="javascript:;" class="js-open-cert">gift certificate</a>?</h4>
				<div class="cert-form">
					<input type="text" placeholder="Gift Certificate">
					<input type="text" placeholder="Password">
					<a href="javascript:;" class="btn primary3 blue icon">Redeem</a>
					<div class="clear"></div>
				</div>
				<div class="cert-form-success">
					<p style="margin-top: -10px;">Your gift certificate has been applied.</p>
					<div class="clear"></div>
				</div>
			</div>

			<div class="next">	
				<div>		
					<a href="checkout-g-5.php" class="btn primary3 blue icon" style="margin-top: 20px;">Continue to Review Order</a>
				</div>
			</div>
			
			<img class="norton" src="img/norton.png">
			
		</div>
		
		<div class="full-takeover js-whats-this-full">
			<div class="close-modal js-close-full-takeover"><img src="img/close-modal.png"></div>
			<h2>WHAT IS THE CARD SECURITY CODE FOR MY CREDIT CARD?</h2>
			<p>A card security code is a unique security feature of VISA, MasterCard, Discover, and American Express credit cards. By including it with your order, you help protect your account from fraud and you give us one more way of being sure your order is legitimate.</p>
			
			<p>Finding your credit card security code:</p>
				<img src="http://www.backcountry.com/images/common/csc_visamc.gif" width="122" height="74">		
				<img src="https://www.backcountry.com/images/common/csc_amex.gif" width="238" height="74"> 
			<h4>VISA, MC, Discover users</h4>
			
			<p>The Card security code is the 3-digit number located on the back of your card, usually at the top of the signature strip.</p>
			
			<h4>American Express users</h4>
			
			<p>Look for the 4-digit number printed on the front of your card.</p>
			
			<p>Depending on which card you have, you'll find this number in small type above your credit card's main number on either the left or right side.</p>
			<div class="next">	
				<div>		
					<a href="#" class="btn primary3 blue js-close-full-takeover" style="margin-top: 20px;">Done</a>
				</div>
			</div>
			<div class="modal-footer"></div>
		</div>
<?php include('inc/footer.php'); ?>
