<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// CUSTOMIZE SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options          = array();

// -----------------------------------------
// Customize Core Fields                   -
// -----------------------------------------
$options[]        = array(
  'name'          => 'core_fields',
  'title'         => 'Core Fields',
  'settings'      => array(

    // core text
    array(
      'name'      => 'text_option',
      'control'   => array(
        'label'   => 'Text Field',
        'type'    => 'text',
      ),
    ),

    // core text with default
    array(
      'name'      => 'text_option_with_default',
      'default'   => 'bla bla bla',
      'control'   => array(
        'label'   => 'Text Field with Default',
        'type'    => 'text',
      ),
    ),

    // core textarea
    array(
      'name'      => 'textarea_option',
      'control'   => array(
        'label'   => 'Textarea Field',
        'type'    => 'textarea',
      ),
    ),

    // core checkbox
    array(
      'name'      => 'checkbox_option',
      'control'   => array(
        'label'   => 'Single Checkbox Field',
        'type'    => 'checkbox',
      ),
    ),

    // core radio
    array(
      'name'      => 'radio_option',
      'control'   => array(
        'label'   => 'Radio Field',
        'type'    => 'radio',
        'choices' => array(
          'key1'  => 'value 1',
          'key2'  => 'value 2',
          'key3'  => 'value 3',
        )
      ),
    ),

    // core select
    array(
      'name'      => 'select_option',
      'control'   => array(
        'label'   => 'Select Field',
        'type'    => 'select',
        'choices' => array(
          ''      => '— Select a value —',
          'key1'  => 'value 1',
          'key2'  => 'value 2',
          'key3'  => 'value 3',
        )
      ),
    ),

    // core dropdown-pages
    array(
      'name'      => 'dropdown_pages_option',
      'control'   => array(
        'label'   => 'Dropdown-Pages Field',
        'type'    => 'dropdown-pages',
      ),
    ),

    // core color
    array(
      'name'      => 'color_option',
      'control'   => array(
        'label'   => 'Color Picker Field',
        'type'    => 'color',
      ),
    ),

    // core color with default
    array(
      'name'      => 'color_option_with_default',
      'default'   => '#ffbc00',
      'control'   => array(
        'label'   => 'Color Picker Field with Default',
        'type'    => 'color',
      ),
    ),

  )
);

// -----------------------------------------
// Customize Codestar Fields               -
// -----------------------------------------
$options[]        = array(
  'name'          => 'codestar_fields',
  'title'         => 'Codestar Fields',
  'settings'      => array(

    // codestar text
    array(
      'name'      => 'codestar_text',
      'control'   => array(
        'type'    => 'cs_field',
        'options' => array(
          'type'  => 'text',
          'title' => 'Text Field',
        ),
      ),
    ),

    // codestar textarea
    array(
      'name'      => 'codestar_textarea',
      'control'   => array(
        'type'    => 'cs_field',
        'options' => array(
          'type'  => 'textarea',
          'title' => 'Text Area',
        ),
      ),
    ),

    // codestar switcher
    array(
      'name'      => 'codestar_switcher',
      'control'   => array(
        'type'    => 'cs_field',
        'options' => array(
          'type'  => 'switcher',
          'title' => 'Codestar Switcher Field',
          'label' => 'Do you want to ?',
          'help'  => 'Lorem Ipsum Dollar',
        ),
      ),
    ),

    // codestar upload
    array(
      'name'      => 'codestar_upload',
      'control'   => array(
        'type'    => 'cs_field',
        'options' => array(
          'type'  => 'upload',
          'title' => 'Codestar Upload Field',
        ),
      ),
    ),

    // codestar image select
    array(
      'name'          => 'codestar_image_select',
      'control'       => array(
        'type'        => 'cs_field',
        'options'     => array(
          'type'      => 'image_select',
          'title'     => 'Codestar Image Select Field',
          'options'   => array(
            'value-1' => 'http://dummyimage.com/65x65/2ecc71/fff.png',
            'value-2' => 'http://dummyimage.com/65x65/e74c3c/fff.png',
            'value-3' => 'http://dummyimage.com/65x65/3498db/fff.png',
          ),
          'radio'     => true,
        ),
      ),
    ),

  )
);

// -----------------------------------------
// Customize Panel Options Fields          -
// -----------------------------------------
$options[]      = array(
  'name'        => 'codestar_panel_1',
  'title'       => 'Codestar Panel Example',
  'description' => 'Codestar customize panel description.',
  'sections'    => array(

    // begin: section
    array(
      'name'        => 'section_1',
      'title'       => 'Section 1',
      'settings'    => array(

        // core color
        array(
          'name'      => 'color_option_1',
          'default'   => '#ffbc00',
          'control'   => array(
            'label'   => 'Color Option 1',
            'type'    => 'color',
          ),
        ),

        // core color
        array(
          'name'      => 'color_option_2',
          'default'   => '#2ecc71',
          'control'   => array(
            'label'   => 'Color Option 2',
            'type'    => 'color',
          ),
        ),

        // core color
        array(
          'name'      => 'color_option_3',
          'default'   => '#e74c3c',
          'control'   => array(
            'label'   => 'Color Option 3',
            'type'    => 'color',
          ),
        ),

        // core color
        array(
          'name'      => 'color_option_4',
          'default'   => '#3498db',
          'control'   => array(
            'label'   => 'Color Option 4',
            'type'    => 'color',
          ),
        ),

        // core color
        array(
          'name'      => 'color_option_5',
          'default'   => '#555555',
          'control'   => array(
            'label'   => 'Color Option 5',
            'type'    => 'color',
          ),
        ),

      ),
    ),
    // end: section

    // begin: section
    array(
      'name'        => 'section_2',
      'title'       => 'Section 2',
      'settings'    => array(

        // core text
        array(
          'name'      => 'text_option_1',
          'control'   => array(
            'label'   => 'Text Option 1',
            'type'    => 'text',
          ),
        ),

        // core text
        array(
          'name'      => 'text_option_2',
          'control'   => array(
            'label'   => 'Text Option 2',
            'type'    => 'text',
          ),
        ),

        // core text
        array(
          'name'      => 'text_option_3',
          'control'   => array(
            'label'   => 'Text Option 3',
            'type'    => 'text',
          ),
        ),

      ),
    ),
    // end: section

  ),
  // end: sections

);

CSFramework_Customize::instance( $options );