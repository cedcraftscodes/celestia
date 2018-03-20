<?php
get_header(); ?>
<main role="main" class="container">
	<div class="row">
		<div class="col-md-8 blog-main">
			<div id="content">
				<header class="page-header">
					<h1 class="page-title merienda"><?php _e( 'Not Found', 'celestia' ); ?></h1>
				</header>
				<div class="page-wrapper">
					<div class="page-content">
						<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'celestia' ); ?></h2>
						<p><?php _e( 'It looks like nothing was found at this location. ', 'celestia' ); ?></p>
					</div>
				</div>
			</div>
			<hr>
			<div class="spacer"></div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</main>
<?php get_footer(); ?>