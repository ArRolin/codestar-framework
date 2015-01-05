<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Group
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_group extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo $this->element_before();

    $last_array_id    = ( is_array( $this->value ) ) ? count( $this->value ) : 0;
    $accordion_title  = ( isset( $this->field['accordion_title'] ) ) ? $this->field['accordion_title'] : __( 'Adding', CS_TEXTDOMAIN );

    echo '<div class="cs-group hidden">';

      echo '<h4>'. $accordion_title .'</h4>';
      echo '<div class="cs-group-content">';
      foreach ( $this->field['fields'] as $field_key => $field ) {
        $field['sub']   = true;
        $unique         = $this->unique .'[_nonce]['. $this->field['id'] .']['. $last_array_id .']';
        $field_default  = ( isset( $field['default'] ) ) ? $field['default'] : '';
        echo cs_add_element( $field, $field_default, $unique );
      }
      echo '<div class="cs-remove"><a href="#" class="button cs-warning-primary cs-remove-group">'. __( 'Remove', CS_TEXTDOMAIN ) .'</a></div>';
      echo '<div class="clear"></div>';
      echo '</div>';

    echo '</div>'; // end hidden group

    echo '<div class="cs-groups cs-accordion">';

      if( ! empty( $this->value ) ) {

        foreach ( $this->value as $key => $value ) {

          $title = $this->value[$key][$this->field['fields'][0]['id']];

          // multi-lang title
          if ( is_array( $title ) && isset( $this->multilang ) ) {
            $multilang = cs_language_defaults();
            $title     = $title[$multilang['current']];
            $title     = is_array( $title ) ? $title[0] : $title;
          }

          echo '<div class="cs-group">';
          echo '<h4>'. $this->field['fields'][0]['title'] .': '. $title .'</h4>';
          echo '<div class="cs-group-content">';

          foreach ( $this->field['fields'] as $field_key => $field ) {
            $field['sub'] = true;
            $unique = $this->unique . '[' . $this->field['id'] . ']['.$key.']';
            $value  = isset($this->value[$key][$field['id']]) ? $this->value[$key][$field['id']]:'';
            echo cs_add_element( $field, $value, $unique );
          }

          echo '<div class="cs-remove"><a href="#" class="button cs-warning-primary cs-remove-group">'. __( 'Remove', CS_TEXTDOMAIN ) .'</a></div>';
          echo '<div class="clear"></div>';
          echo '</div>';
          echo '</div>';

        }

      }

    echo '</div>';  // end groups

    echo '<a href="#" class="button button-primary cs-add-group">'. $this->field['button_title'] .'</a>';

    echo $this->element_after();

  }

}