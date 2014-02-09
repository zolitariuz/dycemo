(function($){

	"use strict";

	$(function(){

	    window.validateEmail = function (email) {
	    	var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    	return regExp.test(email);
	    };

	    //Fancybox
	    $('.fancybox').fancybox({
	    	beforeShow : function() {
		        var alt = this.element.find('img').attr('alt');

		        this.inner.find('img').attr('alt', alt);

		        this.title = alt;
		    }
	    });

	    //Tabs
	    var seccion;
	    $('.tabs').on('click', function(){
	    	seccion = $(this).data('seccion');

	    	$('.pestana').hide();
	    	$(".pestana[data-seccion='"+seccion+"']").show();
	    });


	});

})(jQuery);
