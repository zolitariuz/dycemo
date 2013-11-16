	<?php get_header(); ?>

	<div id="lateral_izquierdo">

			<div id="parrafo">

				<h1>DYCEMO</h1>
				<p>En Dycemo nos dedicamos a la planeación, arquitectura y construcción de viviendas residenciales en México D.F. Buscamos diseñar espacios familiares dentro de la ciudad que sean tranquilos, seguros y cómodos.  </p>

			</div><!--Termina Parrafo-->

			 <img src="<?php echo THEMEPATH; ?>images/foto_intro.jpg" border="0" />

			 <h6>Tenemos más de tres décadas construyendo residencias en la Ciudad de México. Te invitamos a conocer <a href="nosotros.html" target="_self" border="0">nuestro trabajo. </a></h6>

			 <hr color="#EAEAEA"/>

			 <div id="botones">
				<img src="<?php echo THEMEPATH; ?>images/botones_inicio.png" border="0" usemap="#Map"/>

				<map name="Map" id="Map">
					 <area shape="rect" coords="1,-1,269,120" href="contacto.php" target="_self" />
					 <area shape="rect" coords="279,2,547,129" href="http://dycemo.blogspot.mx/" target="_blank" />
				</map>
			 </div><!--Termina Botones Contactanos y Tips de Interiorismo-->

		 	<div id="botones">
				 <img src="<?php echo THEMEPATH; ?>images/btns_redes.png" border="0" usemap="#Map2" />
				 <map name="Map2" id="Map2">
					 <area shape="circle" coords="12,13,13" href="https://www.facebook.com/pages/Dycemo/200394369974970" target="_blank" title="Síguenos en Facebook" />
					 <area shape="circle" coords="48,12,13" href="http://dycemo.blogspot.mx/" target="_blank" title="Tips y decoración en nuestro blog" />
					 <area shape="circle" coords="83,13,11" href="https://twitter.com/#!/CDycemo" target="_blank" />
				 </map>
			 </div><!--Termina Botones Redes-->

		</div><!--Termina Lateral Izquierdo-->

		<div id="lateral_derecho">
			<a href="enventa.php" target="_self" title="Ver condominio en venta">
				<img src="<?php echo THEMEPATH; ?>images/condominio_venta1.png" border="0" />
			</a>
		</div><!--Termina Lateral Derecho-->

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>