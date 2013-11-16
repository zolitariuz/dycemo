<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dycemo</title>
<meta name="keywords" content="Casas, venta, San Jerónimo, Inmobiliaria, Dycemo, Constructora Dycemo, México DF, venta de casas, construcción de casas, arquitectos, arquitectura, México, Distrito Federal, Magdalena Contreras, Lidice"/>

<!--Analytics Google: -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-32189926-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!--Estilos: -->
<link rel="stylesheet" href="estilos/estilo.css" /> <!--css principal-->
<link href="estilos/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->

<!--Webfonts: -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

<!--Forma Contacto: -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="java/jquery.jigowatt.js"></script><!-- AJAX Form Submit -->

<!--Sexy Slider (galeria): -->
<script type="text/javascript" src="java/jquery.min.js"></script>
<script type="text/javascript" src="java/jquery.sexyslider.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#slider').SexySlider({
	  
      width  : 600,
      height : 390,
      strips : 20,
      delay  : 5000,
	  control: '#control',
      effect : 'random',
      direction: 'random'
    });
  });
</script>

<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
</head>



<body>

<div id="linea_azulTop"> </div>
<div id="page_wrap" class="group">

	<header>
		<div id="logo"> <a href="index.html"><img src="imgs/logo.png" border="0" /></a> </div><!--Termina Logo-->
    	<nav>
    		<a href="index.html">Inicio</a> 
			<a href="enventa.php" class="selected">En venta</a> 
			<a href="nosotros.html">Nosotros</a> 
			<a href="contacto.php">Contacto</a> 
   		</nav>
    </header>
    


	<div id="lateral_izquierdo">
    
    	<div id="slider">
  			<img src="galeria1/img_1.jpg" alt="" />
  			<img src="galeria1/img_2.jpg" alt="" />
  		</div>

		<div id="navigation"></div>
			<div id="control"></div>
		<div id="control"></div><!--Termina Galeria-->
        
        <div id="parrafo">
         <h1>Residencial Pino 5</h1>
         <p>Este conjunto ubicado en la colonia San Jerónimo al sur de México D.F. cuenta con 14 casas nuevas de 240 a 320 metros cuadrados de construcción ideales para tu familia. El condominio cuenta con espacios abiertos, vigilancia y portón eléctrico. Cada casa tiene estacionamiento para 3 o 4 automoviles. La excelente orientación brinda mucha iluminación y una temperatura agradable. Al interior encontrarás detalles y acabados de lujo y ofrecemos la opción de presonalizar tu hogar a tu gusto.</p>
        </div><!--Termina Parrafo-->

        
  </div><!--Termina Lateral Izquierdo-->


	<div id="lateral_derecho">
    	
        <img src="imgs/top_preventa.png" border="0"/>
        
    	<div id="specs">
        	<ul>
            	
                <li><h2>14 casas</h2></li>
                <li><h2>3 o 4 habitaciones con baño</h2></li>
                <li><h2>Jardines amplios y privados</h2></li>
                <li><h2>Vigilancia</h2></li>
                <li><h3>Desde $4,400,000</h3></li>
            </ul>
        </div><!--Terminan SPECS-->
        
        <img src="imgs/pdf_LosPinos.png" border="0"/>
        
        <div id="contact">

			<div id="message"></div>

			<form method="post" action="contact.php" name="contactform" id="contactform">

			<fieldset>

			<legend>Haz un cita para ver el conjunto:</legend>

			<label for="name" accesskey="U"><span class="required">*</span> Nombre</label>
			<input name="name" type="text" id="name" size="30" value="" />

			<br />
			<label for="email" accesskey="E"><span class="required">*</span> Email</label>
			<input name="email" type="text" id="email" size="30" value="" />

			<br />
			<label for="phone" accesskey="P"><span class="required">*</span> Celular</label>
			<input name="phone" type="text" id="phone" size="30" value="" />

			<input type="submit" class="submit" id="submit" value="Enviar" />

			</fieldset>

			</form>

	</div><!--Termina Contacto-->
    	
       
       
	</div><!--Termina Lateral Derecho-->
   
</div><!--Termina Wrap-->

<footer>
	<div id="footer_wrap">
    	<p>Constuctora Dycemo s.a. de c.v. <br/> Tel.55 56 83 68 00 info@dycemo.com</p>
    </div><!--Termina Footer Wrap-->
</footer>

</body>
</html>
