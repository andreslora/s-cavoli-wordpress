<?php get_header(); ?>

<main id="content">
    <?php while (have_posts()) : the_post(); ?>
        <section class="content-project-banner" style="background-image: url('<?php echo get_field('cintillo'); ?>');"></section>
        <section class="content-detail-project">
            <div class="container-fluid">
                <div class="flex items-center gap-3 pb-6 md:pb-16 xxl:pb-[84px]">
                    <i class="icon icon-arrow-up-left text-[18px]"></i>
                    <a href="<?php echo get_post_type_archive_link('proyectos'); ?>">RECIENTES <b>/ PROYECTOS</b> </a>
                </div>
                <div class="block space-y-4 pb-12">
                    <h3><?php the_title(); ?></h3>
                    <ul class="grid grid-cols-1 md:grid-cols-12 gap-3">
                        <?php
                        $gallery = get_field('imagenes_iniciales');
                        foreach ($gallery as $image) : ?>
                            <li class="col-span-1 md:col-span-3">
                                <figure class="w-full h-[240px] md:h-[300px]">
                                    <img src="<?php echo esc_url($image); ?>" class="w-full h-full object-cover">
                                </figure>
                            </li>
                        <?php endforeach;
                        ?>
                    </ul>
                </div>
                <div class="block space-y-8 pb-20">
                    <blockquote>
                        <h5><?php echo get_field('cita_primer_texto'); ?></h5>
                        <h5 class="text-right"><?php echo get_field('cita_segundo_texto'); ?></h5>
                    </blockquote>
                    <?php the_content(); ?>
                </div>
                <div class="galery">
                    <?php
                    $gallery_mid = get_field('galeria_mitad');
                    $classes = array(
                        'w-full xl:w-[530px] h-[300px] xl:h-[340px] xl:top-0 xl:left-0',
                        'w-full xl:w-[560px] h-[300px] xl:h-[560px] xl:top-20 xl:right-0',
                        'w-full xl:w-[530px] h-[300px] xl:h-[340px] xl:bottom-0 xl:left-12 xxl:left-20'
                    );
                    $i = 0;
                    foreach ($gallery_mid as $image) :
                        $class = $classes[$i % 3];
                    ?>
                        <img src="<?php echo $image; ?>" class="<?php echo $class; ?>">
                    <?php
                        $i++;
                    endforeach; ?>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-20 3xl:gap-[110px] pb-[100px]">
                    <?php echo get_field('descripcion_final'); ?>
                </div>
                <!-- <div class="flex gap-2 md:gap-4 items-center justify-center border-b border-semantic-black2 pb-1">
                    <i class="icon icon-arrow-down-right text-[16px] md:text-[20px]"></i>
                    <h6>MÁS <span>Proyectos</span></h6>
                </div> -->
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>