<?php 


/* :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: */
/* :::::::::: customize login screen :::::::::::::::::::::::::: */
function custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_url') . '/custom-login.css" />';
}
add_action('login_head', 'custom_login');

// :::::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Hide the WP-Admin from Non Admins //
add_action('init', 'block_admin_dashboard');
function block_admin_dashboard() {
    if ( is_admin() && !current_user_can('administrator') && !current_user_can('editor')) {
        wp_redirect(get_bloginfo('url'));
  
  }
}

// ::::::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: allow users to favorite blog posts //
function my_bp_activity_is_favorite($activity_id) {
global $bp, $activities_template;
return apply_filters( 'bp_get_activity_is_favorite', in_array( $activity_id, (array)$activities_template->my_favs ) );
}

function my_bp_activity_favorite_link($activity_id) {
global $activities_template;
echo apply_filters( 'bp_get_activity_favorite_link', wp_nonce_url( site_url( BP_ACTIVITY_SLUG . '/favorite/' . $activity_id . '/' ), 'mark_favorite' ) );
}

function my_bp_activity_unfavorite_link($activity_id) {
global $activities_template;
echo apply_filters( 'bp_get_activity_unfavorite_link', wp_nonce_url( site_url( BP_ACTIVITY_SLUG . '/unfavorite/' . $activity_id . '/' ), 'unmark_favorite' ) );
}

// :::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: allow hashtags on blog posts :: //
add_action( 'bp_before_activity_loop', 'bp_activity_tag_header' );
function bp_activity_tag_header() {
	global $bp, $bp_unfiltered_uri;
	
	if( $bp->current_component == BP_ACTIVITY_SLUG && $bp->current_action == BP_ACTIVITY_HASHTAGS_SLUG ) {
		echo '<h3>Activity results for #' . $bp_unfiltered_uri[2]. '</h3>';
	}
}

// :::::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: disable buddypress default styles //
if ( !function_exists( 'bp_dtheme_enqueue_styles' ) ) :
    function bp_dtheme_enqueue_styles() {}
endif;

