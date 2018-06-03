<?php /* Template Name: Contact */ get_header(); ?>

<div class="page-head">
	<div class="container">
		<div class="page-head-content">
			<div class="breadcrumb-wrap">
				<span><a href="<?php echo get_home_url(); ?>" class="home">Home</a></span><i>&#047;</i> <span><span>Contact</span></span>
			</div>
		</div>
	</div>
</div>
<div class="container-wrap">
	<div class="default-p container">
		<div class="row">
			<div class="col-md-12">
				<div class="row row-fluid">
					<div class="nocontainer">
						<div class="col-sm-12">
							<h1 class="text-center text-uppercase">Contact</h1>
							<p class="text-center">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
						</div>
					</div>
				</div>
				<div class="row row-fluid">
					<div class="nocontainer contact-content">
						<div class="col-sm-6">
							<form class="form">
								<div class="form-control-wrap">
									<input type="email" name="email" value="" size="40" class="form-control text email" placeholder="Email"/>
								</div>
								<div class="form-control-wrap">
									<input type="text" name="subject" value="" size="40" class="form-control text" placeholder="Subject"/>
								</div>
								<div class="form-control-wrap">
									<textarea name="message" cols="40" rows="10" class="form-control textarea" placeholder="Message"></textarea>
								</div>
								<div class="form-control-wrap">
									<input type="submit" value="ENVOYER" class="form-control submit"/>
								</div>
							</form>
						</div>
						<div class="col-sm-6">
							<ul class="contact-info">
								<li>
									<span class="contact-title">ADRESSE</span>
									<i class="fa fa-map-marker"></i>
									<address style="display: inline;"><a href="https://goo.gl/maps/dCbTjsmm5cK2" target="_blank">13 Rue du Hohwald, 67000 Strasbourg</a></address>
								</li>
								<li>
									<span class="contact-title">TELEPHONE</span>
									<i class="fa fa-phone"></i>
									<a href="tel:+330388237237">03 88 23 72 37</a>
								</li>
								<li>
									<span class="contact-title">EMAIL</span>
									<i class="fa fa-envelope-o"></i>
									<a href="mailto:info@artefact.org">info@artefact.org</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
