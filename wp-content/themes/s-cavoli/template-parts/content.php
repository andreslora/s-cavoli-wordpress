<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package S-Cavoli
 */

?>

<section class="content-hero-journal">
	<div class="banner" style="background-image: url('<?php echo get_field('cintillo'); ?>');">
		<div class="caption">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<div class="container-fluid">
		<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><i class="icon icon-arrow-up-left"></i>ARTÍCULOS <b>RECIENTES</b></a>
	</div>
</section>
<section class="content-detail-journal">
	<div class="container-fluid">
		<div class="block text-center pb-8 md:pb-20 lg:pb-[92px]">
			<h2><?php the_title(); ?></h2>
			<h3><?php echo get_field('subtitulo'); ?></h3>
			<h5>por <?php echo get_field('autor'); ?></h5>
		</div>
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 xl:gap-20 xxxl:gap-[100px] 3xl:gap-[140px] pb-[124px]">
			<div class="block space-y-3 md:space-y-5">
				<?php the_content(); ?>
			</div>
			<div class="slide-detail-journal">
				<div class="swiper mySwiperJournal">
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
				<nav class="nav-control">
					<a href="javascript:;" class="prev"><i class="icon icon-arrow-left"></i></a>
					<a href="javascript:;" class="next"><i class="icon icon-arrow-right"></i></a>
				</nav>
			</div>
		</div>
		<div class="video">
			<iframe src="https://www.youtube.com/embed/WzihuaArZUA?si=7PIVfMJj7bB5T-xV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
		<div class="block space-y-5 pb-8 md:pb-20">
			<?php echo get_field('descripcion_final'); ?>
		</div>
		<div class="grid grid-cols-1 md:grid-cols-12 gap-x-6 lg:gap-x-8 xl:gap-x-12 gap-y-6 lg:gap-y-8 xl:gap-y-12 pb-8 md:pb-12 xl:pb-[100px]">
			<?php
			$galery_final = get_field('galeria_final');
			$classes = array(
				'w-full h-[240px] md:h-[300px] lg:h-[400px] col-span-1 md:col-span-8',
				'w-full h-[240px] md:h-[300px] lg:h-[400px] col-span-1 md:col-span-4',
				'w-full h-[240px] md:h-[300px] col-span-1 md:col-span-5',
				'w-full h-[240px] md:h-[300px] col-span-1 md:col-span-7'
			);
			$i = 0;
			foreach ($galery_final as $image) :
				$class = $classes[$i % 4];
			?>
				<figure class="<?php echo $class; ?>">
					<img src="<?php echo $image; ?>" class="w-full h-full object-cover">
				</figure>
			<?php
				$i++;
			endforeach; ?>
		</div>
		<!-- <div class="flex gap-2 md:gap-4 items-center justify-center border-b border-semantic-black2 pb-3">
			<i class="icon icon-arrow-down-right text-[16px] md:text-[20px]"></i>
			<h6>MÁS <span>ARTICULOS</span></h6>
		</div> -->
</section>