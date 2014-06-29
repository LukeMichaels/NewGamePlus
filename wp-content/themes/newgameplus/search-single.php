<?php
/*
 *
 * Copyright NewGame+ 
 * Template Name: NG+ - Search
 * Created By: Luke Michaels - luke@newgameplus.co
 *
 */
?>
<?php get_header();?>


<div id="blog-section-wrapper">
		<div id="blog-list-column">
			
			<?php do_action("advance-search");//this is the only line you need?>
			<!-- let the search put the content here -->
			
            <div class="clear"> </div>
            
      </div><!--blog-list-column-->
	
	<!-- :::::::::: sidebar ::::::::::-->
	<div id="blog-sidebar">
		<?php get_sidebar('blog');?>
	</div><!--blog-sidebar-->
	
</div><!--blog-section-wrapper-->

<?php get_footer();?>