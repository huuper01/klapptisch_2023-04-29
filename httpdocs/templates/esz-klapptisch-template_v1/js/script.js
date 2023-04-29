
//onload
$(function() {

	showDiv('#tisch');

	//setHeight();

	$('#menu_left ul').mouseleave( _.debounce(function() {
			setTimeout(function() {
				if(!$('#menu_left ul').is(":hover") && !$('#dropdown_left').is(":hover")) {
					$('#menu_left li').removeClass('menu_active');
					$('#dropdown_left').hide( "slide", {direction: "right"}, 250 );
				}
			}, 1);
		}
	, 250) );

	$('#menu_right ul').mouseleave( _.debounce(function() {
			setTimeout(function() {
				if(!$('#menu_right ul').is(":hover") && !$('#dropdown_right').is(":hover")) {
					$('#menu_right li').removeClass('menu_active');
					$('#dropdown_right').hide( "slide", {direction: "left"}, 250 );
				}
			}, 1);
		}
	, 250) );

});

$('#dropdown_left').mouseleave(function() { 
	setTimeout(function() {
		$('#menu_left li').removeClass('menu_active');
		if(!$('#menu_left ul').is(":hover")) {
			$('#dropdown_left').hide( "slide", {direction: "right"}, 250 );
		}
	}, 1);
});

$('#dropdown_left, #dropdown_right').mouseenter(function() { 
	$(listElement).addClass('menu_active');
});

$('#dropdown_right').mouseleave(function() { 
	setTimeout(function() {
		$('#menu_right li').removeClass('menu_active');
		if(!$('#menu_right ul').is(":hover")) {
			$('#dropdown_right').hide( "slide", {direction: "left"}, 250 );
		}
	}, 1);
});

var listElement;

$('#menu_left li').hover(
	function() {
		$('#dropdown_left').show( "slide", {direction: "right"}, 250 );
		//BSP: Funktionsaufruf
		//onClick="showDiv(\'#tisch\')
		switch($(this).text()) {
			case 'Zelt':
				$('#dropdown_left').html('<ul><li><a onClick="showDiv()">Klappzelte</a></li></ul>');
				return;
			case 'Tisch':
				$('#dropdown_left').html('<ul><li><a onClick="showDiv()">Klapptisch rechteckig</a></li><li><a onClick="showDiv()">Klapptisch rund</a></li><li><a onClick="showDiv()">Steh- und Bistrotische</a></li><li><a onClick="showDiv()">Tischgarnituren</a></li></ul>');
				return;
			case 'Stuhl':
				$('#dropdown_left').html('<ul><li><a onClick="showDiv()">Klappstühle</a></li><li><a onClick="showDiv()">Stapelstühle</a></li><li><a onClick="showDiv()">Diverse Stühle</a></li><li><a onClick="showDiv()">Holzstühle</a></li></ul>');
				return;
			case 'Diverses':
				$('#dropdown_left').html('<ul><li><a onClick="showDiv()">Tisch- und Stuhlhussen</a></li><li><a onClick="showDiv()">Spezial Design Möbel</a></li><li><a onClick="showDiv()">Verschiedenes</a></li></ul>');
				return;
		}
	}, function() {
		listElement = this;
		// FÜR CHROME/IE
		if(!$('#menu_left').is(":hover") && !$('#bg_container').is(":hover")) {
		//if($('#dropdown_left').is(":hover")) {
			$(listElement).addClass('menu_active');
		}
		// FÜR FIREFOX
		setTimeout(function() {
			//if($('#dropdown_left').is(":hover")) {
			if(!$('#menu_left').is(":hover") && !$('#bg_container').is(":hover")) {
				$(listElement).addClass('menu_active');
			}
		}, 1);
	}
);

function showDiv(div) {
	$('.pages').hide();
	$(div).show();
}

$('#menu_right li').hover(
	function() {
		$('#dropdown_right').show( "slide", {direction: "left"}, 250 );
	}, function() {
		listElement = this;
		if(!$('#menu_right').is(":hover") && !$('#bg_container').is(":hover")) {
			$(listElement).addClass('menu_active');
		}
		setTimeout(function() {
			if($('#dropdown_right').is(":hover")) {
				$(listElement).addClass('menu_active');
			}
		}, 1);
	}
);

$('body').mouseleave(
	function() {
		setTimeout(function() {
			$('#menu_left li').removeClass('menu_active');
		}, 1);
	}
);

$(window).resize(function() {
	$('#dropdown_left').hide();
	//setHeight();
});

function setHeight() {
	var height = $(window).height();
	var marginTop = $("#content_container").css("marginTop").replace('px', '');
	var content_height = height-marginTop;
	$("#content_container").height(content_height);
	$("#radius").height(content_height);
}

/*
$('#radius').mouseenter(
	function() {
		//setTimeout(function() {
			alert('hihi');
		//}, 1);
	}
);
*/