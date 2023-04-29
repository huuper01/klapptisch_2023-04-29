//onload
jQuery(function() {

	setHeight();
	jQuery('#content_container').css('visibility', 'visible');

	jQuery('#menu_left ul').mouseleave( _.debounce(function() {
			setTimeout(function() {
				if(!jQuery('#menu_left ul').is(":hover") && !jQuery('#dropdown_left').is(":hover")) {
					jQuery('#menu_left li').removeClass('menu_active');
					jQuery('#dropdown_left').hide( "slideDown", {direction: "right"}, 250 );
				}
			}, 1);
		}
	, 250) );

	if (jQuery('#offer').is(':empty') && jQuery('#news').is(':empty') && jQuery('#contact').is(':empty')) {
		jQuery('#infobox').css('display', 'none');
		jQuery('#content').css('width', '100%');
	}

	jQuery('a.product_details').html('<span class="glyphicon glyphicon-th-list"></span>&nbsp Grösse, Preise und Optionen');
	jQuery('a.product_details').click(function(){
        if(jQuery(this).parent().children('div.toggle').is(':visible')) {
        	jQuery(this).html('<span class="glyphicon glyphicon-th-list"></span>&nbsp Grösse, Preise und Optionen');
        } else {
        	jQuery(this).html('<span class="glyphicon glyphicon-th-list"></span>&nbsp weniger anzeigen');
        }
        jQuery(this).parent().children('div.toggle').slideToggle('fast');
    });

	//IE, Opera, Safari
	//jQuery('#cc').on('mousewheel', mouseWheel);

	//Firefox
	//jQuery('#cc').on('DOMMouseScroll', mouseScroll);

	jQuery('#cc').scroll( _.throttle(function() {
	    if (jQuery(this).scrollTop() == 0) {
			jQuery('#homeslide_container').show( 'slide', {direction: 'left'}, 500 );
			//jQuery('#cc').on('mousewheel', mouseWheel);
			//jQuery('#cc').on('DOMMouseScroll', mouseScroll);
	    } else {
			jQuery('#homeslide_container').hide( 'slide', {direction: 'left'}, 500 );
	    }
	}, 250));

	jQuery('#cc').scroll( _.debounce(function() {
		//if (msieversion() == 0) {
			//jQuery('#infobox').css('top', jQuery(this).scrollTop() + "px");
			jQuery('#infobox').animate({top: jQuery(this).scrollTop()+'px'});
		//}
	}, 250));

	/*
	//Workaround für iPad
	if (navigator.userAgent.match(/iPad/i) != null) {
		jQuery('#infobox').css('position', 'absolute');
	}
	*/
	/*
	if (msieversion() != 0) {
		jQuery('#infobox').css('position', 'fixed');
	}
	*/

	// Grund: Bootstrap-Library von Joomla
	/*
	jQuery('.btn-group.pull-right').on('click', function(){
		jQuery('.btn-group.pull-right').addClass('open');
	});
	*/

	jQuery('.icon-cog').addClass('fa');
	jQuery('.icon-cog').addClass('fa-print');
	jQuery('.fa.fa-print').removeClass('icon-cog');

	jQuery('.playbutton img').replaceWith('<i class="fa fa-play"></i>');
	jQuery('.pausebutton img').replaceWith('<i class="fa fa-pause"></i>');

	// Workaround für mobile Navigation (Grund: Bootstrap-Library von Joomla)
	/*
	var navElement;
	jQuery('a.dropdown-toggle').click(function(){
		navElement = this;
		if (window.location.href != 'http://www.klapptis.ch/' && window.location.href != 'http://www.klapptis.ch/index.php' &&
			window.location.href != 'http://www.klapptisch.ch/' && window.location.href != 'http://www.klapptisch.ch/index.php') {
        		if (!jQuery(this).parent().hasClass('open')) {
					jQuery(this).parent().addClass('open');
				} else {
					jQuery(this).parent().removeClass('open');
				}
				setTimeout(function() {
					jQuery('ul').removeClass('nav-hover');
				}, 0);
		}
    });
	*/

	jQuery('.col-sm-3 img:first-child').wrap(function() {
		return "<div class='popup_container'></div>";
	});

	jQuery('.col-sm-3 img:not(:first-child)').wrap(function() {
		return "<div class='small_image'></div>";
	});

	jQuery('.popup_container img').addClass('popup');

	jQuery('.small_image img').click(function() {
		var imgSmall = jQuery(this);
		var imgBig = jQuery(this).parent().parent().children('div.popup_container').children('img');

		var initialHeight = imgBig.parent().height();
		imgBig.parent().height(initialHeight);

		var remember = imgSmall.attr('src');
		imgSmall.hide().attr('src', imgBig.attr('src')).fadeIn(500);
		imgBig.hide().attr('src', remember).fadeIn(500);

		if (navigator.userAgent.match(/iPad/i) != null) {
			//Workaround für iPad
			setTimeout(function() {
				jQuery(imgBig.parent()).animate( {height: imgBig.height()}, function(){ });
			}, 200);
		} else {
			setTimeout(function() {
				jQuery(imgBig.parent()).animate( {height: imgBig.height()}, function(){ });
			}, 10);
		}
		
		/*
		var popup = jQuery(this).parent().children('a');
		popup.attr('href', 'http://www.klapptis.ch' + remember);
		*/
	});

	/*
	jQuery('.jcepopup').click(function() {
		var imgSrc = jQuery(this).children().children('img').attr('src');
		setTimeout(function() {
			jQuery('#jcemediabox-popup-img').attr('src', imgSrc);
		}, 100);
	});
	*/

	jQuery('.popup').click(function() {
		var selectedImg = jQuery(this);

		jQuery('#popup_image').removeClass('portrait');
		jQuery('#popup_image').removeClass('landscape');

		if(selectedImg.height() >= selectedImg.width()) {
			//jQuery('#popup_image').height(jQuery(window).height()/2);
			jQuery('#popup_image').addClass('portrait');
		} else {
			jQuery('#popup_image').addClass('landscape');
		}

		jQuery('#popup_image').attr('src', jQuery(this).attr('src'));
		jQuery('#myModal').modal('show');
	});

});

