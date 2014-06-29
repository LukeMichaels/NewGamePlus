jQuery(document).ready(function($){
	// Hide and clone sub menu for absolute positioning
//	$('ul.sub-menu').css('opacity', 0);
	$("ul#right-nav > li > ul").each(function(){
		$(this).addClass($(this).parent().attr('id'));
	});
	$('<div>').addClass('submenu').append($("ul#right-nav > li > ul").clone()).insertAfter($("nav#access"));
	$("ul#right-nav > li > ul").remove();
	
	$("ul#right-nav > li").hover(function(){
		$('ul.sub-menu').removeClass('shown').hide();
		$('.white, .currentsub').removeClass('white').removeClass('currentsub');
		if($("ul."+$(this).attr('id')).length > 0){
			$(this).addClass('white');
			$('div.submenu').css({WebKitBoxShadow: '0px 1px 1px 0px rgba(7,7,7,.3)', MozBoxShadow: '0px 1px 1px 0px rgba(7,7,7,.3)', boxShadow: '0px 1px 1px 0px rgba(7,7,7,.3)'});
			$('div.submenu').stop().animate({opacity: 1, height: '15px'}, 400);
			$("div.submenu, ul."+$(this).attr('id')).addClass('shown').show();
			$("ul."+$(this).attr('id')).addClass('currentsub');
		}else{
			$('div.submenu').stop().animate({opacity: 0, height: 0}, 400);
		}
	}, function(){
		/*
		$('ul.sub-menu').removeClass('shown').hide();
		$('div.submenu').stop().animate({opacity: 0, height: 0}, 400);
		*/
	});

	$('div.submenu').hover(function(){
		if($(this).find('ul.shown').length > 0){
			$(this).stop(true,true).animate({opacity: 1, height: '15px'}, 400);
			$('ul#right-nav li#'+$('.currentsub').attr('class').replace('sub-menu','').replace('currentsub', '').replace(' ','')).addClass('white');
		}
	}, function(){
		$('.white, .currentsub').removeClass('white').removeClass('currentsub');
		$(this).find('ul.sub-menu').removeClass('shown').hide();
		$(this).stop(true,true).animate({opacity: 0, height: 0}, 400);
	});	
	
	// Sticky menu code
		// Auto fixed position menu with animation
		/*
		$(window).scroll(function(){
			if($(window).scrollTop() > 20){
				if($('header').length > 0){
					$('header').stop().animate({
						marginTop: ($(window).scrollTop())+'px'
					}, 'fast');
				}
			}else{
				$('header').stop().css({
					marginTop: 0
				});
			}
		});
		*/
});