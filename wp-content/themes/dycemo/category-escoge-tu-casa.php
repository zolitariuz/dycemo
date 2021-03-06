<?php get_header(); ?>

	<div class="width clearfix">

		<h2 class="text-center">Escoge tu casa</h2>

		<div class="columna c-2 medium-12 escoge-botones">

			<a href="#" data-seccion="plano" class="boton tabs block columna c-12 medium-3 text-center alto margin-bottom activo">Plano</a>
			<a href="#" data-seccion="casa-1" class="boton tabs block columna c-12 medium-3 text-center alto margin-bottom">Casa 1</a>
			<a href="#" data-seccion="casa-2" class="boton tabs block columna c-12 medium-3 text-center alto margin-bottom">Casa 2</a>
			<a href="#" data-seccion="casa-3" class="boton tabs block columna c-12 medium-3 text-center alto margin-bottom">Casa 3</a>
			<a href="#" data-seccion="casa-4" class="boton tabs block columna c-12 medium-3 text-center alto margin-bottom">Casa 4</a>

		</div><!-- columna c-4 -->

		<div class="margin-bottom columna c-10 medium-12 content-tabs">

			<div class="tab plano abierto" data-seccion="plano">
				<?php
				$planoArgs = array(
					'post_type' 	=> 'en-venta',
					'category_name'	=> 'complejo',
					'name' 			=> 'plano'
				);
				$planoQuery = new WP_Query($planoArgs);

				if( $planoQuery->have_posts() ) : while( $planoQuery->have_posts() ) : $planoQuery->the_post();
					the_post_thumbnail('full');
				endwhile; endif; wp_reset_query();
				?>
			</div><!-- tab -->

			<?php
			$numeroCasa  = 1;
			$casasArgs = array(
				'post_type' 	=> 'en-venta',
				'category_name'	=> 'casas'
			);
			$casasQuery = new WP_Query($casasArgs);

			if( $casasQuery->have_posts() ) : while( $casasQuery->have_posts() ) : $casasQuery->the_post();?>

				<div class="tab cerrado" data-seccion="casa-<?php echo $numeroCasa; ?>">

				<?php
					the_post_thumbnail('full', array('class' => 'margin-bottom'));
					the_content();

					$casas = get_post_meta($post->ID, '_casas_meta', true);
					$casasArray = explode(', ', $casas);
				?>

				<form class="forma-cita forma full caja">
					<p>Dejanos tus datos y dinos que casa quieres.</p>

					<input type="text" name="nombre" value="Nombre">
					<input type="email" name="email" value="E-mail">
					<input type="tel" name="celular" value="Celular">

					<select name="casa" class="chosen-casa columna c-8 small-12 small-margin-bottom" name="chosen">
						<?php foreach ($casasArray as $unacasa) { ?>
							<option value="<?php echo $unacasa; ?>">Casa <?php echo $unacasa; ?></option>
						<?php } ?>
					</select>


					<input type="submit" value="enviar">

				</form><!-- forma-cita -->

			</div><!-- tab casa-1 -->

			<?php $numeroCasa++; endwhile; endif; wp_reset_query(); ?>


		</div><!-- columna c-8 -->


	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>