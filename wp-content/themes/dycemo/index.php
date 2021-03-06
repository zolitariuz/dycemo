<?php get_header(); ?>

	<div class="width clearfix">

		<div class="caja clearfix margin-bottom">
			
			<?php
				$home = get_page_by_title( 'home' );
				$homeId = $home->ID;
				$homeContent = $home->post_content;
			?>

			<div class="columna c-6 medium-12">
				<?php echo get_the_post_thumbnail( $homeId ); ?>
			</div><!-- mitad -->

			<div class="columna c-6 medium-12">

				<?php echo wpautop( $homeContent ); ?>

				<div class="z"></div>

			</div><!-- columna c-6 -->
		</div><!-- caja -->

		<div class="clear"></div>

		<hr class="columna c-12">

		<?php
		$noticiasArgs = array(
			'category_name' 	=> 'noticias',
			'posts_per_page' 	=> 2
		);
		$noticiasQuery = new WP_Query($noticiasArgs);

		if( $noticiasQuery->have_posts() ) : while( $noticiasQuery->have_posts() ) : $noticiasQuery->the_post(); ?>

			<div class="post columna c-4 medium-6 small-12">

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>

				<div class="caja info">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php the_excerpt(); ?></p>
				</div><!-- caja -->

			</div><!-- tercio -->

		<?php endwhile; endif; wp_reset_query(); ?>


		<form class="forma-cita forma columna c-4 medium-12 caja">

			<h3 class="texto-centrado">Haz una cita</h3>

			<input class="required" type="text" id="nombre" name="nombre" placeholder="Nombre">
			<input class="required email" type="email" name="email" placeholder="E-mail">
			<input class="required" type="tel" name="celular" placeholder="Celular">

			<input class="left" name="agendar" type="checkbox">
			<label class="left" for="agendar">Quiero agendar una cita</label>

			<input type="text" name="fecha" id="datepicker" class="margin-bottom" value="Escoge la fecha">

			<input type="submit" value="enviar">

		</form><!-- forma-cita -->


	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>