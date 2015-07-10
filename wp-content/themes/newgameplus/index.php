<?php get_header();?>

<div id="home-wrapper">
	
	<!-- :::::::::: Left Home Content :::::::::: -->
	<div id="left-home-wrapper">
	
		<?php if ( is_user_logged_in() ) : ?>
		
			<!-- :::::::::: status update :::::::::: -->
			<div id="home-status-update">
			
				<?php locate_template( array( 'activity/post-form.php'), true ) ?>
				
			</div><!--home-status-update-->
			
			<!-- :::::::::: activity list :::::::::: -->
			<div class="home_activity">
			
				<?php if ( bp_has_activities('display_comments=threaded&scope=just-me, friends, groups, favorites, mentions&per_page=22') ) : ?>
	
					<div id="home-single-activity">
						<?php
						if ( is_user_logged_in() && bp_is_my_profile() && ( !bp_current_action() || bp_is_current_action( 'just-me' ) ) )
							locate_template( array( 'activity/post-form.php'), true );
						
						do_action( 'bp_after_member_activity_post_form' );
						do_action( 'bp_before_member_activity_content' ); ?>
						
						<div class="activity" role="main">
						
							<?php locate_template( array( 'activity/activity-loop.php' ), true ); ?>
						
						</div><!-- .activity -->
						
					</div><!--home-single-activity-->
					
					<!-- :::::::::: activity stream pagination :::::::::: -->
					<div id="home-activity-pagination">
					
						<span class="home-activity-pagination-count">
							<?php bp_activity_pagination_count(); ?>
						</span>
						
						<span class="home-activity-pagination-links">
							<?php bp_activity_pagination_links(); ?>
						</span>
						
					</div><!--home-activity-pagination-->
								
				<?php endif; ?>
					
			</div><!--home_activity-->
		
		<?php else : ?>
		
		
			<div id="introduction">
				<span class="greeting">Welcome to NewGame+</span><br>
				<p>It may not look like much more than a blog at the moment, but there is a lot going on behind the scenes.</p><br>
				
				<p>We had a crazy idea to start a community for people who love games. Over the next few months, we're going to be working hard at bringing you the best site we can. We are excited about what we are building and cannot wait to share it with you. </p><br>
				
				<p>As we implement features we're going to allow more-and-more users to experience the site. If you're interested in a trying out the site, just click the button below. Pardon our dust, we are still working on a lot of the features.</p><br>
				
				<span class="sincerely"><3 NG+</span><br><br>
        
        <div class="register-button-wrap">
          <a href="http://www.newgameplus.co/register" alt="Register for a NewGame+ Account">Register Here</a>
        </div>
				
        <!-- <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]')?><br> 
				<p>PS: You can also follow us on Twitter: <a href="https://twitter.com/New_GamePlus" title="NewGame+ On Twitter" alt="NewGame+ On Twitter" target="_blank">@New_GamePlus</a></p>-->
			</div><!--introduction--><br><br>
			
			
			<!-- :::::::::: login form :::::::::: -->
			<span class="member-intro">Members please login here:</span><br>
			<form name="login-form" id="home-login-form" class="standard-form" action="<?php echo site_url( 'wp-login.php', 'login_post' ) ?>" method="post">
				<label><?php _e( 'Username', 'buddypress' ) ?><br />
				<input type="text" name="log" id="home-user-login" class="input" value="<?php if ( isset( $user_login) ) echo esc_attr(stripslashes($user_login)); ?>" tabindex="97" /></label>
	
				<label><?php _e( 'Password', 'buddypress' ) ?><br />
				<input type="password" name="pwd" id="home-user-pass" class="input" value="" tabindex="98" /></label>
	
				<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="home-rememberme" value="forever" tabindex="99" /> <?php _e( 'Remember Me', 'buddypress' ) ?></label></p>
	
				<?php do_action( 'bp_home_login_form' ) ?>
				<input type="submit" name="wp-submit" id="home-wp-submit" value="<?php _e( 'Log In', 'buddypress' ); ?>" tabindex="100" />
				<input type="hidden" name="testcookie" value="1" />
			</form>
			
			
		
		<?php endif; ?>

	</div><!--left-home-wrapper-->
	
	<!-- :::::::::: Right Home Content :::::::::: -->
	<div id="right-home-wrapper">

		<div id="home-blog-list-column">
		
			<!-- :::::::::: grab posts :::::::::: -->
			<?php $my_query = new WP_Query( array( 'paged' => get_query_var('paged') ) ); ?>
			
			<!-- :::::::::: display posts :::::::::: -->
			<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			
				<div id="home-single-post">	
						
					<!-- :::::::::: image :::::::::: -->
					<span class="home-blog-image">
							<a href="<?php the_permalink() ?>">
							<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
									the_post_thumbnail();
								} 
							?>
						</a>
					</span>
					
					<div id="home-blog-info-block">
					
						<!-- :::::::::: title :::::::::: -->
						<span class="home-blog-article-title">
							<h2 class="topTitle">
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
							</h2>
						</span><!--article-title-->
						
						<!-- :::::::::: author, date, categories :::::::::: -->
						<span class="home-blog-meta-container">
							<p class="home-blog-meta">
								by <span class="home-blog-article-author"><?php the_author_posts_link(); ?></span> on <?php the_time('M.d, Y') ?>, in <?php the_category(', '); ?>
							</p>
						</span>
						
					</div><!--article-info-block-->
					
					<!-- ::::::: article caption :::::::::: -->
					<div class="home-blog-caption">
						<?php the_excerpt(); ?>
						<!-- <a href="<?php the_permalink() ?>">... continue</a> -->
					</div>
					
					<!-- ::::::: comment counter :::::::::: -->
					<span class="comment-counter">
						  <?php comments_number( $zero, $one, $more ); ?> 
					</span>
						
				</div><!--single-post-->
				
			<?php endwhile;?>
			
			<!-- :::::::::: pagination :::::::::: -->
			<?php wp_pagenavi( array( 'query' => $my_query ) ); ?>		
			
			<!-- :::::::::: clear the query to avoid issues :::::::::: -->
			<?php wp_reset_postdata(); ?>
		
		</div><!--home-blog-list-column-->

	</div><!--right-home-wrapper-->
	
</div><!--home-wrapper-->
<?php get_footer();?>