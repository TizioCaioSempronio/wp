$(function(){
	'use strict';

	$("li a[href^='#']").on('click', function(e))	{

		// prevent default anchor click behaviour
		e.preventDefault();
		

		var hash = this.hash;

	    // animate
	    $('html, body').animate({
	    	scrollTop: $(hash).offset().top
	    }, 900, function () 

	    	// when done, add hash to url
	    	// (default click behaviour)
	    	window.location.hash = hash;
	    });
	});
};
