<!doctype html>
<html lang="ja">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="<?php //echo get_theme_file_uri('img/favicon.ico'); ?>" />

	<?php wp_head(); ?>
</head>

<body>
	<header id="header" class="header">
		<div class="header__inner">
			<div class="header__sitelogo">
				<?php
				if (has_custom_logo()) {
					the_custom_logo();
				}
				?>
			</div>
			<div class="menu-header-menu-wrapper NavMenu">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'menu-1'
				));
				?>
			</div>
		</div><!-- header__inner -->
	</header>