jQuery(window).on("load", function() {
    // Berechnung der Grösse der News-Infobox (nachdem Bilder geladen wurden!)
    jQuery('#news').outerHeight(jQuery('#infobox').height() - jQuery('#offer').outerHeight(true) - jQuery('#contact').outerHeight(true));
});

jQuery('#dropdown_left').mouseleave(function() { 
	setTimeout(function() {
		jQuery('#menu_left li').removeClass('menu_active');
		if(!jQuery('#menu_left ul').is(":hover")) {
			jQuery('#dropdown_left').hide( "slide", {direction: "right"}, 250 );
		}
	}, 1);
});

jQuery('#dropdown_left').mouseenter(function() { 
	jQuery(listElement).addClass('menu_active');
});

var listElement;

jQuery('#menu_left li').hover(
	function() {
		jQuery('#dropdown_left').show( "slide", {direction: "right"}, 250 );
		//BSP: Funktionsaufruf
		//onClick="showDiv(\'#tisch\') 
		//switch(jQuery(this).text()) {
		switch(jQuery(this).children('img').attr('alt')) {
			case 'Tische':
				jQuery('#dropdown_left').html('<ul><li><a href="index.php?option=com_content&view=article&id=1">Klapptische rechteckig</a></li><li><a href="index.php?option=com_content&view=article&id=2">Klapptische rund</a></li><li><a href="index.php?option=com_content&view=article&id=3">Bistro- & Stehtische</a></li><li><a href="index.php?option=com_content&view=article&id=4">Tischgarnituren</a></li><li><a href="index.php?option=com_content&view=article&id=5">ZOWN Produkte</a></li></ul>');
				return;
			case 'Stühle':
				jQuery('#dropdown_left').html('<ul><li><a href="index.php?option=com_content&view=article&id=6">Klappstühle</a></li><li><a href="/index.php/zelte/7-stapelstuehle">Stapelstühle</a></li><li><a href="index.php?option=com_content&view=article&id=8">Diverse Stühle</a></li><li><a href="index.php?option=com_content&view=article&id=5">ZOWN Produkte</a></li></ul>');
				return;
			case 'Zelte':
				jQuery('#dropdown_left').html('<ul><li><a href="index.php?option=com_content&view=article&id=10">Systemklappzelte</a></li><li><a href="index.php?option=com_content&view=article&id=11">Pagodenzelte</a></li></ul>');
				return;
			case 'Zubehör':
				jQuery('#dropdown_left').html('<ul><li><a href="index.php?option=com_content&view=article&id=12">Design-Möbel</a></li><li><a href="index.php?option=com_content&view=article&id=13">Diverses / Zubehör</a></li><li><a href="index.php?option=com_content&view=article&id=14">Hussen & Tischtücher</a></li><li><a href="index.php?option=com_content&view=article&id=15">Transportwagen</a></li><li><a href="index.php?option=com_content&view=article&id=5">ZOWN Produkte</a></li></ul>');
				return;
		}
	}, function() {
		listElement = this;
		// FÜR CHROME/IE
		if(!jQuery('#menu_left').is(":hover") && !jQuery('#bg_container').is(":hover")) {
		//if(jQuery('#dropdown_left').is(":hover")) {
			jQuery(listElement).addClass('menu_active');
		}
		// FÜR FIREFOX
		setTimeout(function() {
			//if(jQuery('#dropdown_left').is(":hover")) {
			if(!jQuery('#menu_left').is(":hover") && !jQuery('#bg_container').is(":hover")) {
				jQuery(listElement).addClass('menu_active');
			}
		}, 1);
	}
);

