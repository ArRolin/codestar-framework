<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings      = array(
  'menu_title' => 'Framework',
  'menu_type'  => 'add_menu_page',
  'menu_slug'  => 'cs-framework',
  'ajax_save'  => false,
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'overwiew',
  'title'       => 'Overview',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'text_1',
      'type'    => 'text',
      'title'   => 'Text',
    ),
    // end: a field

    array(
      'id'      => 'textarea_1',
      'type'    => 'textarea',
      'title'   => 'Textarea',
      'help'    => 'This option field is useful. You will love it!',
    ),

    array(
      'id'      => 'upload_1',
      'type'    => 'upload',
      'title'   => 'Upload',
      'help'    => 'Upload a site logo for your branding.',
    ),

    array(
      'id'      => 'switcher_1',
      'type'    => 'switcher',
      'title'   => 'Switcher',
      'label'   => 'You want to update for this framework ?',
    ),

    array(
      'id'      => 'color_picker_1',
      'type'    => 'color_picker',
      'title'   => 'Color Picker',
      'default' => '#3498db',
    ),

    array(
      'id'      => 'checkbox_1',
      'type'    => 'checkbox',
      'title'   => 'Checkbox',
      'label'   => 'Did you like this framework ?',
    ),

    array(
      'id'      => 'radio_1',
      'type'    => 'radio',
      'title'   => 'Radio',
      'options' => array(
        'yes'   => 'Yes, Please.',
        'no'    => 'No, Thank you.',
      ),
      'help'    => 'Are you sure for this choice?',
    ),

    array(
      'id'             => 'select_1',
      'type'           => 'select',
      'title'          => 'Select',
      'options'        => array(
        'bmw'          => 'BMW',
        'mercedes'     => 'Mercedes',
        'volkswagen'   => 'Volkswagen',
        'other'        => 'Other',
      ),
      'default_option' => 'Select your favorite car',
    ),

    array(
      'id'      => 'number_1',
      'type'    => 'number',
      'title'   => 'Number',
      'default' => '10',
      'after'   => ' <i class="cs-text-muted">$ (dollars)</i>',
    ),

    array(
      'id'        => 'image_select_1',
      'type'      => 'image_select',
      'title'     => 'Image Select',
      'options'   => array(
        'value-1' => 'http://dummyimage.com/100x80/2ecc71/fff.png',
        'value-2' => 'http://dummyimage.com/100x80/e74c3c/fff.png',
        'value-3' => 'http://dummyimage.com/100x80/ffbc00/fff.png',
        'value-4' => 'http://dummyimage.com/100x80/3498db/fff.png',
        'value-5' => 'http://dummyimage.com/100x80/555555/fff.png',
      ),
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'This is info notice field for your highlight sentence.',
    ),

    array(
      'id'      => 'background_1',
      'type'    => 'background',
      'title'   => 'Background',
    ),

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'This is info warning field for your highlight sentence.',
    ),

    array(
      'id'      => 'icon_1',
      'type'    => 'icon',
      'title'   => 'Icon',
      'desc'    => 'Some description here for this option field.',
    ),

    array(
      'id'      => 'text_2',
      'type'    => 'text',
      'title'   => 'Text',
      'desc'    => 'Some description here for this option field.',
    ),

    array(
      'id'        => 'textarea_2',
      'type'      => 'textarea',
      'title'     => 'Textarea',
      'info'      => 'Some information here for this option field.',
      'shortcode' => true,
    ),

  ), // end: fields
);

