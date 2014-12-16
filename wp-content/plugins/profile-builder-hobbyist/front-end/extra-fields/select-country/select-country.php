<?php
/* handle field output */
function wppb_country_select_handler( $output, $form_location, $field, $user_id, $field_check_errors, $request_data ){
	if ( $field['field'] == 'Select (Country)' ){
		$item_title = apply_filters( 'wppb_'.$form_location.'_country_select_custom_field_'.$field['id'].'_item_title', wppb_icl_t( 'plugin profile-builder-pro', 'custom_field_'.$field['id'].'_title_translation', $field['field-title'] ) );
		$item_description = wppb_icl_t( 'plugin profile-builder-pro', 'custom_field_'.$field['id'].'_description_translation', $field['description'] );

		$country_array = apply_filters( 'wppb_'.$form_location.'_country_select_array', array( "","Afganistán
","Albania
","Alemania
","Andorra
","Angola
","Antigua y Barbuda
","Arabia Saudita
","Argelia
","Argentina
","Armenia
","Australia
","Austria
","Azerbaiyán
","Bahamas
","Bangladés
","Barbados
","Baréin
","Bélgica
","Belice
","Benín
","Bielorrusia
","Birmania
","Bolivia
","Bosnia y Herzegovina
","Botsuana
","Brasil
","Brunéi
","Bulgaria
","Burkina Faso
","Burundi
","Bután
","Cabo Verde
","Camboya
","Camerún
","Canadá
","Catar
","Chad
","Chile
","China
","Chipre
","Ciudad del Vaticano
","Colombia
","Comoras
","Corea del Norte
","Corea del Sur
","Costa de Marfil
","Costa Rica
","Croacia
","Cuba
","Dinamarca
","Dominica
","Ecuador
","Egipto
","El Salvador
","Emiratos Árabes Unidos
","Eritrea
","Eslovaquia
","Eslovenia
","España
","Estados Unidos
","Estonia
","Etiopía
","Filipinas
","Finlandia
","Fiyi
","Francia
","Gabón
","Gambia
","Georgia
","Ghana
","Granada
","Grecia
","Guatemala
","Guyana
","Guinea
","Guinea ecuatorial
","Guinea-Bisáu
","Haití
","Honduras
","Hungría
","India
","Indonesia
","Irak
","Irán
","Irlanda
","Islandia
","Islas Marshall
","Islas Salomón
","Israel
","Italia
","Jamaica
","Japón
","Jordania
","Kazajistán
","Kenia
","Kirguistán
","Kiribati
","Kuwait
","Laos
","Lesoto
","Letonia
","Líbano
","Liberia
","Libia
","Liechtenstein
","Lituania
","Luxemburgo
","Madagascar
","Malasia
","Malaui
","Maldivas
","Malí
","Malta
","Marruecos
","Mauricio
","Mauritania
","México
","Micronesia
","Moldavia
","Mónaco
","Mongolia
","Montenegro
","Mozambique
","Namibia
","Nauru
","Nepal
","Nicaragua
","Níger
","Nigeria
","Noruega
","Nueva Zelanda
","Omán
","Países Bajos
","Pakistán
","Palaos
","Panamá
","Papúa Nueva Guinea
","Paraguay
","Perú
","Polonia
","Portugal
","Reino Unido
","República Centroafricana
","República Checa
","República de Macedonia
","República del Congo
","República Democrática del Congo
","República Dominicana
","República Sudafricana
","Ruanda
","Rumanía
","Rusia
","Samoa
","San Cristóbal y Nieves
","San Marino
","San Vicente y las Granadinas
","Santa Lucía
","Santo Tomé y Príncipe
","Senegal
","Serbia
","Seychelles
","Sierra Leona
","Singapur
","Siria
","Somalia
","Sri Lanka
","Suazilandia
","Sudán
","Sudán del Sur
","Suecia
","Suiza
","Surinam
","Tailandia
","Tanzania
","Tayikistán
","Timor Oriental
","Togo
","Tonga
","Trinidad y Tobago
","Túnez
","Turkmenistán
","Turquía
","Tuvalu
","Ucrania
","Uganda
","Uruguay
","Uzbekistán
","Vanuatu
","Venezuela
","Vietnam
","Yemen
","Yibuti
","Zambia
","Zimbabue" ) );
		

        if( $form_location != 'register' )
		    $input_value = ( ( wppb_user_meta_exists ( $user_id, $field['meta-name'] ) != null ) ? get_user_meta( $user_id, $field['meta-name'], true ) : '' );
		else
            $input_value = '';

        $input_value = ( isset( $request_data[$field['meta-name']] ) ? trim( $request_data[$field['meta-name']] ) : $input_value );

		if ( $form_location != 'back_end' ){
			$error_mark = ( ( $field['required'] == 'Yes' ) ? '<span class="wppb-required" title="'.wppb_required_field_error($field["field-title"]).'">*</span>' : '' );
						
			if ( array_key_exists( $field['id'], $field_check_errors ) )
				$error_mark = '<img src="'.WPPB_PLUGIN_URL.'assets/images/pencil_delete.png" title="'.wppb_required_field_error($field["field-title"]).'"/>';

			$output = '
				<label for="'.$field['meta-name'].'">'.$item_title.$error_mark.'</label>
				<select name="'.$field['meta-name'].'" id="'.$field['meta-name'].'" class="custom_field_country_select">';
				
				foreach( $country_array as $country ){
					$output .= '<option value="'.$country.'"';
					
					if ( $input_value === $country )
						$output .= ' selected';
						
					$output .= '>'.$country.'</option>';
				}
				
				$output .= '
				</select>';
            if( !empty( $item_description ) )
                $output .= '<span class="wppb-description-delimiter">'.$item_description.'</span>';

		}else{		
			$output = '
				<table class="form-table">
					<tr>
						<th><label for="'.$field['meta-name'].'">'.$item_title.'</label></th>
						<td>
							<select name="'.$field['meta-name'].'" class="custom_field_country_select" id="'.$field['meta-name'].'">';
							
							foreach( $country_array as $country ){
								$output .= '<option value="'.$country.'"';
								
								if ( $input_value === $country )
									$output .= ' selected';
									
								$output .= '>'.$country.'</option>';
							}
							
							$output .= '</select>
							<span class="description">'.$item_description.'</span>
						</td>
					</tr>
				</table>';
		}
			
		return apply_filters( 'wppb_'.$form_location.'_country_select_custom_field_'.$field['id'], $output, $form_location, $field, $user_id, $field_check_errors, $request_data );
	}
}
add_filter( 'wppb_output_form_field_select-country', 'wppb_country_select_handler', 10, 6 );
add_filter( 'wppb_admin_output_form_field_select-country', 'wppb_country_select_handler', 10, 6 );


/* handle field save */
function wppb_save_country_select_value( $field, $user_id, $request_data, $form_location ){
	if( $field['field'] == 'Select (Country)' ){
		if ( isset( $request_data[$field['meta-name']] ) )
			update_user_meta( $user_id, $field['meta-name'], $request_data[$field['meta-name']] );
	}
}
add_action( 'wppb_save_form_field', 'wppb_save_country_select_value', 10, 4 );
add_action( 'wppb_backend_save_form_field', 'wppb_save_country_select_value', 10, 4 );


/* handle field validation */
function wppb_check_country_select_value( $message, $field, $request_data, $form_location ){
	if( $field['field'] == 'Select (Country)' ){
		if ( ( isset( $request_data[$field['meta-name']] ) && ( trim( $request_data[$field['meta-name']] ) == '' ) ) && ( $field['required'] == 'Yes' ) ){
			return wppb_required_field_error($field["field-title"]);
		}
	}

    return $message;
}
add_filter( 'wppb_check_form_field_select-country', 'wppb_check_country_select_value', 10, 4 );