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

	    $.validator.addMethod("notEqualTo", function(v, e, p) {
			return this.optional(e) || v != p;
		}, 'Por favor introduce un valor distinto al default.');

	    $('.forma-contacto').validate({
	   		rules: {
				nombre: { notEqualTo: 'Nombre' },
				email: { notEqualTo: 'E-mail' },
				celular: { notEqualTo: 'Celular' },
				mensaje: { notEqualTo: 'Mensaje' }
			}
	    });

	});

})(jQuery);

function showHide( clicked, data, container ){
	var conatiner = $(clicked).data(data);

	$('.pestana').hide();
	$(".pestana[data-seccion='"+seccion+"']").show();
}
