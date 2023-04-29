$(function() {
	//onload
});

var listElement;

$('#menu_left li').hover(
	function() {
		$('#dropdown_left').show( "slide", {direction: "right"}, 250 );
		switch($(this).text()) {
			case 'Zelt':
				$('#dropdown_left').html('<ul><li><a onClick="showDiv()">Zelt 1</a></li><li><a onClick="showDiv()">Zelt 2</a></li></ul>');
				return;
			case 'Tisch':
				$('#dropdown_left').html('<ul><li><a onClick="showDiv(\'#tisch\')">Tisch 1</a></li><li><a onClick="showDiv()">Tisch 2</a></li></ul>');
				return;
			case 'Stuhl':
				$('#dropdown_left').html('<ul><li><a onClick="showDiv()">Stuhl 1</a></li><li><a onClick="showDiv()">Stuhl 2</a></li></ul>');
				return;
			case 'Diverses':
				$('#dropdown_left').html('<ul><li><a onClick="showDiv()">Diverses 1</a></li><li><a onClick="showDiv()">Diverses 2</a></li></ul>');
				return;
		}
	}, function() {
		listElement = this;
		setTimeout(function() {
			if($('#dropdown_left').is(":hover")) {
				$(listElement).addClass('menu_active');
			}
		}, 1);
	}
);

$('#menu_left ul, #dropdown_left').hover(
	function() {
		// nothing
	}, function() {
		$('#menu_left li').removeClass('menu_active');
		setTimeout(function() {
			if(!$('#menu_left ul').is(":hover") && !$('#dropdown_left').is(":hover")) {
				$('#dropdown_left').hide( "slide", {direction: "right"}, 250 );
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
		setTimeout(function() {
			if($('#dropdown_right').is(":hover")) {
				$(listElement).addClass('menu_active');
			}
		}, 1);
	}
);

$('#menu_right ul, #dropdown_right').hover(
	function() {
		// nothing
	}, function() {
		$('#menu_right li').removeClass('menu_active');
		setTimeout(function() {
			if(!$('#menu_right ul').is(":hover") && !$('#dropdown_right').is(":hover")) {
				$('#dropdown_right').hide( "slide", {direction: "left"}, 250 );
			}
		}, 1);
	}
);
