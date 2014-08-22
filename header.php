<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" >

<title>
<?php
// Titles for different page types

if ( is_home() || is_front_page() ) : // Home or Front Page
	bloginfo('name');
	global $page, $paged; // Pagenating - Thanks Automatic for this idea - taken from the TwentyTen theme
		if ( $paged >= 2 || $page >= 2 ):
			echo ' | ' . sprintf('Page %s', max( $paged, $page ) );
		 endif;
	echo ' | ';
	bloginfo('description');
	elseif (is_search()): // For Search Pages
		echo 'Search Results for: '; the_search_query(); echo ' | '; bloginfo('name');
	elseif (is_tag()): // For Tag Archives
		echo 'Tag Archive for: '; single_tag_title();  echo ' | '; bloginfo('name');
	elseif (is_category()): // For Category Archives
		echo 'Category Archive for: '; single_cat_title(); echo ' | '; bloginfo('name');
	else : // Every other sort of archive
		wp_title('', TRUE, 'right'); echo ' | '; bloginfo('name');
	endif;
?>

</title>
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>css/jquery-ui-1.10.4.custom.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/flexslider.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/selectivizr.js"></script>
  <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
<![endif]--> 

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">

<header>
 <div class="client-access">
 	<a href="<?php echo get_permalink(get_page_by_title('Client Access')); ?>">Client Access</a>
 </div><!--.client-access-->
 
 <div class="box190">
 	<ul class="social-media">
 		<li><a href="https://www.facebook.com/KruegerPhoto" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a></li>
 		<li><a href="https://twitter.com/tekphoto" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a></li>
 		<li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
 		<li><a href="<?php bloginfo('rss_url' ); ?>"><i class="fa fa-rss-square fa-lg"></i></a></li>
 		<li><i class="fa fa-search fa-lg" id="search"></i></li>
 	</ul><!--.social-media-->
 	
 	 <?php get_search_form(); ?> 
 	
 	 </div><!--.box190 float-right-->
 
 <div class="box750">
<h1>

 	<a href="<?php bloginfo('url'); ?>"><span><?php bloginfo('name'); ?> <?php bloginfo('description'); ?></span>
<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Thomas Krueger Photographer"></a>
</h1>
 </div><!--.box750 float-left-->
 
 <div class="responsive">
 	<i class="fa fa-gear fa-lg margins"></i>MENU
 </div><!--.responsive-->

</header>

<nav>
<?php 

$args = array(

'menu' => 'Main',
'container' => false,


);

wp_nav_menu($args); 

?>
</nav>

<section class="content">