<?php get_header(); ?>

	<div class="width">

		<a class="boton tabs alto tercio left" data-seccion="galeria" href="#">Galería</a>

		<a class="boton tabs alto tercio left" data-seccion="recorrido" href="#">Recorrido virtual</a>

		<a class="boton tabs alto tercio left" data-seccion="plano" href="#">Plano interactivo</a>

		<div class="clear"></div>

		<div class="pestana slider galeria cycle-slideshow width abierto" data-seccion="galeria">

			<img src="<?php echo THEMEPATH; ?>images/slide-pinos-01.jpg" alt="">
			<img src="<?php echo THEMEPATH; ?>images/slide-pinos-02.jpg" alt="">
			<img src="<?php echo THEMEPATH; ?>images/slide-pinos-03.jpg" alt="">

		</div><!-- slider -->

		<div class="pestana recorrido width cerrado" data-seccion="recorrido">
			<h2>Recorrido</h2>
		</div><!-- recorrido -->

		<div class="pestana plano width cerrado" data-seccion="plano">
			<h2>Plano</h2>
		</div><!-- plano -->

		<div class="quinto caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/cuartos.png" alt="">

			<div class="info">
				<h3 class="texto-centrado">4 habitaciones y 4.5 baños</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="quinto caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/jardin.png" alt="">

			<div class="info">
				<h3 class="texto-centrado">196-300m<sup>2</sup> con jardines amplios</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="quinto caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/estacionamiento.png" alt="">

			<div class="info">
				<h3 class="texto-centrado">Estacionamiento</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="quinto caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/habitaciones.png" alt="">

			<div class="info">
				<h3 class="texto-centrado">Tapanco, terraza y roofgarden</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="quinto caracteristica left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/seguridad.png" alt="">

			<div class="info">
				<h3 class="texto-centrado">Vigilancia y portón eléctrico</h3>
			</div><!-- caja -->

		</div><!-- quinto -->

		<div class="clear"></div>

		<div class="dos_tercios left content">

			<p>Sea parte de este exclusivo condominio residencial ubicado en la avenida Los Pinos #5 de la colonia San Jerónimo Lídice, una de las zonas más bellas, tranquilas y mejor comunicadas al sur de la Ciudad de México.</p>
			<p>Todas las residencias están construidas con materiales nacionales de la más alta calidad y con acabados de lujo que, con ayuda de nuestros expertos, podrá <a href="#">personalizar</a>.</p>
			<p>El <a href="#">proyecto</a> esta pensado para la comodidad de su familia, con espacios ámplios que van desde los <strong>196 a los 300 metros cuadrados</strong> de terreno por casa, 4 habitaciones, 4.5 baños, jardín privado, comedor, desayunador y terraza. El condominio cuenta con vigilancia las 24 horas y portón eléctrico. </p>

			<iframe width="635" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=19.332749,-99.21578&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=49.757664,92.988281&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=19.332749,-99.21578&amp;output=embed"></iframe>

		</div><!-- content -->

		<div class="tercio left">
			<a class="boton alto personaliza" href="#">Personaliza tu casa</a>
		</div>

		<form class="tercio forma-cita left caja" action="">

			<h3 class="texto-centrado">Haz una cita</h3>

			<input type="text" name="nombre" value="Nombre">
			<input type="email" name="email" value="E-mail">
			<input type="tel" name="celular" value="Celular">

			<input class="left" name="agendar" type="checkbox">
			<label class="left" for="agendar">Quiero agendar una cita</label>

			<input type="submit" value="enviar">

		</form><!-- forma-cita -->

	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>