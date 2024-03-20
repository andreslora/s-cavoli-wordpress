<?php
get_header();
?>
<main id="content">
    <section class="hero-home" style="background-image: url('<?php echo get_theme_image_path('hero-home.jpg'); ?>');">
        <div class="container-fluid">
            <div class="description">
                <ul class="list-networks">
                    <li>
                        <a href="https://www.instagram.com/s.cavoli/" target="_blank">
                            <i class="icon icon-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/s-cavoli/?originalSubdomain=es" target="_blank">
                            <i class="icon icon-linkedIn"></i>
                        </a>
                    </li>
                </ul>
                <a href="<?php echo get_post_type_archive_link('proyectos'); ?>" class="logo">
                    <img src="<?php echo get_theme_image_path('logo-white.png'); ?>" alt="Logo s-cavoli">
                </a>
                <div class="block space-y-4 md:space-y-6 max-w-[540px] mx-auto">
                    <h1>Creamos estrategias de comunicacion disruptivas, conexiones autenticas y marcas mas humanas.</h1>
                    <ul class="list-networks-responsive">
                        <li>
                            <a href="https://www.instagram.com/s.cavoli/" target="_blank">
                                <i class="icon icon-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/uas/login-submit" target="_blank">
                                <i class="icon icon-linkedIn"></i>
                            </a>
                        </li>
                    </ul>
                    <a href="<?php echo get_permalink(17); ?>" class="btn btn-large btn-primary"><span>lee nuestro manifesto</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="content-office-home">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="card-office" style="background-image: url('<?php echo get_theme_image_path('bg-office-1.jpg'); ?>');">
                <div class="block text-center relative z-10">
                    <i class="icon icon-office"></i>
                    <h2>THE <br> <b>OFFICE</b></h2>
                    <a href="<?php echo get_permalink(17); ?>" class="btn btn-large btn-primary"><span>Conoce más</span></a>
                </div>
            </div>
            <div class="card-office" style="background-image: url('<?php echo get_theme_image_path('bg-office-2.jpg'); ?>');">
                <div class="block text-center relative z-10">
                    <i class="icon icon-ray"></i>
                    <h2>THE <br> <b>STUDIO</b></h2>
                    <a href="<?php echo get_permalink(17); ?>" class="btn btn-large btn-primary"><span>Conoce más</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="content-brands-home">
        <div class="container-fluid">
            <div class="description">
                <h2>Aportamos alma y corazon a nuestras marcas.</h2>
                <a href="<?php echo get_permalink(21); ?>" class="btn btn-large btn-primary"><span>contáctanos</span></a>
            </div>
            <ul class="list-brands">
                <?php foreach (get_field('clients') as $client) : ?>
                    <li>
                        <figure>
                            <img src="<?php echo $client['logo']; ?>">
                        </figure>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
    <section class="content-most-recent">
        <div class="container-fluid">
            <div class="block space-y-12 md:space-y-[112px]">
                <div class="slide-most-recent">
                    <div class="flex flex-col xl:flex-row xl:items-end gap-y-10 xl:gap-y-0 gap-x-8 xl:gap-x-20 2xl:gap-x-[126px]">
                        <div class="block">
                            <div class="description-most-recent">
                                <h2>LO MÁS <span>RECIENTE</span> </h2>
                                <div class="flex flex-col md:flex-row gap-2">
                                    <a href="<?php echo get_post_type_archive_link('proyectos'); ?>" class="btn btn-large btn-secondary"><span>Más proyectos</span></a>
                                    <a href="projects.html" class="btn btn-large btn-tertiary"><span>leer más</span></a>
                                </div>
                            </div>
                            <div class="swiper mySwiper2">
                                <?php
                                // Get 'proyectos' posts
                                $proyectos_posts = new WP_Query(array(
                                    'post_type' => 'proyectos',
                                    'posts_per_page' => -3,
                                ));

                                if ($proyectos_posts->have_posts()) : ?>
                                    <div class="swiper-wrapper">
                                        <?php while ($proyectos_posts->have_posts()) : $proyectos_posts->the_post(); ?>
                                            <div class="swiper-slide slide">
                                                <figure class="thumb">
                                                    <?php the_post_thumbnail(); ?>
                                                </figure>
                                                <div class="caption">
                                                    <h4><?php the_title(); ?></h4>
                                                    <h3><?php the_excerpt(); ?></h3>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif;
                                wp_reset_postdata(); ?>
                                <nav class="nav-control">
                                    <a href="javascript:;" class="prev"><i class="icon icon-arrow-left"></i></a>
                                    <a href="javascript:;" class="next"><i class="icon icon-arrow-right"></i></a>
                                </nav>
                            </div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                            <?php
                            if ($proyectos_posts->have_posts()) : ?>
                                <div class="swiper-wrapper">
                                    <?php while ($proyectos_posts->have_posts()) : $proyectos_posts->the_post(); ?>
                                        <figure class="swiper-slide slide">
                                            <img src="<?php echo get_field('cintillo'); ?>" />
                                        </figure>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
                <div class="slide-inspires">
                    <div class="description-inspires">
                        <h2>LO QUE NOS <span>INSPIRA</span> </h2>
                        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn-large btn-secondary"><span>mas artículos</span></a>
                    </div>
                    <div class="swiper swiperInspires">
                        <?php
                        // Get latest posts
                        $latest_posts = new WP_Query(array(
                            'posts_per_page' => 5,  // Change this to the number of posts you want to display
                        ));

                        if ($latest_posts->have_posts()) : ?>
                            <div class="swiper-wrapper">
                                <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                                    <div class="swiper-slide slide">
                                        <div class="thumb">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="description">
                                            <div class="block space-y-4">
                                                <h4><?php the_title(); ?></h4>
                                                <p><?php the_excerpt(); ?></p>
                                            </div>
                                            <a href="<?php the_permalink(); ?>" class="btn btn-medium btn-tertiary !h-[44px] !px-8"><span>leer más</span></a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif;
                        wp_reset_postdata(); ?>

                        <nav class="nav-control">
                            <a href="javascript:;" class="prev"><i class="icon icon-arrow-left"></i></a>
                            <a href="javascript:;" class="next"><i class="icon icon-arrow-right"></i></a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-home" style="background-image: url('<?php echo get_theme_image_path('img-banner-1.jpg'); ?>');"></section>
    <section class="content-dream-home">
        <div class="container">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-10">
                <div class="description">
                    <h2>QUEREMOS SOÑAR <br class="hidden md:block"> <span>CONTIGO</span></h2>
                    <a href="<?php echo get_permalink(17); ?>" class="btn btn-large btn-secondary"><span>seamos disruptivos</span></a>
                </div>
                <i class="icon icon-arrow-up-left text-[32px] text-semantic-black hidden md:block"></i>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>