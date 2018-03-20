<?php 
add_theme_support('post-thumbnails');
add_theme_support('menus');
$args = array(
	'name'          => __( 'Right Sidebar', 'text-domain' ),
	'id'            => 'right-sidebar',
	'description'   => '',
	'class'         => '',
	'before_widget' => '<ol class="list-unstyled mb-0"><li>',
	'after_widget'  => '</li></ol>',
	'before_title'  => '<hr/><div><h4 class="font-italic">',
	'after_title'   => '</h4></div>',
);

register_sidebar( $args );
?>
