$(function(){
	'use strict';

	$("li a[href^='#']").on('click', function(e))	

	    var hash = this.hash;
	   

	    $('html, body').animate({
	        'scrollTop': $(hash).offset().top
	    }, 900, function () {

	    	// when done, add hash to url
	    	// (default click behaviour)
	        window.location.hash = hash;
	    });
	});
};
