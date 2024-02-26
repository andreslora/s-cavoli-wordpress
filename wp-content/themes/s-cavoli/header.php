<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package S-Cavoli
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
		<div class="container-fluid">
			<div class="flex items-center justify-between gap-8">
				<nav class="main-nav">
					<a href="javascript:;" id="buttonMenu">
						<i class="icon icon-hamburger"></i>
					</a>
					<ul class="main-menu open">
						<?php
						wp_nav_menu([
							'menu' => 1, // Replace 'your-menu-id' with the ID of your menu
							'container'      => false,
							'items_wrap'     => '%3$s',
							'walker'         => new Primary_Walker_Nav_Menu(),
							'fallback_cb'    => false,
						]);
						?>
					</ul>
				</nav>
				<div class="other-nav">
					<?php
					wp_nav_menu([
						'menu' => 3,
						'container'      => false,
						'items_wrap'     => '%3$s',
						'walker'         => new Second_Walker_Nav_Menu(),
						'fallback_cb'    => false,
					]);
					?>
				</div>
			</div>
		</div>
	</header>
	<?php wp_body_open(); ?>