// ------------------------------
// a option section with tabs   -
// ------------------------------
$options[]   = array(
  'name'     => 'options',
  'title'    => 'Options',
  'icon'     => 'fa fa-plus-circle',
  'sections' => array(

    // -----------------------------
    // begin: text options         -
    // -----------------------------
    array(
      'name'      => 'text_options',
      'title'     => 'Text',
      'icon'      => 'fa fa-check',

      // begin: fields
      'fields'    => array(

        // begin: a field
        array(
          'id'    => 'unique_text_1',
          'type'  => 'text',
          'title' => 'Text Field',
        ),
        // end: a field

        array(
          'id'    => 'unique_text_2',
          'type'  => 'text',
          'title' => 'Text Field with Description',
          'desc'  => 'Lets write some description for this text field.',
        ),

        array(
          'id'    => 'unique_text_3',
          'type'  => 'text',
          'title' => 'Text Field with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_text_4',
          'type'    => 'text',
          'title'   => 'Text Field with Default',
          'default' => 'some default value bla bla bla',
        ),

        array(
          'id'            => 'unique_text_5',
          'type'          => 'text',
          'title'         => 'Text Field with Placeholder',
          'attributes'    => array(
            'placeholder' => 'do stuff...'
          )
        ),

        array(
          'id'    => 'unique_text_6',
          'type'  => 'text',
          'title' => 'Text Field with After-text',
          'after' => ' <i class="cs-text-muted">( this option is optional )</i>',
        ),

        array(
          'id'     => 'unique_text_7',
          'type'   => 'text',
          'title'  => 'Text Field with Before-text',
          'before' => '<i class="cs-text-muted">( important )</i> ',
        ),

        array(
          'id'    => 'unique_text_8',
          'type'  => 'text',
          'title' => 'Text Field with After-block-text',
          'after' => '<p class="cs-text-info">Information: There is some description for option.</p> ',
        ),

        array(
          'id'         => 'unique_text_9',
          'type'       => 'text',
          'title'      => 'Text Field with Ready-Only',
          'attributes' => array(
            'readonly' => 'only-key'
          ),
          'default'    => 'info@domain.com'
        ),

        array(
          'id'          => 'unique_text_10',
          'type'        => 'text',
          'title'       => 'Text Field with Maxlength (5)',
          'attributes'  => array(
            'maxlength' => '5'
          ),
          'default'     => 'Hello',
        ),

        array(
          'id'         => 'unique_text_11',
          'type'       => 'text',
          'title'      => 'Text Field with Custom Style',
          'attributes' => array(
            'style'    => 'width: 175px; height: 40px; border-color: #93C054;'
          ),
          'after'      => '<p class="cs-text-muted">There is custom css <strong>style="width: 175px; height: 40px; border-color: #93C054;"</strong></p>',
        ),

        array(
          'id'         => 'unique_text_12',
          'type'       => 'text',
          'title'      => 'Text Field with Custom Style',
          'attributes' => array(
            'style'    => 'width: 100%;'
          ),
          'after'      => '<p class="cs-text-muted">There is custom css <strong>style="width: 100%;"</strong></p>'
        ),

        array(
          'id'     => 'unique_text_13',
          'type'   => 'text',
          'before' => '<h4>Text Field without left title</h4>',
          'after'  => '<p class="cs-text-muted">This Text Field do not using left title, just using before text here. also you can remove it.</h4>',
        ),

        array(
          'id'    => 'unique_text_14',
          'type'  => 'text',
          'title' => 'Text Field with Dependency Method',
          'after' => ' <i class="cs-text-muted">write something for hidden text</i>'
        ),

        array(
          'id'         => 'unique_text_15',
          'type'       => 'text',
          'title'      => 'Text Field Hidden Level 1',
          'dependency' => array( 'unique_text_14', '!=', '' ), // not empty
        ),

        // begin: a field
        array(
          'id'         => 'unique_text_16',
          'type'       => 'text',
          'title'      => 'Text Field Hidden Level 2',
          'dependency' => array( 'unique_text_15', '!=', '' ), // not empty
        ),
        // end: a field

      ), // end: fields

    ), // end: text options

    // -----------------------------
    // begin: textarea options     -
    // -----------------------------
    array(
      'name'      => 'textarea_options',
      'title'     => 'Textarea',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'    => 'unique_textarea_1',
          'type'  => 'textarea',
          'title' => 'Simple Textarea',
        ),

        array(
          'id'        => 'unique_textarea_1_1',
          'type'      => 'textarea',
          'title'     => 'Textarea with Shortcoder',
          'shortcode' => true,
        ),

        array(
          'id'    => 'unique_textarea_2',
          'type'  => 'textarea',
          'title' => 'Textarea Field with Description',
          'desc'  => 'Lets write some description for this textarea field.',
        ),

        array(
          'id'    => 'unique_textarea_3',
          'type'  => 'textarea',
          'title' => 'Textarea Field with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_textarea_4',
          'type'    => 'textarea',
          'title'   => 'Textarea Field with Default',
          'default' => 'some default value bla bla bla',
        ),

        array(
          'id'            => 'unique_textarea_5',
          'type'          => 'textarea',
          'title'         => 'Textarea Field with Placeholder',
          'attributes'    => array(
            'placeholder' => 'do stuff...'
          )
        ),

        array(
          'id'    => 'unique_textarea_6',
          'type'  => 'textarea',
          'title' => 'Textarea Field with After-text',
          'after' => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
        ),

        array(
          'id'     => 'unique_textarea_7',
          'type'   => 'textarea',
          'title'  => 'Textarea Field with Before-text',
          'before' => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
        ),

        array(
          'id'         => 'unique_textarea_8',
          'type'       => 'textarea',
          'title'      => 'Textarea Field with Before-text',
          'attributes' => array(
            'rows'     => 10,
          ),
          'after'      => '<p class="cs-text-muted">custom textarea attribute rows=10</p> ',
        ),

        array(
          'id'     => 'unique_textarea_13',
          'type'   => 'textarea',
          'before' => '<h4>Textarea Field without left title</h4>',
          'after'  => '<p class="cs-text-muted">This Textarea Field do not using left title, just using before text here. also you can remove it.</h4>',
        ),

      ),

    ), // end: textarea options

    // -----------------------------
    // begin: checkbox options     -
    // -----------------------------
    array(
      'name'      => 'checkbox_options',
      'title'     => 'Checkbox',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'    => 'unique_checkbox_1',
          'type'  => 'checkbox',
          'title' => 'Checkbox',
          'label' => 'Yes, Please.',
        ),

        array(
          'id'      => 'unique_checkbox_2',
          'type'    => 'checkbox',
          'title'   => 'Checkbox with Default Value',
          'label'   => 'Would you like something ?',
          'default' => true,
        ),

        array(
          'id'    => 'unique_checkbox_3',
          'type'  => 'checkbox',
          'title' => 'Checkbox Field with Help',
          'label' => 'I am an checkbox',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'       => 'unique_checkbox_4',
          'type'     => 'checkbox',
          'title'    => 'Checkbox Field with Options',
          'options'  => array(
            'blue'   => 'Blue',
            'green'  => 'Green',
            'yellow' => 'Yellow',
          ),
        ),

        array(
          'id'         => 'unique_checkbox_5',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Options and Default',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'jaguar'   => 'Jaguar',
          ),
          'default'    => 'bmw'
        ),

        array(
          'id'         => 'unique_checkbox_6',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Options Horizontal',
          'class'      => 'horizontal',
          'options'    => array(
            'blue'     => 'Blue',
            'green'    => 'Green',
            'yellow'   => 'Yellow',
            'red'      => 'Red',
            'black'    => 'Black',
          ),
          'default'    => array( 'green', 'yellow', 'red' )
        ),

        array(
          'id'         => 'unique_checkbox_7',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Pages',
          'options'    => 'pages',
        ),

        array(
          'id'         => 'unique_checkbox_8',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Posts',
          'options'    => 'posts',
        ),

        array(
          'id'         => 'unique_checkbox_9',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Categories',
          'options'    => 'categories',
        ),

        array(
          'id'         => 'unique_checkbox_10',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Field with Tags',
          'options'    => 'tags',
        ),

        array(
          'id'            => 'unique_checkbox_11',
          'type'          => 'checkbox',
          'title'         => 'Checkbox Field with Pages',
          'options'       => 'pages',
          'query_args'    => array(
            'sort_order'  => 'desc',
            'sort_column' => 'post_title',
          ),
          'after'         => '<p class="cs-text-muted"><strong>query_args:</strong> sort_order=desc, sort_column=post_title</p>',
        ),

        array(
          'id'          => 'unique_checkbox_12',
          'type'        => 'checkbox',
          'title'       => 'Checkbox Field with CPT Posts',
          'options'     => 'posts',
          'query_args'  => array(
            'post_type' => 'your_post_type_name',
          ),
          'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
        ),

        array(
          'id'          => 'unique_checkbox_13',
          'type'        => 'checkbox',
          'title'       => 'Checkbox Field with CPT Categories',
          'options'     => 'categories',
          'query_args'  => array(
            'type'      => 'your_post_type_name',
            'taxonomy'  => 'your_taxonomy_name',
          ),
          'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name, taxonomy=your_taxonomy_name</div>',
        ),

        array(
          'id'           => 'unique_checkbox_14',
          'type'         => 'checkbox',
          'title'        => 'Checkbox Field with CPT Tags',
          'options'      => 'tags',
          'query_args'   => array(
            'taxonomies' => 'your_taxonomy_name',
            'order'      => 'asc',
            'orderby'    => 'name',
          ),
          'after'        => '<div class="cs-text-muted"><strong>query_args:</strong> taxonomies=your_taxonomy_name, order=asc, orderby=name</div>',
        ),

        array(
          'id'         => 'unique_checkbox_15',
          'type'       => 'checkbox',
          'title'      => 'Checkbox with Dependenciy',
          'label'      => 'Click me for next dependency checkbox!',
        ),

        array(
          'id'         => 'unique_checkbox_16',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Level 1',
          'label'      => 'Click me too!',
          'dependency' => array( 'unique_checkbox_15', '!=', '' ),
        ),

        array(
          'id'         => 'unique_checkbox_16',
          'type'       => 'checkbox',
          'title'      => 'Checkbox Level 2',
          'label'      => 'Done! :)',
          'dependency' => array( 'unique_checkbox_16', '!=', '' ),
        ),

      ),
    ), // end: checkbox options


    // -----------------------------
    // begin. radio options        -
    // -----------------------------
    array(
      'name'      => 'radio_options',
      'title'     => 'Radio',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'      => 'unique_radio_1',
          'type'    => 'radio',
          'title'   => 'Radio Field',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.',
          ),
        ),

        array(
          'id'        => 'unique_radio_2',
          'type'      => 'radio',
          'title'     => 'Radio with Default Value',
          'options'   => array(
            'yes'     => 'Yes, Please.',
            'no'      => 'No, Thank you.',
            'nothing' => 'I am not sure, yet!',
          ),
          'default'   => 'nothing',
          'help'      => 'Reference site about Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'      => 'unique_radio_3',
          'type'    => 'radio',
          'title'   => 'Radio Field',
          'class'   => 'horizontal',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.',
          ),
          'after'   => '<div class="cs-text-muted">Reference site about Lorem Ipsum, a random Lipsum generator.</div>',
        ),

        array(
          'id'         => 'unique_radio_4',
          'type'       => 'radio',
          'title'      => 'Radio Field with Pages',
          'options'    => 'pages',
        ),

        array(
          'id'         => 'unique_radio_5',
          'type'       => 'radio',
          'title'      => 'Radio Field with Posts',
          'options'    => 'posts',
        ),

        array(
          'id'         => 'unique_radio_6',
          'type'       => 'radio',
          'title'      => 'Radio Field with Categories',
          'options'    => 'categories',
        ),

        array(
          'id'         => 'unique_radio_7',
          'type'       => 'radio',
          'title'      => 'Radio Field with Tags',
          'options'    => 'tags',
        ),

        array(
          'id'            => 'unique_radio_8',
          'type'          => 'radio',
          'title'         => 'Radio Field with Pages',
          'options'       => 'pages',
          'query_args'    => array(
            'sort_order'  => 'desc',
            'sort_column' => 'post_title',
          ),
          'after'         => '<p class="cs-text-muted"><strong>query_args:</strong> sort_order=desc, sort_column=post_title</p>',
        ),

        array(
          'id'          => 'unique_radio_9',
          'type'        => 'radio',
          'title'       => 'Radio Field with CPT Posts',
          'options'     => 'posts',
          'query_args'  => array(
            'post_type' => 'your_post_type_name',
          ),
          'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name</div>',
        ),

        array(
          'id'          => 'unique_radio_10',
          'type'        => 'radio',
          'title'       => 'Radio Field with CPT Categories',
          'options'     => 'categories',
          'query_args'  => array(
            'type'      => 'your_post_type_name',
            'taxonomy'  => 'your_taxonomy_name',
          ),
          'after'       => '<div class="cs-text-muted"><strong>query_args:</strong> post_type=your_post_type_name, taxonomy=your_taxonomy_name</div>',
        ),

        array(
          'id'         => 'unique_radio_11',
          'type'       => 'radio',
          'title'      => 'Radio Field',
          'options'    => array(
            'yes'      => 'Yes, Please.',
            'no'       => 'No, Thank you.',
            'nothing'  => 'Nothing.',
          ),
        ),

        array(
          'id'         => 'unique_text_checkbox_1',
          'type'       => 'text',
          'title'      => 'Text Field for YES',
          'label'      => 'This is YES dependency!',
          'dependency' => array( 'unique_radio_11_yes', '==', 'true' ),
        ),

        array(
          'id'         => 'unique_text_checkbox_2',
          'type'       => 'text',
          'title'      => 'Text Field for NO',
          'label'      => 'This is NO dependency!',
          'dependency' => array( 'unique_radio_11_no', '==', 'true' ),
        ),

      ),
    ), // end: radio options


    // -----------------------------
    // begin: select options       -
    // -----------------------------
    array(
      'name'      => 'select_options',
      'title'     => 'Select',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'      => 'unique_select_1',
          'type'    => 'select',
          'title'   => 'Select',
          'options' => array(
            'yes'   => 'Yes, Please.',
            'no'    => 'No, Thank you.'
          )
        ),

        array(
          'id'             => 'unique_select_2',
          'type'           => 'select',
          'title'          => 'Select with First Empty Value',
          'options'        => array(
            'yes'          => 'Yes, Please.',
            'no'           => 'No, Thank you.'
          ),
          'default_option' => 'Select an option',
          'help'           => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'             => 'unique_select_3',
          'type'           => 'select',
          'title'          => 'Select with Help',
          'options'        => array(
            'green'        => 'Green',
            'red'          => 'Red',
            'blue'         => 'Blue',
            'yellow'       => 'Yellow',
            'black'        => 'Black',
          ),
          'default_option' => 'Select a color',
          'info'           => 'Choose your favorite skin.',
        ),

        array(
          'id'             => 'unique_select_4',
          'type'           => 'select',
          'title'          => 'Select with Default Value',
          'options'        => array(
            'primary'      => 'Primary Option',
            'secondary'    => 'Secondry Option',
            'tertiary'     => 'Tertiary Option',
          ),
          'default'        => 'tertiary',
          'default_option' => 'Select an option',
        ),

        array(
          'id'         => 'unique_select_6',
          'type'       => 'select',
          'title'      => 'Select Field with Multi-select',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'jaguar'   => 'Jaguar',
            'opel'     => 'Opel',
            'golf'     => 'Golf',
            'ferrari'  => 'Ferrari',
            'subaru'   => 'Subaru',
            'seat'     => 'Seat',
          ),
          'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 150px; height: 125px;'
          )
        ),

        array(
          'id'         => 'unique_select_7',
          'type'       => 'select',
          'title'      => 'Select Field with Multi-default',
          'options'    => array(
            'bmw'      => 'BMW',
            'mercedes' => 'Mercedes',
            'jaguar'   => 'Jaguar',
            'opel'     => 'Opel',
            'golf'     => 'Golf',
            'ferrari'  => 'Ferrari',
            'subaru'   => 'Subaru',
            'seat'     => 'Seat',
          ),
          'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 150px; height: 125px;'
          ),
          'default'    => array( 'bmw', 'mercedes', 'opel' ),
          'info'       => 'Choose your favorite cars.',
        ),

        array(
          'id'             => 'unique_select_8',
          'type'           => 'select',
          'title'          => 'Select with Pages',
          'options'        => 'pages',
          'default_option' => 'Select a page'
        ),

        array(
          'id'             => 'unique_select_9',
          'type'           => 'select',
          'title'          => 'Select with Posts',
          'options'        => 'posts',
          'default_option' => 'Select a post'
        ),

        array(
          'id'             => 'unique_select_10',
          'type'           => 'select',
          'title'          => 'Select with Categories',
          'options'        => 'categories',
          'default_option' => 'Select a tag'
        ),

        array(
          'id'         => 'unique_select_11',
          'type'       => 'select',
          'title'      => 'Select with Pages with Multi-Select',
          'options'    => 'pages',
          'attributes' => array(
            'multiple' => 'only-key',
            'style'    => 'width: 150px; height: 125px;'
          )
        ),

        array(
          'id'                 => 'unique_select_12',
          'type'               => 'select',
          'title'              => 'Select with Chosen',
          'options'            => array(
            'bmw'              => 'BMW',
            'mercedes'         => 'Mercedes',
            'jaguar'           => 'Jaguar',
            'opel'             => 'Opel',
            'golf'             => 'Golf',
            'ferrari'          => 'Ferrari',
            'subaru'           => 'Subaru',
            'seat'             => 'Seat',
          ),
          'class'              => 'chosen',
          'default_option'     => 'Select your car',
        ),

        array(
          'id'                 => 'unique_select_13',
          'type'               => 'select',
          'title'              => 'Select with Chosen Multi-Select',
          'options'            => array(
            'bmw'              => 'BMW',
            'mercedes'         => 'Mercedes',
            'jaguar'           => 'Jaguar',
            'opel'             => 'Opel',
            'golf'             => 'Golf',
            'ferrari'          => 'Ferrari',
            'subaru'           => 'Subaru',
            'seat'             => 'Seat',
          ),
          'class'              => 'chosen',
          'attributes'         => array(
            'data-placeholder' => 'Select your favrorite cars',
            'multiple'         => 'only-key',
            'style'            => 'width: 200px;'
          ),
        ),

        array(
          'id'             => 'unique_select_14',
          'type'           => 'select',
          'title'          => 'Select with Chosen with Pages',
          'options'        => 'pages',
          'class'          => 'chosen',
          'default_option' => 'Select a page'
        ),

        array(
          'id'                 => 'unique_select_15',
          'type'               => 'select',
          'title'              => 'Select with Chosen with Posts Multi-Select',
          'options'            => 'posts',
          'class'              => 'chosen',
          'attributes'         => array(
            'data-placeholder' => 'Select your favrorite posts',
            'multiple'         => 'only-key',
            'style'            => 'width: 200px;'
          ),
          'info'               => 'and much more select options for you!',
        ),

      ),
    ), // end: select options


    // -----------------------------
    // begin: switcher options     -
    // -----------------------------
    array(
      'name'      => 'switcher_options',
      'title'     => 'Switcher',
      'icon'      => 'fa fa-toggle-on',
      'fields'    => array(

        array(
          'id'    => 'unique_switcher_1',
          'type'  => 'switcher',
          'title' => 'Simple Switcher',
        ),

        array(
          'id'    => 'unique_switcher_2',
          'type'  => 'switcher',
          'title' => 'Switcher Field with Label',
          'label' => 'Yes, Please do it.',
        ),

        array(
          'id'    => 'unique_switcher_3',
          'type'  => 'switcher',
          'title' => 'Switcher Field with Help',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_switcher_4',
          'type'    => 'switcher',
          'title'   => 'Switcher Field with Default',
          'default' => true,
        ),

        array(
          'id'         => 'unique_switcher_5',
          'type'       => 'switcher',
          'title'      => 'Switcher Field with Dependency Method',
          'label'      => 'Set on for next level option field'
        ),

        array(
          'id'         => 'unique_switcher_text_1',
          'type'       => 'text',
          'title'      => 'Text Field Hidden Level 1',
          'dependency' => array( 'unique_switcher_5', '!=', '' ),
        ),

      ),
    ), // end: switcher options


    // -----------------------------
    // begin: number options       -
    // -----------------------------
    array(
      'name'        => 'number_options',
      'title'       => 'Number',
      'icon'        => 'fa fa-check',
      'fields'      => array(

        array(
          'id'      => 'unique_number_1',
          'type'    => 'number',
          'title'   => 'Simple Number',
        ),

        array(
          'id'      => 'unique_number_2',
          'type'    => 'number',
          'title'   => 'Number Field with Description',
          'desc'    => 'Lets write some description for this number field.',
        ),

        array(
          'id'      => 'unique_number_3',
          'type'    => 'number',
          'title'   => 'Number Field with Help',
          'help'    => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_number_4',
          'type'    => 'number',
          'title'   => 'Number Field with Default',
          'default' => '10',
        ),

        array(
          'id'            => 'unique_number_5',
          'type'          => 'number',
          'title'         => 'Number Field with Placeholder',
          'attributes'    => array(
            'placeholder' => '25'
          )
        ),

        array(
          'id'      => 'unique_number_6',
          'type'    => 'number',
          'title'   => 'Number Field with After-text',
          'after'   => ' <i class="cs-text-muted">(px)</i>',
        ),

      ),
    ), // end: number options

    // -----------------------------
    // begin: icon options       -
    // -----------------------------
    array(
      'name'        => 'icon_options',
      'title'       => 'Icons',
      'icon'        => 'fa fa-check',
      'fields'      => array(

        array(
          'id'      => 'unique_icon_1',
          'type'    => 'icon',
          'title'   => 'Simple Icon',
        ),

        array(
          'id'      => 'unique_icon_2',
          'type'    => 'icon',
          'title'   => 'Icon Field with Description',
          'desc'    => 'Lets write some description for this icon field.',
        ),

        array(
          'id'      => 'unique_icon_3',
          'type'    => 'icon',
          'title'   => 'Icon Field with Help',
          'help'    => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_icon_4',
          'type'    => 'icon',
          'title'   => 'Icon Field with Default',
          'default' => 'fa fa-check',
        ),

        array(
          'id'      => 'unique_icon_5',
          'type'    => 'icon',
          'title'   => 'Icon Field with After-text',
          'after'   => '<p class="cs-text-muted">Lets write some description for this icon field.</i>',
        ),

      ),
    ), // end: icon options


    // -----------------------------
    // begin: group options        -
    // -----------------------------
    array(
      'name'      => 'group_options',
      'title'     => 'Group',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'              => 'unique_group_1',
          'type'            => 'group',
          'title'           => 'Group Field',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

            array(
              'id'          => 'unique_group_1_text',
              'type'        => 'text',
              'title'       => 'Text Field',
            ),

            array(
              'id'          => 'unique_group_1_switcher',
              'type'        => 'switcher',
              'title'       => 'Switcher Field',
            ),

            array(
              'id'          => 'unique_group_1_textarea',
              'type'        => 'textarea',
              'title'       => 'Upload Field',
            ),

          )
        ),

        array(
          'id'              => 'unique_group_2',
          'type'            => 'group',
          'title'           => 'Group Field with Default',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Field',
          'fields'          => array(

            array(
              'id'          => 'unique_group_2_text',
              'type'        => 'text',
              'title'       => 'Text Field',
            ),

            array(
              'id'          => 'unique_group_2_switcher',
              'type'        => 'switcher',
              'title'       => 'Switcher Field',
            ),

            array(
              'id'          => 'unique_group_2_textarea',
              'type'        => 'textarea',
              'title'       => 'Upload Field',
            ),

          ),
          'default'                     => array(
            array(
              'unique_group_2_text'     => 'Some text',
              'unique_group_2_switcher' => true,
              'unique_group_2_textarea' => 'Some content',
            ),
            array(
              'unique_group_2_text'     => 'Some text 2',
              'unique_group_2_switcher' => true,
              'unique_group_2_textarea' => 'Some content 2',
            ),
          )
        ),

        array(
          'id'              => 'unique_group_3',
          'type'            => 'group',
          'title'           => 'Group Field',
          'info'            => 'You can use any option field on group',
          'button_title'    => 'Add New Something',
          'accordion_title' => 'Adding New Thing',
          'fields'          => array(

            array(
              'id'          => 'unique_group_3_text',
              'type'        => 'text',
              'title'       => 'Text Field',
            ),

          )
        ),

      ),
    ), // end: group options


    // -----------------------------
    // begin: upload options       -
    // -----------------------------
    array(
      'name'      => 'upload_options',
      'title'     => 'Upload',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'      => 'unique_upload_1',
          'type'    => 'upload',
          'title'   => 'Simple Upload',
        ),

        array(
          'id'      => 'unique_upload_2',
          'type'    => 'upload',
          'title'   => 'Upload Field with Description',
          'desc'    => 'Lets write some description for this upload field.',
        ),

        array(
          'id'      => 'unique_upload_3',
          'type'    => 'upload',
          'title'   => 'Upload Field with Help',
          'help'    => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_upload_4',
          'type'    => 'upload',
          'title'   => 'Upload Field with Default',
          'default' => 'screenshot-1.png',
        ),

        array(
          'id'      => 'unique_upload_5',
          'type'    => 'upload',
          'title'   => 'Upload Field with After-text',
          'after'   => '<p class="cs-text-muted">You can use default value <strong>get_template_directory_uri()</strong>."/images/screenshot-1.png"</p>',
        ),

        array(
          'id'            => 'unique_upload_6',
          'type'          => 'upload',
          'title'         => 'Upload Field with Placeholder',
          'attributes'    => array(
            'placeholder' => 'http://'
          ),
        ),

        array(
          'id'             => 'unique_upload_7',
          'type'           => 'upload',
          'title'          => 'Upload Field with Custom Title',
          'settings'       => array(
            'button_title' => 'Upload Logo',
            'frame_title'  => 'Choose a image',
            'insert_title' => 'Use this image',
          ),
        ),

        array(
          'id'             => 'unique_upload_8',
          'type'           => 'upload',
          'title'          => 'Upload Field with Video',
          'settings'       => array(
            'upload_type'  => 'video',
            'button_title' => 'Upload Video',
            'frame_title'  => 'Choose a Video',
            'insert_title' => 'Use This Video',
          ),
        ),

      ),
    ), // end: upload options


    // -----------------------------
    // begin: background options   -
    // -----------------------------
    array(
      'name'      => 'background_options',
      'title'     => 'Background',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'    => 'unique_background_1',
          'type'  => 'background',
          'title' => 'Background',
        ),

        array(
          'id'    => 'unique_background_2',
          'type'  => 'background',
          'title' => 'Background Field with Description',
          'desc'  => 'Lets write some description for this background field.',
          'help'  => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'           => 'unique_background_3',
          'type'         => 'background',
          'title'        => 'Background Field with Default',
          'default'      => array(
            'image'      => 'something.png',
            'repeat'     => 'repeat-x',
            'position'   => 'center center',
            'attachment' => 'fixed',
            'color'      => '#ffbc00',
          ),
        ),

        array(
          'id'      => 'unique_background_4',
          'type'    => 'background',
          'title'   => 'Background Field with Description',
          'after'   => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
          'default' => array(
            'color' => '#222',
          ),
        ),

      ),
    ), // end: background options


    // -----------------------------
    // begin: color picker options -
    // -----------------------------
    array(
      'name'      => 'color_picker_options',
      'title'     => 'Color Picker',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'      => 'unique_color_picker_1',
          'type'    => 'color_picker',
          'title'   => 'Color Picker',
          'default' => '#dd3333',
        ),

        array(
          'id'      => 'unique_color_picker_2',
          'type'    => 'color_picker',
          'title'   => 'Color Picker RGBA disabled',
          'rgba'    => false,
        ),

        array(
          'id'      => 'unique_color_picker_3',
          'type'    => 'color_picker',
          'title'   => 'Color Picker Field with Description',
          'desc'    => 'Lets write some description for this color picker field.',
        ),

        array(
          'id'      => 'unique_color_picker_4',
          'type'    => 'color_picker',
          'title'   => 'Color Picker Field with Help',
          'help'    => 'I am a Tooltip helper. This field important for something.',
        ),

        array(
          'id'      => 'unique_color_picker_5',
          'type'    => 'color_picker',
          'title'   => 'Color Picker Field with Default',
          'default' => 'rgba(0, 0, 255, 0.25)',
        ),

        array(
          'id'      => 'unique_color_picker_6',
          'type'    => 'color_picker',
          'title'   => 'Color Picker Field with Default',
          'after'   => '<p class="cs-text-muted">Information: There is some description for option.</p> ',
          'default' => 'rgba(0, 255, 0, 0.75)',
        ),

      ),
    ), // end: color picker options


    // -----------------------------
    // begin: image select options -
    // -----------------------------
    array(
      'name'      => 'image_select_options',
      'title'     => 'Image Select',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        array(
          'id'        => 'unique_image_select_1',
          'type'      => 'image_select',
          'title'     => 'Image Select (Checkbox)',
          'options'   => array(
            'value-1' => 'http://dummyimage.com/150x125/2ecc71/fff.png',
            'value-2' => 'http://dummyimage.com/150x125/e74c3c/fff.png',
            'value-3' => 'http://dummyimage.com/150x125/ffbc00/fff.png',
            'value-4' => 'http://dummyimage.com/150x125/3498db/fff.png',
          ),
        ),

        array(
          'id'        => 'unique_image_select_2',
          'type'      => 'image_select',
          'title'     => 'Image Select (Checkbox) with Default',
          'options'   => array(
            'value-1' => 'http://dummyimage.com/125x100/34495e/fff.png',
            'value-2' => 'http://dummyimage.com/125x100/3498db/fff.png',
            'value-3' => 'http://dummyimage.com/125x100/e74c3c/fff.png',
            'value-4' => 'http://dummyimage.com/125x100/2ecc71/fff.png',
            'value-5' => 'http://dummyimage.com/125x100/ffbc00/fff.png',
          ),
          'default'   => 'value-2'
        ),

        array(
          'id'        => 'unique_image_select_3',
          'type'      => 'image_select',
          'title'     => 'Image Select (Radio) with Default',
          'options'   => array(
            'value-1' => 'http://dummyimage.com/150x150/2ecc71/fff.png',
            'value-2' => 'http://dummyimage.com/150x150/e74c3c/fff.png',
            'value-3' => 'http://dummyimage.com/150x150/ffbc00/fff.png',
            'value-4' => 'http://dummyimage.com/150x150/3498db/fff.png',
          ),
          'radio'     => true,
          'default'   => 'value-3'
        ),

        array(
          'id'        => 'unique_image_select_4',
          'type'      => 'image_select',
          'title'     => 'Image Select (Radio) with Default',
          'options'   => array(
            'value-1' => 'http://dummyimage.com/80x80/2c3e50/fff.png',
            'value-2' => 'http://dummyimage.com/80x80/2c3e50/fff.png',
            'value-3' => 'http://dummyimage.com/80x80/2c3e50/fff.png',
            'value-4' => 'http://dummyimage.com/80x80/2c3e50/fff.png',
            'value-5' => 'http://dummyimage.com/80x80/2c3e50/fff.png',
            'value-6' => 'http://dummyimage.com/80x80/2c3e50/fff.png',
            'value-7' => 'http://dummyimage.com/80x80/2c3e50/fff.png',
            'value-8' => 'http://dummyimage.com/80x80/2c3e50/fff.png',
          ),
          'radio'     => true,
          'default'   => 'value-2'
        ),

      ),
    ), // end: image select options


    // -----------------------------
    // begin: typography options   -
    // -----------------------------
    array(
      'name'      => 'typography_options',
      'title'     => 'Typography',
      'icon'      => 'fa fa-check',
      'fields'    => array(

        /*
        array(
          'id'      => 'unique_typography_1',
          'type'    => 'typography',
          'title'   => 'Typography',
        ),
        */

        array(
          'id'        => 'unique_typography_2',
          'type'      => 'typography',
          'title'     => 'Typography with Default',
          'default'   => array(
            'family'  => 'Open Sans',
            'variant' => '800',
          ),
        ),

      ),
    ), // end: typography options


    // -----------------------------
    // begin: backup option        -
    // -----------------------------
    array(
      'name'     => 'backup_option',
      'title'    => 'Backup',
      'icon'     => 'fa fa-check',
      'fields'   => array(

        array(
          'type' => 'backup',
        ),

      ),
    ), // end: backup option


    // -----------------------------
    // begin: others options       -
    // -----------------------------
    array(
      'name'        => 'others_options',
      'title'       => 'Others',
      'icon'        => 'fa fa-check',
      'fields'      => array(

        array(
          'type'    => 'heading',
          'content' => 'Heading',
        ),

        array(
          'id'      => 'unique_others_text_1',
          'type'    => 'text',
          'title'   => 'Others Text Field 1',
        ),

        array(
          'id'      => 'unique_others_text_2',
          'type'    => 'text',
          'title'   => 'Others Text Field 2',
        ),

        array(
          'type'    => 'subheading',
          'content' => 'Sub Heading',
        ),

        array(
          'id'      => 'unique_others_text_3',
          'type'    => 'text',
          'title'   => 'Others Text Field 3',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'success',
          'content' => 'Notice Success: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'      => 'unique_others_text_4',
          'type'    => 'text',
          'title'   => 'Others Text Field 4',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Notice Info: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'      => 'unique_others_text_5',
          'type'    => 'text',
          'title'   => 'Others Text Field 5',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'warning',
          'content' => 'Notice Warning: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'      => 'unique_others_text_6',
          'type'    => 'text',
          'title'   => 'Others Text Field 6',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'danger',
          'content' => 'Notice Danger: Lorem Ipsum, a random Lipsum generator.',
        ),

        array(
          'id'      => 'unique_others_text_7',
          'type'    => 'text',
          'title'   => 'Others Text Field 7',
        ),

        array(
          'id'      => 'unique_others_text_8',
          'type'    => 'text',
          'title'   => 'Others Text Field 8',
        ),

        array(
          'type'    => 'content',
          'content' => 'Content Field: It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
        ),

        array(
          'id'      => 'unique_others_text_9',
          'type'    => 'text',
          'title'   => 'Others Text Field 9',
          'after'   => '<p class="cs-text-warning">This field using debug=true</p>',
          'debug'   => true,
        ),


      ),
    ), // end: other options


  )
);

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => 'A Seperator',
  'icon'   => 'fa fa-bookmark'
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// validate                     -
// ------------------------------
$options[]   = array(
  'name'     => 'validate_section',
  'title'    => 'Validate',
  'icon'     => 'fa fa-check-circle',
  'fields'   => array(

    array(
      'id'       => 'validate_text_1',
      'type'     => 'text',
      'title'    => 'Email Text',
      'desc'     => 'This text field only accepted email address.',
      'default'  => 'info@domain.com',
      'validate' => 'email',
    ),

    array(
      'id'       => 'numeric_text_1',
      'type'     => 'text',
      'title'    => 'Numeric Text',
      'desc'     => 'This text field only accepted numbers',
      'default'  => '123456',
      'validate' => 'numeric',
    ),

    array(
      'id'       => 'required_text_1',
      'type'     => 'text',
      'title'    => 'Requried Text',
      'after'    => ' <small class="cs-text-warning">( * required )</small>',
      'default'  => 'lorem ipsum',
      'validate' => 'required',
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Also you can add your own validate from <strong>themename/cs-framework/functions/validate.php</strong>',
    ),

  )
);

