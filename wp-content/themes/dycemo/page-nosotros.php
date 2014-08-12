<?php
	get_header();
	the_post();
?>

	<div class="width">

		<h2 class="text-center">Nosotros</h2>

		<div class="caja full clearfix">

			<div class="span c-6 no-medium content">

				<?php
					$attachmentsArgs = array(
			            'post_type' => 'attachment',
			            'posts_per_page' => -1,
			            'post_parent' => $post->ID
			        );
			        $attachments = get_posts($attachmentsArgs);

			        if ( $attachments ) {
			            foreach ( $attachments as $attachment ) {
			            	$imgUrl = wp_get_attachment_image_src($attachment->ID, 'full');
			            	echo '<img src="'.$imgUrl[0].'" alt="">';
			            }
			        }
				?>

			</div>

			<div class="columna c-6 medium-10 small-12 medium-center right">
				<?php the_content();  ?>
			</div>

		</div>

		<div class="clear"></div>
		<hr>

		<div class="portafolio clearfix">
			<h3>Portafolio</h3>

			<?php
				$portafolio = get_page_by_title( 'portafolio' );
				$portafolioId = $portafolio->ID;

				$attachmentsArgs = array(
		            'post_type' => 'attachment',
		            'posts_per_page' => -1,
		            'post_parent' => $portafolioId
		        );
		        $attachments = get_posts($attachmentsArgs);

		        if ( $attachments ) {
		            foreach ( $attachments as $attachment ) {
		            	$fullUrl = wp_get_attachment_image_src($attachment->ID, 'full');
		            	$thumbUrl = wp_get_attachment_image_src($attachment->ID, 'thumbnail');
		            	$alt = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true); ?>
		            	<a class="fancybox block columna c-2 medium-3 small-6" rel="group" href="<?php echo $fullUrl[0]; ?>"><img src="<?php echo $thumbUrl[0]; ?>" alt="<?php echo $alt; ?>" /></a>

		            <?php }
		        }
			?>
		</div><!-- portafolio -->

		<div class="clear"></div>
		<hr>

		<div class="clearfix">

			<div class="columna c-3 medium-6 small-12">

				<h3 class="text-center">Misión</h3>
				<p><?php echo get_post_meta($post->ID, '_mision_meta', true); ?></p>

			</div><!-- cuarto -->

			<div class="columna c-3 medium-6 small-12">

				<h3 class="text-center">Visión</h3>
				<p><?php echo get_post_meta($post->ID, '_vision_meta', true); ?></p>

			</div><!-- cuarto -->

			<div class="clear-medium"></div>

			<div class="columna c-3 medium-6 small-12">

				<h3 class="text-center">Valores</h3>
				<p><?php echo get_post_meta($post->ID, '_valores_meta', true); ?></p>

			</div><!-- cuarto -->

			<form class="columna c-3 medium-6 small-12 forma-cita forma caja" action="">

				<h3 class="text-center">Haz una cita</h3>

				<input class="required" type="text" id="nombre" name="nombre" placeholder="Nombre">
				<input class="required email" type="email" name="email" placeholder="E-mail">
				<input class="required" type="tel" name="celular" placeholder="Celular">

				<input class="left" name="agendar" type="checkbox">
				<label class="left" for="agendar">Quiero agendar una cita</label>

				<input type="text" name="fecha" id="datepicker" class="margin-bottom" value="Escoge la fecha">

				<input type="submit" value="enviar">

			</form><!-- forma-cita -->

		</div><!-- clearfix -->

	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>