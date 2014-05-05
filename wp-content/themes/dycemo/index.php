<?php get_header(); ?>

	<div class="width clearfix">

		<div class="columna c-6">
			<img src="<?php echo THEMEPATH; ?>images/dycemo.jpg" alt="Nosotros">
		</div><!-- mitad -->

		<div class="columna c-6">
			<div class="caja">

				<p>En Dycemo nos dedicamos a la planeación, arquitectura y construcción de viviendas residenciales en México D.F. Buscamos diseñar espacios familiares dentro de la ciudad que sean tranquilos, seguros y cómodos.</p>
				<p>Tenemos más de tres décadas construyendo residencias en la Ciudad de México. Te invitamos a conocer nuestro trabajo.</p>

			</div><!-- caja -->
		</div><!-- mitad -->

		<div class="clear"></div>

		<hr class="columna c-12">

		<div class="noticia columna c-4">

			<img src="<?php echo THEMEPATH; ?>images/noticia-01.png" alt="">

			<div class="caja info">
				<h3>Lorem Ipsum</h3>
				<p>Consectetur adipiscing elit tollenda est atque extrahenda radicitus duo reges constructio interrete cur igitur cum de re conveniat non malumus usitate.</p>
			</div><!-- caja -->

		</div><!-- tercio -->

		<div class="noticia columna c-4">

			<img src="<?php echo THEMEPATH; ?>images/noticia-01.png" alt="">

			<div class="caja info">
				<h3>Consectetur adipiscing </h3>
				<p>Consectetur adipiscing elit tollenda est atque extrahenda radicitus duo reges constructio interrete cur igitur cum de re conveniat non malumus usitate.</p>
			</div><!-- caja -->

		</div><!-- tercio -->

		<form class="forma-cita columna c-4 caja" action="">

			<h3 class="texto-centrado">Haz una cita</h3>

			<input type="text" name="nombre" value="Nombre">
			<input type="email" name="email" value="E-mail">
			<input type="tel" name="celular" value="Celular">

			<input class="left" name="agendar" type="checkbox">
			<label class="left" for="agendar">Quiero agendar una cita</label>

			<p>Date: <input type="text" id="datepicker"></p>
			
			<input type="submit" value="enviar">

		</form><!-- forma-cita -->


	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>