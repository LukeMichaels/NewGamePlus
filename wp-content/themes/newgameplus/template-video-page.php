<?php
/*
 *
 * Copyright NewGame+ 
 * Template Name Posts: NG+ Video Page
 * Created By: Luke Michaels - luke@newgameplus.co
 *
 */
?>
<?php get_header();?>

<!-- :::::::::: Gallery :::::::::: -->
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/prettyGallery.css" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ) ?>/js/libs/jquery.prettyGallery.js"></script>
<script type="text/javascript">

$(document).ready(function(){	
    $("#gallery-1").prettyGallery({
		itemsPerPage : 10,
		animationSpeed : 'slow', /* fast/normal/slow */
		navigation : 'bottom',  /* top/bottom/both */
		of_label: ' of ', /* The content in the page "1 of 2" */
		previous_title_label: 'Previous page', /* The title of the previous link */
		next_title_label: 'Next page', /* The title of the next link */
		previous_label: '<<', /* The content of the previous link */
		next_label: '>>' /* The content of the next link */
	});
});
</script>


<div id="blog-section-wrapper">
	
	<!-- :::::::::: display a post :::::::::: -->
	<div id="blog-gallery-page-wrapper">
	
		<!-- :::::::::: gallery content :::::::::: -->
		<div id="blog-gallery-content">
			<?php the_content()?>
		</div><!--blog-gallery-content-->
		
		<!-- :::::::::: article footer :::::::::: -->
		<div id="article-credit-wrapper">
			
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