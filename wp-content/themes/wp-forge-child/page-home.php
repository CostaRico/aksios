<?php
/*
Template Name: Home Page
*/

get_header(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="flw">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>