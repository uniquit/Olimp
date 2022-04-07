jQuery( document ).ready(function($) {
	$('.toggle-mobile-menu').click(function(e) {
			e.preventDefault();  // don't grab focus
			
		if($('body').hasClass('mobile-menu-active') ) {
			$("#smobile-menu #primary-menu li a").first().focus();
			$( document ).on( 'keydown', function ( e ) {
				console.log(e.keyCode);
				if ( e.keyCode === 27 ) { 
					closeMenu();
				}
			});
			
			$('#smobile-menu .smenu-hide').on('keydown', function (e) {
				if((e.keyCode === 9 && e.shiftKey) || e.keyCode === 13) {
					   //shift tab or enter on "menu" close menu
					closeMenu();
				}
			});
		}

	});
	
	
	function closeMenu(){
		$('.toggle-mobile-menu').trigger("click");
		$( document ).off("keydown");
					$('#smobile-menu .smenu-hide').off("keydown");
					setTimeout(function(){
						$('.super-menu-inner .toggle-mobile-menu').focus();
					}, 10);
					$('.super-menu-inner .toggle-mobile-menu').focus();
	}


	$(document).ready(function(){

		$("#smobile-menu #primary-menu").append(
			'<li><a href="" id="accessibility-close-mobile-menu" style="padding:0;height:0;"></a></li>'
		);

		$("#accessibility-close-mobile-menu").focusin(function(e){
			$('.toggle-mobile-menu').click();
			$('#primary a').first().focus();
			$( document ).off("keypress");
		});

	});
	
	
});