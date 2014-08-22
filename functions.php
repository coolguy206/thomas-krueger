<?php



register_nav_menus( array(

	'main' => 'Main',

	'client' => 'Client'

) );

add_theme_support( 'post-thumbnails' );

register_sidebar( array(
	'id' => 'right-sidebar',
    'name'         => 'primary sidebar',

    'description'  => __( 'Widgets in this area will be shown on the right-hand side.' ),

    'before_widget' => '<div class="accordion">',

    'after_widget' => '</div>',

    'before_title' => '<h3>',

    'after_title'  => '</h3>',

) );


function excerpt_read_more_link($output) {

 global $post;

 return $output . '<a href="'. get_permalink($post->ID) . '" class="read-more"> Read More</a>';

}

add_filter('the_excerpt', 'excerpt_read_more_link');


add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );

add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {

    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );

    return $html;

}

