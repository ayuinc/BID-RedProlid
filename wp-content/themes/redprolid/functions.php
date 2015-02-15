<?php
  /**
   * Add custom taxonomies
   *
   * Additional custom taxonomies can be defined here
   * http://codex.wordpress.org/Function_Reference/register_taxonomy
   */


  /**
   * Register our sidebars and widgetized areas.
   *
   */
  function redprolid_theme_styles(){
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/stylesheets/main.css');
    wp_enqueue_style( 'ebm_css', get_template_directory_uri() . '/stylesheets/ebm.css');
  }
  add_action('wp_enqueue_scripts', 'redprolid_theme_styles');

  function redprolid_theme_js(){
    wp_deregister_script('jquery'); // Remove WordPress core's jQuery
    wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js', false, null, true);
    add_filter('script_loader_src', 'theme_jquery_local_fallback', 10, 2);
    // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery-2.1.3.min.js', '', true );
    wp_enqueue_script( 'transitions_b3', get_template_directory_uri() . '/js/b3/transition.js', array('jquery'), '', true );
    wp_enqueue_script( 'carousel_b3', get_template_directory_uri() . '/js/b3/carousel.js', array('jquery'), '', true );
    wp_enqueue_script( 'modal_b3', get_template_directory_uri() . '/js/b3/modal.js', array('jquery'), '', true );
    wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/src/custom.js', array('jquery'), '', true );
    wp_enqueue_script( 'mobilemenucontrol_js', get_template_directory_uri() . '/js/lib/mobile-menu-control.js', array('jquery'), '', true );
    wp_enqueue_script( 'jcarousel_b3', get_template_directory_uri() . '/js/vendor/jquery.jcarousel.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'transformicons', get_template_directory_uri() . '/js/vendor/transformicons.js', null, '', true );
  }
  function theme_jquery_local_fallback($src, $handle) {
    static $add_jquery_fallback = false;

    if ($add_jquery_fallback) {
      echo '<script>window.jQuery || document.write(\'<script src="' . get_template_directory_uri() . '/js/vendor/jquery-2.1.3.min.js"><\/script>\')</script>' . "\n";
      $add_jquery_fallback = false;
    }

    if ($handle === 'jquery') {
      $add_jquery_fallback = true;
    }

    return $src;
  }
  add_action('wp_enqueue_scripts', 'redprolid_theme_js');

  function redprolid_widgets_init() {

      register_sidebar( array(
          'name' => 'Home right sidebar',
          'id' => 'home_right_1',
          'before_widget' => '<div>',
          'after_widget' => '</div>',
          'before_title' => '<h2 class="rounded">',
          'after_title' => '</h2>',
      ) );
  }
  add_action( 'widgets_init', 'redprolid_widgets_init' );


  function add_custom_taxonomies() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('country', 'post', array(
      // Hierarchical taxonomy (like categories)
      'hierarchical' => true,
      // This array of options controls the labels displayed in the WordPress Admin UI
      'labels' => array(
        'name' => _x( 'Country', 'taxonomy general name' ),
        'singular_name' => _x( 'Country', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Country' ),
        'all_items' => __( 'All Country' ),
        'parent_item' => __( 'Parent Country' ),
        'parent_item_colon' => __( 'Parent Country:' ),
        'edit_item' => __( 'Edit Country' ),
        'update_item' => __( 'Update Country' ),
        'add_new_item' => __( 'Add New Country' ),
        'new_item_name' => __( 'New Country Name' ),
        'menu_name' => __( 'Country' ),
      ),
      // Control the slugs used for this taxonomy
      'rewrite' => array(
        'slug' => 'country', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
      ),
    ));
  }
  add_action( 'init', 'add_custom_taxonomies', 0 );

  add_action('init', 'add_countries', 100);

  function add_countries()
  {
      $country_array = array(
          'AF'=>'AFGHANISTAN',
          'AL'=>'ALBANIA',
          'DZ'=>'ALGERIA',
          'AS'=>'AMERICAN SAMOA',
          'AD'=>'ANDORRA',
          'AO'=>'ANGOLA',
          'AI'=>'ANGUILLA',
          'AQ'=>'ANTARCTICA',
          'AG'=>'ANTIGUA AND BARBUDA',
          'AR'=>'ARGENTINA',
          'AM'=>'ARMENIA',
          'AW'=>'ARUBA',
          'AU'=>'AUSTRALIA',
          'AT'=>'AUSTRIA',
          'AZ'=>'AZERBAIJAN',
          'BS'=>'BAHAMAS',
          'BH'=>'BAHRAIN',
          'BD'=>'BANGLADESH',
          'BB'=>'BARBADOS',
          'BY'=>'BELARUS',
          'BE'=>'BELGIUM',
          'BZ'=>'BELIZE',
          'BJ'=>'BENIN',
          'BM'=>'BERMUDA',
          'BT'=>'BHUTAN',
          'BO'=>'BOLIVIA',
          'BA'=>'BOSNIA AND HERZEGOVINA',
          'BW'=>'BOTSWANA',
          'BV'=>'BOUVET ISLAND',
          'BR'=>'BRAZIL',
          'IO'=>'BRITISH INDIAN OCEAN TERRITORY',
          'BN'=>'BRUNEI DARUSSALAM',
          'BG'=>'BULGARIA',
          'BF'=>'BURKINA FASO',
          'BI'=>'BURUNDI',
          'KH'=>'CAMBODIA',
          'CM'=>'CAMEROON',
          'CA'=>'CANADA',
          'CV'=>'CAPE VERDE',
          'KY'=>'CAYMAN ISLANDS',
          'CF'=>'CENTRAL AFRICAN REPUBLIC',
          'TD'=>'CHAD',
          'CL'=>'CHILE',
          'CN'=>'CHINA',
          'CX'=>'CHRISTMAS ISLAND',
          'CC'=>'COCOS (KEELING) ISLANDS',
          'CO'=>'COLOMBIA',
          'KM'=>'COMOROS',
          'CG'=>'CONGO',
          'CD'=>'CONGO, THE DEMOCRATIC REPUBLIC OF THE',
          'CK'=>'COOK ISLANDS',
          'CR'=>'COSTA RICA',
          'CI'=>'COTE D IVOIRE',
          'HR'=>'CROATIA',
          'CU'=>'CUBA',
          'CY'=>'CYPRUS',
          'CZ'=>'CZECH REPUBLIC',
          'DK'=>'DENMARK',
          'DJ'=>'DJIBOUTI',
          'DM'=>'DOMINICA',
          'DO'=>'DOMINICAN REPUBLIC',
          'TP'=>'EAST TIMOR',
          'EC'=>'ECUADOR',
          'EG'=>'EGYPT',
          'SV'=>'EL SALVADOR',
          'GQ'=>'EQUATORIAL GUINEA',
          'ER'=>'ERITREA',
          'EE'=>'ESTONIA',
          'ET'=>'ETHIOPIA',
          'FK'=>'FALKLAND ISLANDS (MALVINAS)',
          'FO'=>'FAROE ISLANDS',
          'FJ'=>'FIJI',
          'FI'=>'FINLAND',
          'FR'=>'FRANCE',
          'GF'=>'FRENCH GUIANA',
          'PF'=>'FRENCH POLYNESIA',
          'TF'=>'FRENCH SOUTHERN TERRITORIES',
          'GA'=>'GABON',
          'GM'=>'GAMBIA',
          'GE'=>'GEORGIA',
          'DE'=>'GERMANY',
          'GH'=>'GHANA',
          'GI'=>'GIBRALTAR',
          'GR'=>'GREECE',
          'GL'=>'GREENLAND',
          'GD'=>'GRENADA',
          'GP'=>'GUADELOUPE',
          'GU'=>'GUAM',
          'GT'=>'GUATEMALA',
          'GN'=>'GUINEA',
          'GW'=>'GUINEA-BISSAU',
          'GY'=>'GUYANA',
          'HT'=>'HAITI',
          'HM'=>'HEARD ISLAND AND MCDONALD ISLANDS',
          'VA'=>'HOLY SEE (VATICAN CITY STATE)',
          'HN'=>'HONDURAS',
          'HK'=>'HONG KONG',
          'HU'=>'HUNGARY',
          'IS'=>'ICELAND',
          'IN'=>'INDIA',
          'ID'=>'INDONESIA',
          'IR'=>'IRAN, ISLAMIC REPUBLIC OF',
          'IQ'=>'IRAQ',
          'IE'=>'IRELAND',
          'IL'=>'ISRAEL',
          'IT'=>'ITALY',
          'JM'=>'JAMAICA',
          'JP'=>'JAPAN',
          'JO'=>'JORDAN',
          'KZ'=>'KAZAKSTAN',
          'KE'=>'KENYA',
          'KI'=>'KIRIBATI',
          'KP'=>'KOREA DEMOCRATIC PEOPLES REPUBLIC OF',
          'KR'=>'KOREA REPUBLIC OF',
          'KW'=>'KUWAIT',
          'KG'=>'KYRGYZSTAN',
          'LA'=>'LAO PEOPLES DEMOCRATIC REPUBLIC',
          'LV'=>'LATVIA',
          'LB'=>'LEBANON',
          'LS'=>'LESOTHO',
          'LR'=>'LIBERIA',
          'LY'=>'LIBYAN ARAB JAMAHIRIYA',
          'LI'=>'LIECHTENSTEIN',
          'LT'=>'LITHUANIA',
          'LU'=>'LUXEMBOURG',
          'MO'=>'MACAU',
          'MK'=>'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',
          'MG'=>'MADAGASCAR',
          'MW'=>'MALAWI',
          'MY'=>'MALAYSIA',
          'MV'=>'MALDIVES',
          'ML'=>'MALI',
          'MT'=>'MALTA',
          'MH'=>'MARSHALL ISLANDS',
          'MQ'=>'MARTINIQUE',
          'MR'=>'MAURITANIA',
          'MU'=>'MAURITIUS',
          'YT'=>'MAYOTTE',
          'MX'=>'MEXICO',
          'FM'=>'MICRONESIA, FEDERATED STATES OF',
          'MD'=>'MOLDOVA, REPUBLIC OF',
          'MC'=>'MONACO',
          'MN'=>'MONGOLIA',
          'MS'=>'MONTSERRAT',
          'MA'=>'MOROCCO',
          'MZ'=>'MOZAMBIQUE',
          'MM'=>'MYANMAR',
          'NA'=>'NAMIBIA',
          'NR'=>'NAURU',
          'NP'=>'NEPAL',
          'NL'=>'NETHERLANDS',
          'AN'=>'NETHERLANDS ANTILLES',
          'NC'=>'NEW CALEDONIA',
          'NZ'=>'NEW ZEALAND',
          'NI'=>'NICARAGUA',
          'NE'=>'NIGER',
          'NG'=>'NIGERIA',
          'NU'=>'NIUE',
          'NF'=>'NORFOLK ISLAND',
          'MP'=>'NORTHERN MARIANA ISLANDS',
          'NO'=>'NORWAY',
          'OM'=>'OMAN',
          'PK'=>'PAKISTAN',
          'PW'=>'PALAU',
          'PS'=>'PALESTINIAN TERRITORY, OCCUPIED',
          'PA'=>'PANAMA',
          'PG'=>'PAPUA NEW GUINEA',
          'PY'=>'PARAGUAY',
          'PE'=>'PERU',
          'PH'=>'PHILIPPINES',
          'PN'=>'PITCAIRN',
          'PL'=>'POLAND',
          'PT'=>'PORTUGAL',
          'PR'=>'PUERTO RICO',
          'QA'=>'QATAR',
          'RE'=>'REUNION',
          'RO'=>'ROMANIA',
          'RU'=>'RUSSIAN FEDERATION',
          'RW'=>'RWANDA',
          'SH'=>'SAINT HELENA',
          'KN'=>'SAINT KITTS AND NEVIS',
          'LC'=>'SAINT LUCIA',
          'PM'=>'SAINT PIERRE AND MIQUELON',
          'VC'=>'SAINT VINCENT AND THE GRENADINES',
          'WS'=>'SAMOA',
          'SM'=>'SAN MARINO',
          'ST'=>'SAO TOME AND PRINCIPE',
          'SA'=>'SAUDI ARABIA',
          'SN'=>'SENEGAL',
          'SC'=>'SEYCHELLES',
          'SL'=>'SIERRA LEONE',
          'SG'=>'SINGAPORE',
          'SK'=>'SLOVAKIA',
          'SI'=>'SLOVENIA',
          'SB'=>'SOLOMON ISLANDS',
          'SO'=>'SOMALIA',
          'ZA'=>'SOUTH AFRICA',
          'GS'=>'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',
          'ES'=>'SPAIN',
          'LK'=>'SRI LANKA',
          'SD'=>'SUDAN',
          'SR'=>'SURINAME',
          'SJ'=>'SVALBARD AND JAN MAYEN',
          'SZ'=>'SWAZILAND',
          'SE'=>'SWEDEN',
          'CH'=>'SWITZERLAND',
          'SY'=>'SYRIAN ARAB REPUBLIC',
          'TW'=>'TAIWAN, PROVINCE OF CHINA',
          'TJ'=>'TAJIKISTAN',
          'TZ'=>'TANZANIA, UNITED REPUBLIC OF',
          'TH'=>'THAILAND',
          'TG'=>'TOGO',
          'TK'=>'TOKELAU',
          'TO'=>'TONGA',
          'TT'=>'TRINIDAD AND TOBAGO',
          'TN'=>'TUNISIA',
          'TR'=>'TURKEY',
          'TM'=>'TURKMENISTAN',
          'TC'=>'TURKS AND CAICOS ISLANDS',
          'TV'=>'TUVALU',
          'UG'=>'UGANDA',
          'UA'=>'UKRAINE',
          'AE'=>'UNITED ARAB EMIRATES',
          'GB'=>'UNITED KINGDOM',
          'US'=>'UNITED STATES',
          'UM'=>'UNITED STATES MINOR OUTLYING ISLANDS',
          'UY'=>'URUGUAY',
          'UZ'=>'UZBEKISTAN',
          'VU'=>'VANUATU',
          'VE'=>'VENEZUELA',
          'VN'=>'VIET NAM',
          'VG'=>'VIRGIN ISLANDS, BRITISH',
          'VI'=>'VIRGIN ISLANDS, U.S.',
          'WF'=>'WALLIS AND FUTUNA',
          'EH'=>'WESTERN SAHARA',
          'YE'=>'YEMEN',
          'YU'=>'YUGOSLAVIA',
          'ZM'=>'ZAMBIA',
          'ZW'=>'ZIMBABWE',
      );

      // Loop through array and insert terms
      foreach($country_array as $abbr => $name)
      {
          if(!get_term_by('name', ucwords(strtolower($name)), 'country'))
              wp_insert_term(ucwords(strtolower($name)), 'country');
      }
  }

  function the_breadcrumb() {
      global $post;
      echo '<ul id="breadcrumbs">';
      if (!is_home()) {
          echo '<li><a href="';
          echo get_option('home');
          echo '">';
          echo 'Inicio';
          echo '</a></li><li class="separator"> / </li>';
          if (is_category() || is_single()) {
              echo '<li>';
              the_category(' </li><li class="separator"> / </li><li> ');
              if (is_single()) {
                  echo '</li><li class="separator"> / </li><li>';
                  the_title();
                  echo '</li>';
              }
          } elseif (is_page()) {
              if($post->post_parent){
                  $anc = get_post_ancestors( $post->ID );
                  $title = get_the_title();
                  foreach ( $anc as $ancestor ) {
                      $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                  }
                  echo $output;
                  echo '<strong title="'.$title.'"> '.$title.'</strong>';
              } else {
                  echo '<li><strong> '.get_the_title().'</strong></li>';
              }
          }
      }
      elseif (is_tag()) {single_tag_title();}
      elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
      elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
      elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
      elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
      elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
      elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
      echo '</ul>';
  }

function SearchFilter($query) {
    // If 's' request variable is set but empty
    if (isset($_GET['s']) && empty($_GET['s']) && $query->is_main_query()){
        $query->is_search = true;
        $query->is_home = false;
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');

?>