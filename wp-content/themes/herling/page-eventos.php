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
                        <div class="event ajax-form bg-white p-2 py-md-5 py-3 p-md-5 mt-3">
                            <h3 class="title text-dark font-weight-bold">Nombre del evento</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/lets-go.jpg" class="img-fluid">
                            <p class="description text-dark mt-3 mt-md-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dolore inventore rem ad? Consectetur, adipisci doloremque. Ex, fuga nisi architecto excepturi, consectetur nesciunt incidunt porro magni facere minima optio! Earum.</p>
                            <div class="date-and-address d-flex">
                                <time class="mr-3 text-dark" datetime="2008-02-14 20:00"><i class="fa fa-calendar mr-1"></i> 03 - 06 de Diciembre</time>
                                <address class="text-dark"><i class="fa fa-map-marker mr-1"></i> Olas Tulum, Tulum</address>
                            </div>
                            <button class="send_message cursor-link d-flex align-items-center" id="send" data-lang="es"><span>Contactar</span> <i class="fa fa-whatsapp ml-1"></i></button>
                        </div>

                        <div class="event ajax-form bg-white p-2 py-md-5 py-3 p-md-5 mt-3">
                            <h3 class="title text-dark font-weight-bold">Nombre del evento</h3>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/lets-go.jpg" class="img-fluid">
                            <p class="description text-dark mt-3 mt-md-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dolore inventore rem ad? Consectetur, adipisci doloremque. Ex, fuga nisi architecto excepturi, consectetur nesciunt incidunt porro magni facere minima optio! Earum.</p>
                            <div class="date-and-address d-flex">
                                <time class="mr-3 text-dark" datetime="2008-02-14 20:00"><i class="fa fa-calendar mr-1"></i> 03 - 06 de Diciembre</time>
                                <address class="text-dark"><i class="fa fa-map-marker mr-1"></i> Olas Tulum, Tulum</address>
                            </div>
                            <button class="send_message cursor-link d-flex align-items-center" id="send" data-lang="es"><span>Contactar</span> <i class="fa fa-whatsapp ml-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php get_footer() ?>