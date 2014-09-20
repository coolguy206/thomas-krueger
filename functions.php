<?php

//MENUS

register_nav_menus( array(

	'main' => 'Main',

	'client' => 'Client'

) );

//POST THUMBNAILS

add_theme_support( 'post-thumbnails' );

//SIDEBARS

register_sidebar( array(
	'id' => 'right-sidebar',
    'name'         => 'primary sidebar',

    'description'  => __( 'Widgets in this area will be shown on the right-hand side.' ),

    'before_widget' => '<div class="accordion">',

    'after_widget' => '</div>',

    'before_title' => '<h3>',

    'after_title'  => '</h3>',

) );


//THE EXCERPT

function excerpt_read_more_link($output) {

 global $post;

 return $output . '<a href="'. get_permalink($post->ID) . '" class="read-more"> Read More</a>';

}

add_filter('the_excerpt', 'excerpt_read_more_link');


add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );

add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

//REMOVE WIDTH HEIGHT

function remove_width_attribute( $html ) {

    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );

    return $html;

}

//ADD NEW PAGE TO ADMIN
function new_page(){
	add_theme_page('Custom', 'Custom', 'edit_theme_options', 'new_page', 'custom');
}
add_action('admin_menu', 'new_page');

//custom function
function custom(){ ?>
	<div class="wrap">
		<h2>This is a form</h2>
		<form method="post" action="options.php">
		
			<?php submit_button(); ?>
		</form>
	</div>	
<?php }


function section_example($wp_customize){
//ADD A SECTION
$wp_customize->add_section(
	'example',
		array(
			'title' => 'Settings',
			'description' => 'This is the settings'
		)
	);
	
//ADD A SETTING
$wp_customize->add_setting(
	'Setting',
		array(
			'default' => 'default text'
		)
);	

//ADD A CONTROL
$wp_customize->add_control(
	'Setting',
		array(
			'label' => 'default text',
			'section' => 'example',
			'text' => 'text'
		)
);

//ADD IMAGE UPLOADER SETTING
$wp_customize->add_setting('img-upload' );

//ADD CONTROL FOR IMAGE UPLOADER
$wp_customize->add_control(
new WP_Customize_Image_Control(
        $wp_customize,
        'img-upload',
        array(
            'label' => 'Image Upload',
            'section' => 'example',
            'settings' => 'img-upload'
        )
    )
);
	
}
add_action('customize_register', 'section_example');