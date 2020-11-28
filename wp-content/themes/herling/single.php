<?php get_header() ?>
		<!-- Primary Page Layout
		================================================== -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="section padding-page-top padding-bottom over-hide background-dark-2">
			<div class="container">
				<div class="row">
					<div class="col-12 section-title-wrap text-center parallax-fade-top">
						<p>por <?php the_author() ?></p>	
						<h1><?php the_title() ?></h1>
					</div>
				</div>	
			</div>
		</div>
	
		<div class="section padding-bottom-big over-hide background-dark-2">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="section drop-shadow rounded">
							<div class="post-box background-dark-1 over-hide">
								<img src="<?php the_post_thumbnail_url() ?>" class="blog-home-img"/>
								<div class="p-3">
									<?php the_content() ?>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>			
		</div>
		<?php endwhile; endif;?>
<?php get_footer() ?>