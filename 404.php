<?php get_header(); ?>
<div class="box710">
<h2>Oops! What happened?!?</h2>
<p>
It seems we have made a mistake. We are sorry about that, please try another search or check out our <a href="<?php echo get_permalink(get_page_by_title( 'Blog' )); ?>">Blog Page</a>.
</p>
 <?php get_search_form(); ?>

<div class="sidebar-toggle">
<i class="fa fa-plus-square fa-lg"></i> Sidebar
</div>

</div><!--.box710-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>