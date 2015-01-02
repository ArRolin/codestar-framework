<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Get option
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_get_option' ) ) {
  function cs_get_option( $option_name = '', $default = '' ) {

    $options = apply_filters( 'cs_get_option', get_option( CS_OPTION ) );

    if( ! empty( $option_name ) && ! empty( $options[$option_name] ) ) {
      return $options[$option_name];
    } else {
      return ( ! empty( $default ) ) ? $default : null;
    }

  }
}

/**
 *
 * Set option
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_set_option' ) ) {
  function cs_set_option( $option_name = '', $new_value = '' ) {

    $options = get_option( CS_OPTION );

    if( ! empty( $option_name ) && ! empty( $options[$option_name] ) ) {
      $options[$option_name] = $new_value;
      update_option( CS_OPTION, $options );
    }

  }
}

/**
 *
 * Multi language value
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_get_multilang_option' ) ) {
  function cs_get_multilang_option( $option_name = '', $default = '' ) {

    $value     = cs_get_option( $option_name, $default );
    $languages = cs_language_defaults();
    $default   = $languages['default'];
    $current   = $languages['current'];

    if ( is_array( $value ) && is_array( $languages ) && isset( $value[$current] ) ) {
      return  $value[$current];
    } else if ( $default != $current ) {
      return  '';
    }

    return $value;

  }
}


/**
 *
 * Get customize option
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_get_customize_option' ) ) {
  function cs_get_customize_option( $option_name = '', $default = '' ) {

    $options = apply_filters( 'cs_get_customize_option', get_option( CS_CUSTOMIZE ) );

    if( ! empty( $option_name ) && ! empty( $options[$option_name] ) ) {
      return $options[$option_name];
    } else {
      return ( ! empty( $default ) ) ? $default : null;
    }

  }
}

/**
 *
 * WPML plugin is activated
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'is_wpml_activated' ) ) {
  function is_wpml_activated() {
    if ( class_exists( 'SitePress' ) ) { return true; } else { return false; }
  }
}

/**
 *
 * qTranslate plugin is activated
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'is_qtranslate_activated' ) ) {
  function is_qtranslate_activated() {
    if ( function_exists( 'qtrans_getSortedLanguages' ) ) { return true; } else { return false; }
  }
}

/**
 *
 * Polylang plugin is activated
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'is_polylang_activated' ) ) {
  function is_polylang_activated() {
    if ( function_exists( 'pll_current_language' ) ) { return true; } else { return false; }
  }
}

/**
 *
 * Encode string for backup options
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_encode_string' ) ) {
  function cs_encode_string( $string ) {
    return rtrim( strtr( base64_encode( addslashes( gzcompress( serialize( $string ), 9 ) ) ), '+/', '-_' ), '=' );
  }
}

/**
 *
 * Decode string for backup options
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_decode_string' ) ) {
  function cs_decode_string( $string ) {
    return unserialize( gzuncompress( stripslashes( base64_decode( rtrim( strtr( $string, '-_', '+/' ), '=' ) ) ) ) );
  }
}

/**
 *
 * Get language defaults
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function cs_language_defaults() {

  $multilang = array();

  if( is_wpml_activated() || is_qtranslate_activated() || is_polylang_activated() ) {

    if( is_wpml_activated() ) {

      global $sitepress;
      $multilang['default']   = $sitepress->get_default_language();
      $multilang['current']   = $sitepress->get_current_language();
      $multilang['languages'] = $sitepress->get_active_languages();

    } else if( is_polylang_activated() ) {

      global $polylang;
      $current    = pll_current_language();
      $default    = pll_default_language();
      $current    = ( empty( $current ) ) ? $default : $current;
      $poly_langs = $polylang->model->get_languages_list();
      $languages  = array();

      foreach ( $poly_langs as $p_lang ) {
        $languages[$p_lang->slug] = $p_lang->slug;
      }

      $multilang['default']   = $default;
      $multilang['current']   = $current;
      $multilang['languages'] = $languages;

    } else if( is_qtranslate_activated() ) {

      global $q_config;
      $multilang['default']   = $q_config['default_language'];
      $multilang['current']   = $q_config['language'];
      $multilang['languages'] = array_flip( qtrans_getSortedLanguages() );

    }

  }

  $multilang = apply_filters( 'cs_language_defaults', $multilang );

  return ( ! empty( $multilang ) ) ? $multilang : false;

}

/**
 *
 * Array search key & value
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_array_search' ) ) {
  function cs_array_search( $array, $key, $value ) {

    $results = array();

    if ( is_array( $array ) ) {
      if ( isset( $array[$key] ) && $array[$key] == $value ) {
        $results[] = $array;
      }

      foreach ( $array as $sub_array ) {
        $results = array_merge( $results, cs_array_search( $sub_array, $key, $value ) );
      }

    }

    return $results;

  }
}

/**
 * Add framework element
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_add_element' ) ) {
  function cs_add_element( $field = array(), $value = '', $unique = '' ) {

    $output     = '';
    $depend     = '';
    $sub        = ( isset( $field['sub'] ) ) ? 'sub-': '';
    $unique     = ( isset( $unique ) ) ? $unique : '';
    $languages  = cs_language_defaults();
    $class      = 'CSFramework_Option_' . $field['type'];
    $wrap_class = ( isset( $field['wrap_class'] ) ) ? ' ' . $field['wrap_class'] : '';
    $hidden     = ( isset( $field['show_only_language'] ) && ( $field['show_only_language'] != $languages['current'] ) ) ? ' hidden' : '';
    $is_pseudo  = ( isset( $field['pseudo'] ) ) ? ' pseudo-field' : '';

    if ( isset( $field['dependency'] ) ) {
      $hidden  = ' hidden';
      $depend .= ' data-'. $sub .'controller="'. $field['dependency'][0] .'"';
      $depend .= ' data-'. $sub .'condition="'. $field['dependency'][1] .'"';
      $depend .= " data-". $sub ."value='". $field['dependency'][2] ."'";
    }

    $fieldset_class = ( isset( $field['title'] ) ) ? 'cs-fieldset ' : '';

    $output .= '<div class="cs-element cs-field-'. $field['type'] . $is_pseudo . $wrap_class . $hidden .'"'. $depend .'>';

    if( isset( $field['title'] ) ) {
      $field_desc = ( isset( $field['desc'] ) ) ? '<p class="cs-text-desc">'. $field['desc'] .'</p>' : '';
      $output .= '<div class="cs-title"><h4>' . $field['title'] . '</h4>'. $field_desc .'</div>';
    }

    $output .= '<div class="'. $fieldset_class .'">';

    $value   = ( !isset( $value ) && isset( $field['default'] ) ) ? $field['default'] : $value;
    $value   = ( isset( $field['value'] ) ) ? $field['value'] : $value;

    // check class
    if( class_exists( $class ) ) {
      ob_start();
      $element = new $class( $field, $value, $unique );
      $element->output();
      $output .= ob_get_clean();
    } else {
      $output .= '<p>'. __( 'This field class is not available!', CS_TEXTDOMAIN ) .'</p>';
    }

    $output .= '</div>';

    $output .= '<div class="clear"></div>';

    $output .= '</div>';

    return $output;

  }
}

/**
 *
 * Safe web fonts
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_get_websafe_fonts' ) ) {
  function cs_get_websafe_fonts() {

    return apply_filters( 'cs_websafe_fonts', array(
      'Arial',
      'Arial Black',
      'Comic Sans MS',
      'Impact',
      'Lucida Sans Unicode',
      'Tahoma',
      'Trebuchet MS',
      'Verdana',
      'Courier New',
      'Lucida Console',
      'Georgia, serif',
      'Palatino Linotype',
      'Times New Roman'
    ) );

  }
}

/**
 *
 * Check for google font
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_is_googe_font' ) ) {
  function cs_is_googe_font( $font ) {
    return ( ! empty( $font ) && ! in_array( $font, cs_get_websafe_fonts() ) ) ? true : false;
  }
}

/**
 *
 * Get locate for load textdomain
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function cs_get_locale() {

  global $locale, $wp_local_package;

  if ( isset( $locale ) ) {
    return apply_filters( 'locale', $locale );
  }

  if ( isset( $wp_local_package ) ) {
    $locale = $wp_local_package;
  }

  if ( defined( 'WPLANG' ) ) {
    $locale = WPLANG;
  }

  if ( is_multisite() ) {

    if ( defined( 'WP_INSTALLING' ) || ( false === $ms_locale = get_option( 'WPLANG' ) ) ) {
      $ms_locale = get_site_option( 'WPLANG' );
    }

    if ( $ms_locale !== false ) {
      $locale = $ms_locale;
    }

  } else {

    $db_locale = get_option( 'WPLANG' );

    if ( $db_locale !== false ) {
      $locale = $db_locale;
    }

  }

  if ( empty( $locale ) ) {
    $locale = 'en_US';
  }

  return apply_filters( 'locale', $locale );

}

/**
 *
 * Load options fields
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_load_option_fields' ) ) {
  function cs_load_option_fields() {

    $located_fields = array();

    foreach ( glob( CS_DIR .'/fields/*/*.{php}', GLOB_BRACE ) as $cs_field ) {
      $located_fields[] = basename( $cs_field );
      cs_locate_template( CS_BASENAME . str_replace(  CS_DIR, '', $cs_field ) );
    }

    // theme override fields
    $override_dir = get_template_directory() .'/cs-framework-override/fields';

    if( is_dir( $override_dir ) ) {

      foreach ( glob( $override_dir .'/*/*.{php}', GLOB_BRACE ) as $override_field ) {

        if( ! in_array( basename( $override_field ), $located_fields ) ) {

          cs_locate_template( CS_BASENAME . str_replace(  CS_DIR .'-override', '', $override_field ) );

        }

      }

    }

    do_action( 'cs_load_option_fields' );

  }
}