<?php get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blog-post">
			<h1 ><a class="blog-post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			
			<div id="share">
				<a 	class="fa fa-facebook" target="_blank"  
				onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>', 
				'newwindow', 'width=300,height=450'); 
              	return false;"></a>

              	<a 	class="fa fa-twitter" target="_blank"  
				onclick="window.open('https://twitter.com/intent/tweet?text=<?php the_title(); ?> - Read at: <?php the_permalink(); ?>', 
				'newwindow', 'width=300,height=450'); 
              	return false;"></a>
					
              	<a 	class="fa fa-google" target="_blank"  
				onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>', 
				'newwindow', 'width=300,height=450'); 
              	return false;"></a>	
			</div>
	




			<p class="blog-post-meta">Posted on <?php the_time("F jS, Y")?> by <a href="#"><?php the_author_posts_link(); ?></a></p>
			<?php the_post_thumbnail('full'); ?>
			<?php the_content('Read More'); ?>




		</div>
	</article>


	
<?php endwhile; ?>
<?php get_footer(); ?>