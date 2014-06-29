<?php
/**
 * The main template file.
 *
 * Template Name: NG+ Beta Registration
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
<?php include 'beta-header.php'; ?>

<style type="text/css">
	/* :::::::::: Hide the admin bar on the splash page */
	#wp-admin-bar{
		display: none;
	}
</style>

<div class="main-col">
	
	<!-- :::::::::: Newsletter Sign-Up Box ::::::::::: -->
	<div id="welcome-wrapper-stroke">
		<div id="welcome-wrapper">
			<div id="welcome">
				Something big is coming! Register and be among the first in line for BETA invites!<br> 
			</div><!--welcome-->
			<div id ="news-signup">
				<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]')?>
			</div><!--news-signup-->
		</div><!--welcome-wrapper-->
	</div><!--welcome-wrapper-stroke-->

	
	<!-- :::::::::: Random Game Quote -->
	<div id="game-quote-container">
		<blockquote class="pinched">
			<div id="game-quote"></div>
		</blockquote>
	</div><!--game-quote-container-->
	
	<!--
	<?php if(have_posts()): while(have_posts()): the_post();?>
		
		<article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
			<header>
				<h2><?php the_title()?></h2>
				<time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time>
	    	<span class="author">by <?php the_author() ?></span>
	    </header>
		<?php the_content()?>
		<?php edit_post_link('Edit this entry'); ?>
		</article>
		
	<?php endwhile; ?> 
	
		<nav class="pagination">
			<div class="older"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</nav>
	  
	<?php else: ?>
	
	<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
		
	<?php endif;?>
	-->

</div><!-- END .main-col -->

<?php include 'beta-footer.php'; ?>