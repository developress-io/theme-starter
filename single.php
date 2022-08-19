<?php get_header(); ?>

	<div>
		<?php
		while ( have_posts() ) {
			the_post();
			?>
			<div>
				<?php echo wp_get_attachment_image( get_post_thumbnail_id() ); ?>
			</div>
			<div>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			<?php
		}
		?>
	</div>

	<div>
		<?php previous_post_link(); ?> | <?php next_post_link(); ?>
	</div>

<?php get_footer();
