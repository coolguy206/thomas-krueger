<?php get_header(); ?>

<div class="box710">

<h2  class="capitalize">Search Results for: <?php the_search_query(); ?></h2>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article class="blog">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

 <?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail(); ?>
   </a>
 <?php endif; ?>

<?php if(has_excerpt()){ 
	the_excerpt();
} ?>

</article>


<?php endwhile; else: ?>
<p>
It seems we have made a mistake. We are sorry about that, we couldn't find your search. Please try another search or check out our <a href="<?php echo get_permalink(get_page_by_title( 'Blog' )); ?>">Blog Page</a>.
</p>
<?php get_search_form(); ?>
<?php endif; ?>

<div class="previous-next">
<?php previous_posts_link('<i class="fa fa-arrow-circle-left fa-4x float-left margins"></i>'); ?>
<?php next_posts_link('<i class="fa fa-arrow-circle-right fa-4x float-left"></i>'); ?>

</div><!--.previous-next-->

<div class="sidebar-toggle">
<i class="fa fa-plus-square fa-lg"></i> Sidebar
</div>

</div><!--.box710-->

<?php get_sidebar(); ?>




<?php get_footer(); ?>