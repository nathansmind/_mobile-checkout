<?php include('inc/head.php'); ?>
		<div class="flow">
			<ul>
				<li  class="active">
					<a href="#">Personal</a>
				</li>
				<li  class="inactive">
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
		<div class="container">		
			<form class="first-field">
				<input type="text" placeholder="First Name" class="float-label">
				<input type="text" placeholder="Last Name" class="float-label">
				<input type="email" placeholder="Email" class="float-label">
				<input type="text" pattern="\d*" placeholder="Phone" class="float-label">
				<div class="what-phone">Phone numbers are only used for delivery purposes.</div>
			</form>
			
			<div class="next">	
				<div>		
					<a href="checkout-g-2.php" class="btn primary3 blue icon" style="margin-top: 0;">Continue to Shipping Info</a>
				</div>
			</div>
		</div>
<?php include('inc/footer.php'); ?>
