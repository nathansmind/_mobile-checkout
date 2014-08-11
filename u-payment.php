<?php include('inc/head.php'); ?>
		<div class="container" style="margin-top: 20px;">		
<!-- 			<h1>Payment info</h1> -->
			<form>
				<div class="saved-cards">
						<div class="payment-methods">
							<ul>
								<li id="fo143li1" class="notranslatefocused">
									<fieldset>
										<div>
											<input id="radioDefault_1" name="Field1" type="hidden" value="">
												<span class="border-bottom border-top radio-select creditcard">
													<input id="Field1_0" name="Field1" type="radio" checked="checked">
													<label class="choice" for="Field1_0">
														<!-- <strong>Pay With Card</strong></br> -->
														<strong>Visa 44*****8092</strong></br>
														Expiration 01-Jan / 2016
													</label>
												</span>
												<span class="border-bottom radio-select creditcard">
													<input id="Field1_1" name="Field1" type="radio">
													<label class="choice" for="Field1_1">
														<!-- <strong>Pay With Card</strong></br> -->
														<strong>Visa 47*****1234</strong></br>
														Expiration 02-Feb / 2018
													</label>
												</span>
												<span class="border-bottom radio-select creditcard">
													<input id="Field1_2" name="Field1" type="radio">
													<label class="choice" for="Field1_2">
														<!-- <strong>Pay With Card</strong></br> -->
														<strong>Visa 46*****6789</strong></br>
														Expiration 12-Dec / 2015
													</label>
												</span>
												<div class="clear"></div>
												<span class="border-bottom add-new">
													<a href="u-payment.php">Add New Card</a>
												</span>
										</div>
									</fieldset>
								</li>
							</ul>
						</div>

					<div class="card-fields" style="display: none; border-top: none; height: 172px;">
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
						<div>		
							<a href="checkout-g-5.php" class="btn primary3 blue" style="margin-top: 20px;">Done</a>
						</div>
						</div>
						<div class="sec">
							<input class="cc-cvc float-label" placeholder="Security Code" type="password" pattern="\d*" style="margin-bottom: 10px;">
							<a href="#" class="what code">What's this?</a>
						</div>
					</div>
				</div>
				
				<div class="clear"></div>	
			</form>
			
			<div class="next">	
				<div>		
					<a href="checkout-signed-in3.php" class="btn primary3 blue" style="margin-top: 20px;">Use This Card</a>
					<a href="checkout-signed-in3.php" class="cancel2">Cancel</a>
				</div>
			</div>
		</div>
<?php include('inc/footer.php'); ?>

<!--
								<option value="">Month</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
-->
