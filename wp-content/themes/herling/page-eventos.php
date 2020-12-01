<?php get_header() ?>
    <!-- Primary Page Layout
    ================================================== -->
    <div id="eventos">
        <section class="section main padding-page-top padding-bottom over-hide background-dark-2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-start">
                        <h1>MIS EVENTOS</h1>
                        <small class="mt-3 mb-md-0 mb-3">Te acompaño a cuestionar tu vida y construirla como se te pegue la gana.</small>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/eventos.jpg" >
                    </div>
                </div>
            </div>
        </section>
        <section class="section padding-bottom over-hide background-dark-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <?php 
                        ob_start();
                        $args = array( 
                        'post_type' => 'eventos_cpt',
                        'posts_per_page' => 7,
                        'meta_key'          => 'fecha',
                        'orderby'           => 'meta_value_num',
                        'order'             => 'DESC'
                    );
                    $posts_query = new WP_Query;
                    $posts_query->query( $args );
                    if ($posts_query->have_posts()) {
                        while($posts_query->have_posts()){
                        $posts_query->the_post();
                    ?>
                        <div class="event ajax-form bg-white p-2 py-md-5 py-3 p-md-5 mt-3">
                            <h3 class="title text-dark font-weight-bold"><?php the_title() ?></h3>
                            <img src="<?php the_field('imagen') ?>" class="img-fluid">
                            <p class="description text-dark mt-3 mt-md-0"><?php the_field('descripcion') ?></p>
                            <div class="date-and-address d-flex">
                                <time class="mr-3 text-dark" datetime="2008-02-14 20:00"><i class="fa fa-calendar mr-1"></i> <?php the_field('fecha') ?></time>
                                <address class="text-dark"><i class="fa fa-map-marker mr-1"></i> <?php the_field('lugar') ?></address>
                            </div>
                            <a class="event-cta" href="https://wa.link/vj1zpq" target="_blank" class="send_message cursor-link d-flex align-items-center" id="send" data-lang="es"><span>Contactar</span> <i class="fa fa-whatsapp ml-1"></i></a>
                        </div>
                    <?php
                        }
                    }
                        wp_reset_postdata();
                
                        /* Get the buffered content into a var */
                        $events = ob_get_contents();
                        ob_end_clean();
                        echo $events;
                    ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer() ?>