<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php wp_title('|', true, 'right'); ?> </title>
	<!-- <meta name="description" content=""> -->
	<meta name="author" content="">
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!-- :::::::::: JavaScript :::::::::: -->
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ) ?>/js/libs/jquery-1.7.2.min.js"></script>
	<!--un-comment for drop-down menu--><!-- <script type="text/javascript" src="<?php bloginfo( 'template_url' ) ?>/js/mylibs/nav.js"></script> -->
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ) ?>/js/libs/css_browser_selector.js"></script>
	
	<!-- :::::::::: Google Fonts :::::::::: -->
	<link href='http://fonts.googleapis.com/css?family=Press+Start+2P|Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
	
	<!-- :::::::::: Style Sheets :::::::::: -->
	<link rel="stylesheet" href="<?php bloginfo('style.css')?>">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/main.css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/typography.css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/social.css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/blog.css" />
	
	<!-- :::::::::: iOS :::::::::: -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="white-translucent">
	<meta name = "viewport" content = "width = 980, initial-scale = 1, user-scalable = yes">
	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ) ?>/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_url' ) ?>/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ) ?>/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ) ?>/apple-touch-icon-114x114.png" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/add2home.css">
	<script type="application/javascript" src="<?php bloginfo( 'template_url' ) ?>/js/add2home.js"></script>
	
	<!-- :::::::::: Wordpress Head Items :::::::::: -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- :::::::::: Luke's Google Analaytics :::::::::: -->
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-34585363-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
	<script type="text/javascript">
	  	
	  	$(document).ready(function() {
		  
		  	// :::::::::: Logo Animation
			function pulsate() {
	
				$("#alpha1").delay(6000).
				 animate({opacity: 0.4}, 1500, 'linear').delay(1000).
				 animate({opacity: 1}, 1500, 'swing', pulsate);
	
				$("#alpha2").delay(4500).
				 animate({opacity: 0.3}, 1500, 'linear').delay(1000).
				 animate({opacity: 1}, 1500, 'swing', pulsate).delay(1500);
	
				$("#alpha3").delay(1500).
				 animate({opacity: 0.4}, 1500, 'linear').delay(1000).
				 animate({opacity: 1}, 1500, 'swing', pulsate).delay(4500);
	
				$("#alpha4").
				 animate({opacity: 0.3}, 1500, 'linear').delay(1000).
				 animate({opacity: 1}, 1500, 'swing', pulsate).delay(6000);
			}
	
			pulsate();
	 	
		 	// :::::::::: Random Game Quotes
		 	var gameQuotes = new Array();
		 		gameQuotes[0] = "It's dangerous to go alone! Take this.";
		 		gameQuotes[1] = "I've covered wars, you know.";
		 		gameQuotes[2] = "You are in a maze of twisty passages, all alike.";
		 		gameQuotes[3] = "Why, that's the second biggest monkey head I've ever seen!";
		 		gameQuotes[4] = "But our princess is in another castle!";
		 		gameQuotes[5] = "Would you kindly?";
		 		gameQuotes[6] = "The President has been kidnapped by ninjas. Are you a bad enough dude to rescue the president?";
		 		gameQuotes[7] = "CONGRATULATION THIS STORY IS HAPPY END";
		 		gameQuotes[8] = "A WINNER IS YOU";
		 		gameQuotes[9] = "You spoony bard!";
		 		gameQuotes[10] = "BUY SOMETHIN' WILL YA!";
		 		gameQuotes[11] = "YOU HAVE DIED OF DYSENTERY";
		 		gameQuotes[12] = "I AM ERROR.";
		 		gameQuotes[13] = "All your base are belong to us.";
		 		gameQuotes[14] = "LET'S PLAY MONEY MAKING GAME.";
		 		gameQuotes[15] = "It's not a lake, it's an ocean.";
		 		gameQuotes[16] = "War. War never changes.";
		 		gameQuotes[17] = "Agro!";
		 		gameQuotes[18] = "The wind...it is blowing...";
		 		gameQuotes[19] = "Are you still there?";
		 		gameQuotes[20] = "What is a man? A miserable little pile of secrets.";
		 		gameQuotes[21] = "Blue Wizard is about to die.";
		 		gameQuotes[22] = "Oh, hi. So, how are you holding up? BECAUSE I'M A POTATO!";
		 		gameQuotes[23] = "The right man in the wrong place can make all the difference in the world.";
		 		gameQuotes[24] = "C-c-c-combo breaker!";
		 		gameQuotes[25] = "Boomshakalaka!";
		 		gameQuotes[26] = "Finish him!!";
		 		gameQuotes[27] = "Stay frosty.";
		 		gameQuotes[28] = "Oh look, another visitor. Stay awhile... Stay FOREVER!";
		 		gameQuotes[29] = "Is a man not entitled to the sweat of his brow?";
		 		gameQuotes[30] = "La Li Lu Le Lo";
		 		gameQuotes[31] = "Snake? Snake? SNAAAAAAAAKE!!!";
		 		gameQuotes[32] = "You must construct additional pylons.";
		 		gameQuotes[33] = "In the year 200x a super robot named Mega Man was created.";
		 		gameQuotes[34] = "They call me Gato, I have metal joints. Beat me up and win 15 Silver Points.";
		 		gameQuotes[35] = "Why not take a break? You can pause the game by pressing +.";
		 		gameQuotes[36] = "Sonic Boom!";
		 		gameQuotes[37] = "Segaaaaaaaaaaaaaaaaaaaaa.";
		 		gameQuotes[38] = "Hadouken!";
		 		gameQuotes[39] = "Spy's sappin' my sentry!";
		 		gameQuotes[40] = "Reticulating splines.";
		 		gameQuotes[41] = "Requiescat in pace.";
		 		gameQuotes[42] = "Wait, that's not how it happened.";
		 		gameQuotes[43] = "Objection!";
		 		gameQuotes[44] = "AREEEEEEEEEES!!!!!!!!!";
		 		gameQuotes[45] = "Jill, here's a lockpick. It might come in handy if you, the master of unlocking, take it with you.";
		 		gameQuotes[46] = "Job's done.";
		 		gameQuotes[47] = "Every puzzle has an answer.";
		 		gameQuotes[48] = "It is pitch black. You are likely to be eaten by a grue.";
		 		gameQuotes[49] = "Henshin a go-go, baby!";
		 		gameQuotes[50] = "Fus-ro-dah!";
		 		gameQuotes[51] = "Say, fuzzy pickles.";
		 		gameQuotes[52] = "It's super effective!";
		 		gameQuotes[53] = "Jason! Jaaaaaaaaason!";
		 		gameQuotes[54] = "Do a barrel roll!";
		 		gameQuotes[55] = "FK in the coffee";
		 		gameQuotes[56] = "I don't have time to explain why I don't have time to explain.";
		 		gameQuotes[57] = "The cake is a lie.";
		 		gameQuotes[58] = "I am the mustard of your doom.";
		 		gameQuotes[59] = "The right man in the wrong place can make all of the difference in the world.";
		 		gameQuotes[60] = "My body is ready.";
		 		gameQuotes[61] = "Do you know where I can find some sailors?";
		 		gameQuotes[62] = "I used to be an adventurer like you, then I took an arrow in the knee.";
		 		gameQuotes[63] = "Endure and survive.";
		 		gameQuotes[64] = "It's time to kick ass and chew bubble gum... and I'm all outta gum.";
		 		gameQuotes[65] = "Hey! Listen!";
		 		gameQuotes[66] = "And remember that bad times... are just times that are bad";
	
		 	var myRandom = Math.floor(Math.random() * gameQuotes.length);
	
		 	$('#game-quote').html(gameQuotes[myRandom]);
	 	});
 	</script>
 	
 	<!-- We add some JavaScript to pages with the comment form
		 to support sites with threaded comments (when in use).-->
	<?php if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' ); ?>

  <!-- can't touch this -->
 	<?php wp_head(); ?>
 	