// :::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Blog Comments ::::::::::::::::: //
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
		<li>
			<div id="article-comment">
				<article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				
					<div id="comment-left">
					
						<!-- :::::::::: avatar -->
						<div id="comment-author-avatar">
						<?php echo get_avatar( $comment,$size='48',$default='<path_to_url>' ); ?>
						</div><!--comment-author-avatar-->
					
						<!-- :::::::::: reply button -->	
						<nav id="comment-reply">
							<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
						</nav>
						
					</div><!--comment-left-->
					
					<div id="comment-right">	
						
						<div id="comment-author-info-wrapper">
						
							<!-- :::::::::: name -->
							<div class="comment-author-name">
								<?php printf( __( '%s <span class="says"></span>', 'boilerplate' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
							</div><!--comment-author-name-->
							
							<!-- ::::::::::: date -->
							<div class="comment-date">
								<time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
							</div><!--comment-date-->
							
							<!-- :::::::::: edit button (disabled for now -->
							<!--<?php edit_comment_link(__('(Edit)'),'  ','') ?>-->
						
						</div><!--comment-author-info-wrapper-->
						
						<?php if ( $comment->comment_approved == '0' ) : ?>
						<em><?php _e( 'Your comment is awaiting moderation', 'boilerplate' ); ?></em>
						<br />
						<?php endif; ?>
						
						<!-- :::::::::: body -->
						<div id="comment-body">
							<?php comment_text(); ?>
						</div><!--comment-body-->
						
					</div><!--comment-right-->
				
				</article>
			</div><!--article-comment-->
		<!-- </li> is added by wordpress automatically -->
	<?php
}

// :::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Register menu ::::::::::::::::: //
register_nav_menus(
	array(
	  'main_nav' => 'Main Navigation'
	)
);

// ::::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Widgetized Sidebar HTML5 Markup  //
register_sidebar(array(
	'name' => 'Sidebar',
	'before_widget' => '<section>',
	'after_widget' => '</section>',
	'before_title' => '<h2 class="widgettitle">',
	'after_title' => '</h2>',
));

// :::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Clean up wp_head() ::::::::::: //
add_filter( 'show_admin_bar', '__return_false' );
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_generator');


// :::::::::: Add ?v=[last modified time] to a file url - for cache busting :::::::::: //
function get_file_version($absolute_url){
	
  $relative_url = wp_make_link_relative($absolute_url);
  $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
  $file_version = "";

  if(file_exists($file)) {
    $file_version = "?v=".filemtime($file);
  }
  return $file_version;
}

// :::::::::::::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Add ?v=[last modified time] to stylesheet //
add_filter('stylesheet_uri', 'versioned_stylesheet_uri');
function versioned_stylesheet_uri($url){
	$v_url = $url.get_file_version($url);
	return $v_url;
}

// :::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Register Scripts :::::::::::::: //
function register_scripts() {
    if (!is_admin()){
    	
    	wp_deregister_script('jquery'); // Lets use the most modern version rather than the one packaged with Wordpress
    	wp_deregister_script( 'l10n' ); // Unneccessary http request made by WP

    	// Add scripts to this array as neccessary
    	$scripts = array(
    		'modernizr' => array(
    			'url' => get_bloginfo('template_directory').'/js/libs/modernizr-2.0.6.min.js',
    			'dependencies' => true,
    			'version' => '2.0.6',
    			'in_footer' => false
    		),
    		
    		'jquery' => array(
    			'url' => 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js',
    			'dependencies' => false,
    			'version' => '1.6.2',
    			'in_footer' => true
    		),
    		
    		'plugins' => array(
    			'url' => get_bloginfo('template_directory').'/js/plugins.js',
    			'dependencies' => array('modernizr', 'jquery'),
    			'version' => get_file_version($scripts['plugins']['url']),
    			'in_footer' => true
    		),
    		
    		'script' => array(
    			'url' => get_bloginfo('template_directory').'/js/script.js',
    			'dependencies' => array('modernizr', 'jquery', 'plugins'),
    			'version' => get_file_version($scripts['script']['url']),
    			'in_footer' => true
    		)
    	);
    	
    	// Register and enqueue the above scripts
    	foreach($scripts as $key => $val){
    		wp_register_script($key, $val['url'], $val['dependencies'], $val['version'], $val['in_footer']);
    		wp_enqueue_script($key);
    	}
    }
}    
add_action('init', 'register_scripts');

// :::::::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Improve body class e.g 'page-about' //
function add_body_class($classes){
global $post;
if (isset($post)){
    $classes[] = $post->post_type.'-'.$post->post_name;
}
return $classes;
}
add_filter('body_class', 'add_body_class');


// :::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Featured Image Support :::::::: //
add_theme_support( 'post-thumbnails' );


// :::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Disable WordPress Auto-Output : //
/*
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
*/


// :::::::::::::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Modify the [...] in an excerpt :::::::::: //
function new_excerpt_more($more) {
   global $post;
return '<a href="'. get_permalink($post->ID) . '">Read the Rest...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// :::::::::::::::::::::::::::::::::::::::::: //
// :::::::::: Custom Write Panel :::::::::::: //

//begin by creating arrays as an easy way to store and call the information.
//this is the primary portion of the code that you will customize and duplicate.
//this example only covers a basic text input
$new_meta_boxes =
  array(
    "input-one" => array(
        "name" => "input-one",
        "title" => "developer",
        "description" => "Enter the developer(s) of the game ex: Rare, Capybara"),
    "input-two" => array(
        "name" => "input-two",
        "title" => "publisher",
        "description" => "Enter the publisher(s) of the game ex: Nintendo, Microsoft"),
    "input-three" => array(
        "name" => "input-three",
        "title" => "genre",
        "description" => "Which genre(s) does the game belong to? ex: RPG, Strategy"),
    "input-four" => array(
        "name" => "input-four",
        "title" => "available-on",
        "description" => "Which console(s) is the game available on? ex: XBox 360, WiiU"),
    "input-five" => array(
        "name" => "input-five",
        "title" => "release-date",
        "description" => "When will the game be released? ex: Nov. 16, 2012"),
    "input-six" => array(
        "name" => "input-six",
        "title" => "article-credit",
        "description" => "Do any other media outlets deserve to be credited on your article? ex: Joystiq"),
    "input-seven" => array(
        "name" => "input-seven",
        "title" => "article-credit-url",
        "description" => "A link to the source article ex: www.joystiq.com"),    
    "input-eight" => array(
        "name" => "input-eight",
        "title" => "image-credit",
        "description" => "Who deserves credit for images used?"),
    "input-nine" => array(
        "name" => "input-nine",
        "title" => "image-credit-url",
        "description" => "A link to the source image gallery (or image itself) ex: http://www.flickr.com/photos/lysterfiend"),    
    "input-ten" => array(
        "name" => "input-ten",
        "title" => "review-wrap-up",
        "description" => "Quick review summary. (leave blank if not a review)"),
    "input-eleven" => array(
        "name" => "input-eleven",
        "title" => "review-score",
        "description" => "Enter \"Buy\" or \"Avoid\""),
    "input-twelve" => array(
        "name" => "input-twelve",
        "title" => "review-pros",
        "description" => "What did you like about the game? (leave blank if not a review)"),
    "input-thirteen" => array(
        "name" => "input-thirteen",
        "title" => "review-cons",
        "description" => "What did you NOT like about the game? (leave blank if not a review)"),                      
);
//end of array

//now we begin a function to create the html that comprise the new meta boxes
//below you can edit/add inline css if you want to change how the label and description appear on the admin page
//worth testing, but not important to manipulate this portion of the code unless you have a super specific objective in mind.
function new_meta_boxes() {
global $post, $new_meta_boxes;
  
  foreach($new_meta_boxes as $meta_box) {
    $meta_box_value = get_post_meta($post->ID, $meta_box['name'], true);
    
    if($meta_box_value == "")
      $meta_box_value = $meta_box['std'];
    
    echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename"
value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';

    echo'<label style="font-weight: bold; display: block; padding: 5px 0 2px 2px"
for="'.$meta_box['name'].'">'.$meta_box['title'].'</label>';

    echo'<input type="text" name="'.$meta_box['name'].'" value="'.$meta_box_value.'" size="55" /><br />';
    
    echo'<p><label for="'.$meta_box['name'].'">'.$meta_box['description'].'</label></p>';
  }
}//end of new_meta_boxes() function

//another function begins here. This is what actually creates the meta box. The one you see on the admin page.
//you should edit the title for your meta box below. don't worry about anything else
function create_meta_box() {
  global $theme_name;
  if ( function_exists('add_meta_box') ) {
    add_meta_box( 'new-meta-boxes', 'Article Details', 'new_meta_boxes', 'post', 'normal', 'high' );
  }
}//end of create_meta_box() function

//the third and most important function. this is what effectively saves your meta data into your database.
//DO NOT EDIT unless you have expert php skills or advice.
function save_postdata( $post_id ) {
  global $post, $new_meta_boxes;
  
  foreach($new_meta_boxes as $meta_box) {
  // Verify
  if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) )) {
    return $post_id;
  }
  
  if ( 'page' == $_POST['post_type'] ) {
  if ( !current_user_can( 'edit_page', $post_id ))
    return $post_id;
  } else {
  if ( !current_user_can( 'edit_post', $post_id ))
    return $post_id;
  }
  
  $data = $_POST[$meta_box['name']];
  
  if(get_post_meta($post_id, $meta_box['name']) == "")
    add_post_meta($post_id, $meta_box['name'], $data, true);
  elseif($data != get_post_meta($post_id, $meta_box['name'], true))
    update_post_meta($post_id, $meta_box['name'], $data);
  elseif($data == "")
    delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));
  }
}//end of save_postdata () function