// ------------------------------
// sanitize                     -
// ------------------------------
$options[]   = array(
  'name'     => 'sanitize_section',
  'title'    => 'Sanitize',
  'icon'     => 'fa fa-repeat',
  'fields'   => array(

    array(
      'id'       => 'sanitie_text_1',
      'type'     => 'text',
      'title'    => 'Sanitized Text',
      'after'    => '<p class="cs-text-muted">This text field sanitized already, without any settings. we are using wordpress core.<br /> for eg. try too add <strong>&lt;p></strong> html tag</p>',
    ),

    array(
      'id'       => 'sanitie_text_2',
      'type'     => 'text',
      'title'    => 'Disable Sanitized Text',
      'after'    => '<p class="cs-text-muted">Disabled sanitize for this field (sanitize=false). try too add <strong>&lt;p></strong> html tag so, you can write anything</p>',
      'sanitize' => false,
    ),

    array(
      'id'       => 'sanitie_textarea_1',
      'type'     => 'textarea',
      'title'    => 'Sanitized Textarea',
      'after'    => '<p class="cs-text-muted">This textarea field sanitized already, without any settings. we are using wordpress core.<br /> just allowing this tags wp core $allowedposttags</p>',
    ),

    array(
      'id'       => 'sanitie_textarea_2',
      'type'     => 'textarea',
      'title'    => 'Disabled Sanitized Textarea',
      'after'    => '<p class="cs-text-muted">Disabled sanitize for this field (sanitize=false). you can write anything</p>',
      'sanitize' => false,
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Custom Sanitize, Also you can add your own validate from <strong>themename/cs-framework/functions/sanitize.php</strong>',
    ),

    array(
      'id'       => 'sanitie_text_1',
      'type'     => 'text',
      'title'    => 'Custom Sanitize Text',
      'after'    => '<p class="cs-text-muted">This text field sanitized as slug title (sanitize="title")</p>',
      'sanitize' => 'title',
    ),

  )
);

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_2',
  'title'  => 'Section Examples',
  'icon'   => 'fa fa-cog'
);