jQuery('body').mouseleave(
	function() {
		setTimeout(function() {
			jQuery('#menu_left li').removeClass('menu_active');
		}, 1);
	}
);

jQuery(window).resize(function() {
	jQuery('#dropdown_left').hide();
	setHeight();
	jQuery("#header_menu").load(location.href + " #header_menu"); // Workaround für IE
});

function setHeight() {

	jQuery('#content_container').height(jQuery(window).height()-jQuery('#header').height());
	jQuery('#infobox').height(jQuery(window).height()-jQuery('#header').height());
	
	var height = jQuery('#cc').height();
	var width = jQuery('#cc').width();
	var expansion = width * 0.03;
	jQuery('#background').height(height + expansion);
	jQuery('#background').width(width + expansion);

	jQuery('#shadow').height(height);
	jQuery('#shadow').width(width);
	
	jQuery('#news').outerHeight(jQuery('#infobox').height() - jQuery('#offer').outerHeight(true) - jQuery('#contact').outerHeight(true));
	jQuery('#team').outerHeight(jQuery('#infobox').height() - jQuery('#contact').outerHeight(true) - jQuery('#contact').css('margin-top').replace('px', ''));

	jQuery('.popup_container').height('inherit');


}

function msieversion() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
    }
    else {
        return 0;
    }
}

/*
var mouseWheel = function(e){
	if (e.originalEvent.wheelDelta < 0 && jQuery('#content').outerHeight(true) > jQuery('#cc').outerHeight(true)) {
		if (msieversion() == 0) { // Chrome
			if (!jQuery('#infobox').is(":hover")) {
				jQuery('#homeslide_container').hide( 'slide', {direction: 'left'}, 500 );
				jQuery('#cc').off('mousewheel');
			}
		} else if (!jQuery('#news').is(":hover")) { // IE
			jQuery('#homeslide_container').hide( 'slide', {direction: 'left'}, 500 );
			jQuery('#cc').off('mousewheel');
		}
	} 
}

var mouseScroll = function(e){
	if (e.originalEvent.detail > 0 && !jQuery('#infobox').is(":hover") && jQuery('#content').outerHeight(true) > jQuery('#cc').outerHeight(true)) { // Firefox TODO
		jQuery('#homeslide_container').hide( 'slide', {direction: 'left'}, 500 );
		jQuery('#cc').off('DOMMouseScroll');
	}
}

jQuery('#cc').scroll(function() {
	if (msieversion() == 0) {
		jQuery('#infobox').css('top', jQuery(this).scrollTop() + "px");
	}
});
*/