<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Icon
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_icon extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo $this->element_before();

    $hidden = ( empty( $this->element_value() ) ) ? ' hidden' : '';

    echo '<div class="cs-icon-select">';
    echo '<span class="cs-icon-preview'. $hidden .'"><i class="'. $this->element_value() .'"></i></span>';
    echo '<a href="#" class="button button-primary cs-icon-add">'. __( 'Add Icon', CS_TEXTDOMAIN ) .'</a>';
    echo '<a href="#" class="button cs-warning-primary cs-icon-remove'. $hidden .'">'. __( 'Remove Icon', CS_TEXTDOMAIN ) .'</a>';
    echo '<input type="hidden" name="'. $this->element_name() .'" value="'. $this->element_value() .'"'. $this->element_class( 'cs-icon-value' ) . $this->element_attributes() .' />';
    echo '</div>';

    echo $this->element_after();

  }

}