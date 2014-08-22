<?php get_header(); ?>





<div>

<h2><?php the_title(); ?></h2>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<?php if (wp_attachment_is_image($post->id)) {
				$att_image = wp_get_attachment_image_src( $post->id, "full"); ?>
				<img src="<?php echo $att_image[0];?>" alt="<?php the_title(); ?>" />
			
			
				<?php } ?>


<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

<div class="sidebar-toggle">
<i class="fa fa-plus-square fa-lg"></i> Sidebar
</div>

</div><!--.box710-->


<?php get_footer(); ?>