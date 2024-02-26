<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package S-Cavoli
 */

?>

<footer>
	<div class="container-fluid">
		<div class="flex flex-col lg:flex-row justify-between gap-4 pb-16 md:pb-[200px]">
			<div class="newsletter">
				<div class="description">
					<h3>Cambiemos el futuro de la comunicación.</h3>
					<p>¡Cuéntanos sobre tu marca o empresa!</p>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="15741a2" title="¡Cuéntanos sobre tu marca o empresa!"]'); ?>
			</div>
			<div class="main-nav-footer">
				<div class="btn-up">
					<i class="icon icon-arrow-up"></i>
					<a href="#!">volver arriba</a>
				</div>
				<div class="flex flex-col md:flex-row md:justify-between gap-3 pb-8 md:pb-[62px]">
					<ul class="main-menu-footer">
						<?php
						wp_nav_menu([
							'menu' => 4, // Replace 'your-menu-id' with the ID of your menu
							'container'      => false,
							'items_wrap'     => '%3$s',
							'walker'         => new Primary_Walker_Nav_Menu(),
							'fallback_cb'    => false,
						]);
						?>
					</ul>
					<ul class="main-menu-footer">
						<?php
						wp_nav_menu([
							'menu' => 5, // Replace 'your-menu-id' with the ID of your menu
							'container'      => false,
							'items_wrap'     => '%3$s',
							'walker'         => new Primary_Walker_Nav_Menu(),
							'fallback_cb'    => false,
						]);
						?>
					</ul>
				</div>
				<ul class="main-menu-footer">
					<?php
					wp_nav_menu([
						'menu' => 6, // Replace 'your-menu-id' with the ID of your menu
						'container'      => false,
						'items_wrap'     => '%3$s',
						'walker'         => new Primary_Walker_Nav_Menu(),
						'fallback_cb'    => false,
					]);
					?>
				</ul>
			</div>
		</div>
		<p class="copy">© <?php echo date('Y'); ?> S/CAVOLI</p>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>