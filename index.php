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
			<h1><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
		</div>
		<div class="col-lg-12 col-md-12">
			<?php echo get_the_excerpt(); ?>
		</div>
	<?php
		} 
	} 
	else
	{
	?>
		<div class="col-lg-12 col-md-12">
			<h1>Empty blog</h1>
		</div>		
		<div class="col-lg-12 col-md-12">
			No posts found !
		</div>	
	<?php	
	}
	?>
</div>
<?php get_footer(); ?>