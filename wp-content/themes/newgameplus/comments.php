<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to boilerplate_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
 
// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<!-- :::::::::: comment form :::::::::: -->
<?php if ( comments_open() ) : ?>

<section id="respond">

  <!--  <h3><?php comment_form_title( 'Discussion', 'Leave a Reply to %s' ); ?></h3> -->

  

  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  
  <p>You must be <a href="http://www.newgameplus.co/">logged in</a> to post a comment.</p>
  <?php else : ?> 

  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<!--
  <?php if ( is_user_logged_in() ) : ?>

  
  <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

  <?php else : ?>

  <p>
    <label for="author">Name <?php if ($req) echo "(required)"; ?></label>
    <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
  </p>

  <p>
    <label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label>
    <input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
  </p>

  <p>
    <label for="url">Website</label>
    <input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
  </p>

  <?php endif; ?>
-->

   <p><textarea name="comment" id="comment" cols="58" rows="5" tabindex="4"></textarea></p>

  <p>
    <input name="submit" type="submit" id="submit" tabindex="5" value="Send" />
    <?php comment_id_fields(); ?>
  </p>
  <div class="cancel-comment-reply">
    <small><?php cancel_comment_reply_link(); ?></small>
  </div>
  <?php do_action('comment_form', $post->ID); ?>

  </form>

  <p id="allowed_tags">
  	<strong>XHTML:</strong> You can use these tags:<br> 
  	<code><?php echo allowed_tags(); ?></code>
  </p>


  <?php endif; // If registration required and not logged in ?>
</section>

<?php endif; // if you delete this the sky will fall on your head ?>

<!-- :::::::::: list the comments :::::::::: -->
<?php if ( have_comments() ) : ?>
  <h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

  <ol class="commentlist">
	  <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
  </ol>

  <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
  	
  	<div id="blog-comment-navigation-wrapper">
  		<span class="comment-navigation-previous">
			<?php previous_comments_link( __( '&larr; Older Comments', 'boilerplate' ) ); ?>
  		</span><!--comment-navigation-previous-->
  		<span class="comment-navigation-next">
			<?php next_comments_link( __( 'Newer Comments &rarr;', 'boilerplate' ) ); ?>
  		</span><!--comment-navigation-next-->
  	</div><!--blog-comment-navigation-wrapper-->
  		
 <?php endif; // check for comment navigation ?>

<?php else : // this is displayed if there are no comments so far ?>

  <?php if ( comments_open() ) : ?>
    <!-- If comments are open, but there are no comments. -->

   <?php else : // comments are closed ?>
    <!-- If comments are closed. -->
    <p class="nocomments">Comments are closed</p>

  <?php endif; ?>
<?php endif; ?>



