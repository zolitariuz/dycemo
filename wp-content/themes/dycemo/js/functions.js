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

	    // Haz una cita
	    toggleFechaCita();
	    $( "#datepicker" ).datepicker();
	    procesaCita();
	    procesaContacto();

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

function procesaCita(){
	$('.forma-cita input[type="submit"]').on('click', function(e){
		var nombre = $('input[name="nombre"').val();
		var email = $('input[name="email"').val();
		var celular = $('input[name="celular"').val();
		var fecha = $('input[name="fecha"').val();

		e.preventDefault();
		$.ajax({
		  	type: 'POST',
		  	url: ajax_url,
		  	data: {
		  		nombre: nombre,
		  		email: email,
		  		celular: celular,
		  		fecha: fecha,
		  		action: "procesa_cita"
		  	},
		  	success: function(data){
		  		console.log(data);
		  	}
		});
	});
}

function toggleFechaCita(){
	$('#datepicker').hide();
	$('input[name="agendar"]').change(function(){
		if($(this).prop('checked')){
			$('#datepicker').removeClass('hide');
			$('#datepicker').addClass('block');
		}
		else{
			$('#datepicker').removeClass('block');
			$('#datepicker').addClass('hide');
		} 	
	});
}

function procesaContacto(){
	$('.forma-contacto input[type="submit"]').on('click', function(e){
		var nombre = $('input[name="nombre"').val();
		var email = $('input[name="email"').val();
		var celular = $('input[name="celular"').val();
		var msg = $('textarea[name="mensaje"').val();
		console.log(msg);

		e.preventDefault();
		$.ajax({
		  	type: 'POST',
		  	url: ajax_url,
		  	data: {
		  		nombre: nombre,
		  		email: email,
		  		celular: celular,
		  		mensaje: msg,
		  		action: "procesa_contacto"
		  	},
		  	success: function(data){
		  		console.log(data);
		  	}
		});
	});
}

