
		</div><!--main -->

		<?php if( ! is_page( 'contacto' ) ) {?>
		<footer>
			<div class="width clearfix">
				<div class="columna c-4 medium-12 medium-margin-bottom">
					<p>Constuctora Dycemo S.A. de C.V.</p>
					<p><a href="tel:5668-7848">Tel. 5668-7848</a></p>
				</div>
				<a class="columna c-4 medium-12 medium-margin-bottom boton right" href="<?php echo site_url('contacto'); ?>">Contacto</a>
			</div><!--Termina Footer Wrap-->
		</footer>
		<?php } else { ?>
		<footer>
			<div class="width clearfix">
				<a class="block columna c-4 medium-12 medium-margin-bottom boton center" href="#">Aviso de privacidad</a>
			</div><!--Termina Footer Wrap-->
		</footer>
		<?php } ?>
	</div><!-- container -->

	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<?php wp_footer(); ?>

	<!--Analytics Google: -->
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-32189926-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

	</body>
</html>