		<div class="clear"></div>
		<footer>
			<a href="cart.html"><img class="fullscreen-img" src="../img/footer-cart.jpg"></a>
		</footer>
	</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/jvfloat.min.js"></script>
<script src="js/jquery.payment.js"></script>	
<script>
	$('.float-label, .float-label2').jvFloat();
	
	$('.cc-num').payment('formatCardNumber');
	$('.cc-cvc').payment('formatCardCVC');
	
	$('.billme, .paypal').click(function(){
		$('.js-card-fields').hide();
		$('.saved-cards').hide();
		
	});
	$('.card').click(function(){
		$('.js-card-fields').show();
		$('.saved-cards').show();
	});
	
	$('document').ready(function(){
		$('.state-title, .month .lable-title, .year .lable-title, .country-title, .promo-form, .promo-form-success, .cert-form, .cert-form-success, .email-extras').hide();
		$('.js-state').click(function(){
			$('.state-title').show();
		});
		$('.js-country').click(function(){
			$('.country-title').show();
		});
		$('.month').click(function(){
			$('.month .lable-title').show();
		});
		$('.year').click(function(){
			$('.year .lable-title').show();
		});
		$('.ship-check').click(function() {
		    $(".billing-address").toggle(this.checked);
		});
		
		$('.itsclosed').click(function(){
			$('.change-billing').show();
			$('.js-edit-billing').removeClass('itsclosed');
			$('.js-edit-billing').addClass('itsopen');
		});
		$('.itsopen').click(function(){
			$('.change-billing').hide();
			$('.js-edit-billing').removeClass('itsopen');
			$('.js-edit-billing').addClass('itsclosed');
		});
		
		$('.js-whats-this').click(function(){
			$('.js-whats-this-full').show();
		});
		$('.js-close-full-takeover').click(function(){
			$('.full-takeover').hide();
		});
		
		$('.js-open-promo').click(function(){
			$('.promo-form').show();
			$('.promo-form-success').hide();
		});
		$('.promo-form a').click(function(){
			$('.promo-form').hide();
			$('.promo-form-success').show();
		});

		$('.js-open-cert').click(function(){
			$('.cert-form').show();
			$('.cert-form-success').hide();
		});
		$('.cert-form a').click(function(){
			$('.cert-form').hide();
			$('.cert-form-success').show();
		});
		
		$(".email-field").blur(function(){
			$(".email-extras").show();			
		});
		
		
		$('.error input, .error .state, .error .styled-select').blur(function(){
			$(this).css('border', '1px solid #a2a2a2');		
		});
		
		$('.state, .error .styled-select').blur(function(){
			$(this).css('box-shadow', 'none');	
		});

  	});

</script>
</body>
</html>