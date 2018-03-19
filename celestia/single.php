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
<div id="share" class="pull-right">
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
<?php endwhile; ?>
<?php 
   $args = array(
   	'fields' => apply_filters(
   		'comment_form_default_fields', array(
   			'author' =>'<p class="comment-form-author">' . '<input id="author" class="form-control" placeholder="Enter Your Name" name="author" type="text" value="' .
   			esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
   			'</p>'
   			,
   			'email'  => '<p class="comment-form-email">' . '<input id="email" class="form-control" placeholder="Enter your Email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
   			'" size="30"' . $aria_req . ' />'
   		)
   	),
   	'class_submit' => 'btn btn-warning' ,
   	'title_reply' => 'Tell us what you think!',
   	'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>'
   );
   comment_form($args); ?>
<h3 class="merienda">Read Comments!</h3>
<?php 
   $args = array(
   	'number'=>20,
   	'offset'=>0,
   	'status'=>'approve',
   );
   foreach (get_comments($args) as $comment) { ?>
<div class="media comment-box">
   <div class="media-body">
      <h5 class="media-heading"><?php echo ucfirst($comment->comment_author); ?> </h5>
      <p><?php echo $comment->comment_content; ?></p>
   </div>
</div>
<?php } ?>
<?php get_footer(); ?>