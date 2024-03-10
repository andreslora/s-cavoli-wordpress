<?php
get_header();
?>
<main id="content">
    <section class="content-join-team">
        <div class="container-fluid">
            <div class="description">
                <div class="block space-y-6 max-w-[800px]">
                    <h1><b>¡Unete a nuestro </b> equipo apasionado de innovadores!</h1>
                    <?php the_content(); ?>
                </div>
                <i class="icon icon-arrow-down-left"></i>
            </div>
        </div>
    </section>
    <section class="banner-home" style="background-image: url('<?php echo get_theme_image_path('img-banner-1.jpg'); ?>');"></section>
    <section class="content-form-join">
        <div class="container-fluid">
            <div id="formJoin" class="form-join">
                <?php echo do_shortcode('[contact-form-7 id="f454774" title="Trabaja con nosotros"]'); ?>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>