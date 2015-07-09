<?php
/*
 *
 * Copyright NewGame+ 
 * Template Name Posts: NG+ Review
 * Created By: Luke Michaels - luke@newgameplus.co
 *
 */
?>
<?php get_header();?>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ) ?>/js/libs/jquery.column.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		
		/* :::::::::: Google +1 Button :::::::::: */
		(function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = 'https://apis.google.com/js/plusone.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
		
		/* :::::::::: Multi-Column Layout for N00b Browsers that don't support CSS3 Columns :::::::::: */
		$('.article-body').column({   
			width:      'auto',    
			count:      2,         // Spread over 2 columns.
			gap:        20,        // Space columns 20 pixels apart.
			split:      'sentence' // Keeps sentences together.
		});
		
	});
	
</script>


<div id="blog-section-wrapper">
	
	<!-- :::::::::: display a post :::::::::: -->
	<div id="blog-page-wrapper">
		
		
		<div id="blog-page-header">
			
			<!-- :::::::::: left - image & article title, author, date :::::::::: -->
			<div id="blog-page-header-left">
				
				<!-- :::::::::: image :::::::::: -->
				<span class="blog-page-image">
						<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail();
							} 
						?>
				</span><!--blog-page-image-->
				
				<div id="article-info-block">
				
					<!-- :::::::::: title :::::::::: -->
					<span class="article-title">
						<h2 class="topTitle">
							<?php the_title(); ?>
						</h2>
					</span><!--article-title-->
					
					<!-- :::::::::: author, date, categories :::::::::: -->
					<span class="article-meta-container">
						<p class="topMeta">
							by <span class="article-author"><?php the_author_posts_link(); ?></span> on <?php the_time('M.d, Y') ?>, in <?php the_category(', '); ?>
						</p>
					</span><!--article-meta-container-->
					
				</div><!--article-info-block-->
				
			</div><!--blog-page-header-left-->
			
			<!-- :::::::::: right - article detail & credit :::::::::: -->
			<div id="blog-gallery-page-header-right">
			
				<!-- :::::::::: game details :::::::::: -->
				<div id="article-gallery-game-info-container">
					
					<!-- :::::::::: genre -->
					<div id="article-gallery-game-info-line">				
						<?php
							// get keys
							$postkeys = get_post_custom_keys($post_id);
							if(is_array($postkeys) && count($postkeys) > 0){
								foreach($postkeys as $k){
									if(strstr($k, 'input-three')){
										$val = get_post_custom_values($k, $post_id);
										if(is_array($val) && count($val) > 0){
											foreach($val as $v){
												echo '<div id="article-genre-container">';
													echo '<span class="blah">'.str_replace('input-three', 'genre:', $k).'</span>';
													echo '<span class="article-game-info">'.str_replace("\n", "<br/>", $v).'</span>';
												echo '</div>';
											}
										}
									}
								}
							}
						?>
					</div><!--article-gallery-game-info-line-->
					
					<!-- :::::::::: publisher -->
					<div id="article-gallery-game-info-line">				
						<?php
							// get keys
							$postkeys = get_post_custom_keys($post_id);
							if(is_array($postkeys) && count($postkeys) > 0){
								foreach($postkeys as $k){
									if(strstr($k, 'input-two')){
										$val = get_post_custom_values($k, $post_id);
										if(is_array($val) && count($val) > 0){
											foreach($val as $v){
												echo '<div id="article-publisher-container">';
													echo '<span class="blah">'.str_replace('input-two', 'publisher:', $k).'</span>';
													echo '<span class="article-game-info">'.str_replace("\n", "<br/>", $v).'</span>';
												echo '</div>';
											}
										}
									}
								}
							}
						?>
					</div><!--article-gallery-game-info-line-->
					
					<!-- :::::::::: developer -->
					<div id="article-gallery-game-info-line">				
						<?php
							// get keys
							$postkeys = get_post_custom_keys($post_id);
							if(is_array($postkeys) && count($postkeys) > 0){
								foreach($postkeys as $k){
									if(strstr($k, 'input-one')){
										$val = get_post_custom_values($k, $post_id);
										if(is_array($val) && count($val) > 0){
											foreach($val as $v){
												echo '<div id="article-developer-container">';
													echo '<span class="blah">'.str_replace('input-one', 'developer:', $k).'</span>';
													echo '<span class="article-game-info">'.str_replace("\n", "<br/>", $v).'</span>';
												echo '</div>';
											}
										}
									}
								}
							}
						?>
					</div><!--article-gallery-game-info-line-->
					
					<!-- :::::::::: available on -->
					<div id="article-gallery-game-info-line">				
						<?php
							// get keys
							$postkeys = get_post_custom_keys($post_id);
							if(is_array($postkeys) && count($postkeys) > 0){
								foreach($postkeys as $k){
									if(strstr($k, 'input-four')){
										$val = get_post_custom_values($k, $post_id);
										if(is_array($val) && count($val) > 0){
											foreach($val as $v){
												echo '<div id="article-available-container">';
													echo '<span class="blah">'.str_replace('input-four', 'available on:', $k).'</span>';
													echo '<span class="article-game-info">'.str_replace("\n", "<br/>", $v).'</span>';
												echo '</div>';
											}
										}
									}
								}
							}
						?>
					</div><!--article-gallery-game-info-line-->
					
					<!-- :::::::::: release date -->
					<div id="article-gallery-game-info-line">				
						<?php
							// get keys
							$postkeys = get_post_custom_keys($post_id);
							if(is_array($postkeys) && count($postkeys) > 0){
								foreach($postkeys as $k){
									if(strstr($k, 'input-five')){
										$val = get_post_custom_values($k, $post_id);
										if(is_array($val) && count($val) > 0){
											foreach($val as $v){
												echo '<div id="article-release-container">';
													echo '<span class="blah">'.str_replace('input-five', 'release date:', $k).'</span>';
													echo '<span class="article-game-info">'.str_replace("\n", "<br/>", $v).'</span>';
												echo '</div>';
											}
										}
									}
								}
							}
						?>
					</div><!--article-gallery-gallery-game-info-line-->
					
				</div><!--article-gallery-game-info-container-->			
			</div><!--blog-page-header-right-->
			
			
		</div><!--blog-page-header-->
					
		<!-- ::::::: article body :::::::::: -->
		<div class="article-body">
			<?php the_content()?>
		</div><!--article-left-column-->
		
		<!-- :::::::::: previous & next article buttons :::::::::: -->
		<div id="prev-button">			
			<?php previous_post_link('%link', '&laquo;', TRUE); ?>
			 <?php if(!get_adjacent_post(false, '', true)) { echo '<span style="display:none;"></span>'; } // if there are no older articles ?>
		</div>
		<div id="next-button">
			<?php next_post_link('%link', '&raquo;', TRUE); ?>
			<?php if(!get_adjacent_post(false, '', false)) { echo '<span style="display:none;"></span>'; } // if there are no newer articles ?>
		</div><!--next-prev-buttons-->
		
		<!-- :::::::::: review summary :::::::::: -->
		<div id="review-summary">
			<?php 
				$postkeys = get_post_custom_keys($post_id);
				if(is_array($postkeys) && count($postkeys) > 0){
					foreach($postkeys as $k){
						if(strstr($k, 'input-ten')){
							$val = get_post_custom_values($k, $post_id);
							if(is_array($val) && count($val) > 0){
								foreach($val as $v){
									echo '<div id="review-summary-container">';
										echo '<span class="blah">'.str_replace('input-ten', '', $k).'</span>';
										echo '<span class="positives">'.str_replace("\n", "<br/>", $v).'</span>';
									echo '</div>';
								}
							}
						}
					}
				}
			?>
		</div><!--review-summary-->
		
		
		<!-- :::::::::: article footer :::::::::: -->
		<div id="review-wrapper">
			
			<!-- :::::::::: review :::::::::: -->
			<div id="review-container">
			
				<!-- :::::::::: review positives :::::::::: -->
				<div id="review-positives">				
					<?php 
						$postkeys = get_post_custom_keys($post_id);
						if(is_array($postkeys) && count($postkeys) > 0){
							foreach($postkeys as $k){
								if(strstr($k, 'input-twelve')){
									$val = get_post_custom_values($k, $post_id);
									if(is_array($val) && count($val) > 0){
										foreach($val as $v){
											echo '<div id="review-positives-container">';
												echo '<span class="blah">'.str_replace('input-twelve', 'pros:', $k).'</span>';
												echo '<span class="positives">'.str_replace("\n", "<br/>", $v).'</span>';
											echo '</div>';
										}
									}
								}
							}
						}
					?>
				</div><!--review-positives-->
				
				<!-- :::::::::: review negatives :::::::::: -->
				<div id="review-negatives">				
					<?php
						// get keys
						$postkeys = get_post_custom_keys($post_id);
						if(is_array($postkeys) && count($postkeys) > 0){
							foreach($postkeys as $k){
								if(strstr($k, 'input-thirteen')){
									$val = get_post_custom_values($k, $post_id);
									if(is_array($val) && count($val) > 0){
										foreach($val as $v){
											echo '<div id="review-negatives-container">';
												echo '<span class="blah">'.str_replace('input-thirteen', 'cons:', $k).'</span>';
												echo '<span class="negatives">'.str_replace("\n", "<br/>", $v).'</span>';
											echo '</div>';
										}
									}
								}
							}
						}
					?>
				</div><!--review negatives-->
				
				<!-- :::::::::: review score :::::::::: -->
				<div id="review-score">				
					<?php
						// get keys
						$postkeys = get_post_custom_keys($post_id);
						if(is_array($postkeys) && count($postkeys) > 0){
							foreach($postkeys as $k){
								if(strstr($k, 'input-eleven')){
									$val = get_post_custom_values($k, $post_id);
									if(is_array($val) && count($val) > 0){
										foreach($val as $v){
											echo '<div id="review-score-container">';
												echo '<span class="blah">'.str_replace('input-eleven', 'verdict:', $k).'</span>';
												echo '<span class="score">'.str_replace("\n", "<br/>", $v).'</span>';
												/* echo '<span class="out-of">'.'/10'.'</span>'; */
											echo '</div>';
										}
									}
								}
							}
						}
					?>
				</div><!--review score-->
			
			</div><!--article-credits-container-->
			
		</div><!--review-wrapper-->
			
		<div id="article-credit-wrapper">	
		
			<! :::::::::: credits :::::::::: -->
			<div id="article-credits-container">
			
				<!-- :::::::::: article credit :::::::::: -->
				<div id="article-credit">				
					<a href="<?php echo get_post_meta($post->ID, "input-seven", true); ?>" target="_blank" />
					<?php 
						$postkeys = get_post_custom_keys($post_id);
						if(is_array($postkeys) && count($postkeys) > 0){
							foreach($postkeys as $k){
								if(strstr($k, 'input-six')){
									$val = get_post_custom_values($k, $post_id);
									if(is_array($val) && count($val) > 0){
										foreach($val as $v){
											echo '<div id="article-credit-container">';
												echo '<span class="blah">'.str_replace('input-six', 'Source:', $k).'</span>';
												echo '<span class="article-credits">'.str_replace("\n", "<br/>", $v).'</span>';
											echo '</div>';
										}
									}
								}
							}
						}
					?>
					</a>
				</div><!--credit-->
				
				<!-- :::::::::: image credit :::::::::: -->
				<div id="image-credit">		
					<a href="<?php echo get_post_meta($post->ID, "input-nine", true); ?>" target="_blank" />		
					<?php
						// get keys
						$postkeys = get_post_custom_keys($post_id);
						if(is_array($postkeys) && count($postkeys) > 0){
							foreach($postkeys as $k){
								if(strstr($k, 'input-eight')){
									$val = get_post_custom_values($k, $post_id);
									if(is_array($val) && count($val) > 0){
										foreach($val as $v){
											echo '<div id="image-credit-container">';
												echo '<span class="blah">'.str_replace('input-eight', 'Image Credit:', $k).'</span>';
												echo '<span class="article-credits">'.str_replace("\n", "<br/>", $v).'</span>';
											echo '</div>';
										}
									}
								}
							}
						}
					?>
					</a>
				</div><!--credit-->
			
			</div><!--article-credits-container-->
			
			<!-- :::::::::: share buttons :::::::::: -->
			<div id="article-share-buttons">
			
				<ul id="article-favorite-button">	
					<li id="plus-social-icon">
						<?php global $bp;
						$activity_id = bp_activity_get_activity_id( array(
						'user_id' => $post->author_id,
						'type' => 'new_blog_post',
						'component' => 'blogs',
						'item_id' => 1,
						'secondary_item_id' => $post->ID
						) );
						?>
						
						<?php if ( is_user_logged_in() ) : ?>
						<div class="activity">
							<ul class="post-activity" id="activity-stream">
								<li id="activity-<?php echo $activity_id; ?>">
									<div>
										<div>
											<?php bp_has_activities();
											if ( !my_bp_activity_is_favorite($activity_id) ) : ?>
											<a href="<?php my_bp_activity_favorite_link($activity_id) ?>" class="button bp-secondary-action fav" title="<?php _e( 'Mark as Favorite', 'buddypress' ) ?>"><?php _e( 'Favorite', 'buddypress' ) ?></a>
											<?php else : ?>
											<a href="<?php my_bp_activity_unfavorite_link($activity_id) ?>" class="button bp-secondary-action unfav" title="<?php _e( 'Remove Favorite', 'buddypress' ) ?>"><?php _e( 'Remove Favorite', 'buddypress' ) ?></a>
											<?php endif; ?>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<?php else : ?>
							<style type="text/css">
								#article-favorite-button{ display:none; }
							</style>
						<?php endif;?>
					</li>
				</ul><!--article-favorite-button-->
					
				<ul id="article-social-icons">
					
					<li id="facebook-social-icon">
						<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" target="blank"></a>  
					</li>
					<li id="twitter-social-icon">
						<a href="http://twitter.com/home?status=Via @New_GamePlus: <?php the_permalink(); ?>" title="Click to send this page to Twitter!" target="_blank"></a>
					</li>
					<li id="googleplus-social-icon" target="_blank">
						<div class="googlehider">  
							<g:plusone annotation="none"></g:plusone>   
	            		</div><!--googlehider-->  
						<a href="#" target="_blank" title="#" alt="#"></a>
					</li>
					<li id="pinterest-social-icon" target="_blank">
						<a href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'></a>
					</li>
				</ul> 

			</div><!--article-share-buttons-->
			
		</div><!--article-credit-wrapper-->	
		
		<div id="article-footer">
			<div id="article-footer-left">
				
				<!-- :::::::::: previous & next article buttons :::::::::: -->
				<div id="footer-prev-next-buttons">
					<div id="footer-prev-button">							
						<?php previous_post_link('%link', '&laquo; Previous Article', TRUE); ?>
						<?php if(!get_adjacent_post(false, '', true)) { echo '<span class="footer-nav-current">&laquo; Previous Article</span>'; } // if there are no older articles ?>
					</div><!--prev-button-->
					<div id="footer-next-button">
						<?php next_post_link('%link', 'Next Article &raquo;', TRUE); ?>
						<?php if(!get_adjacent_post(false, '', false)) { echo '<span class="footer-nav-current">Next Article &raquo;</span>'; } // if there are no newer articles ?>
					</div><!--next-button-->
				</div><!--next-prev-buttons-->
				
				<!-- :::::::::: about the author :::::::::: -->
				<div id="article-about-the-author">
					
					<!-- :::::::::: heading -->
					<div id="about-the-author-heading">
						About The Author
					</div><!--about-the-author-heading-->
					
					<div id="about-the-author-av-info-wrapper">
						<!-- :::::::::: avatar -->
						<div id="about-the-author-avatar">
							<a href="<?php bp_user_link(); ?>">
								 <?php echo get_avatar( get_the_author_email(), '50' ); ?>
							</a>
						</div><!--about-the-author-avatar -->
						
						<div id="about-the-author-info">
							<!-- :::::::::: name -->
							<span class="about-the-author-name">
								<?php the_author_meta('display_name'); ?>	
							</span><!--about-the-author-name-->
							
							<!-- :::::::::: twitter -->
							<span class="user-nickname">
								Twitter: <a href="http://www.twitter.com/<?php the_author_meta('twitter'); ?>">@<?php the_author_meta('twitter'); ?></a>
							</span><!--user-nickname-->
							
							<!-- :::::::::: google authorship -->
							<span class="about-the-author-google">
								Google: <a href="<?php the_author_meta('user_url'); ?>" rel="author" target="_blank"><?php the_author_meta('display_name'); ?></a>
							</span><!--about-the-author-google-->
						
						</div><!--about-the-author-info-->
					</div><!--about-the-author-av-info-wrapper-->
					
					<!-- :::::::::: description -->
					<div id="about-the-author-description">
						<?php the_author_meta('description'); ?>
					</div><!--about-the-author-description-->
					
				</div><!--article-about-the-author-->
			
				<div id="article-footer-content-placeholder">
					
				</div><!--article-footer-content-placeholder-->
			
			</div><!--article-footer-left-->
			<div id="article-footer-right">
			
				<!-- ::::::: comments :::::::::: -->
				<div id="article-comments-wrapper">
					<?php comments_template( '', true ); ?>			
				</div><!--article-comments-wrapper-->
				
			</div><!--article-footer-right-->

		</div><!--article-footer-->
	</div><!--blog-page-wrapper-->
</div><!--blog-section-wrapper-->


<?php get_footer();?>