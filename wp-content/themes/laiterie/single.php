<?php get_header(); ?>

<div class="page-head">
	<div class="container">
		<div class="page-head-content">
			<div class="breadcrumb-wrap">
				<span><a href="<?php echo get_home_url(); ?>" class="home">Home</a></span><i>/</i>
				<span><span><?php the_title(); ?></span></span>
			</div>
		</div>
	</div>
</div>
<div class="container-wrap actualites-single">
	<div class="main-content container">
		<div class="row">
			<div class="main col-md-12">
				<article class="type-post event-detail">
					<header class="content-header">
						<h1 class="content-title">
							<?php the_title(); ?>
						</h1>
						<p class="content-meta">
							<span>
								<time class="event-date">
									<span><?php the_field('date'); ?></span>
								</time>
							</span>
						</p>
					</header>
					<div class="content-event-detail">
						<div class="content-thumb actualites-img">
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
					<div class="content-wrap">
						<div class="content">
							<?php echo get_post_field('post_content', $post_id); ?>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
