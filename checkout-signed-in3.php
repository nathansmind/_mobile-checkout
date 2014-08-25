<?php 

$openextras = $_GET["id"];

?>
<?php include('inc/head.php'); ?>
		<div class="container review-page3" style="margin-top: 20px;">		
<!-- 			<h1>Review and Place Order</h1> -->
			<div class="clear"></div> 
			<div class="sum2">

						<div class="clear order-summary">
							<h1 class="sumh3" style="margin: 15px 0 5px 0;">Review Order</h1>	
							
							<div class="product-summary">
								<img src="http://www.backcountry.com/images/items/medium/ARC/ARC3678/BK.jpg">
								<p style="width: 215px;"><strong>Arc'teryx Alpha SV Jacket</strong></p>
								<p style="width: 215px;" class="sub-light">Black, M</p><br>
								<p class="qty">Qty: 1</p>
								<p class="tot">Total: $674.95</p>
							</div>
							<div class="clear"></div>
							<div class="subtotals">
								<div class="clear">
									<p class="left">Subtotal</p>
									<p class="right">$674.95</p>	
								</div>
								<div class="clear sub-light">
									<p class="left">Shipping</p>
									<p class="right">$0.00</p>	
								</div>
								<div class="clear sub-light">
									<p class="left">Tax</p>
									<p class="right">$0.00</p>	
								</div>
								<div class="clear total">
									<p class="left"><strong>Total</strong></p>
									<p class="right"><strong>$674.95</strong></p>	
								</div>
							</div>
<!--
							<div class="next" style="width: 90%; margin: 0;">			
								<a href="checkout-g-6.php" class="btn primary3 blue" style="width: 100%; margin: 0;">Submit Your Order</a>
							</div>
-->
						</div>
						
						<div class="group redeem">
							<ul>
								<li>
									<h4>Have a <a href="javascript:;" class="js-open-promo" style="display: inline;">promo code</a>?</h4>
									<div class="promo-form">
										<input type="text" placeholder="Enter code">
										<a href="javascript:;" class="btn primary3 blue icon">Redeem</a>
										<div class="clear"></div>
									</div>
									<div class="closeextras <?php echo $openextras; ?>">
										<p style="margin-top:-10px;">Your promo code has been applied.</p>
										<div class="clear"></div>
									</div>
								</li>
								<li>
									<h4>Have a <a href="javascript:;" class="js-open-cert" style="display: inline;">gift certificate</a>?</h4>
									<div class="cert-form">
										<input type="text" placeholder="Gift Certificate">
										<input type="text" placeholder="Password">
										<a href="javascript:;" class="btn primary3 blue icon">Redeem</a>
										<div class="clear"></div>
									</div>
									<div class="closeextras <?php echo $openextras; ?>">
										<p style="margin-top:-10px; margin-bottom: 10px;">Your gift certificate has been applied.</p>
										<div class="clear"></div>
									</div>
								</li>
							</ul>
						</div>

						<div class="group">
							<ul>
								<li>
									<a href="u-shipping.php?ship=shipping-page-title">
										<p><strong>Shipping address</strong><p>
										<p>Nathan Smith<br>
											1230 W 200 S, Salt Lake City, UT 84...</p>
										<img class="arrow" src="img/arrow.jpg">
									</a>
								</li>
							</ul>
						</div>

						<div class="group payment-methods">
							<ul>
								<li id="fo143li1" class="notranslatefocused">
									<fieldset>
										<div>
											<input id="radioDefault_1" name="Field1" type="hidden" value="">
												<span class="border-bottom radio-select creditcard" style="margin: 0 -10px 0 -10px;">
													<input id="Field1_0" name="Field1" type="radio" checked="checked">
													<label class="choice pay-with-card js-show-bill" for="Field1_0">
														<strong>Pay with card</strong></br>
														<a href="u-payment.php" class="js-hide-bill" style="padding: 0;">
														Visa 44*****8092</br>
														Exp. 01 / 2016</a>
													</label>
													<img class="arrow js-hide-bill" src="img/arrow.jpg">
													<div class="billing-in-payment js-hide-bill">
														<a href="u-shipping.php?bill=billing-page-title">
															<p><strong>Billing address</strong></p>
															<p>Nathan Smith<br>
																1230 W 200 S, Salt Lake City...</p>
															<img class="arrow" src="img/arrow.jpg">
														</a>
													</div>
												</span>
												<span class="paypal  radio-select js-review-paypal">
													<input id="Field1_1" name="Field1" type="radio">
													<label class="choice" for="Field1_1">
														<img src="img/paypal.png">
														<a href="#" class="paypal-what">What is PayPal?</a>
													</label>
												</span>
										</div>
									</fieldset>
								</li>
							</ul>
						</div>

						<div class="group payment-methods" style="border-bottom: 10px solid #e5e5e5; margin-bottom: 10px;">
							<ul>
								<li class="border-bottom">
									<a href="checkout-g-3.php">
										<p><strong>Shipping option</strong></p>
										<p>Economic (5-10 days) FREE</p>
										<img class="arrow" src="img/arrow.jpg" style="top: 25px;">
									</a>
								</li>
								<li class="gift-ship">
									<input type="checkbox" id="gift">
									<label for="gift">This shipment is a gift</label>
									<textarea placeholder="Gift message"></textarea>
								</li>
								<li class="shipping-location">
									<p>Employee Tote Delivery Location</p>
									<textarea></textarea>
								</li>
							</ul>
						</div>


			</div>

			<div class="next" style="width: 90%; margin: 0;">			
				<a href="checkout-g-6.php" class="btn primary3 blue js-paypal-text" style="width: 100%;">Submit Your Order</a>
			</div>
		</div>
<?php include('inc/footer.php'); ?>
