<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Color Picker
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_color_picker extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo $this->element_before();
    echo '<input type="text" name="'. $this->element_name() .'" value="'. $this->element_value() .'"'. $this->element_class( 'cs-color-picker' ) . $this->element_attributes( $this->is_rgba() ) .'/>';
    echo $this->element_after();

  }

  public function is_rgba() {
    return ( isset( $this->field['rgba'] ) &&  $this->field['rgba'] === false ) ? array( 'data-rgba' => 'false' ) : '';
  }
}