

// tab controls
jQuery(document).ready(function($){

	if ( $( '.accordions' ).length ) {

		$( '.accordions .accordion .accordion-title' ).click(function(){
			$( this ).parent( '.accordion' ).toggleClass( 'open' );
			$( this ).next( '.accordion-content' ).slideToggle( 300 );
		});

	}

});