</head>
<body>
	<div id="content-wrapper">
		<div id="content-frame">

			<header>
			
				<!-- :::::::::: Fancy Pants Pulsating Logo (not so fancy pants anymore :-/ ) :::::::::: -->
				<div id="logo">
					<center>
						<!--
						<div id="alpha-tag">
							<img id="alpha1" src="<? bloginfo('template_url') ?>/images/alpha-1.png">
							<img id="alpha2" src="<? bloginfo('template_url') ?>/images/alpha-2.png">
							<img id="alpha3" src="<? bloginfo('template_url') ?>/images/alpha-3.png">
							<img id="alpha4" src="<? bloginfo('template_url') ?>/images/alpha-4.png">
						</div>
						-->
						<a href="http://www.newgameplus.co" alt="NewGame+">
							<h1 id="logo1" style="opacity: 1;">newgame+</h1>
							<div id="logo2" style="opacity: 1;">newgame+</div>
							<div id="logo3" style="opacity: 1;">newgame+</div>
						</a>
							<!-- :::::::::: the last line is left out so that it wont overlap with the search box -->
							<div id="logo4" style="opacity: 1;">newgame+</div>
						
						
						<div id="alpha-temp">
							<a href="http://newgameplus.co/version/" title="NewGame+ Version Number" alt="NewGame+ Version Number">+ beta 1.1</a>
						</div><!--alpha-temp-->
						
					</center>
				</div><!--logo-->
				
				<!-- :::::::::: search box :::::::::: -->
				<div id="header-search-box">
					<form action="<?php echo bp_search_form_action() ?>" method="post" id="search-form">
						<input type="text" id="search-terms" name="search-terms" value="<?php _e( 'Search: people, games, fun...', 'buddypress') ?>" onfocus="if (this.value == '<?php _e( 'Search: people, games, fun...', 'buddypress' ) ?>' ) { this.value = ''; }" onblur="if (this.value == '') { this.value = '<?php _e( 'Search: people, games, fun...', 'buddypress' ) ?>';}" />
						<?php echo bp_search_form_type_select() ?>
						<input type="image" src="<? bloginfo('template_url') ?>/images/newgameplus-search-icon.gif" alt="Submit details" name="search-submit" id="search-submit" value="<?php _e( 'Search', 'buddypress' ) ?>" />
						<?php wp_nonce_field( 'bp_search_form' ) ?>
					</form>
				</div><!--header-search-box-->
				<br>
				
				<!-- <?php include (bloginfo('template_url').'/searchform.php'); ?> -->
				
				<!-- :::::::::: Nav :::::::::: -->
				<div id="navigation-wrapper">
					<div id="nav-wrap-left">
						<img src="<? bloginfo('template_url') ?>/images/nav-wrap-left.png">
					</div><!--nav-wrap-left-->
					
					<!-- :::::::::: Social (left) Nav :::::::::: -->
					<div id="left-navigation">
						<nav>
							<div id="left-navigation-wrapper">
								<?php if ( is_user_logged_in() ) : ?>
									<!-- :::::::::: Users Nav :::::::::: -->
									<?php bp_get_loggedin_user_nav() ?> 
								<?php else : ?>
									<span class="sign-in-nav">Please login to view this navigation, logged out users can still view the blog -></span>
								<?php endif; ?>
							</div><!--left-navigation-wrapper-->
						</nav>
					</div><!--left-navigation-->
					
					<!-- :::::::::: Blog (right) Nav :::::::::: -->
					<div id="right-navigation">
						<nav id="access" role="navigation">
							<?php wp_nav_menu(array('menu' => 'right-nav', 'container_id' => 'right-navigation-wrapper', 'menu_id' => 'right-nav', 'menu_class' => 'right-menu right-navigation-menu'))?>
						</nav>
					</div><!--right-navigation-->
					
					<div id="nav-wrap-right">
						<img src="<? bloginfo('template_url') ?>/images/nav-wrap-right.png">
					</div><!--nav-wrap-right-->
					
					<div id="nav-shadow"></div><!--nav-shadow-->
					
					<!-- :::::::::: Center + :::::::::: -->
					<div id="nav-plus">
						<img src="<? bloginfo('template_url') ?>/images/plus-for-nav.png">
					</div><!--nav-plus-->
					
				</div><!--navigation-wrapper-->
				
			</header>
			
				<!-- :::::::::: Start Page Conent :::::::::: -->
				<div id="main" role="main">
					<div id="main-content-wrapper">

    
    
    