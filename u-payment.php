<?php include('inc/head.php'); ?>
		<div class="container" style="margin-top: 20px;">		
			<h1 style="margin: 15px 0 10px 0;">Payment Method</h1>
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
														Expiration <span class="js-expiration-hide">01-Jan / 2016</span>
													</label>
													<a class="edit js-edit-card" href="javascript:;">Edit</a>
													<div class="card-expiration-change">
														<div class="month" style="position: relative;">
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
															<a href="u-payment.php" class="btn primary3 blue" style="margin-top: 10px;">Save</a>
															<a href="u-payment.php" class="cancel2" style="margin-top: 16px !important;">Cancel</a>
														</div>
													</div>
												</span>
												<span class="border-bottom radio-select creditcard">
													<input id="Field1_1" name="Field1" type="radio">
													<label class="choice" for="Field1_1">
														<!-- <strong>Pay With Card</strong></br> -->
														<strong>Visa 47*****1234</strong></br>
														Expiration 02-Feb / 2018
													</label>
													<a class="edit js-edit-card" href="javascript:;">Edit</a>
												</span>
												<span class="border-bottom radio-select creditcard">
													<input id="Field1_2" name="Field1" type="radio">
													<label class="choice" for="Field1_2">
														<!-- <strong>Pay With Card</strong></br> -->
														<strong>Visa 46*****6789</strong></br>
														Expiration 12-Dec / 2015
													</label>
													<a class="edit js-edit-card" href="javascript:;">Edit</a>
												</span>
												<div class="clear"></div>
												<span class="border-bottom add-new">
													<a href="u-add-card.php">Add New Card</a>
												</span>
										</div>
									</fieldset>
								</li>
							</ul>
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




