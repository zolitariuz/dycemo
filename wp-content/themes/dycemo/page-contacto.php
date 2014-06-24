<?php get_header(); ?>

	<div class="width clearfix">

		<h2 class="text-center">Contacto</h2>

		<form class="forma-contacto columna c-6 medium-10 small-12 forma caja margin-bottom medium-center" action="cotacto-recibido" method="post">
			<input type="text" name="nombre" class="required text" value="Nombre" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
			<input type="email" name="email" id="email" class="required" value="E-mail" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
			<input type="tel" name="celular" id="celular" class="required" value="Celular" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
			<textarea name="mensaje" id="mensaje" class="required" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Mensaje</textarea>

			<input type="submit" value="enviar">
		</form><!-- forma-cita -->

		<div class="caja columna c-6 medium-10 clearfix small-12 medium-center">

			<div class="columna c-6">

				<h3>Ventas</h3>
				<p>
					<a href="tel:<?php echo get_post_meta($post->ID, '_ventas1_meta', true); ?>"><?php echo get_post_meta($post->ID, '_ventas1_meta', true); ?></a><br />
					<a href="tel:<?php echo get_post_meta($post->ID, '_ventas2_meta', true); ?>"><?php echo get_post_meta($post->ID, '_ventas2_meta', true); ?></a>
				</p>


				<h3>Teléfonos</h3>
				<p>
					<a href="<?php echo get_post_meta($post->ID, '_telefono1_meta', true); ?>"><?php echo get_post_meta($post->ID, '_telefono1_meta', true); ?></a><br />
					<a href="<?php echo get_post_meta($post->ID, '_telefono2_meta', true); ?>"><?php echo get_post_meta($post->ID, '_telefono2_meta', true); ?></a><br />
				</p>

				<h3>Horario de atención</h3>
				<p><?php echo get_post_meta($post->ID, '_horario_meta', true); ?></p>

			</div><!-- columna -->

			<div class="span c-1">&nbsp;</div>

			<div class="columna c-5">

				<h3>Dirección</h3>
				<p><?php echo get_post_meta($post->ID, '_direccion_meta', true); ?></p>

				<div class="redes">
					<h3>Redes Sociales</h3>

					<a class="clearfix" href="<?php echo get_post_meta($post->ID, '_twitter_meta', true); ?>" target="_blank">
						<img class="left" src="<?php echo THEMEPATH; ?>images/tw.png" alt="">
						<p class="left">@CDycemo</p>
					</a>

					<a class="clearfix" href="<?php echo get_post_meta($post->ID, '_facebook_meta', true); ?>" target="_blank">
						<img class="left" src="<?php echo THEMEPATH; ?>images/fb.png" alt="">
						<p class="left">/C.dycemo</p>
					</a>
				</div><!-- caja redes -->

			</div>

			<div class="clear"></div>

			<div class="mapa-dycemo">
				<h3>Ubicación</h3>

				<div class="mapa" id="mapa"></div>
			</div><!-- caja mapa-dycemo -->

		</div><!-- columna c-6 -->

	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>