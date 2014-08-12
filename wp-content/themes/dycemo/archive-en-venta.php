<?php get_header(); ?>

	<div class="width clearfix">

		<h2 class="text-center">En venta</h2>

		<a class="boton tabs alto columna c-4 activo" data-seccion="galeria" href="#">
			<span>Galería</span>
		</a>

		<a class="boton tabs alto columna c-4" data-seccion="recorrido" href="#">
			<span>Recorrido virtual</span>
		</a>

		<a class="boton tabs alto columna c-4" data-seccion="plano" href="#">
			<span>Plano interactivo</span>
		</a>

		<div class="clear margin-bottom"></div>

		<div class="content-tabs margin-bottom columna c-12">

			<div class="tab slider galeria cycle-slideshow abierto" data-seccion="galeria">

				<?php
				$galeriaArgs = array(
					'post_type' 	=> 'en-venta',
					'category_name'	=> 'complejo',
					'name' 			=> 'galeria'
				);
				$galeriaQuery = new WP_Query($galeriaArgs);

				if( $galeriaQuery->have_posts() ) : while( $galeriaQuery->have_posts() ) : $galeriaQuery->the_post();

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
				endwhile; endif;  wp_reset_query();?>

			</div><!-- slider -->

			<div class="tab slider recorrido cerrado" data-seccion="recorrido">
				<h2>Recorrido</h2>

				<div class="fitvids">

					<?php
					$recorridoArgs = array(
						'post_type' 	=> 'en-venta',
						'category_name'	=> 'complejo',
						'name' 			=> 'recorrido-virtual'
					);
					$recorridoQuery = new WP_Query($recorridoArgs);

					if( $recorridoQuery->have_posts() ) : while( $recorridoQuery->have_posts() ) : $recorridoQuery->the_post();
						the_content();
					endwhile; endif; wp_reset_query();
					?>


				</div>
			</div><!-- recorrido -->

			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>SDM-74-PANORAMA INTERIOR.html</title>
		<script language="javascript">
			p_width = 1920;
			p_height = 1080;
			p_panorama_directory = ""
		</script>
		<script type='text/javascript' src='player/swfobject.js'></script>
		<script type='text/javascript' src='player/padd.js'></script>
	</head>
	<body bgcolor="#545454">
		<div id="promenadd" style="margin-top:50px ; text-align:center">
			<div id="paddplayer"/>
		</div>
		<div id="myAlternativeContent">
			<a href="http://www.adobe.com/go/getflashplayer">
				<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player">
			</a>
		</div>
	</body>
</html>


		</div><!-- cotent-tabs -->

		<div class="clear"></div>

		<div class="full clearfix">

			<?php
			$counter = 1;
			$caracteristicasArgs = array(
				'post_type' 	=> 'en-venta',
				'category_name'	=> 'caracteristicas'
			);
			$caracteristicasQuery = new WP_Query($caracteristicasArgs);

			if( $caracteristicasQuery->have_posts() ) : while( $caracteristicasQuery->have_posts() ) : $caracteristicasQuery->the_post(); ?>

				<div class="columna c-2 medium-4 caracteristica left">

					<?php the_post_thumbnail( 'full' ); ?>

					<div class="info">
						<h3 class="text-center"><?php the_title(); ?></h3>
					</div><!-- caja -->

				</div><!-- columna -->

				<?php if (($counter % 3) == 0) { ?>
					<div class="clear-medium"></div>
				<?php } ?>

				<?php if (($counter % 3) == 0) { ?>
					<!-- <div class="clear-medium"></div> -->
				<?php } ?>

			<?php $counter++; endwhile; endif; wp_reset_query(); ?>

		</div><!-- clearfix -->

		<div class="columna c-8 small-12 content">

			<?php
			$descripcionArgs = array(
				'post_type' 	=> 'en-venta',
				'category_name'	=> 'complejo',
				'name' 			=> 'descripcion'
			);
			$descripcionQuery = new WP_Query($descripcionArgs);

			if( $descripcionQuery->have_posts() ) : while( $descripcionQuery->have_posts() ) : $descripcionQuery->the_post();
				the_content();
			endwhile; endif; wp_reset_query();
			?>

			<div class="mapa margin-bottom" id="mapa"></div>

		</div><!-- content -->

		<div class="columna c-4 small-12">

			<a class="boton alto full escoge margin-bottom" href="<?php echo site_url('d/escoge-tu-casa'); ?>">
				<span>Escoge tu casa</span>
			</a>

			<a class="boton alto full personaliza margin-bottom" href="<?php echo site_url('d/personaliza-tu-casa'); ?>">
				<span>Personaliza tu casa</span>
			</a>

			<form class="forma-cita forma full caja">

				<h3 class="texto-centrado">Haz una cita</h3>

				<input class="required" type="text" id="nombre" name="nombre" value="Nombre">
				<input class="required email" type="email" name="email" value="E-mail">
				<input class="required" type="tel" name="celular" value="Celular">

				<input class="left" name="agendar" type="checkbox">
				<label class="left" for="agendar">Quiero agendar una cita</label>

				<input type="text" name="fecha" id="datepicker" class="margin-bottom required" value="Escoge la fecha">

				<input type="submit" value="enviar">

			</form><!-- forma-cita -->

		</div><!-- columna c-4 -->

	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>