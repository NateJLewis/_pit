(function( $ ) {
	"use strict";
	$(document).ready(function() {

		$('[data-toggle="sidebar"]').click(function(e){
			e.preventDefault();
			var target = $(this).data('target');
			$(target).toggleClass('fold');
		})
    });

})( jQuery );
