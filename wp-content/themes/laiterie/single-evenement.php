<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="page-head">
			<div class="container">
				<div class="page-head-content">
					<div class="breadcrumb-wrap">
						<span><a href="<?php echo get_home_url(); ?>" class="home">Home</a></span><i>/</i>
						<span><span><a href="<?php echo get_home_url(); ?>/evenements">évenements</a></span></span><i>/</i>
						<span><span><?php the_title(); ?></span></span>
					</div>
				</div>
			</div>
		</div>
		<div class="container-wrap">
			<div class="main-content container">
				<div class="row">
					<div class="main col-md-9">
						<div class="content-social">
							<a href="#share" class="share facebook" title="Share on Facebook">
								<span class="title-shared">Partager sur Facebook</span>
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#share" class="share twitter" title="Share on Twitter">
								<span class="title-shared">Partager sur Twitter</span>
								<i class="fa fa-twitter"></i>
							</a>
						</div>
						<article class="type-post event-detail">
							<header class="content-header">
								<h1 class="content-title">
									<?php the_title(); ?>
								</h1>
								<p class="content-meta">
									<span>
										<time class="event-date">
											<span><?php the_field('date'); ?></span> | <span><?php the_field('heure'); ?></span> <br /> <span>Laiterie, <?php the_field('salle'); ?></span>
										</time>
									</span>
								</p>
								<div class="category">
									<?php
		global $post;
		$category = reset(get_the_category($post->ID));
		$category_id = $category->cat_ID;
		?>
									<a href="<?php echo get_category_link( $category_id ); ?>"><?php
							 $category = get_the_category( $post->ID );
							 echo $category[0]->cat_name;?></a>
								</div>
							</header>
							<div class="content-event-detail">
								<div class="content-thumb">
									<?php the_post_thumbnail(); ?>
								</div>
							</div>
							<div class="content-wrap">
								<div class="content">
									<?php the_content(); ?>
								</div>
							</div>
						</article>
					</div>
					<div class="sidebar col-md-3 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
						<div class="widget widget_categories">
							<h4 class="footer-title">Location</h4>
							<p>
								Points de vente habituels : <?php the_field('prix-frais'); ?>€ + frais
								Tarif sur notre billetterie en ligne : <?php the_field('tarifs-billetterie'); ?>€
							</p>
							<a href="http://localhost/laiterie/panier/" class="read-more">
								<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;&nbsp;<span>J'achète un billet</span>
							</a>
							<hr>
							<h4 class="footer-title">Caisse du soir</h4>
							<p>
								Tarif unique : <?php the_field('prix-caisse-soir'); ?>€
								</p>
								<p>
Accessible dès l'ouverture des portes et dans la limite des places disponibles.
							</p>
						</div>
							<a href="#" class="read-more">
								<i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;<span>Ajouter à votre calendrier</span>
							</a>
							<a href="#" class="read-more">
								<span>Imprimez cet événement</span>
							</a>
					</div>
				</div>
				<hr>
				<div class="masonry-blog masonry">
					<h2 class="content-title">
						VOUS POURRIEZ AIMEZ
					</h2>
					<div class="masonry-container columns-3">
						<?php $current_category = single_cat_title("", false); ?>
						<?php
						$posts = get_posts( array(
						    'posts_per_page' => 3, // -1 pour afficher tous les articles
						    'post_type' => 'evenement', // Type articles
						    'post_status' => 'publish', // statut public uniquement
						    'orderby' => 'post_date', // trier par date
						    'order' => 'DESC', // trier par date décroissante
								'category' => get_the_category()[0]->cat_ID, // APPELER SEULEMENT LE CONTENU PROPRE A UNE CATEGORIE DE LA PAGE
						));

						foreach( $posts as $post) {
						    ?>
								<div class="masonry-item wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.3s">
									<div class="item-wrap">
										<div class="category">
											<?php
							global $post;
							$category = reset(get_the_category($post->ID));
							$category_id = $category->cat_ID;
							?>
											<a href="<?php echo get_category_link( $category_id ); ?>">
												<?php $category = get_the_category( $post->ID );
									 echo $category[0]->cat_name;?></a>
										</div>
										<h3 class="item-title">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h3>
										<span><?php the_field('date'); ?></span>
										<div class="item-thumbnail">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="item-content">
											<div class="item-excerpt">
												<p>
													<?php echo get_the_excerpt(); ?>
												</p>
											</div>
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
								<?php
						} ?>

			</div>
		</div>
			</div>
		</div>

	<?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>

<?php get_footer(); ?>
