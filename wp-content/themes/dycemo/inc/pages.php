<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// En Venta
		if( ! get_page_by_path('en-venta') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'En Venta',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Contacto
		if( ! get_page_by_path('contacto') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Nosotros
		if( ! get_page_by_path('nosotros') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Nosotros',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Escoge tu casa
		if( ! get_page_by_path('escoge-tu-casa') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Escoge tu casa',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});