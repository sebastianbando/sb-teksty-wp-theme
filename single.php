<?php get_header(); ?>

	<main>

		<?php while ( have_posts() ) : the_post(); ?>
	
			<div class="poem-title">
				<?php the_title(); ?>
			</div>
			<div class="poem-content">
				<?php the_content(); ?>
			</div>
	
		<?php endwhile; // end of the loop. ?>

	</main>

<?php get_footer(); ?>
