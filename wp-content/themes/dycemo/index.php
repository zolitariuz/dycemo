<?php get_header(); ?>

	<div class="width clearfix">

		<div class="mitad left">
			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/dycemo.jpg" alt="Nosotros">
		</div><!-- mitad -->

		<div class="mitad left">
			<div class="caja">
				<h3>Dycemo</h3>

				<p>En Dycemo nos dedicamos a la planeación, arquitectura y construcción de viviendas residenciales en México D.F. Buscamos diseñar espacios familiares dentro de la ciudad que sean tranquilos, seguros y cómodos.</p>
				<p>Tenemos más de tres décadas construyendo residencias en la Ciudad de México. Te invitamos a conocer nuestro trabajo.</p>

			</div><!-- caja -->
		</div><!-- mitad -->

		<div class="clear"></div>
		<hr>

		<div class="tercio noticia left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/noticia-01.jpg" alt="">

			<div class="caja info">
				<h3>Lorem Ipsum</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipiscing elit tollenda est atque extrahenda radicitus duo reges constructio interrete cur igitur cum de re conveniat non malumus usitate.Lorem ipsum dolor sit amet consectetur adipiscing elit tollenda est atque extrahenda radicitus duo reges constructio interrete cur igitur cum de re conveniat non malumus usitate.</p>
			</div><!-- caja -->


		</div><!-- tercio -->

		<div class="tercio noticia left">

			<img class="imagen-100" src="<?php echo THEMEPATH; ?>images/noticia-01.jpg" alt="">

			<div class="caja info">
				<h3>Consectetur adipiscing </h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nummus in Croesi divitiis obscuratur, pars est tamen divitiarum. Quod autem principium officii quaerunt, melius quam Pyrrho; Omnia peccata paria dicitis. Hic nihil fuit, quod quaereremus. Quis est, qui non oderit libidinosam, protervam adolescentiam? Est, ut dicis, inquit; Duo Reges: constructio interrete.</p>
			</div><!-- caja -->


		</div><!-- tercio -->

		<form class="tercio forma-cita left caja" action="">

			<h3 class="texto-centrado">Haz una cita</h3>

			<input type="text" name="nombre" value="Nombre">
			<input type="email" name="email" value="E-mail">
			<input type="tel" name="celular" value="Celular">

			<input class="left" name="agendar" type="checkbox">
			<label class="left" for="agendar">Quiero agendar una cita</label>


			<input type="submit" value="enviar">

		</form><!-- forma-cita -->


	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>