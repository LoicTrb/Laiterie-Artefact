<?php /* Template Name: Evenement */ get_header(); ?>

<div class="page-head" style="margin-bottom: 0;">
	<div class="container">
		<div class="page-head-content">
			<div class="breadcrumb-wrap">
				<span><a href="<?php echo get_home_url(); ?>" class="home">Home</a></span><i>/</i>
				<span><span>événements</span></span>
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
									<?php
				$args = array(
				'post_type'=> 'evenement',
				'posts_per_page' => -1,
				'orderby' => 'date',
				'order' => 'DESC'
				);
				$wp_query = new WP_Query( $args );
				while ( $wp_query->have_posts() ) :
				$wp_query->the_post(); ?>
				<div class="masonry-item wow fadeInDown" data-wow-duration="0.9s" data-wow-delay="0.3s">
					<div class="item-wrap">
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
						<h3 class="item-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<span><?php the_field('date'); ?></span>
						<div class="item-thumbnail">
							<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
						</div>
						<div class="item-content">
							<div class="item-excerpt">
								<p>
									<a href="<?php the_permalink(); ?>">
									<?php echo get_the_excerpt(); ?>
								</a>
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
