<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Image Select
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_image_select extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    $input_type = ( isset( $this->field['radio'] ) ) ? 'radio' : 'checkbox';

    echo $this->element_before();
    echo '<div class="cs-image-select">';

    if( isset( $this->field['options'] ) ) {

      $options  = $this->field['options'];
      foreach ( $options as $key => $value ) {
        echo '<label><img src="'. $value .'" alt="'. $key .'" /><input type="'. $input_type .'" name="'. $this->element_name() .'" value="'. $key .'"'. $this->element_class() . $this->element_attributes( $key ) . $this->checked( $this->element_value(), $key ) .'/></label>';
      }

    }

    echo '</div>';
    echo $this->element_after();

  }

}