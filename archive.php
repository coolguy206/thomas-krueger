<?php get_header(); ?>



<div class="box710">

<h2  class="capitalize"><?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'twentyfourteen' ), get_the_date() );

						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyfourteen' ) ) );

						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'twentyfourteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyfourteen' ) ) );

						else :
							_e( 'Archives', 'twentyfourteen' );

						endif;
					?></h2>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<article class="blog">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="info">

			<span class="float-left margins clock">

				<i class="fa fa-clock-o fa-lg margins"></i><?php the_time('M j, Y'); ?>

			</span>

		</div><!--.info-->

 <?php if ( has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail(); ?>
   </a>
 <?php endif; ?>

<?php if(has_excerpt()) {
	the_excerpt(); 
 } ?>
</article>





<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<div class="sidebar-toggle">
<i class="fa fa-plus-square fa-lg"></i> Sidebar
</div>

</div><!--.box710-->



<?php get_sidebar(); ?>

<div class="previous-next">
<?php next_posts_link('<i class="fa fa-arrow-circle-left fa-4x float-left margins"></i>'); ?>
<?php previous_posts_link('<i class="fa fa-arrow-circle-right fa-4x float-left margins"></i>'); ?>

</div><!--.previous-next-->

<?php get_footer(); ?>