(function($){

	"use strict";

	$(function(){

		// Toggle menu movil
		toggleMenuMovil();
		mostrarMenu();

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

	    //Recorrido virtauk
	    $('.fitvids').fitVids();

	    // Haz una cita
	    toggleFechaCita();
	    $( "#datepicker" ).datepicker();
	    procesaCita();
	    procesaContacto();

	    //CHOSEN
	    $('.chosen-casa').chosen({
	    	disable_search_threshold: 100,
			width: "100%"
	    });

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

	    $('.forma-cita').validate({
	   		rules: {
				nombre: { notEqualTo: 'Nombre' },
				email: { notEqualTo: 'E-mail' },
				celular: { notEqualTo: 'Celular' },
				fecha: { notEqualTo: 'Escoge la fecha' }
			}
	    });

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
		  		json = $.parseJSON(data);
		  		$('.forma').html('<p>Gracias por contactarnos '+json.nombre+', en breve nos pondremos en contacto contigo.</p>');
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
		  		json = $.parseJSON(data);
		  		$('.forma').html('<p>Gracias por contactarnos '+json.nombre+', en breve nos pondremos en contacto contigo.</p>');
		  	}
		});
	});
}

function mostrarMenu() {
	$(window).resize(function(){
		console.log($(window).width());
		if ($(window).width() > 768)
	   		$('.menu').attr('style', 'display: block');
	   	else
	   		$('.menu').attr('style', 'display: none');

	});
}

function toggleMenuMovil(){

	$('#btn-movil').on('click', function(e){
		e.preventDefault();
		console.log('muestra menu');
		if($('.menu').css('display')=='none'){
			$('.menu').slideDown('fast');
		} else {
			$('.menu').slideUp('fast');
		}
	});
}

