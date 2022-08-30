<?php if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>

		<h3><?php the_title(); ?></h3>

		<?php the_excerpt(); ?>

		<p><?php echo get_the_date( 'l jS F, Y' ); ?></p>

		<?php echo wp_get_attachment_image( get_post_thumbnail_id() ); ?>

		<a href="<?php the_permalink(); ?>">Read more</a>

	<?php endwhile;
else :
endif; ?>
