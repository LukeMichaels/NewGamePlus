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
	
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!-- :::::::::: JavaScript :::::::::: -->
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ) ?>/js/libs/jquery-1.7.2.min.js"></script>
	
	<!-- :::::::::: Google Fonts :::::::::: -->
	<link href='http://fonts.googleapis.com/css?family=Press+Start+2P|Electrolize|Homenaje' rel='stylesheet' type='text/css'>
	
	<!-- :::::::::: Style Sheets :::::::::: -->
	<link rel="stylesheet" href="<?php bloginfo('style.css')?>">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/beta-custom.css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/css/typography.css" />
	
	<!-- Wordpress Head Items -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	
	<script type="text/javascript">
	  	
	  	$(document).ready(function() {
	  	
	  		// :::::::::: Logo Animation
			function pulsate() {
	
				$("#logo1").delay(6000).
				 animate({opacity: 0.4}, 1500, 'linear').delay(1000).
				 animate({opacity: 1}, 1500, 'swing', pulsate);
	
				$("#logo2").delay(4500).
				 animate({opacity: 0.3}, 1500, 'linear').delay(1000).
				 animate({opacity: 1}, 1500, 'swing', pulsate).delay(1500);
	
				$("#logo3").delay(1500).
				 animate({opacity: 0.4}, 1500, 'linear').delay(1000).
				 animate({opacity: 1}, 1500, 'swing', pulsate).delay(4500);
	
				$("#logo4").
				 animate({opacity: 0.3}, 1500, 'linear').delay(1000).
				 animate({opacity: 1}, 1500, 'swing', pulsate).delay(6000);
			}
	
			pulsate();
	 	
	 	
		 	// :::::::::: Random Game Quote
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
	
		 	var myRandom = Math.floor(Math.random() * gameQuotes.length);
	
		 	$('#game-quote').html(gameQuotes[myRandom]);
	 	});
 	</script>
  
</head>
<body <?php body_class();?>>
	<div id="content-wrapper">
	
	<!-- :::::::::: Flashy Logo -->
	<div id="logo">
		<div id="logo1" style="opacity: 1;">new<br>game+</div>
		<div id="logo2" style="opacity: .8;">new<br>game+</div>
		<div id="logo3" style="opacity: .6;">new<br>game+</div>
		<div id="logo4" style="opacity: .4;">new<br>game+</div>
	</div><!--logo-->
	
	
	
	<div class="container">
		<!--
		<header>
				<h1><a href="<?php get_option('home')?>"><?php bloginfo('title')?></a></h1>
				<p><?php bloginfo('description')?></p>
		</header>
		--><!-- END header -->
		
		<!-- <nav><?php wp_nav_menu(array('menu' => 'main_nav', 'container' => false))?></nav> -->
		
		<div class="main" role="main">

    
    
    