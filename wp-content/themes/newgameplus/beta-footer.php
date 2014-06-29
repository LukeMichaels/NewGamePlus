<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
 ?>
			</div><!-- END .main -->
			<footer>
		
			</footer><!-- END footer -->
		</div> <!--! END .container -->  
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
	

	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
  
	<?php wp_footer(); ?>
 
</body>
</html>
