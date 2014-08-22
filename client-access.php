<?php

/*

Template Name: Client Access

*/

?>
<?php get_header(); ?>



<div class="box710">


<h2><?php the_title(); ?></h2>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php the_content(); ?>



<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>



<?php 



$args = array(



'theme_location' => 'client',

'container' => false,

'link_before' => '<h2>',

'link_after' => '</h2>',

'menu_class' => 'clients'

);



wp_nav_menu($args); 



?>

<div class="sidebar-toggle">
<i class="fa fa-plus-square fa-lg"></i> Sidebar
</div>
</div><!--.box710-->



<?php get_sidebar(); ?>



<?php get_footer(); ?>