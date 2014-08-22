<?php get_header(); ?>

<div class="box710">

<div class="single">

<h2><?php the_title(); ?></h2>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



		<div class="info">

			<span class="float-left margins clock">

				<i class="fa fa-clock-o fa-lg margins"></i><?php the_time('M j, Y'); ?>

			</span>



			<?php if(has_category()){ ?>

				<i class="fa fa-folder-open fa-lg margins float-left"></i>

				<?php the_category(); 

			} ?>



		<span class="float-left margins">

				<i class="fa fa-user fa-lg margins"></i><?php the_author_posts_link(); ?>

			</span>

			

			<?php if(has_tag()){ ?>

			<span class="float-left">
				<i class="fa fa-tags fa-lg"></i>
				<select onChange="document.location.href=this.options[this.selectedIndex].value;">
					<?php foreach (get_the_tags() as $tag) { ?>
        				<option value="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></option>
  					 <?php } ?>
				</select>
			
			</span>
			<?php } ?>

		</div><!--.info-->

		
		<div class="images">

		
			<?php the_content(); ?>


		</div><!--.images-->

		

<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>


<?php comments_template(); ?> 
		

</div><!--.single-->


<div class="previous-next">

<?php 
if ( in_category(array ('boudoirs', 'engagements', 'families', 'portraits', 'weddings' ))) { ?>

<?php previous_post_link('%link', '<i class="fa fa-arrow-circle-left fa-4x float-left margins"></i>', TRUE); ?>

<?php next_post_link('%link', '<i class="fa fa-arrow-circle-right fa-4x float-left margins"></i>', TRUE); ?>

<?php } else { ?>

<?php previous_post_link('%link', '<i class="fa fa-arrow-circle-left fa-4x float-left margins"></i>'); ?>

<?php next_post_link('%link', '<i class="fa fa-arrow-circle-right fa-4x float-left margins"></i>'); ?>

<?php } ?>

</div><!--.previous-next-->


<div class="sidebar-toggle">
<i class="fa fa-plus-square fa-lg"></i> Sidebar
</div>

</div><!--.box710-->


<?php get_sidebar(); ?>


<!-- Please call pinit.js only once per page -->

<script type="text/javascript" async  data-pin-color="red" data-pin-hover="true" src="//assets.pinterest.com/js/pinit.js"></script>


<?php get_footer(); ?>