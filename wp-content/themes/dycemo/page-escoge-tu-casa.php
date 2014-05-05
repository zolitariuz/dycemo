<?php get_header(); ?>

	<div class="width clearfix">

		<div class="columna c-4 escoge-botones">

			<a href="#" data-seccion="plano" class="boton tabs block full text-center alto margin-bottom">Plano</a>

			<a href="#" data-seccion="casa-1" class="boton tabs block full text-center alto margin-bottom">Casa 1</a>

			<a href="#" data-seccion="casa-2" class="boton tabs block full text-center alto margin-bottom">Casa 2</a>

			<a href="#" data-seccion="casa-3" class="boton tabs block full text-center alto margin-bottom">Casa 3</a>

		</div><!-- columna c-4 -->

		<div class="margin-bottom columna c-8 content-tabs">

			<div class="tab plano abierto" data-seccion="plano">
				<img src="<?php echo THEMEPATH; ?>images/slide-pinos-01.jpg" alt="">
			</div><!-- tab -->

			<div class="tab cerrado" data-seccion="casa-1">

				<img src="<?php echo THEMEPATH; ?>images/slide-pinos-02.jpg" alt="">

				<p>Quae cum magnifice primo dici viderentur quae com dixisset paulumque institisset, Quid est? Graece donan, Latine voluptatem vocant. Sin dicit obscurari quaedam nec apparere, quia valde parva sint, nos quoque concedimus;</p>

				<form class="chosen-casa" method="post" action="#">

					<select name="" id="">
						<option value="a">a</option>
						<option value="b">b</option>
						<option value="c">c</option>
						<option value="d">d</option>
					</select>

				</form>

			</div><!-- tab casa-1 -->

			<div class="tab cerrado" data-seccion="casa-2">

				<img src="<?php echo THEMEPATH; ?>images/slide-pinos-03.jpg" alt="">

				<p>Quae cum magnifice primo dici viderentur quae cum dixisset paulumque institisset, Quid est? Graece donan, Latine voluptatem vocant. Sin dicit obscurari quaedam nec apparere, quia valde parva sint, nos quoque concedimus;</p>

				<form action="#">

					<select name="" id="">
						<option value="a">a</option>
						<option value="b">b</option>
						<option value="c">c</option>
						<option value="d">d</option>
					</select>

				</form>

			</div><!-- tab casa-2 -->

			<div class="tab cerrado" data-seccion="casa-3">

				<img src="<?php echo THEMEPATH; ?>images/slide-pinos-01.jpg" alt="">

				<p>Quae cum magnifice primo dici viderentur quae cum dixisset paulumque institisset, Quid est? Graece donan, Latine voluptatem vocant. Sin dicit obscurari quaedam nec apparere, quia valde parva sint, nos quoque concedimus;</p>

				<form action="#">

					<select name="" id="">
						<option value="a">a</option>
						<option value="b">b</option>
						<option value="c">c</option>
						<option value="d">d</option>
					</select>

				</form>

			</div><!-- tab casa-3 -->

		</div><!-- columna c-8 -->


	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>