//these are action hooks that place your special functions defined above onto the admin page.
add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');
	
	
	
/* :::::::::::::::::::::::::::::::::::::::::: */
/* :::::::::: unified search box :::::::::::: */	

//	Remove Buddypress search drowpdown for selecting members etc
add_filter('bp_search_form_type_select', 'bpmag_remove_search_dropdown'  );
function bpmag_remove_search_dropdown($select_html){
    return '';
}

//force buddypress to not process the search/redirect
remove_action( 'bp_init', 'bp_core_action_search_site', 7 );

//let us handle the unified page ourself
add_action( 'init', 'bp_buddydev_search', 10 );// custom handler for the search
function bp_buddydev_search(){
global $bp;
	if ( bp_is_current_component(BP_SEARCH_SLUG) )//if this is search page
		bp_core_load_template( apply_filters( 'bp_core_template_search_template', 'search-single' ) );//load the single searh template
}

add_action('advance-search','bpmag_show_search_results',1);//highest priority

/* we just need to filter the query and change search_term=The search text*/
function bpmag_show_search_results(){
    //filter the ajaxquerystring
     add_filter('bp_ajax_querystring','bpmag_global_search_qs',100,2);
}
 //modify the query string with the search term
function bpmag_global_search_qs(){
	return 'search_terms='.$_REQUEST['search-terms'];
}

function bpmag_is_advance_search(){
global $bp;
if(bp_is_current_component( BP_SEARCH_SLUG))
	return true;
return false;
}

//show the search results for member*/
function bpmag_show_member_search(){
    ?>
   <div class="members-search-result search-result">
   <h2 class="content-title"><?php _e('Members:',"bpmag");?></h2>
  <?php locate_template( array( 'members/members-loop.php' ), true ) ;  ?>
  <?php global $members_template;
	if($members_template->total_member_count>1):?>
   <a href="<?php echo bp_get_root_domain().'/'.  bp_get_members_slug().'/?s='.$_REQUEST['search-terms']?>" ><?php _e(sprintf('View all %d matched Members',$members_template->total_member_count),"bpmag");?></a>
	<?php 	endif; ?>
    </div>
<?php	
 }
