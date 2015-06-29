<?php
/*
 *
 * The template for displaying the footer.
 *
 */
 ?>
 
					</div><!--main-->
				</div><!--main-content-wrapper-->
				
				<footer>
					
					<!-- :::::::::: Footer :::::::::: -->
					<div id="footer-wrapper">
						<div id="footer-wrap-left">
							<img src="<? bloginfo('template_url') ?>/images/footer-wrap-left.png">
						</div><!--footer-wrap-left-->
						
						<!-- :::::::::: Footer Nav :::::::::: -->
						<div id="footer-navigation-wrapper">
							
							<!-- :::::::::: Footer Logo :::::::::: -->
							<div id="footer-logo">
								<a href="#content-wrapper" title="return to the top" alt="return to the top">NewGame+</a>						
							</div><!--footer-logo-->
							
							<nav>
								<!-- :::::::::: Users Nav :::::::::: -->
								<?php wp_nav_menu(array('menu' => 'footer-nav', 'container_id' => 'footer-nav-wrapper', 'menu_id' => 'footer-nav', 'menu_class' => 'footer-nav footer-nav-menu'))?>
							</nav>
							<div id="extended-footer-nav">	
								<ul>
									<li>
										<a href="https://twitter.com/New_GamePlus" alt="NewGame+ on Twitter" target="_blank">Twitter</a>
									</li>
								</ul>
							</div><!--extended-footer-nav-->
							
							<!-- :::::::::: Version # :::::::::: -->
							<div id="version">
								<a href="http://newgameplus.co/version/" title="NewGame+ Version Number" alt="NewGame+ Version Number">Version 1.1</a>
							</div><!--version-->
							
						</div><!--footer-navigation-->
						
						<div id="footer-wrap-right">
							<img src="<? bloginfo('template_url') ?>/images/footer-wrap-right.png">
						</div><!--footer-wrap-right-->
						
						<div id="footer-shadow"></div><!--footer-shadow-->
					</div><!--footer-wrapper-->
					
					<div id="legal-stuff">
						<p>New Game+ is an independent community of gaming enthusiests with the goal of bringing people together to bask in the love of our hobby.<br>
						 All editorial content, including blogs, comments, and forums written by our community, are protected by a Creative Commons License<br>
						  permitting non-commercial sharing requiring attribution.</p>
					</div><!--legal-stuff-->
					
					<!-- :::::::::: Random Game Quote -->
					<div id="game-quote-container">
						<blockquote class="pinched">
							<div id="game-quote"></div>
						</blockquote>
					</div><!--game-quote-container-->
					
				</footer><!--footer-->
				
			</div> <!--container--> 
		</div><!--content-frame--> 
	</div><!--content-wrapper-->
	
	<!-- :::::::::: Andrew's Google Analaytics :::::::::: -->
	<script type="text/javascript">
 
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-32909684-1']);
		_gaq.push(['_trackPageview']);
		
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	 
	</script>
	
	<!-- :::::::::: Twitter Feed Script :::::::::: -->
	<script src="http://twitter.com/javascripts/blogger.js" type="text/javascript"></script>
	<script src="http://twitter.com/statuses/user_timeline/New_GamePlus.json?callback=twitterCallback2&count=3" type="text/javascript"></script>
	
	<!-- :::::::::: Pinterest Pin-It :::::::::: -->
	<script type="text/javascript">
		(function() {
		    window.PinIt = window.PinIt || { loaded:false };
		    if (window.PinIt.loaded) return;
		    window.PinIt.loaded = true;
		    function async_load(){
		        var s = document.createElement("script");
		        s.type = "text/javascript";
		        s.async = true;
		        s.src = "http://assets.pinterest.com/js/pinit.js";
		        var x = document.getElementsByTagName("script")[0];
		        x.parentNode.insertBefore(s, x);
		    }
		    if (window.attachEvent)
		        window.attachEvent("onload", async_load);
		    else
		        window.addEventListener("load", async_load, false);
		})();
	</script>
	
	
	<!-- :::::::::: GoSquared Analytics Tracking :::::::::: -->
	<script type="text/javascript">
	  var GoSquared = {};
	  GoSquared.acct = "GSN-041985-E";
	  (function(w){
	    function gs(){
	      w._gstc_lt = +new Date;
	      var d = document, g = d.createElement("script");
	      g.type = "text/javascript";
	      g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
	      var s = d.getElementsByTagName("script")[0];
	      s.parentNode.insertBefore(g, s);
	    }
	    w.addEventListener ?
	      w.addEventListener("load", gs, false) :
	      w.attachEvent("onload", gs);
	  })(window);
	</script>


	
	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
  
	<!-- :::::::::: Please Don't Delete :) :::::::::: -->
	<?php wp_footer(); ?>
 
</body>
</html>
