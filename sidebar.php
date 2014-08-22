<div class="box230">

<?php if(is_active_sidebar('right-sidebar')) { ?>
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
<?php } else { ?>	

<?php 
$pricing = get_post(700); ?>
<h3><?= $pricing->post_title; ?></h3> 

<?= $pricing->post_content; ?>

<h3>Categories</h3>
<ul>
<?php wp_list_categories('title_li='); ?>
</ul>

<?php } ?>




</div><!--.box230-->