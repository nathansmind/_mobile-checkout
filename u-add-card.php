<?php include('inc/head.php'); ?>
		<div class="container" style="margin-top: 20px;">		
<!-- 			<h1>Shipping info</h1> -->
			<h1 style="margin-bottom: 0;">Add Card</h1>
			

				<div class="card-fields js-card-fields" style="border-top: none; border-bottom: none;margin-top: 0;">
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
						<input class="cc-cvc float-label" placeholder="Security Code" type="number" pattern="\d*" style="margin-bottom: 20px !important;">
						<div class="what-phone error-input" style="margin-bottom: 5px;">Security code is required</div>
						<a href="#" class="Whats-this js-whats-this">What's this?</a>
					</div>
					<div>
						<input type="checkbox" id="save">
						<label for="save" style="padding-left: 5px;">Save this card for future use.</label>
					</div>
				</div>
			
			<div class="clear"></div>
			<div class="next">	
				<div>		
					<a href="u-payment.php" class="btn primary3 blue" style="margin-top: 20px;">Done</a>
					<a href="u-payment.php" class="cancel2">Cancel</a>
				</div>
			</div>
		</div>
<?php include('inc/footer.php'); ?>