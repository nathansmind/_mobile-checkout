<?php include('inc/head.php'); ?>
		<div class="flow" style="margin-bottom: 0;">
			<ul>
				<li  class="link">
					<a href="checkout-g-2.php">Shipping</a>
				</li>
				<li  class="active">
					<a href="#">Payment</a>
				</li>
				<li class="inactive">
					<a href="#">Review</a>
				</li>
			</ul>
		</div>
		<div class="container">		
<!-- 			<h1>Payment info</h1> -->

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
										<div class="card-fields js-card-fields" style="border-top: none; border-bottom: none;margin-top: 20px;">
											<input placeholder="Card Number" class="cc-num float-label" type="text" pattern="\d*">
											
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
												<a href="#" class="Whats-this js-whats-this">What's this?</a>
											</div>
											
											<div class="clear"></div>
											
											<div id="<?php echo $openBilling; ?>" style="margin-top: -20px;">
											
												<div id="billing-section" style="margin-bottom: 25px;">	
													<input type="checkbox" class="ship-check-btn" checked="true" id="ship-check">
													<label for="ship-check" class="ship-check"  style="margin-bottom: 10px;">Use shipping address for billing</label>
												</div>
												<div class="clear"></div>
													<div class="billing-address" style="margin-top: 15px;">
												<form style="border-top: none; padding: 0;">
													<input type="text" placeholder="First Name" class="float-label">
													<input type="text" placeholder="Last Name" class="float-label">
													<input type="text" placeholder="Company (Optional)" class="float-label">
													<div style="position: relative;" class="js-country">
														<p class="lable-title country-title">Country</p>	
														<select class="country">
															<option value="">USA</option>
															<option value="AL">Canada</option>
															<option value="AL">Other</option>
														</select>	
													</div>
													<input type="text" placeholder="Street Address" class="float-label" style="margin-bottom: 10px !important;">
													<input type="text" placeholder="Apt/Suite # (Optional)"  style="margin-bottom: 25px;">
													<input type="text" placeholder="City" class="float-label" style="margin-top: 0; width: 48%;">
													
													<div style="position: relative; width: 48%; float: right;" class="js-state">
														<p class="lable-title state-title">Select state</p>	
														<select class="state">
															<option value="">Select state</option>
															<option value="AL">Alabama</option>
															<option value="AK">Alaska</option>
															<option value="AZ">Arizona</option>
															<option value="AR">Arkansas</option>
															<option value="CA">California</option>
															<option value="CO">Colorado</option>
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="DC">District Of Columbia</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="HI">Hawaii</option>
															<option value="ID">Idaho</option>
															<option value="IL">Illinois</option>
															<option value="IN">Indiana</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="MT">Montana</option>
															<option value="NE">Nebraska</option>
															<option value="NV">Nevada</option>
															<option value="NH">New Hampshire</option>
															<option value="NJ">New Jersey</option>
															<option value="NM">New Mexico</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="ND">North Dakota</option>
															<option value="OH">Ohio</option>
															<option value="OK">Oklahoma</option>
															<option value="OR">Oregon</option>
															<option value="PA">Pennsylvania</option>
															<option value="RI">Rhode Island</option>
															<option value="SC">South Carolina</option>
															<option value="SD">South Dakota</option>
															<option value="TN">Tennessee</option>
															<option value="TX">Texas</option>
															<option value="UT">Utah</option>
															<option value="VT">Vermont</option>
															<option value="VA">Virginia</option>
															<option value="WA">Washington</option>
															<option value="WV">West Virginia</option>
															<option value="WI">Wisconsin</option>
															<option value="WY">Wyoming</option>
														</select>	
													</div>
													<div class="clear"></div>
													<input type="number" placeholder="Zip/Postal Code" pattern="\d*" class="float-label">
													
													<div class="clear"></div>			
												</form>
												</div>
											</div>
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
				<h4>Have a <a href="#">promo code</a>?</h4>
				<h4>Have a <a href="#">gift certificate</a>?</h4>
			</div>

			<div class="next">	
				<div>		
					<a href="checkout-g-5.php" class="btn primary3 blue icon" style="margin-top: 20px;">Continue to Review Order</a>
				</div>
			</div>
			
			<img class="norton" src="img/norton.png">
			
		</div>
		
		<div class="full-takeover js-whats-this-full">
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
					<a href="javascript:;" class="btn primary3 blue js-close-full-takeover" style="margin-top: 20px;">Done</a>
				</div>
			</div>
		</div>
<?php include('inc/footer.php'); ?>
