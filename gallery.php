<?php
/*
Template Name: Gallery
*/
?>
<?php get_header(); ?>

<div class="box710">

<h2><?php the_title(); ?></h2>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php $args = array( 'post_type' => 'page', 'include' => array(710,706,685,708,704), 'orderby' => 'title', 'order' => 'DESC');


$posts = get_posts($args);


foreach($posts as $post) { ?>

<article class="blog">

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

 <?php if ( has_post_thumbnail()) : ?>

   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

   <?php the_post_thumbnail(); ?>

   </a>

 <?php endif; ?>


</article>


<?php } ?>


<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>


<div class="sidebar-toggle">
<i class="fa fa-plus-square fa-lg"></i> Sidebar
</div>


</div><!--.box710-->


<?php get_sidebar(); ?>


<?php get_footer(); ?>