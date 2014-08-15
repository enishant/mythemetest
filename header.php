<html>
<head>
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<header class="navbar menu-bar clearfix hidden-xs">	
			<div class="menu-list">
                <?php
                $defaults = array(
                  'theme_location'  => 'primary-menu',
                  'container'       => false ,
                  'menu_class'      => 'nav navbar-nav pull-right',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth'           => 0,
                );
                wp_nav_menu( $defaults );
                ?> 					
			</div>
		</header>