<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>


<div class="box710">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php 
//$boudoirs = get_post_meta($post->ID, 'boudoirs');
$boudoirs = get_page_by_title('boudoirs');
 
$engagements = get_page_by_title('engagements');

$families = get_page_by_title('families');

$portraits = get_page_by_title('portraits');

$weddings = get_page_by_title('weddings');
 
if (is_page('boudoirs')) { ?>

<h2><?php the_title(); ?></h2>

<?php $args = array( 'category_name' => 'boudoirs', 'orderby' => 'date');

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

<?php } else if (is_page('engagements')) { ?>

<h2><?php the_title(); ?></h2>

<?php $args = array( 'category_name' => 'engagements', 'orderby' => 'date');

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


<?php } else if (is_page('families')) { ?>

<h2><?php the_title(); ?></h2>

<?php $args = array( 'category_name' => 'families', 'orderby' => 'date');

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

<?php } else if (is_page('portraits')) { ?>

<h2><?php the_title(); ?></h2>

<?php $args = array( 'category_name' => 'portraits', 'orderby' => 'date');

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

<?php } else if (is_page('weddings')) { ?>


<h2><?php the_title(); ?></h2>

<?php $args = array( 'category_name' => 'weddings', 'orderby' => 'date');

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