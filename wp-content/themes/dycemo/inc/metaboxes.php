<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////


	add_action('add_meta_boxes', function(){

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

		//Nosotros
		$nosotros = get_page_by_title( 'nosotros' );
		$nosotrosId = $nosotros->ID;

		if ( $post_id == $nosotrosId ){
			add_meta_box( 'mision', 'Misión', 'metabox_mision', 'page', 'side', 'default' );
			add_meta_box( 'vision', 'Visión', 'metabox_vision', 'page', 'side', 'default' );
			add_meta_box( 'valores', 'Valores', 'metabox_valores', 'page', 'side', 'default' );
		}

		//Contacto
		$contacto = get_page_by_title( 'contacto' );
		$contactoId = $contacto->ID;

		if ( $post_id == $contactoId ){
			add_meta_box( 'contacto', 'Detalles', 'metabox_contacto', 'page', 'normal', 'default' );
		}

		//Casas
		$categoria = get_the_category( $post_id );

		if ($categoria[0]->cat_name == 'Casas'){
			add_meta_box( 'casas', 'Casas', 'metabox_casas', 'en-venta', 'normal', 'default' );
		}

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////


	// NOSOTROS

	function metabox_mision($post){
		$name = get_post_meta($post->ID, '_mision_meta', true);
		wp_nonce_field(__FILE__, '_mision_meta_nonce');
		echo "<textarea rows='8' class='widefat' id='mision' name='_mision_meta'>$name</textarea>";
	}

	function metabox_vision($post){
		$name = get_post_meta($post->ID, '_vision_meta', true);
		wp_nonce_field(__FILE__, '_vision_meta_nonce');
		echo "<textarea rows='8' class='widefat' id='vision' name='_vision_meta'>$name</textarea>";
	}

	function metabox_valores($post){
		$name = get_post_meta($post->ID, '_valores_meta', true);
		wp_nonce_field(__FILE__, '_valores_meta_nonce');
		echo "<textarea rows='8' class='widefat' id='valores' name='_valores_meta'>$name</textarea>";
	}

	// CONTACTO

	function metabox_contacto($post){
		$direccion = get_post_meta($post->ID, '_direccion_meta', true);
		$telefono1 = get_post_meta($post->ID, '_telefono1_meta', true);
		$telefono2 = get_post_meta($post->ID, '_telefono2_meta', true);
		$ventas = get_post_meta($post->ID, '_ventas_meta', true);
		$horario = get_post_meta($post->ID, '_horario_meta', true);
		$twitter = get_post_meta($post->ID, '_twitter_meta', true);
		$facebook = get_post_meta($post->ID, '_facebook_meta', true);
		$ubicacion = get_post_meta($post->ID, '_ubicacion_meta', true);

		wp_nonce_field(__FILE__, '_direccion_meta_nonce');
		wp_nonce_field(__FILE__, '_telefono1_meta_nonce');
		wp_nonce_field(__FILE__, '_telefono2_meta_nonce');
		wp_nonce_field(__FILE__, '_ventas_meta_nonce');
		wp_nonce_field(__FILE__, '_horario_meta_nonce');
		wp_nonce_field(__FILE__, '_twitter_meta_nonce');
		wp_nonce_field(__FILE__, '_facebook_meta_nonce');
		wp_nonce_field(__FILE__, '_ubicacion_meta_nonce');

echo <<<END

	<label>Dirección:</label>
	<textarea rows="2" class="widefat" id="direccion" name="_direccion_meta">$direccion</textarea>
	<label>Teléfono:</label>
	<input type="text" class="widefat" id="telefono1" name="_telefono1_meta" value="$telefono1" />
	<label>Teléfono:</label>
	<input type="text" class="widefat" id="telefono2" name="_telefono2_meta" value="$telefono2" />
	<label>Teléfono ventas:</label>
	<input type="text" class="widefat" id="ventas" name="_ventas_meta" value="$ventas" />
	<label>Horario:</label>
	<input type="text" class="widefat" id="horario" name="_horario_meta" value="$horario" />
	<label>Twitter:</label>
	<input type="text" class="widefat" id="twitter" name="_twitter_meta" value="$twitter" />
	<label>Facebook:</label>
	<input type="text" class="widefat" id="facebook" name="_facebook_meta" value="$facebook" />
	<label>Ubicación:</label>
	<input type="text" class="widefat" id="ubicacion" name="_ubicacion_meta" value="$ubicacion" />

END;
}

	//Casas
	function metabox_casas($post){
		$casas = get_post_meta($post->ID, '_casas_meta', true);
		wp_nonce_field(__FILE__, '_casas_meta_nonce');
		echo "<input type='text' class='widefat' id='casas' name='_casas_meta' value='$casas' />";
	}

// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id)){
			return $post_id;
		}

		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ){
			return $post_id;
		}

		if ( isset($_POST['_mision_meta']) and check_admin_referer(__FILE__, '_mision_meta_nonce') ){
			update_post_meta($post_id, '_mision_meta', $_POST['_mision_meta']);
		}

		if ( isset($_POST['_vision_meta']) and check_admin_referer(__FILE__, '_vision_meta_nonce') ){
			update_post_meta($post_id, '_vision_meta', $_POST['_vision_meta']);
		}

		if ( isset($_POST['_valores_meta']) and check_admin_referer(__FILE__, '_valores_meta_nonce') ){
			update_post_meta($post_id, '_valores_meta', $_POST['_valores_meta']);
		}

		//Contacto
		if ( isset($_POST['_direccion_meta']) and check_admin_referer(__FILE__, '_direccion_meta_nonce') ){
			update_post_meta($post_id, '_direccion_meta', $_POST['_direccion_meta']);
		}

		if ( isset($_POST['_telefono1_meta']) and check_admin_referer(__FILE__, '_telefono1_meta_nonce') ){
			update_post_meta($post_id, '_telefono1_meta', $_POST['_telefono1_meta']);
		}

		if ( isset($_POST['_telefono2_meta']) and check_admin_referer(__FILE__, '_telefono2_meta_nonce') ){
			update_post_meta($post_id, '_telefono2_meta', $_POST['_telefono2_meta']);
		}

		if ( isset($_POST['_ventas_meta']) and check_admin_referer(__FILE__, '_ventas_meta_nonce') ){
			update_post_meta($post_id, '_ventas_meta', $_POST['_ventas_meta']);
		}

		if ( isset($_POST['_horario_meta']) and check_admin_referer(__FILE__, '_horario_meta_nonce') ){
			update_post_meta($post_id, '_horario_meta', $_POST['_horario_meta']);
		}

		if ( isset($_POST['_twitter_meta']) and check_admin_referer(__FILE__, '_twitter_meta_nonce') ){
			update_post_meta($post_id, '_twitter_meta', $_POST['_twitter_meta']);
		}

		if ( isset($_POST['_facebook_meta']) and check_admin_referer(__FILE__, '_facebook_meta_nonce') ){
			update_post_meta($post_id, '_facebook_meta', $_POST['_facebook_meta']);
		}

		if ( isset($_POST['_ubicacion_meta']) and check_admin_referer(__FILE__, '_ubicacion_meta_nonce') ){
			update_post_meta($post_id, '_ubicacion_meta', $_POST['_ubicacion_meta']);
		}

		if ( isset($_POST['_casas_meta']) and check_admin_referer(__FILE__, '_casas_meta_nonce') ){
			update_post_meta($post_id, '_casas_meta', $_POST['_casas_meta']);
		}


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////