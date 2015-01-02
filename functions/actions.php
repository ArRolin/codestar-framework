<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Get icons from admin ajax
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_get_icons' ) ) {
  function cs_get_icons() {

    $jsons = glob( CS_DIR . '/fields/icon/*.{json}', GLOB_BRACE );

    if( ! empty( $jsons ) ) {
      foreach ( $jsons as $path ) {

        $object = json_decode( wp_remote_retrieve_body( wp_remote_get( CS_URI .'/fields/icon/'. basename( $path ) ) ) );

        echo ( count( $jsons ) >= 2 ) ? '<h4 class="cs-icon-title">'. $object->name .'</h4>' : '';

        foreach ( $object->icons as $icon ) {
          echo '<a class="cs-icon-tooltip" data-icon="'. $icon .'" data-title="'. $icon .'"><span class="cs-icon cs-selector"><i class="'. $icon .'"></i></span></a>';
        }

      }
    }

    do_action( 'cs_add_icons' );

    die();
  }
  add_action( 'wp_ajax_cs-get-icons', 'cs_get_icons' );
}

/**
 *
 * Set icons for wp dialog
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_set_icons' ) ) {
  function cs_set_icons() {

    echo '<div id="cs-icon-dialog" class="cs-dialog" title="'. __( 'Add Icon', CS_TEXTDOMAIN ) .'">';
    echo '<div class="cs-dialog-header cs-text-center"><input type="text" placeholder='. __( 'Search a Icon...', CS_TEXTDOMAIN ) .'" class="cs-icon-search" /></div>';
    echo '<div class="cs-dialog-load"><div class="cs-icon-loading">'. __( 'Loading...', CS_TEXTDOMAIN ) .'</div></div>';
    echo '</div>';

  }
  add_action( 'admin_footer', 'cs_set_icons' );
}