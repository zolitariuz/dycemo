<?php get_header(); ?>

	<div class="width clearfix">

		<?php
		$personalizaArgs = array(
			'post_type' 		=> 'en-venta',
			'category_name' 	=> 'personaliza-tu-casa',
			'posts_per_page' 	=> -1
		);
		$personalizaQuery = new WP_Query($personalizaArgs);

		if( $personalizaQuery->have_posts() ) : while( $personalizaQuery->have_posts() ) : $personalizaQuery->the_post(); ?>

			<div class="post columna c-4">
				<?php the_post_thumbnail( 'large' ); ?>

				<div class="caja info">
					<h3><?php the_title(); ?></h3>
					<p><?php the_excerpt(); ?></p>
				</div><!-- caja -->

			</div><!-- tercio -->

		<?php endwhile; endif; wp_reset_query(); ?>

	</div><!-- width -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>