<?php get_header(); ?>

<main id="content">
    <section class="content-project">
        <div class="container-fluid">
            <h1>Proyectos</h1>
            <ul class="list-categories-project">
                <li>
                    <a href="<?php echo get_post_type_archive_link('proyectos'); ?>" class="<?php echo get_the_ID() == 19 ? 'active' : ''; ?>">todos</a>
                </li>
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'categoria',
                    'hide_empty' => false,
                ));

                if (!empty($terms) && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        $active_class = check_active_project_taxonomy($term);
                        echo '<li><a href="' . esc_url(get_term_link($term)) . '"  class="' . $active_class . '">' . $term->name . '</a></li>';
                    }
                }
                ?>
            </ul>
            <?php if (have_posts()) : ?>
                <ul class="list-card-project">
                    <?php while (have_posts()) : the_post(); ?>
                        <li>
                            <div class="card-project">
                                <figure class="thumb">
                                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title_attribute(); ?>">
                                </figure>
                                <div class="description">
                                    <div class="block space-y-2">
                                        <h5><?php the_title(); ?></h5>
                                        <p><?php echo get_field('descripcion_corta', get_the_ID()); ?></p>
                                    </div>
                                    <a href="<?php echo get_permalink(); ?>" class="btn btn-medium btn-tertiary"><span>leer más</span></a>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <!-- <h3><i class="icon icon-arrow-down-right"></i>MÁS <span> PROYECTOS</span></h3> -->
        </div>
    </section>
</main>

<?php get_footer(); ?>