<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){

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

		// Home
		if( ! get_page_by_path('home') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Home',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Portafolio
		if( ! get_page_by_path('portafolio') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Portafolio',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Aviso de privacidad
		if( ! get_page_by_path('aviso-de-privacidad') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Aviso de privacidad',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});