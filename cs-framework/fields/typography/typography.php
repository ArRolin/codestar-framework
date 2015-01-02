<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Typography
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_typography extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo $this->element_before();

    $googlefonts      = array();
    $google_json      = json_decode( wp_remote_retrieve_body( wp_remote_get( CS_URI .'/fields/typography/google-fonts.json' ) ) );
    $defaults_value   = array( 'family' => 'Arial', 'variant' => 'regular' );
    $default_variants = array( 'regular', 'italic', '700', '700italic', 'inherit' );
    $websafe_fonts    = cs_get_websafe_fonts();
    $value            = wp_parse_args( $this->element_value(), $defaults_value );
    $family_value     = $value['family'];
    $variant_value    = $value['variant'];

    if( ! empty( $google_json ) ) {

      // set google fonts
      foreach ( $google_json->items as $key => $font ) {
        $googlefonts[$font->family] = $font->variants;
      }

      // google and websafe fonts selector
      echo '<div class="cs-typography">';

        // fonts family selector
        echo '<label class="cs-typography-family">';
        echo '<select name="'. $this->element_name( '[family]' ) .'" class="chosen cs-typo-family" data-atts="family">';
        echo '<optgroup label="Web Safe Fonts">';
        foreach ( $websafe_fonts as $websafe_value ) {
          echo '<option value="'. $websafe_value .'" data-variants="'. implode( '|', $default_variants ).'" data-type="safefonts"'. selected( $websafe_value, $family_value, true ) .'>'. $websafe_value .'</option>';
        }
        echo '</optgroup>';
        echo '<optgroup label="Google Fonts">';
        foreach ( $googlefonts as $google_key => $google_value ) {
          echo '<option value="'. $google_key .'" data-variants="'. implode( '|', $google_value ).'" data-type="googlefonts"'. selected( $google_key, $family_value, true ) .'>'. $google_key .'</option>';
        }
        echo '</optgroup>';
        echo '</select>';
        echo '</label>';


        // fonts variant selector
        $variants = ( cs_is_googe_font( $family_value ) ) ? $googlefonts[$family_value] : $default_variants;
        echo '<label class="cs-typography-variant">';
        echo '<select name="'. $this->element_name( '[variant]' ) .'" class="chosen cs-typo-variant" data-atts="variant">';
        foreach ( $variants as $variant ) {
          echo '<option value="'. $variant .'"'. $this->checked( $variant_value, $variant, 'selected' ) .'>'. $variant .'</option>';
        }
        echo '</select>';
        echo '</label>';

      echo '</div>';

    } else {

      _e( 'Error! Can not load json file.', CS_TEXTDOMAIN );

    }

    echo $this->element_after();

  }

}