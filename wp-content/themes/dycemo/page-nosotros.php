<?php get_header(); ?>

	<div class="width">

		<h2 class="texto-centrado">Nuestra Empresa</h2>

		<div class="slider cycle-slideshow width">

			<img src="<?php echo THEMEPATH; ?>images/slide-pinos-01.jpg" alt="">
			<img src="<?php echo THEMEPATH; ?>images/slide-pinos-02.jpg" alt="">
			<img src="<?php echo THEMEPATH; ?>images/slide-pinos-03.jpg" alt="">

		</div><!-- slider -->

		<div class="tercio left">

			<h3 class="texto-centrado">Misión</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Verum esto: verbum ipsum voluptatis non habet dignitatem, nec nos fortasse intellegimus. Respondeat totidem verbis. Ex quo intellegitur officium medium quiddam esse, quod neque in bonis ponatur neque in contrariis. Ab hoc autem quaedam non melius quam veteres, quaedam omnino relicta. Duo Reges: constructio interrete. Haec dicuntur fortasse ieiunius;</p>

		</div><!-- tercio -->

		<div class="tercio left">

			<h3 class="texto-centrado">Visión</h3>
			<p>Sit hoc ultimum bonorum, quod nunc a me defenditur; Plane idem, inquit, et maxima quidem, qua fieri nulla maior potest. Duo Reges: constructio interrete. Causa autem fuit huc veniendi ut quosdam hinc libros promerem. Illud dico, ea, quae dicat, praeclare inter se cohaerere. Multa sunt dicta ab antiquis de contemnendis ac despiciendis rebus humanis; Non igitur potestis voluptate omnia dirigentes aut tueri aut retinere virtutem.</p>

		</div><!-- tercio -->

		<div class="tercio left">

			<h3 class="texto-centrado">Valores</h3>
			<ul>
				<li>Adipiscing elit</li>
				<li>Verum esto</li>
				<li>Stadia confecimus</li>
			</ul>

		</div><!-- tercio -->

		<div class="clear"></div>
		<hr>

		<div class="dos_tercios left content">
			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/img_nosotros.jpg" alt="">
			<p>Nuestra historia empieza 33 años atrás cuando Dycemo fue fundada como una empresa familiar el 29 de Febrero de 1979. Desde entonces hemos mantenido los mismos valores y hemos trabajado para superar nuestros propios niveles de calidad, los cuales rigen nuestros procesos desde el inicio de la construcción hasta el momento de la entrega. También estamos muy orgullosos del grupo de personas que nos rodea y que, con el paso de los años han demostrado su profesionalismo y sobre todo su compromiso y pasión hacia ésta familia llamada DYCEMO. </p>
			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/blancaschemo.jpg" alt="">
			<p>A través de una sólida experiencia en el mercado nos hemos consolidado como una empresa inmobiliaria respetada dentro de la zona sur de la Ciudad de México. Somos especialistas y artesanos en lo que hacemos mejor y eso es la construcción de viviendas a nivel residencial, ubicadas principalmente en la colonia de San Jerónimo. </p>
			<p>En nuestra empresa queremos ver a las personas crecer y por eso fomentamos una forma de trabajo respetuosa en la que cada integrante tiene una valiosa opinión con la cual podemos avanzar hacia algo mejor. Desde nuestros sabios maestros de obra, nuestros acertados administradores y asesores, hasta nuestros grandes arquitectos e ingenieros, todos somos parte del mismo proyecto y ayudamos a construir un mismo camino. Este camino tiene un único fin; "Entregarte el mejor producto y atenderte con el mejor servicio".</p>
		</div><!-- content -->

		<form class="tercio forma-cita left caja" action="">

			<h3 class="texto-centrado">Haz una cita</h3>

			<input type="text" name="nombre" value="Nombre">
			<input type="email" name="email" value="E-mail">
			<input type="tel" name="celular" value="Celular">
			<textarea name="mensaje" rows="7">Mensaje</textarea>
			<input type="submit" value="enviar">

		</form><!-- forma-cita -->

	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>