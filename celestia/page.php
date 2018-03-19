<?php get_header(); ?>
	<?php while(have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="blog-post">
              <h2 ><a class="blog-post-title" ><?php the_title(); ?></a></h2>
				<?php the_content('Read More'); ?>
            </div>
		</article>
	<?php endwhile; ?>
<?php get_footer(); ?>