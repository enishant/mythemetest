<?php get_header(); ?>
<div class="row">
	<?php 
	if(have_posts()) 
	{ 
		while(have_posts())
		{
			the_post();
	?>
		<div class="col-lg-12 col-md-12">
			<h1><?php echo get_the_title(); ?></h1>
		</div>
		<div class="col-lg-12 col-md-12">
			<?php echo get_the_content(); ?>
		</div>
	<?php
		} 
	} 
	?>
</div>
<?php get_footer(); ?>