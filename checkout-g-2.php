<?php 

$error = $_GET["status"];

?>

<?php include('inc/head.php'); ?>
		<div class="flow">
			<ul>
				<li  class="active">
					<a href="#">Shipping</a>
				</li>
				<li  class="inactive">
					<a href="#">Payment</a>
				</li>
				<li class="inactive">
					<a href="#">Review</a>
				</li>
			</ul>
		</div>
		<div class="container <?php echo $error; ?>">		
<!-- 			<h1>Shipping info</h1> -->
			<div class="error-messsage">
				<p>Please enter email</p>
				<p>Please enter first name</p>
				<p>Please enter Last name</p>
				<p>Please enter shipping address</p>
				<p>Please enter city</p>
				<p>Please enter state</p>
				<p>Please enter postal code</p>
				<p>Please enter phone number</p>			
			</div>
			<form>
				<input type="email" placeholder="Email" class="float-label email-field">
				<div class="what-phone" style="margin-bottom: 15px;">Order confirmation will be sent to this email address.</div>
				
				<div class="email-extras">
					<div class="recognized-email">
						<strong>Been Here Before?</strong>
						<a href="checkout-signin.php">Sign In</a>
					</div>
				
					<div class="subscribe">
						<input id="sub" type="checkbox" checked>
						<label for="sub">Deals, secrets, and reviews - Get Backcountry emails</label>
					</div>
				</div>
				
				<input type="text" placeholder="First Name" class="float-label">
				<input type="text" placeholder="Last Name" class="float-label">
				<input type="text" placeholder="Company (Optional)" class="float-label" style="border: 1px solid #a2a2a2;">
				
				<div style="position: relative;" class="js-country">
					<p class="lable-title country-title">Country</p>	
					<select class="country">
						<option value="">USA</option>
						<option value="AL">Canada</option>
						<option value="AL">Other</option>
					</select>	
				</div>
				
<!-- 				<input type="email" placeholder="Email" class="float-label"> -->

				<input type="text" placeholder="Street Address" class="float-label" style="margin-bottom: 10px !important;">
				<input type="text" placeholder="Apt/Suite # (Optional)"  style="margin-bottom: 25px; border: 1px solid #a2a2a2;">
				<input type="text" placeholder="City" class="float-label" style="margin-top: 0; width: 48%;">
				
				<div style="position: relative; width: 48%; float: right;" class="js-state">
					<p class="lable-title state-title">State</p>	
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
				<input type="text" pattern="\d*" placeholder="Phone" class="float-label">
				<div class="what-phone">Phone numbers are only used for delivery purposes.</div>
				
			</form>
			

			<div class="next">	
				<div>		
					<a href="checkout-g-4.php" class="btn primary3 blue icon" style="margin-top: 0;">Continue to Payment Info</a>
				</div>
			</div>
		</div>
<?php include('inc/footer.php'); ?>