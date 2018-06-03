<?php get_header(); ?>

<div class="page-head" style="margin-bottom: 0;">
	<div class="container">
		<div class="page-head-content">
			<div class="breadcrumb-wrap">
				<span><a href="<?php echo get_home_url(); ?>" class="home">Home</a></span><i>/</i>
				<span><span><a href="http://localhost/laiterie/evenements/">évenements</a></span></span><i>/</i>
				<span><span><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></span></span>
			</div>
		</div>
	</div>
</div>
			<div class="parallax row-fluid home-upcoming-event">
				<div class="overlay_parallax"></div>
			<div class="container-wrap">
				<div class="default-p container">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-fluid">
									<div class="col-sm-12">
										<div class="masonry-blog masonry">
											<div class="masonry-container columns-3">
												<?php $current_category = single_cat_title("", false); ?>
												<?php
							$args = array(
							'post_type'=> 'evenement',
							'posts_per_page' => -1,
							'orderby' => 'date',
							'order' => 'DESC',
							'category_name'  => $current_category
							);
							$wp_query = new WP_Query( $args );
							while ( $wp_query->have_posts() ) :
							$wp_query->the_post(); ?>
							<div class="masonry-item">
								<div class="item-wrap">
									<div class="category">
										<a href="<?php echo get_category_link(5); ?>"><?php
								 $category = get_the_category( $post->ID );
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
										<a href="#" class="read-more">
											<span>PRENDRE TICKET</span>
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
											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>

<?php get_footer(); ?>
