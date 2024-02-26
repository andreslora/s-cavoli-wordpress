<?php
get_header();
?>
<main id="content">
    <section class="content-contact-hero" style="background-image: url('<?php echo get_theme_image_path('bg-contact.jpg'); ?>');"></section>
    <section class="content-contact-connect">
        <div class="container-fluid">
            <div class="flex flex-col md:flex-row items-center justify-between gap-10 border-b border-semantic-black2 pb-8 mb-8">
                <h1>Estamos emocionados de conectar contigo. </h1>
                <i class="icon icon-arrow-down-left"></i>
            </div>
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10">
                <div class="info">
                    <h5>Para consultas, nuevos proyectos o colaboraciones:</h5>
                    <a href="tel:+1809-566-7750">+1 809 566 7750</a>
                    <a href="mailto:info@scavoli.com">info@scavoli.com</a>
                </div>
                <ul class="list-contact">
                    <li>
                        <div class="card-contact">
                            <h5>STEFANO CAVOLI</h5>
                            <p>Director General</p>
                            <a href="mailto:sc@scavoli.com">sc@scavoli.com</a>
                            <small>ext. 1</small>
                        </div>
                    </li>
                    <li>
                        <div class="card-contact">
                            <h5>Yohanna pena</h5>
                            <p>Gerente Administrativa</p>
                            <a href="mailto:ypeña@scavoli.com">ypeña@scavoli.com</a>
                            <small>ext. 0</small>
                        </div>
                    </li>
                    <li>
                        <div class="card-contact">
                            <h5>YAMILA GONZÁLEZ</h5>
                            <p>Gerente de Proyectos</p>
                            <a href="mailto:yamila@scavoli.com">yamila@scavoli.com</a>
                            <small>ext. 6</small>
                        </div>
                    </li>
                    <li>
                        <div class="card-contact">
                            <h5>Jorge santos</h5>
                            <p>Gerente de Proyectos</p>
                            <a href="mailto:jsantos@scavoli.com">jsantos@scavoli.com</a>
                            <small>ext. 3</small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="content-contact-form">
        <div class="title">
            <div class="text">
                <h2>Envianos un mensaje</h2>
            </div>
        </div>
        <div class="container-fluid">
           <?php echo do_shortcode('[contact-form-7 id="9aa57df" title="Contacto"]'); ?>
        </div>
        <div id="modalMessage" class="modal-message">
            <div class="container">
                <div class="body-modal">
                    <div class="block space-y-4 md:space-y-6">
                        <h5>Tu mensaje ha sido enviado correctamente.</h5>
                        <p>Uno de nuestros agentes se pondrá en contacto con usted a través de su correo</p>
                    </div>
                    <a href="javascript:;" class="btn btn-large btn-primary btn-close">cerrar</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content-contact-visit">
        <div class="title">
            <div class="text">
                <h2>VISÍTANOS</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12 xxxl:gap-20">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1892.2288796680753!2d-69.94424918347592!3d18.462913125901874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89f0a266acbb%3A0x84c2dc1d8d29a63e!2sSCavoli!5e0!3m2!1ses!2sdo!4v1707051515757!5m2!1ses!2sdo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="description">
                    <h3>Santo Domingo</h3>
                    <p>C/Paseo de los Locutores No. 33F, Evaristo Morales Sto. Dgo., Rep. Dom.</p>
                    <a href="https://maps.app.goo.gl/rA94obD7xo2BfYhz9" target="_blank" class="btn btn-large btn-cuaternarios"><i class="icon icon-arrow-right"></i><span>encuéntranos en google maps</span> </a>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-contact" style="background-image: url('<?php echo get_theme_image_path('bg-banner-contact.jpg'); ?>');"></section>
    <section class="content-contact-join">
        <div class="container">
            <div class="block space-y-6 text-center">
                <h2><b>Unete a</b> nuestro equipo</h2>
                <a href="<?php echo get_permalink(56); ?>" class="btn btn-large btn-tertiary w-full md:w-auto">ÚNETE</a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>