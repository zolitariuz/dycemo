<?php get_header(); ?>

	<div class="width">

		<form class="forma-contacto columna c-6 caja">

			<input type="text" name="nombre" id="nombre" class="required" value="Nombre" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
			<input type="email" name="email" id="email" class="required email" value="E-mail" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
			<input type="tel" name="celular" id="celular" class="required" value="Celular" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
			<textarea name="mensaje" rows="7" id="mensaje" class="required" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Mensaje</textarea>
			
			<input type="submit" value="enviar">

		</form><!-- forma-cita -->

		<div class="columna c-3 caja">
			<h3>Dirección</h3>
			<p>Constructora Dycemo S.A. de C.V. Cerrada de Presa Escolta # 42-6 San Jerónimo, Lídice, C.P. 10200</p>

			<h3>Teléfonos</h3>
			<p>
				5683-6800<br />
				5668-7856<br />
			</p>

			<h3>Ventas</h3>
			<p>5668-7848</p>

			<h3>Horario de atención</h3>
			<p>Lunes-Viernes 9am a 5pm</p>

		</div>

		<div class="columna c-3 left caja">
			<div class="redes">
				<h3>Redes Sociales</h3>

				<a class="clearfix" href="https://twitter.com/CDycemo" target="_blank">
					<img class="left" src="<?php echo THEMEPATH; ?>images/tw.png" alt="">
					<p class="left">@CDycemo</p>
				</a>

				<a class="clearfix" href="https://www.facebook.com/C.dycemo" target="_blank">
					<img class="left" src="<?php echo THEMEPATH; ?>images/fb.png" alt="">
					<p class="left">/C.dycemo</p>
				</a>
			</div><!-- caja redes -->

			<div class="mapa-dycemo">
				<h3>Mapa</h3>

				<div class="mapa">
					<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Guadalajara+94B,+Roma+Norte,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico,+M%C3%A9xico&amp;aq=0&amp;oq=Guadalajara+94,+M%C3%A9xico&amp;sll=37.0625,-95.677068&amp;sspn=49.757664,92.988281&amp;ie=UTF8&amp;hq=&amp;hnear=Guadalajara+94B,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico,+Distrito+Federal,+M%C3%A9xico&amp;t=m&amp;z=14&amp;ll=19.416597,-99.171906&amp;output=embed"></iframe>
				</div><!-- mapa -->

			</div><!-- caja mapa-dycemo -->


		</div>

	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>