<?php /* Template Name: Home Page */ get_header(); ?>

<div class="container-wrap">
	<div class="main-content container-fullwidth">
		<div class="row parallax row-fluid home-upcoming-event">
			<div class="overlay_parallax"></div>
		<div class="row row-fluid">
			<div class="nocontainer">
				<div class="col-sm-12">


					<div class="Modern-Slider">
						<?php
						$posts = get_posts( array(
								'posts_per_page' => 5, // -1 pour afficher tous les articles
								'post_type' => 'evenement', // Type articles
								'category_name' => 'slide'
						));

						foreach( $posts as $post) {
								?>
								<div class="item">
									<?php
								$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'slider');
								list($url, $width, $height, $is_intermediate) = $thumbnail;
								?>
									<div class="img-fill" style="background-image:url(<?php echo $url; ?>)">
										<div class="info">
											<div>
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
												<p>
												<span class="date-event">
													<i class="fa fa-clock-o"></i>
													<span class="date-start dtstart">
														<?php the_field('date'); ?> <?php the_field('heure'); ?>
													</span>
												</span>
											</p>
												<a href="http://localhost/laiterie/panier/" class="read-more">
													<span>ACHETER TICKET</span>
												</a>
												&nbsp;
												<a href="<?php the_permalink(); ?>" class="read-more">
													<span>DETAILS</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<?php
						} ?>

					</div>

				</div>
			</div>
		</div>
		<div class="row parallax row-fluid home-upcoming-event">
			<div class="overlay_parallax"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
							<h2 class="event-title">
								<span>évenement</span> à venir
							</h2>
							<p class="subtitle">
								De nouveaux événements arrivent avec de nouvelles surprises.<br/ >
								Découvrez votre groupe favori en live et vivez un moment magique à la Laiterie !
							</p>

							<div class="event-content">
								<?php
			$args = array(
			'post_type'=> 'evenement',
			'posts_per_page' => 5,
			'orderby' => 'date',
			'order' => 'DESC'
			);
			$wp_query = new WP_Query( $args );
			while ( $wp_query->have_posts() ) :
			$wp_query->the_post(); ?>
			<div class="event-element wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.3s">
				<?php
				$date = get_field('start-date', false, false);
				$time = strtotime($date);
				 ?>
				<span class="event-date">
					<?php echo date('d', $time); ?>
					<span class="month"><?php echo date('F', $time); ?></span>
					<?php echo date('y', $time); ?>
				</span>
				<?php
$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
list($url, $width, $height, $is_intermediate) = $thumbnail;
?>
				<a href="<?php the_permalink(); ?>"><div class="thumbnail" style="background-image:url(<?php echo $url; ?>)"></div></a>
				<div class="event-info-container wow bounceInLeft">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="event-info">
						<span class="date-event">
							<i class="fa fa-clock-o"></i>
							<span class="date-start dtstart">
								<?php the_field('date'); ?> <?php the_field('heure'); ?>
							</span>
						</span>
						<span class="address-event">
							<i class="fa fa-map-marker"></i>
							La Laiterie, <?php the_field('salle'); ?>
						</span>
					</div>
					<div class="detail-event">
						<p>
							<a href="<?php the_permalink(); ?>">
							<?php echo get_the_excerpt(); ?>
						</a>
						</p>
					</div>
					<div class="button-home-event">
						<a href="http://localhost/laiterie/panier/" class="read-more">
							<span>ACHETER TICKET</span>
						</a>
						&nbsp;
						<a href="<?php the_permalink(); ?>" class="read-more">
							<span>DETAILS</span>
						</a>
					</div>
				</div>
			</div>
			<?php endwhile;
			wp_reset_query();
			?>

								<div class="more-event">
									<a href="http://localhost/laiterie/evenements/">Voir tout les événements</a>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>

		</div>

		<div class="row row-fluid home-news" id="actu">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.3s">
						<div class="grid-header header-news">
							<h2 class="event-title">Actualités</h2>
							<p class="subtitle">
								Nous créons des messages et des actualités avec des informations utiles pour les événements, des conseils et des tendances, pour vous tenir informé de tout ce qui ce passe à la Laiterie !
							</p>
						</div>
						<ul class="news">
							<?php
$args = array( 'numberposts' => 5, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?>

<li>
	<div class="thumbail-container">
		<div class="thumbail">
			<?php the_post_thumbnail(); ?>
		</div>
	</div>
	<div class="news-container">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p class="news-content">
			<span>
				<i class="fa fa-calendar"></i>
				<time class="event-date">
					<?php the_date(); ?>
				</time>
			</span>
		</p>
		<p>
			<?php the_excerpt(); ?>
		</p>
		<a class="read-more" href="<?php the_permalink(); ?>">Continuer...</a>
	</div>
</li>
<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>




		<div class="partenaire wow slideInLeft" data-wow-duration="0.9s" data-wow-delay="0s">
							<?php
		$args = array(
		'post_type'=> 'partenaire',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC'
		);
		$wp_query = new WP_Query( $args );
		while ( $wp_query->have_posts() ) :
		$wp_query->the_post(); ?>
		<a href="<?php the_field('lien_partenaire'); ?>" target="_blank">
			<?php the_post_thumbnail(); ?>
		</a>
		<?php endwhile;
		wp_reset_query();
		?>
		</div>



</div>



<?php get_footer(); ?>
