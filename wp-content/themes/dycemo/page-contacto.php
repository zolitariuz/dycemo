<?php get_header(); ?>

	<div class="width">

		<h2 class="texto-centrado">Contacto</h2>

		<form class="dos_tercios forma-cita left caja" action="">

			<input type="text" name="nombre" value="Nombre">
			<input type="email" name="email" value="E-mail">
			<input type="tel" name="celular" value="Celular">
			<textarea name="mensaje" rows="7">Mensaje</textarea>
			<input type="submit" value="enviar">

		</form><!-- forma-cita -->

		<div class="tercio left caja">
			<h3>Dirección</h3>
			<p>Constructora Dycemo S.A. de C.V. Cerrada de Presa Escolta # 42-6 San Jerónimo, Lídice, C.P. 10200</p>

			<h3>Teléfonos</h3>
			<p>
				55 56 83 68 00 <br />
				55 56 68 78 48 <br />
				55 56 68 78 56 <br />
			</p>

			<h3>Fax</h3>
			<p>55 56 81 16 49</p>

			<h3>Horario de atención</h3>
			<p>Lunes-Viernes 9am a 5pm</p>

		</div>

	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>