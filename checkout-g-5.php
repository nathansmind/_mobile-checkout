<?php 

$openextras = $_GET["id"];
$error = $_GET["status"];

?>

<?php include('inc/head.php'); ?>
		<div class="flow">
			<ul>
				<li  class="link">
					<a href="checkout-g-2.php">Addresses</a>
				</li>
				<li  class="link">
					<a href="checkout-g-4.php">Payment</a>
				</li>
				<li class="active">
					<a href="#">Review</a>
				</li>
			</ul>
		</div>
		<div class="container review-page3 <?php echo $error; ?>" style="margin-top: 20px;">	
<!-- 			<h1>Review and Place Order</h1> -->
			<div class="error-messsage">
				<p style="margin-bottom: 5px;">Invalid credit card expiration</p>
				<p>Invalid zip/postal code</p>
			</div>
			<div class="clear"></div> 
			<div class="sum2">

						<div class="clear order-summary" style="margin-top: -20px;">
							<div class="product-summary" style="border-top: none;">
								<img src="http://www.backcountry.com/images/items/medium/ARC/ARC3678/BK.jpg">
								<p style="width: 215px;"><strong>Arc'teryx Alpha SV Jacket</strong></p>
								<p style="width: 215px;" class="sub-light">Black, M</p><br>
								<p class="qty">Qty: 1</p>
								<p class="tot">Total: $674.95</p><br>
							</div>
							<div class="product-summary closeextras <?php echo $openextras; ?>" style="border-top: none;">
								<img src="http://www.backcountry.com/images/items/medium/SAL/SAL2848/BLARED.jpg">
								<p style="width: 215px;"><strong>Salomon S-Lab Fellcross 2 Trail Running Shoe - Men's</strong></p>
								<p style="width: 215px;" class="sub-light">Black/Racing Red/Black, 10.5</p><br>
								<p class="closeextras <?php echo $openextras; ?> varient-discount">Full Discount Applied - Free With Purchase</p><br>
								<p class="closeextras <?php echo $openextras; ?> varient-discount">Place order, ships when available. <a href="javascript:;">Learn more</a></p><br>
								<p class="qty" style="padding-left: 60px; margin-bottom: 10px;">Qty: 1</p>
								<p class="tot">Total: $0.00</p><br>
							</div>

							<div class="clear"></div>
							<div class="promo-message closeextras <?php echo $openextras; ?>">
								<p>Full Discount Applied - Free With Purchase</p>
							</div>
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
								<div class="clear sub-light closeextras <?php echo $openextras; ?>">
									<p class="left">Gift Cert</p>
									<p class="right">-$100.00</p>	
								</div>
								<div class="clear total">
									<p class="left"><strong>Total</strong></p>
									<p class="right"><strong>$674.95</strong></p>	
								</div>
								<div class="clear sub-light closeextras you-save <?php echo $openextras; ?>">
									<p class="left">You saved</p>
									<p class="right">$174.98</p>	
								</div>
								<div class="clear" style="margin-top: 10px;">
									<p class="left"><a href="cart.html">Edit Cart</a></p>
									<p class="right"></p>	
								</div>
							</div>
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
								<li class="border-bottom">
									<a href="checkout-g-2.php" class="error-text">
										<p><strong>Shipping address</strong><p>
										<p class="billing-name">John Doe<br>
											123 Snow Street Suite 7 Juneau, Ak...</p>
										<img class="arrow" src="img/arrow.jpg">
									</a>
								</li>
								<li>
									<a href="checkout-g-2.php?id=open-billing#billing-section">
										<p><strong>Billing address</strong><p>
										<p class="billing-name">John Doe<br>
											123 Snow Street Suite 7 Juneau, Ak...</p>
										<img class="arrow" src="img/arrow.jpg">
									</a>
								</li>
							</ul>
						</div>
						
						<div class="group payment-methods">
							<ul>
								<li class="border-bottom">
									<a href="checkout-g-3.php">
										<p><strong>Shipping option</strong></p>
										<p style="margin-bottom: 5px;">Economic (5-10 days) FREE</p>
										<img class="arrow" src="img/arrow.jpg" style="top: 25px;">
									</a>
								</li>
								<li class="gift-ship">
									<input type="checkbox" id="gift">
									<label for="gift">This shipment is a gift</label>
									<textarea placeholder="Gift message"></textarea>
								</li>
								<li class="shipping-location closeextras <?php echo $openextras; ?>">
									<p>Employee Tote Delivery Location</p>
									<textarea></textarea>
								</li>
							</ul>
						</div>
						
						<div class="group">
							<ul>
								<li>
									<a href="checkout-g-4.php" class="error-text">
										<p><strong>Payment Method</strong><p>
										<p>Visa 42*****4242</br>
											Exp. 11 / 2015</p>
										<img class="arrow" src="img/arrow.jpg">
									</a>
								</li>
							</ul>
						</div>
								
						<div class="group payment-methods donate"  style="border-bottom: 10px solid #e5e5e5; margin-bottom: 10px;">
							<ul>
								<li>
									<input type="checkbox" id="donate">
									<label for="donate">Donate $1.00 to The Nature Conservancy?<a href="javascript:;">Learn more</a></label>
									<img src="https://www.backcountry.com/images/items/medium/TNC/TNC0001/ONECOL.jpg">
								</li>
							</ul>
						</div>

			</div>

			<div class="next" style="width: 90%; margin: 0;">			
				<a href="checkout-g-5.php?status=error#" class="btn primary3 blue" style="width: 100%;">Submit Your Order</a>
			</div>
		</div>
<?php include('inc/footer.php'); ?>
