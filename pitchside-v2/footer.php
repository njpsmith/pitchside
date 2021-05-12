			
			</main>

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div class="content-wrapper">
					<div id="inner-footer" >
						<div class="row">
							<div class="col-md-9 text-md-left">
								<nav role="navigation">
									<?php wp_nav_menu(array(
			    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
			    					'container_class' => 'footer-links',         // class of container (should you choose to use it)
			    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
			    					'menu_class' => 'nav footer-nav',            // adding custom nav class
			    					'theme_location' => 'footer-links',             // where it's located in the theme
			    					'before' => '',                                 // before the menu
			    					'after' => '',                                  // after the menu
			    					'link_before' => '',                            // before each link
			    					'link_after' => '',                             // after each link
			    					'depth' => 0,                                   // limit the depth of the nav
			    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
									)); ?>
								</nav>

								<div class="contact-links">
									Tel: <a href="tel:07889486167">07889486167</a> <br/>
									Email: <a href="mailto:jason@pitchside.london">jason@pitchside.london</a>
								</div>
							</div>

							<div class="col-md-3 text-md-right">
								<div class="footer__logo">
									<!-- <img src="https://pitchside.london/wp-content/uploads/2020/11/footer-logo.png"> -->
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/pitchside-logo-yellow.png" />
								</div>

								<ul class="social-icons">
									<li>
										<a href="https://www.instagram.com/pitchside.london/" target="_blank">
											<i class="fa fa-instagram" aria-hidden="true"></i>
										</a>
									</li>
									<!-- <li>
										<a href="https://www.facebook.com/pitchside.london/" target="_blank">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/channel/UCN7_gZ3h04YmPWbUC3sDwBg" target="_blank">
											<i class="fa fa-youtube" aria-hidden="true"></i>
										</a>
									</li> -->
								</ul>
							</div>

						</div>

						

						
						<!-- <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p> -->

					</div>
				</div>

			</footer>

    </div>
    

    <div class="remodal" data-remodal-id="fees">
      <button data-remodal-action="close" class="remodal-close"></button>
    
      <section class="pay-fees" id="pay-fees">
        <div class="content-wrapper">
          <?php //echo do_shortcode('[asp_product id="1103"]'); ?>
          <?php echo do_shortcode('[asp_product id="980"]'); ?>
        </div>
      </section>
    </div>


		<?php // all js scripts are loaded in library/bones.php ?>
    <?php wp_footer(); ?>


    


    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

		<script type="text/javascript">
			(function () {
		    var _overlay = document.getElementById('nav-overlay');
		    var _clientY = null; // remember Y position on touch start

		    _overlay.addEventListener('touchstart', function (event) {
		        if (event.targetTouches.length === 1) {
		            // detect single touch
		            _clientY = event.targetTouches[0].clientY;
		        }
		    }, false);

		    _overlay.addEventListener('touchmove', function (event) {
		        if (event.targetTouches.length === 1) {
		            // detect single touch
		            disableRubberBand(event);
		        }
		    }, false);

		    function disableRubberBand(event) {
		        var clientY = event.targetTouches[0].clientY - _clientY;

		        if (_overlay.scrollTop === 0 && clientY > 0) {
		            // element is at the top of its scroll
		            event.preventDefault();
		        }

		        if (isOverlayTotallyScrolled() && clientY < 0) {
		            //element is at the top of its scroll
		            event.preventDefault();
		        }
		    }

		    function isOverlayTotallyScrolled() {
		        // https://developer.mozilla.org/en-US/docs/Web/API/Element/scrollHeight#Problems_and_solutions
		        return _overlay.scrollHeight - _overlay.scrollTop <= _overlay.clientHeight;
		    }
			}())
		</script>

	</body>

</html> <!-- end of site. what a ride! -->
