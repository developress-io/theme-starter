<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>

		<p><?php echo get_the_date( 'l dS M, Y' ); ?></p>

		<?php echo wp_get_attachment_image( get_post_thumbnail_id() ); ?>

		<a href="<?php the_permalink(); ?>">More about it</a>

	<?php endwhile;
	endif;
