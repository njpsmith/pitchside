


	<section class="popup-wrapper row align-items-center justify-content-center text-center">

		<div class="popup-background bkgrnd__background"></div>

		<div class="popup" id="newsletter">
			<a href="#" class="button js__popup-close">CLOSE</a>
			<h2 class="h1-text txt__secondary-one"><?php the_field('newsletter_form_title','option'); ?></h2>
			<form id="newsletter-form">
				<input id="newsletter-name" class="very-small-regular" type="text" name="name" placeholder="Enter Name" />
				<input id="newsletter-email" class="very-small-regular" type="email" name="email" placeholder="Enter Email" />
				<input id="newsletter-dob" class="very-small-regular" type="date" name="dob" />
				<a href='#' class="button" id="newsletter-submit">SUBMIT</a>
			</form>

		</div>




		<div class="popup" id="booking">
			<a href="#" class="button js__popup-close">CLOSE</a>

			<h2 class="h1-text txt__secondary-one">BOOK A TABLE</h2>
			<script type='text/javascript' src='//www.opentable.co.uk/widget/reservation/loader?rid=25276&domain=couk&type=standard&theme=tall&lang=en-GB&overlay=false&iframe=false'></script>

		</div>





	</section>