//Hook Member results to search page
add_action('advance-search','bpmag_show_member_search',10); //the priority defines where in page this result will show up(the order of member search in other searchs)

//Group search
function bpmag_show_groups_search(){
    ?>
<div class="groups-search-result search-result">
 	<h2 class="content-title"><?php _e('Groups:','bpmag');?></h2>
	<?php locate_template( array('groups/groups-loop.php' ), true ) ;  ?>
	
        <a href="<?php echo bp_get_root_domain().'/'.  bp_get_groups_slug().'/?s='.$_REQUEST['search-terms']?>" ><?php _e("View All matched Groups","bpmag");?></a>
</div>
	<?php
 //endif;
  }

//Hook Groups results to search page
 if(bp_is_active( 'groups' ))
    add_action('advance-search','bpmag_show_groups_search',15);

 /**activity update search*/
 //Group search
function bpmag_show_activity_search(){
    ?>
<div class="activity-search-result search-result">
 	<h2 class="content-title"><?php _e('Activity:','bpmag');?></h2>
	<?php locate_template( array('activity/activity-loop.php' ), true ) ;  ?>
	
        <a href="<?php echo bp_get_root_domain().'/'.  bp_get_activity_slug().'/?s='.$_REQUEST['search-terms']?>" ><?php _e("View all matched updates","bpmag");?></a>
</div>
	<?php
 //endif;
  }

//Hook Groups results to search page
 if(bp_is_active( 'activity' ))
    add_action('advance-search','bpmag_show_activity_search',20);

/**
 *
 * Show blog posts in search
 */
function bpmag_show_site_blog_search(){
    ?>
 <div class="blog-search-result search-result">
 
  <h2 class="content-title"><?php _e('Articles:','bpmag');?></h2>
   
   <?php locate_template( array( 'search-loop.php' ), true ) ;  ?>
   <a href="<?php echo bp_get_root_domain().'/?s='.$_REQUEST['search-terms']?>" ><?php _e("View All matched Posts","bpmag");?></a>
</div>
   <?php
  }

//Hook Blog Post results to search page
 add_action('advance-search',"bpmag_show_site_blog_search",25);


//show blogs search result

function bpmag_show_blogs_search(){

    ?>
  <div class="blogs-search-result search-result">
  <h2 class="content-title"><?php _e('Blogs:',"bpmag");?></h2>
  <?php locate_template( array( 'blogs/blogs-loop.php' ), true ) ;  ?>
  <a href="<?php echo bp_get_root_domain().'/'. bp_get_blogs_slug().'/?s='.$_REQUEST['search-terms']?>" ><?php _e("View All matched Blogs","bpmag");?></a>
 </div>
  <?php
  }

//Hook Blogs results to search page if blogs comonent is active
 if(bp_is_active( 'blogs' ))
    add_action('advance-search','bpmag_show_blogs_search',10);

 //show forums search
function bpmag_show_forums_search(){
    ?>
 <div class="forums-search-result search-result">
   <h2 class="content-title"><?php _e("Forums:","bpmag");?></h2>
  <?php locate_template( array( 'forums/forums-loop.php' ), true ) ;  ?>
   <a href="<?php echo bp_get_root_domain().'/'.  bp_get_forums_slug().'/?s='.$_REQUEST['search-terms']?>" ><?php _e("View All matched forum posts","bpmag");?></a>
</div>
  <?php
  }

//Hook Forums results to search page
if ( bp_is_active( 'forums' ) && bp_forums_is_installed_correctly() && bp_forums_has_directory() )
 add_action('advance-search',"bpmag_show_forums_search",20);


 
 function bpmag_show_bbpress_topic_search(){
     $_REQUEST['ts']=$_REQUEST['search-terms'];//put it for bbpress topic search
    ?>
  <div class="bbp-topic-search-result search-result">
  <h2 class="content-title"><?php _e('Global Topic Search',"bpmag");?></h2>
  <?php bbp_get_template_part('bbpress/content','archive-topic') ;  ?>
  <?php
  global $bbp;
    $page = bbp_get_page_by_path( $bbp->root_slug );
    
  ?>
  <a href="<?php echo get_permalink($page).'?ts='.$_REQUEST['search-terms']?>" ><?php _e("View All matched topics","bpmag");?></a>
 </div>
  <?php
  }

//Hook Blogs results to search page if blogs comonent is active
 if(function_exists( 'bbp_has_topics' ))
    add_action('advance-search','bpmag_show_bbpress_topic_search',10);
?>