// ------------------------------
// normal section               -
// ------------------------------
$options[]   = array(
  'name'     => 'normal_section',
  'title'    => 'Normal Section',
  'icon'     => 'fa fa-minus',
  'fields'   => array(

    array(
      'type'    => 'content',
      'content' => 'This section is empty, add some options...',
    ),

  )
);

// ------------------------------
// accordion sections           -
// ------------------------------
$options[]   = array(
  'name'     => 'accordion_section',
  'title'    => 'Accordion Sections',
  'icon'     => 'fa fa-bars',
  'sections' => array(

    // sub section 1
    array(
      'name'     => 'sub_section_1',
      'title'    => 'Sub Sections 1',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

    // sub section 2
    array(
      'name'     => 'sub_section_2',
      'title'    => 'Sub Sections 2',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

    // sub section 3
    array(
      'name'     => 'sub_section_3',
      'title'    => 'Sub Sections 3',
      'icon'     => 'fa fa-minus',
      'fields'   => array(

        array(
          'type'    => 'content',
          'content' => 'This section is empty, add some options...',
        ),

      )
    ),

  ),
);

// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_3',
  'title'  => 'Others',
  'icon'   => 'fa fa-gift'
);

// ------------------------------
// donate                       -
// ------------------------------
$options[]   = array(
  'name'     => 'donate_section',
  'title'    => 'Donate',
  'icon'     => 'fa fa-heart',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => 'You Guys!'
    ),

    array(
      'type'    => 'content',
      'content' => 'If you want to see more functions and features for this framework, you can buy me a coffee. I need a lot of it when I am creating new stuff for you. Thank you in advance.',
    ),

    array(
      'type'    => 'content',
      'content' => '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=info%40codestarlive%2ecom&lc=US&item_name=Codestar%20Framework&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_LG%2egif%3aNonHostedGuest" target="_blank"><img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" alt="Donate" /></a>',
    ),

  )
);

// ------------------------------
// license                      -
// ------------------------------
$options[]   = array(
  'name'     => 'license_section',
  'title'    => 'License',
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => '100% GPL License, Yes it is free!'
    ),
    array(
      'type'    => 'content',
      'content' => 'Codestar Framework is <strong>free</strong> to use both personal and commercial. If you used commercial, <strong>please credit</strong>. Read more about <a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU License</a>',
    ),

  )
);

CSFramework::instance( $settings, $options );