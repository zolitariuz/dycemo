<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// En venta
		$labels = array(
			'name'          => 'En venta',
			'singular_name' => 'En venta',
			'add_new'       => 'Nueva En venta',
			'add_new_item'  => 'Nueva En venta',
			'edit_item'     => 'Editar En venta',
			'new_item'      => 'Nueva En venta',
			'all_items'     => 'Todas',
			'view_item'     => 'Ver En venta',
			'search_items'  => 'Buscar En venta',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'En venta'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'en-venta' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'en-venta', $args );

	});