<?php get_header(); ?>


<main role="main" class="container">
   <div class="row">
      <div class="col-md-8 blog-main">
         <div id="">
            <?php if ( have_posts() && strlen( trim(get_search_query()) ) != 0 ) : ?>
               <div class="page-header">
                  <h1 class="page-title">
                     Search Results for
                     <?php echo get_search_query(); ?>
                  </h1>
               </div>


               <?php while(have_posts()) : the_post(); ?>
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                     <div class="blog-post">
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
                        <div class="container">
                           <div class="row align-items-center">

                              <div class="col-12">
                                 <h1><a class="blog-post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                 <div id="share">
                                    <a    class="fa fa-facebook" target="_blank"  
                                    onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>', 
                                       'newwindow', 'width=300,height=450'); 
                                       return false;"></a>
                                       <a    class="fa fa-twitter" target="_blank"  
                                       onclick="window.open('https://twitter.com/intent/tweet?text=<?php the_title(); ?> - Read at: <?php the_permalink(); ?>', 
                                          'newwindow', 'width=300,height=450'); 
                                          return false;"></a>
                                          <a    class="fa fa-google" target="_blank"  
                                          onclick="window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>', 
                                             'newwindow', 'width=300,height=450'); 
                                             return false;"></a>  
                                          </div>
                                          <p class="blog-post-meta">Posted on <?php the_time("F jS, Y")?> by <a href="#"><?php the_author_posts_link(); ?></a></p>

                                          <div class="row">
                                             <div class="col-12 col-md-4">
                                                <img width="100%" alt="<?php the_title();?>" src="<?php echo $featured_img_url; ?>" sizes="(max-width: 200px) 100vw, 200px">
                                             </div>

                                             <div class="col-12 col-md-8">
                                                <?php the_content('Read More'); ?>
                                             </div>

                                          </div>

                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </article>

                        <hr>

                        <?php endwhile; ?>
              

                     <?php else : ?>
                        <div class="page-header">
                           <h1 class="page-title">No results Found</h1>
                           <p>
                              It seems we can’t find what you’re looking for.
                              Perhaps you should try again with a different search term.
                           </p>
                        </div>
                     <?php endif ;?>
                  </div>

               </div>
               <?php get_sidebar(); ?>
            </div>
         </main>




         <?php get_footer(); ?>