(function($){

	"use strict";

	$(function(){

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

	    	$('.content-tabs > .tab').hide();
	    	$(".content-tabs > .tab[data-seccion='"+seccion+"']").show();

	    });

	    $( "#datepicker" ).datepicker();

	    //CHOSEN
	    $('.chosen-casa').chosen();

	    $('.forma-contacto').validate();

	});

})(jQuery);

function showHide( clicked, data, container ){
	var conatiner = $(clicked).data(data);

	$('.pestana').hide();
	$(".pestana[data-seccion='"+seccion+"']").show();
}
