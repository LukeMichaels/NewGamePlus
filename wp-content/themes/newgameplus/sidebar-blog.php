<?php
/**
 * The Sidebar for the blog area of the site.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>

<aside class="side-col">
	
	<!-- :::::::::: free game a day :::::::::: -->
	<div id="sidebar-free-game-a-day">
	
		<span class="sidebar-heading"><h3>Featured Free Game</h3></span>

		<!-- :::::::::: image -->
		<span class="fgad-image"><img src="http://newgameplus.co/wp-content/uploads/2012/08/newgameplus-spelunky-fgad.jpg" title="Spelunky" alt="Spelunky"></span>
		
		<!-- :::::::::: title -->
		<span class="fgad-title">Spelunky <span style="color:#c4b44d;">+</span> <a href="http://spelunkyworld.com/original.html" alt="Download The Free Game A Day" target="_blank">Download</a></span><br>
        
        <!-- :::::::::: description -->
		<span class="fgad-description">
			Spelunky is a cave exploration / treasure-hunting game inspired by classic platform games and roguelikes, where the goal is to grab as much treasure from the cave as possible. Every time you play the cave's layout will be different. Use your wits, your reflexes, and the items available to you to survive and go ever deeper! Perhaps at the end you may find what you're looking for...
		</span>
			          
	</div><!--sidebar-free-game-a-day-->
	
	<!-- :::::::::: bloggers wanted :::::::::: -->
	<div id="sidebar-bloggers-wanted">
		
		<span class="sidebar-heading"><h3>Bloggers Wanted</h3></span><br><br>
		<p>Are you a current or aspiring game journalist? NewGame+ is currently seeking bloggers! Our staff is busy putting the finishing touches on the site, so it's difficult for us to cover the plethora of information posted on our news-board every day. We're looking for people comfortable writing previews, reviews, and opinion pieces about video games.</p>
		
		<p>If you're interested please go <a href="http://newgameplus.co/write-for-newgameplus/" alt="write for NewGame+">here</a> and fill out the form.</p>
		
	</div><!--sidebar-most-commented-->
	
	<!-- :::::::::: most commented posts :::::::::: -->
	<div id="sidebar-most-commented">
		<span class="sidebar-heading"><h3>Most Commented</h3></span>
		<ul> 
			<?php $popular = new WP_Query('orderby=comment_count&posts_per_page=5'); ?> <?php while ($popular->have_posts()) : $popular->the_post(); ?> <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> (<?php comments_number('0','1','%'); ?>)</a></li> <?php endwhile; ?> <?php wp_reset_postdata(); ?>
		</ul>
	</div><!--sidebar-most-commented-->
	
	<!-- :::::::::: recent reviews :::::::::: -->
	<div id="sidebar-recent-reviews">
		<span class="sidebar-heading"><h3>Recent Reviews</h3></span>
		<ul> 
			<?php $reviews = new WP_Query('orderby=date&order=DESC&cat=16&posts_per_page=5'); ?> <?php while ($reviews->have_posts()) : $reviews->the_post(); ?> <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> (<?php comments_number('0','1','%'); ?>)</a></li> <?php endwhile; ?> <?php wp_reset_postdata(); ?>
		</ul>
	</div><!--sidebar-most-commented-->
	
	<!-- :::::::::: twitter feed :::::::::: -->
	<div id="sidebar-twitter">
		<span class="sidebar-heading"><h3>Twitter Feed</h3></span>
		<div id="twitter-feed-wrap">
			<div id="twitter_t"></div>
			<div id="twitter_m">
			   <div id="twitter_container">
			       <ul id="twitter_update_list"></ul>
			   </div><!--twitter_container-->
			</div><!--twitter_m-->
			<div id="twitter_b">
			</div>
		</div><!--twitter-feed-wrap-->
	</div><!--sidebar-twitter-->
	
	<!-- Widget area -->
	<?php dynamic_sidebar('Sidebar');?>

</aside><!-- END .side-col -->