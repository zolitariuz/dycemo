<?php get_header(); ?>

	<div class="width">

		<form class="mitad forma-cita left caja" action="">

			<input type="text" name="nombre" value="Nombre">
			<input type="email" name="email" value="E-mail">
			<input type="tel" name="celular" value="Celular">
			<textarea name="mensaje" rows="7">Mensaje</textarea>
			<input type="submit" value="enviar">

		</form><!-- forma-cita -->

		<div class="cuarto left caja">
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

		<div class="cuarto left">
			<div class="caja redes">
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

			<div class="caja mapa-dycemo">
				<h3>Mapa</h3>

				<iframe width="195" height="195" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Guadalajara+94B,+Roma+Norte,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico,+M%C3%A9xico&amp;aq=0&amp;oq=Guadalajara+94,+M%C3%A9xico&amp;sll=37.0625,-95.677068&amp;sspn=49.757664,92.988281&amp;ie=UTF8&amp;hq=&amp;hnear=Guadalajara+94B,+Cuauht%C3%A9moc,+Ciudad+de+M%C3%A9xico,+Distrito+Federal,+M%C3%A9xico&amp;t=m&amp;z=14&amp;ll=19.416597,-99.171906&amp;output=embed"></iframe>

			</div><!-- caja mapa-dycemo -->


		</div>

	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>