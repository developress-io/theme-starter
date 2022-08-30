<?php get_header(); ?>
<?php
$args = array('post_type' => 'members', 'posts_per_page' => 5 );
$query = new WP_Query($args);
while($query -> have_posts()) : $query -> the_post();
	?>
	<div>
		<div>
			<?php echo wp_get_attachment_image( get_post_thumbnail_id() ); ?>
		</div>
		<h1>
			<?php the_title(); ?>
		</h1>
		<div>
			<?php the_excerpt(); ?>
		</div>
		<a href="<?php the_permalink(); ?>">Read more</a>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>
