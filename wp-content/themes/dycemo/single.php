<?php get_header(); the_post() ?>

	<div class="width clearfix">

		<div class="post columna c-12">
			<div class="columna c-6 small-12">
				<?php the_post_thumbnail( 'large' ); ?>
			</div>

			<div class="caja info columna c-6 small-12">
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</div><!-- caja -->

		</div><!-- tercio -->


		<form class="forma-cita forma columna c-6 medium-12 caja">

			<h3 class="texto-centrado">Haz una cita</h3>

			<input type="text" name="nombre" value="Nombre">
			<input type="email" name="email" value="E-mail">
			<input type="tel" name="celular" value="Celular">

			<input class="left" name="agendar" type="checkbox">
			<label class="left" for="agendar">Quiero agendar una cita</label>

			<input type="text" name="fecha" id="datepicker" class="margin-bottom" value="Escoge la fecha">

			<input type="submit" value="enviar">

		</form><!-- forma-cita -->


	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>