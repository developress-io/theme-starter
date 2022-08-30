

<?php get_header(); ?>

<div>
	<?php get_template_part( 'template-parts/section-archive' ); ?>

	<div>
		<?php previous_posts_link(); ?>
		<?php next_posts_link(); ?>
	</div>
</div>

<?php get_footer(); ?>
