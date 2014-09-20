</section><!--.content-->

<footer>
<img src="<?php echo get_theme_mod( 'img-upload', 'No settings yet.' ); ?>">
<ul>
<li>
<a href="<?php echo get_permalink(get_page_by_title( 'Contact' )); ?>" class="margins"><i class="fa fa-envelope fa-lg margins"></i>Contact</a> <a href="tel:2065551234"><i class="fa fa-phone fa-lg margins"></i>(206)555-1234</a>
</li>

<li>
<span class="copyright">Copyright</span> &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?> <?php bloginfo('description'); ?></a>
</li>

<li>
website designed by <a href="http://davidtproductions.com" target="_blank" class="designer">DavidTProductions.com</a>
</li>
<li>
	<a href="http://validator.w3.org/check?uri=referer" target="_blank">HTML5 Validated</a>
</li>
<li>
    <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</li>
</ul>    
</footer>

</div><!--.wrapper-->

<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui-1.10.4.custom.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
<script>
//$("span.float-left a, .post-categories a").button();

$("#search").hover(function(){
	var $this = $(this);
	$this.css("color", "#ae0011");
}, function(){
	var $this = $(this);
	$this.css("color", "#000");
});

$(".responsive").on("click", function(){
	$("nav").toggle("slide");
});

$(".sidebar-toggle").on("click", function(){
	$(".box230").slideToggle();
});

//$(".accordion").accordion({
//active: false,
//collapsible: true,
//heightStyle: "content"
//});

$(".flexslider").flexslider();

$("#search").on("click", function(){
	$(".searchForm").toggle("slide");
});


</script>

<?php wp_footer(); ?>

</body>


</html>
