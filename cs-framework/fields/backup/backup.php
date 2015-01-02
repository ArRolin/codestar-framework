<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Backup
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_backup extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo $this->element_before();

    echo '<textarea name="'. $this->unique .'[import]"'. $this->element_class() . $this->element_attributes() .'></textarea>';
    submit_button( __( 'Import a Backup', CS_TEXTDOMAIN ), 'primary cs-import-backup', 'backup', false );
    echo '<small>( '. __( 'copy-paste your backup string here', CS_TEXTDOMAIN ).' )</small>';

    echo '<hr />';

    echo '<textarea name="_nonce"'. $this->element_class() . $this->element_attributes() .' disabled="disabled">'. cs_encode_string( get_option( $this->unique ) ) .'</textarea>';
    echo '<a href="'. admin_url( 'admin-ajax.php?action=cs-export-options' ) .'" class="button button-primary" target="_blank">'. __( 'Export and Download Backup', CS_TEXTDOMAIN ) .'</a>';
    echo '<small>-( '. __( 'or', CS_TEXTDOMAIN ) .' )-</small>';
    submit_button( __( '!!! Reset All Options !!!', CS_TEXTDOMAIN ), 'cs-warning-primary cs-reset-confirm', $this->unique . '[resetall]', false );
    echo '<small class="cs-text-warning">'. __( 'Please be sure for reset all of framework options.', CS_TEXTDOMAIN ) .'</small>';
    echo $this->element_after();

  }

}