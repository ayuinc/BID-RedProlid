<?php
/* handle field output */
function wppb_country_select_handler( $output, $form_location, $field, $user_id, $field_check_errors, $request_data ){
	if ( $field['field'] == 'Select (Country)' ){
		$item_title = apply_filters( 'wppb_'.$form_location.'_country_select_custom_field_'.$field['id'].'_item_title', wppb_icl_t( 'plugin profile-builder-pro', 'custom_field_'.$field['id'].'_title_translation', $field['field-title'] ) );
		$item_description = wppb_icl_t( 'plugin profile-builder-pro', 'custom_field_'.$field['id'].'_description_translation', $field['description'] );

		$country_array = apply_filters( 'wppb_'.$form_location.'_country_select_array', array( "", "Afganistán", "Albania", "Alemania", "Algeria", "Andorra", "Angola", "Anguila", "Antártida", "Antigua y Barbuda", "Antillas Neerlandesas", "Arabia Saudita", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbayán", "Bélgica", "Bahamas", "Bahrein", "Bangladesh", "Barbados", "Belice", "Benín", "Bhután", "Bielorrusia", "Birmania", "Bolivia", "Bosnia y Herzegovina", "Botsuana", "Brasil", "Brunéi", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Camboya", "Camerún", "Canadá", "Chad", "Chile", "China", "Chipre", "Ciudad del Vaticano", "Colombia", "Comoras", "Congo", "Congo", "Corea del Norte", "Corea del Sur", "Costa de Marfil", "Costa Rica", "Croacia", "Cuba", "Dinamarca", "Dominica", "Ecuador", "Egipto", "El Salvador", "Emiratos írabes Unidos", "Eritrea", "Eslovaquia", "Eslovenia", "España", "Estados Unidos de América", "Estonia", "Etiopía", "Filipinas", "Finlandia", "Fiyi", "Francia", "Gabón", "Gambia", "Georgia", "Ghana", "Gibraltar", "Granada", "Grecia", "Groenlandia", "Guadalupe", "Guam", "Guatemala", "Guayana Francesa", "Guernsey", "Guinea", "Guinea Ecuatorial", "Guinea-Bissau", "Guyana", "Haití", "Honduras", "Hong kong", "Hungría", "India", "Indonesia", "Irán", "Irak", "Irlanda", "Isla Bouvet", "Isla de Man", "Isla de Navidad", "Isla Norfolk", "Islandia", "Islas Bermudas", "Islas Caimán", "Islas Cocos (Keeling)", "Islas Cook", "Islas Feroe", "Islas Georgias del Sur y Sandwich del Sur", "Islas Heard y McDonald", "Islas Maldivas", "Islas Malvinas", "Islas Marianas del Norte", "Islas Marshall", "Islas Pitcairn", "Islas Salomón", "Islas Turcas y Caicos", "Islas Ultramarinas Menores de Estados Unidos", "Islas Vírgenes Británicas", "Islas Vírgenes de los Estados Unidos", "Israel", "Italia", "Jamaica", "Japón", "Jersey", "Jordania", "Kazajistán", "Kenia", "Kirgizstán", "Kiribati", "Kuwait", "Líbano", "Laos", "Lesoto", "Letonia", "Liberia", "Libia", "Liechtenstein", "Lituania", "Luxemburgo", "México", "Mónaco", "Macao", "Macedonia", "Madagascar", "Malasia", "Malawi", "Mali", "Malta", "Marruecos", "Martinica", "Mauricio", "Mauritania", "Mayotte", "Micronesia", "Moldavia", "Mongolia", "Montenegro", "Montserrat", "Mozambique", "Namibia", "Nauru", "Nepal", "Nicaragua", "Niger", "Nigeria", "Niue", "Noruega", "Nueva Caledonia", "Nueva Zelanda", "Omán", "Países Bajos", "Pakistán", "Palau", "Palestina", "Panamá", "Papúa Nueva Guinea", "Paraguay", "Perú", "Polinesia Francesa", "Polonia", "Portugal", "Puerto Rico", "Qatar", "Reino Unido", "República Centroafricana", "República Checa", "República Dominicana", "Reunión", "Ruanda", "Rumanía", "Rusia", "Sahara Occidental", "Samoa", "Samoa Americana", "San Bartolomé", "San Cristóbal y Nieves", "San Marino", "San Martín (Francia)", "San Pedro y Miquelón", "San Vicente y las Granadinas", "Santa Elena", "Santa Lucía", "Santo Tomé y Príncipe", "Senegal", "Serbia", "Seychelles", "Sierra Leona", "Singapur", "Siria", "Somalia", "Sri lanka", "Sudáfrica", "Sudán", "Suecia", "Suiza", "Surinám", "Svalbard y Jan Mayen", "Swazilandia", "Tadjikistán", "Tailandia", "Taiwán", "Tanzania", "Territorio Británico del Océano índico", "Territorios Australes y Antárticas Franceses", "Timor Oriental", "Togo", "Tokelau", "Tonga", "Trinidad y Tobago", "Tunez", "Turkmenistán", "Turquía", "Tuvalu", "Ucrania", "Uganda", "Uruguay", "Uzbekistán", "Vanuatu", "Venezuela", "Vietnam", "Wallis y Futuna", "Yemen", "Yibuti", "Zambia", "Zimbabue" ) );

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
			
		return apply_filters( 'wppb_'.$form_location.'_country_select_custom_field_'.$field['id'], $output, $form_location, $field, $user_id, $field_check_errors, $request_data, $input_value );
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