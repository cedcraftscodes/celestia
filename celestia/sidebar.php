          <aside class="col-md-4 blog-sidebar">
          	<h4 class="font-italic">Search</h4>
          	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
          		<input type="text" value="" name="s" id="s" />
          		<input type="submit" id="searchsubmit" class="btn btn-warning" value="Search" />
          	</form>
          	<?php dynamic_sidebar('right-sidebar'); ?>
                  <div class="spacer"></div>
          </aside><!-- /.blog-sidebar -->