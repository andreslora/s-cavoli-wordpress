<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package S-Cavoli
 */

get_header();
?>

<main id="content">
	<?php
	if (have_posts()) :

		if (is_home() && !is_front_page()) :
			$page_object = get_queried_object();
			$page_id     = get_queried_object_id();
			$content     = apply_filters('the_content', $page_object->post_content);
	?>
			<section class="content-journal">
				<div class="container-fluid">
					<div class="title">
						<h1><?php single_post_title(); ?></h1>
						<?php echo $content; ?>
					</div>
					<div class="flex gap-2 md:gap-4 items-center justify-center border-b border-semantic-black2 pb-3 mb-8">
						<i class="icon icon-arrow-down-right text-[16px] md:text-[20px]"></i>
						<h4>ARTÍCULOS <span>RECIENTES</span></h4>
					</div>
					<?php
					// Get the latest post
					$latest_post = new WP_Query(array(
						'posts_per_page' => 1,
					));

					if ($latest_post->have_posts()) : while ($latest_post->have_posts()) : $latest_post->the_post();
					?>
							<div class="slide-journal">
								<figure class="thumb">
									<?php the_post_thumbnail(); ?>
								</figure>
								<div class="flex flex-col justify-between w-full">
									<div class="description-slide">
										<h2><?php the_title(); ?></h2>
										<h3><?php the_excerpt(); ?></h3>
										<p>por <?php echo get_field('autor'); ?></p>
										<a href="<?php the_permalink(); ?>" class="btn btn-large btn-tertiary md:whitespace-nowrap"><span>leer más</span></a>
									</div>
									<!-- Your slider code here -->
									<div class="content-slide">
										<nav class="nav-control">
											<a href="javascript:;" class="prev"><i class="icon icon-arrow-left"></i></a>
											<a href="javascript:;" class="next"><i class="icon icon-arrow-right"></i></a>
										</nav>
										<div class="swiper mySwiper">
											<div class="swiper-wrapper">
												<?php
												$gallery = get_field('galeria');
												foreach ($gallery as $image) :
												?>
													<figure class="swiper-slide slide">
														<img src="<?php echo $image; ?>" />
													</figure>
												<?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
					<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
					<div class="flex gap-2 md:gap-4 items-center justify-center border-b border-semantic-black2 pb-3 mb-6">
						<i class="icon icon-arrow-down-right text-[16px] md:text-[20px]"></i>
						<h4>EXPLORA NUESTROS <span>ARTICULOS</span></h4>
					</div>
					<ul class="list-more-proyect">
						<li>
							<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn btn-small btn-secondary <?php echo is_home() ? 'active' : ''; ?>">TODOS</a>
						</li>
						<?php
						$categories = get_categories();
						foreach ($categories as $category) :
							$class = is_category($category->term_id) ? 'active' : '';
						?>
							<li>
								<a href="<?php echo get_category_link($category->term_id); ?>" class="btn btn-small btn-secondary <?php echo $class; ?>">
									<?php echo $category->name; ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
					<ul class="list-card-journal">
						<?php
						/* Start the Loop */
						$first_post = true;
						while (have_posts()) :
							the_post();
							if ($first_post) {
								$first_post = false;
								continue;
							}
						?>
							<li>
								<div class="card-journal">
									<figure class="thumb">
										<?php the_post_thumbnail(); ?>
										<span><?php $category = get_the_category();
												echo $category[0]->cat_name; ?></span>
									</figure>
									<div class="description">
										<div class="block space-y-1">
											<h5><?php the_title(); ?></h5>
											<p><?php echo get_field('subtitulo'); ?></p>
											<small>por <?php echo get_field('autor'); ?></small>
										</div>
										<a href="<?php the_permalink(); ?>" class="btn btn-large btn-tertiary"><span>leer más</span></a>
									</div>
								</div>
							</li>
						<?php
						endwhile;

						the_posts_navigation();


						?>

					</ul>
					<!-- <div class="flex gap-2 md:gap-4 items-center justify-center border-b border-semantic-black2 pb-3">
				<i class="icon icon-arrow-down-right text-[16px] md:text-[20px]"></i>
				<h4>MÁS <span>ARTICULOS</span></h4>
			</div> -->
				</div>
			</section>

	<?php
		else :

			get_template_part('template-parts/content', 'none');

		endif;
	endif;
	?>
</main>

<?php
get_footer();
