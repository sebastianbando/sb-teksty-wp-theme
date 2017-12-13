<!DOCTYPE html>
<html>
	<head>
		<title><?php echo get_bloginfo(); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/icon.png">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
	</head>
	<body>
		<header>
			<div class="header-grid">
			<div>
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/logo.png">
			</div>
			<div>
				<h1><?php echo get_bloginfo(); ?></h1>
				<nav>
					<?php
						$args = array(
							'order' => 'ASC',
							'orderby' => 'menu_order' );
						$menuitems = wp_get_nav_menu_items( 'menu-glowne', $args );
					?>
					<ul>
						<?php foreach ( $menuitems as $menuitem ) : ?>
							<li>
								<a href="<?php echo $menuitem->url ?>" title="<?php echo $menuitem->title ?>" class="main-menu"><?php echo $menuitem->title ?></a>
							</li>
						<?php endforeach ?>
					</ul>
				</nav>
			</div>
			</div>
		</header>