<?php get_header(); ?>

	<div class="width clearfix">

		<a class="boton tabs alto columna c-4 activo" data-seccion="galeria" href="#">Galería</a>

		<a class="boton tabs alto columna c-4" data-seccion="recorrido" href="#">Recorrido virtual</a>

		<a class="boton tabs alto columna c-4" data-seccion="plano" href="#">Plano interactivo</a>

		<div class="clear margin-bottom"></div>

		<div class="content-tabs margin-bottom columna c-12">

			<div class="tab slider galeria cycle-slideshow abierto" data-seccion="galeria">

				<img src="<?php echo THEMEPATH; ?>images/slide-pinos-01.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slide-pinos-02.jpg" alt="">
				<img src="<?php echo THEMEPATH; ?>images/slide-pinos-03.jpg" alt="">

			</div><!-- slider -->

			<div class="tab slider recorrido width cerrado" data-seccion="recorrido">
				<h2>Recorrido</h2>
			</div><!-- recorrido -->

			<div class="tab slider plano width cerrado" data-seccion="plano">
				<h2>Plano</h2>
			</div><!-- plano -->

		</div><!-- cotent-tabs -->

		<div class="columna c-2 medium-4 caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/cuartos.png" alt="">

			<div class="info">
				<h3 class="text-center">4 habitaciones y 4.5 baños</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="columna c-2 medium-4 caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/jardin.png" alt="">

			<div class="info">
				<h3 class="text-center">196-300m<sup>2</sup> con jardines amplios</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="columna c-2 medium-4 caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/estacionamiento.png" alt="">

			<div class="info">
				<h3 class="text-center">Estacionamiento</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="clear"></div>

		<div class="columna c-2 medium-4 caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/habitaciones.png" alt="">

			<div class="info">
				<h3 class="text-center">Tapanco, terraza y roofgarden</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="columna c-2 medium-4 caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/seguridad.png" alt="">

			<div class="info">
				<h3 class="text-center">Vigilancia y portón eléctrico</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="columna c-2 medium-4 caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/seguridad.png" alt="">

			<div class="info">
				<h3 class="text-center">Vigilancia y portón eléctrico</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="clear"></div>

		<div class="columna c-8 small-12 content">

			<p>Sea parte de este exclusivo condominio residencial ubicado en la avenida Los Pinos #5 de la colonia San Jerónimo Lídice, una de las zonas más bellas, tranquilas y mejor comunicadas al sur de la Ciudad de México.</p>
			<p>Todas las residencias están construidas con materiales nacionales de la más alta calidad y con acabados de lujo que, con ayuda de nuestros expertos, podrá <a href="#">personalizar</a>.</p>
			<p>El <a href="#">proyecto</a> esta pensado para la comodidad de su familia, con espacios ámplios que van desde los <strong>196 a los 300 metros cuadrados</strong> de terreno por casa, 4 habitaciones, 4.5 baños, jardín privado, comedor, desayunador y terraza. El condominio cuenta con vigilancia las 24 horas y portón eléctrico. </p>

			<div class="mapa">
				<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=19.332749,-99.21578&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=49.757664,92.988281&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=19.332749,-99.21578&amp;output=embed"></iframe>
			</div>

		</div><!-- content -->

		<div class="columna c-4 small-12">

			<a class="boton alto escoge margin-bottom" href="#">Escoge tu casa</a>

			<a class="boton alto personaliza margin-bottom" href="#">Personaliza tu casa</a>

			<form class="forma-cita forma columna c-4 caja">

				<h3 class="texto-centrado">Haz una cita</h3>

				<input type="text" name="nombre" value="Nombre">
				<input type="email" name="email" value="E-mail">
				<input type="tel" name="celular" value="Celular">

				<input class="left" name="agendar" type="checkbox">
				<label class="left" for="agendar">Quiero agendar una cita</label>

				<input type="text" name="fecha" id="datepicker" class="margin-bottom" value="Escoge la fecha">
				
				<input type="submit" value="enviar">

			</form><!-- forma-cita -->

		</div><!-- columna c-4 -->

	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>