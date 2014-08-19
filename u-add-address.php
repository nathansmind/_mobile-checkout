<?php include('inc/head.php'); ?>
		<div class="container" style="margin-top: 20px;">		
<!-- 			<h1>Shipping info</h1> -->
			<h4 style="margin-bottom: 25px;">Add Address</h4>
			<form>
				<input type="text" placeholder="First Name" class="float-label">
				<input type="text" placeholder="Last Name" class="float-label">
				<input type="number" placeholder="Street Address" class="float-label" style="margin-bottom: 10px !important;">
				<input type="text" placeholder="Apartment, Suite, etc."  style="margin-bottom: 25px;">
				
				<input type="text" placeholder="City" class="float-label">
				
				<div style="position: relative;" class="js-state">
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
				
				<div style="position: relative;" class="js-country">
					<p class="lable-title country-title">Country</p>	
					<select class="country">
						<option value="">USA</option>
						<option value="AL">Canada</option>
						<option value="AL">Other</option>
					</select>	
				</div>
				
				<input type="text" placeholder="Zip/Postal Code" pattern="\d*" class="float-label">		
				<input type="text" pattern="\d*" placeholder="Phone" class="float-label">
				<div class="what-phone">Phone numbers are only used for delivery purposes.</div>
			</form>

			<div class="next">	
				<div>		
					<a href="u-shipping.php" class="btn primary3 blue" style="margin-top: 20px;">Save</a>
					<a href="u-shipping.php" class="cancel2">Cancel</a>
				</div>
			</div>
		</div>
<?php include('inc/footer.php'); ?>