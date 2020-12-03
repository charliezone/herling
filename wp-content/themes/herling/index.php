<?php get_header() ?>	

		<!-- Primary Page Layout
		================================================== -->
		
		<div class="section padding-page-top padding-bottom over-hide background-dark-2">
			<div class="container">
				<div class="row">
					<div class="col-12 section-title-wrap text-center parallax-fade-top">
						<p>Blog</p>	
						<h1>Un lugar lleno<br>de cosas interesantes</h1>
					</div>
				</div>	
			</div>
		</div>
	
		<div class="section padding-bottom-big over-hide background-dark-2">
			<div class="container">
				<div class="row justify-content-center">
				<?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>
					<article class="col-md-12 text-center">
						<a href="<?php the_permalink() ?>" class="cursor-link-blog-post-<?php echo $i ?> animsition-link tipped" data-title="<span><em>por <?php the_author() ?></em></span>"  data-tipper-options='{"direction":"top","follow":"true","margin":60}'>
							<div class="blog-post-box">
								<h5><?php the_title() ?></h5>
                                <p class="mb-0 mt-2"><?php echo get_the_date() ?></p>
							</div>
						</a>
					</article>
                <?php $i++;
				endwhile; ?> 
					<?php if($i > 10):?>
						<div class="nav-pagination col-md-12 text-center padding-top d-flex justify-content-between" data-scroll-reveal="enter bottom move 30px over 0.5s after 0.2s">
							<a href="<?php echo get_previous_posts_page_link() ?>" class="cursor-link">
								<div class="project-link-wrap">
									<p><< Nuevos</p>
								</div>
							</a>
							<a href="<?php echo get_next_posts_page_link() ?>" class="cursor-link">
								<div class="project-link-wrap">
									<p>Antiguos >></p>
								</div>
							</a>
						</div>
					<?php endif; ?>
                <?php else : ?>
					<p>No se encontraron noticias.</p>
				<?php endif; ?>
				
				</div>	
			</div>			
        </div>
<?php get_footer() ?>