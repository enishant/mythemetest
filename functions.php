<?php
	register_nav_menus( 
	    array(
	        'primary-menu' => 'Primary Menu',
	        'footer-menu' => 'Footer Menu',
	    )
	);

	add_action('wp_head' , 'my_sample_css');
	function my_sample_css()
	{
	?>
		<link href="<?php bloginfo('template_url'); ?>/sample.css" rel="stylesheet" type="text/css">
	<?php
	}
?>