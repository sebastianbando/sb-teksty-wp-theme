<?php get_header(); ?>

	<main>
		<div class="list">
			<?php 
				$args = array(
					 "posts_per_page" => -1
					,"orderby" => "title"
					,"order" => "ASC"
				);
				$posts = get_posts($args);
			?>
			
			<?php foreach($posts as $post) : ?>		
				<div class="title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			<?php endforeach; ?>
		</div>
	</main>
		
<?php get_footer(); ?>