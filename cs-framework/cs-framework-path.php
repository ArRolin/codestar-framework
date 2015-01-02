<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Framework path finder
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_get_path_locate' ) ) {
  function cs_get_path_locate() {

    if ( ! function_exists( 'get_plugins' ) || ! function_exists( 'is_plugin_active' ) ) {
      require_once ( ABSPATH . 'wp-admin/includes/plugin.php' );
    }

    foreach ( get_plugins() as $key => $value ) {
      if ( strpos( $key, 'cs-framework.php' ) !== false ) {
        if( is_plugin_active( $key ) ) {
          $as_theme = false;
          $basename = '/'. str_replace( '/cs-framework.php', '', $key );
          $dir      = WP_PLUGIN_DIR . $basename;
          $uri      = WP_PLUGIN_URL . $basename;
        }
      }
    }

    if ( ! isset( $basename ) ) {
      $as_theme  = true;
      $basename  = str_replace( wp_normalize_path( get_template_directory() ), '', wp_normalize_path( dirname( __FILE__ ) ) );
      $dir       = get_template_directory() . $basename;
      $uri       = get_template_directory_uri() . $basename;
    }

    return apply_filters( 'cs_get_path_locate', array(
      'as_theme' => $as_theme,
      'basename' => wp_normalize_path( $basename ),
      'dir'      => wp_normalize_path( $dir ),
      'uri'      => $uri
    ) );

  }
}

/**
 *
 * Framework locate template and override files
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if( ! function_exists( 'cs_locate_template' ) ) {
  function cs_locate_template( $template_name ) {

    $located      = '';
    $dir_plugin   = WP_PLUGIN_DIR;
    $dir_theme    = get_template_directory();
    $dir_child    = get_stylesheet_directory();
    $dir_override = '/cs-framework-override'. str_replace( CS_BASENAME, '', $template_name );

    // child theme override
    $child_force_overide    = $dir_child  . $dir_override;
    $child_normal_override  = $dir_child  . $template_name;

    // theme override paths
    $theme_force_override   = $dir_theme  . $dir_override;
    $theme_normal_override  = $dir_theme  . $template_name;

    // plugin override
    $plugin_force_override  = $dir_plugin . $dir_override;
    $plugin_normal_override = $dir_plugin . $template_name;

    if ( file_exists( $child_force_overide ) ) {

      $located = $child_force_overide;

    } else if ( file_exists( $child_normal_override ) ) {

      $located = $child_normal_override;

    } else if ( file_exists( $theme_force_override ) ) {

      $located = $theme_force_override;

    } else if ( file_exists( $theme_normal_override ) ) {

      $located = $theme_normal_override;

    } else if ( file_exists( $plugin_force_override ) ) {

      $located =  $plugin_force_override;

    } else if ( file_exists( $plugin_normal_override ) ) {

      $located =  $plugin_normal_override;
    }

    $located = apply_filters( 'cs_locate_template', $located, $template_name );

    if ( ! empty( $located ) ) {
      load_template( $located, true );
    }

    return $located;

  }
}