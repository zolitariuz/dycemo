<?php get_header(); ?>

	<div class="width clearfix">

		<h2 class="text-center" >Noticias</h2>

		<?php

		if( have_posts() ) : while( have_posts() ) : the_post(); ?>

			<div class="post columna c-4 medium-6 small-12">

				<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'large' ); ?></a>

				<div class="caja info">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></p>
				</div><!-- caja -->

			</div><!-- tercio -->

		<?php endwhile; endif; wp_reset_query(); ?>


		<form class="forma-cita forma columna c-4 medium-12 caja">

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