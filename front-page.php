<?php

/*

Template Name: Home Page

*/

?>
<?php get_header(); ?>



<div class="flexslider">

		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>
		
		<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

		<?php endif; ?>



	

	</div><!--.slideshow-->



	<div id="home">



	<div class="box470 float-left">

		<h2>Featured Project</h2>

		

		 <?php query_posts('category_name=weddings,engagements,portraits,families,boudoirs,&posts_per_page=1&orderby=rand&offset=1'); ?>



 		 <?php while (have_posts()) : the_post(); ?>



			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			 <?php if ( has_post_thumbnail()) : ?>

   			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

  			 <?php the_post_thumbnail(); ?>

  			 </a>

 			<?php endif; ?>

   		

  		<?php endwhile; ?>



		

	</div><!--.box470-->

	

	<div class="box470 float-right">

		<h2>Most Recent Project</h2>



		

		 <?php query_posts('category_name=weddings,engagements,portraits,families,boudoirs,&posts_per_page=1&orderby=date'); ?>



 		 <?php while (have_posts()) : the_post(); ?>



			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			 <?php if( has_post_thumbnail()) : ?>

   			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

  			 <?php the_post_thumbnail(); ?>

   			</a>

 			<?php endif; ?>

   		

  		<?php endwhile; ?>



			

	</div><!--.box470-->



	</div><!--#home-->



<?php get_footer(); ?>