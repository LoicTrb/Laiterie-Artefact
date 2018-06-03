<footer class="footer-container">
	<div class="footer-container footer-info">
		<div class="background-footer"></div>
		<div class="container">
			<div class="row footer-main">
				<div class="col-md-6 col-sm-6">
					<div class="widget footer_text">
						<h4 class="footer-title">À propos de nous</h4>
						<div class="textfooter">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="widget newsletter">
						<h4 class="footer-title">Abonnez-vous</h4>
						<form class="subscribe-form">
							<label>Pour recevoir toute les actualités, les annonces de concerts, annulation etc...</label>
							<div class="input-mail">
								<input type="email" name="mc_email" class="mc-email" value="" placeholder="Entre ton email ici..."/>
								<i class="fa fa-envelope-o icon-mc-email"></i>
							</div>
							<button disabled>ENVOYER</button>
						</form>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="widget widget_information">
					<ul class="footer-information">
						<li>
							<span class="fa fa-map-marker infomation-left"></span>
							<address><a href="https://goo.gl/maps/dCbTjsmm5cK2" target="_blank">13 Rue du Hohwald, 67000 Strasbourg</a></address>
						</li>
						<li class="info-phone">
							<span class="fa fa-phone infomation-left"></span>
							<span><a href="tel:+330388237237">03 88 23 72 37</a></span>
						</li>
						<li class="info-mail">
							<span class="fa fa-envelope-o infomation-left"></span>
							<span><a href="mailto:info@artefact.org">info@artefact.org</a></span>
						</li>
					</ul>
				</div>
				<div class="widget widget_social">
					<div class="social">
						<div class="social-all">
							<span class="footer-social">
								<span class="social-name">
									Suivez-nous sur Facebook
								</span>
								<a href="#" class="fa fa-facebook"></a>
							</span>
							<span class="footer-social">
								<span class="social-name">
									Suivez-nous sur Twitter
								</span>
								<a href="#" class="fa fa-twitter"></a>
							</span>
							<span class="footer-social">
								<span class="social-name">
									Suivez-nous sur Youtube
								</span>
								<a href="#" class="fa fa-youtube"></a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		<script>
              new WOW().init();
              </script>
							<script>
							// ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>


	</body>
</html>
