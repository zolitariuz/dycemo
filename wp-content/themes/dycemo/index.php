<?php get_header(); ?>

	<div class="width">

		<h2 class="texto-centrado">Los Pinos 6</h2>

		<div class="slider cycle-slideshow width">

			<img src="<?php echo THEMEPATH; ?>images/slide-pinos-01.jpg" alt="">
			<img src="<?php echo THEMEPATH; ?>images/slide-pinos-02.jpg" alt="">
			<img src="<?php echo THEMEPATH; ?>images/slide-pinos-03.jpg" alt="">

		</div><!-- slider -->

		<div class="tercio noticia left">

			<img src="<?php echo THEMEPATH; ?>images/noticia-01.jpg" alt="">

			<div class="caja">
				<h3>Lorem Ipsum</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipiscing elit tollenda est atque extrahenda radicitus duo reges constructio interrete cur igitur cum de re conveniat non malumus usitate.Lorem ipsum dolor sit amet consectetur adipiscing elit tollenda est atque extrahenda radicitus duo reges constructio interrete cur igitur cum de re conveniat non malumus usitate.</p>
			</div><!-- caja -->


		</div><!-- tercio -->

		<div class="tercio noticia left">

			<img src="<?php echo THEMEPATH; ?>images/noticia-01.jpg" alt="">

			<div class="caja">
				<h3>Lorem Ipsum</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipiscing elit tollenda est atque extrahenda radicitus duo reges constructio interrete cur igitur cum de re conveniat non malumus usitate.Lorem ipsum dolor sit amet consectetur adipiscing elit tollenda est atque extrahenda radicitus duo reges constructio interrete cur igitur cum de re conveniat non malumus usitate.</p>
			</div><!-- caja -->


		</div><!-- tercio -->

		<form class="tercio forma-cita left caja" action="">

			<h3 class="texto-centrado">Haz una cita</h3>

			<input type="text" name="nombre" value="Nombre">
			<input type="email" name="email" value="E-mail">
			<input type="tel" name="celular" value="Celular">
			<textarea name="mensaje" cols="30" rows="10">Mensaje</textarea>
			<input type="submit" value="enviar">

		</form><!-- forma-cita -->

	</div><!-- width -->



<?php get_sidebar(); ?>
<?php get_footer(); ?>