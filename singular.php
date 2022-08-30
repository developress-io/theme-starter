<?php
get_header();
?>

<?php if ( have_posts()): while ( have_posts() ) : the_post(); ?>

<?php if(has_post_thumbnail()):?>
	<img src="<?php the_post_thumbnail_url();?>" >
	<?php endif;?>


	<h3><?php the_title(); ?></h3>

	<?php the_excerpt(); ?>

	<p><?php echo get_the_date( 'l jS F, Y' ); ?></p>

	<?php echo wp_get_attachment_image( get_the_post_thumbnail() ); ?>

	<a href="<?php the_permalink(); ?>">Read more</a>

<?php endwhile;
else :
endif; ?>

<?php
get_footer();

