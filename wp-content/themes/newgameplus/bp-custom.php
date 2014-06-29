<?php

	// BuddyPress Navigation Customization
	// Props to http://wordpress.stackexchange.com/questions/16223/add-buddypress-profile-menu-item for helping me figure this out
	// http://themekraft.com/customize-profile-and-group-menus-in-buddypress/
	function my_setup_nav() {
	      global $bp;
	 
	      // Change the order of menu items
	      $bp->bp_nav['messages']['position'] = 100;
	 
	      // Remove a menu item
	      $bp->bp_nav['conversations'] = false;
	 
	      // Change name of menu item
	      /* $bp->bp_nav['communities']['name'] = 'My Conversations'; */
	}
 
	add_action( 'bp_setup_nav', 'my_setup_nav', 1000 );
	
?>