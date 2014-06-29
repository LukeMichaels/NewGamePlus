<?php
/*
 *
 * Copyright NewGame+ 
 * Template Name: NG+ Default Category
 * Created By: Luke Michaels - luke@newgameplus.co
 *
 */
?>
<?php get_header();?>
<div id="blog-section-wrapper">
	
	<div id="blog-list-column">
		<!-- :::::::::: grab the posts that we want :::::::::: -->
		<?php
		    // Get the ID of a given category
		    $category_id = get_cat_ID( 'Category Name' );
		
		    // Get the URL of this category
		    $category_link = get_category_link( $category_id );
		?>
		
		<!-- :::::::::: grab the posts that we want :::::::::: -->
		<?php $my_query = new WP_Query( array( 'paged' => get_query_var('paged') ) ); ?>
		
		<?php if(have_posts()): while(have_posts()): the_post();?>
				
			<div id="single-post">	
				
				<!-- :::::::::: image :::::::::: -->
				<span class="blog-section-featured-image">
						<a href="<?php the_permalink() ?>">
						<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail();
							} 
						?>
					</a>
				</span>
				
				<div id="article-info-block">
				
					<!-- :::::::::: title :::::::::: -->
					<span class="article-title">
						<h2 class="topTitle">
							<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						</h2>
					</span><!--article-title-->
					
					<!-- :::::::::: author, date, categories :::::::::: -->
					<span class="article-meta-container">
						<p class="topMeta">
							by <span class="article-author"><?php the_author_posts_link(); ?></span> on <?php the_time('M.d, Y') ?>, in <?php the_category(', '); ?>
						</p>
					</span>
					
				</div><!--article-info-block-->
				
				<!-- ::::::: article caption :::::::::: -->
				<div class="article-caption">
					<?php the_excerpt(); ?>
					<!-- <a href="<?php the_permalink() ?>">... continue</a> -->
				</div>
				
				<!-- ::::::: comment counter :::::::::: -->
				<span class="comment-counter">
					  <?php comments_number( $zero, $one, $more ); ?> 
				</span>
				
			</div><!--single-post-->	
			
		<?php endwhile; ?> 

		<!-- :::::::::: pagination :::::::::: -->
		<?php wp_pagenavi( array( 'query' => $my_query ) ); ?>
		  
		<?php else: ?>
		
		<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
			
		<?php endif;?>
		
	</div><!--blog-list-column-->
	
	<!-- :::::::::: sidebar ::::::::::-->
	<div id="blog-sidebar">
		<?php get_sidebar('blog');?>
	</div><!--blog-sidebar-->
	
</div><!--blog-section-wrapper-->


<?php get_footer();?>