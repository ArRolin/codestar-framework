---
title: Customize Configure
type: h2
weight: 304
filename: config/customize_configure.md
---

{% highlight text hl_lines=8 %}
.
├── themename
|   ├── cs-framework
|   |   ├── config
|   |   |   ├── framework.config.php
|   |   |   ├── metabox.config.php
|   |   |   ├── shortcode.config.php
|   |   |   ├── customize.config.php
{% endhighlight %}

> take a look customize.config.php example

{% highlight php startinline %}
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * CSFramework Shortcode Config
 *
 * @since 1.0
 * @version 1.0
 *
 */
$panels                          = array();

$panels[]                        = array(
  'name'                         => 'panel_100',
  'title'                        => 'Panel 100',
  'description'                  => 'Panel color decsriptions',
  'sections'                     => array(

   // add section
   array(
      'name'                     => 'colors',
      'title'                    => 'Color Options',
      'description'              => 'All Elements Color, Just one click!',
      'priority'                 => 10,
      'settings'                 => array(

        // add setting
        array(
          'name'                 => 'body_background',
          'default'              => '#000',
          'type'                 => 'option',
          'capability'           => 'edit_theme_options',
          'theme_supports'       => '',
          'transport'            => 'refresh',
          'sanitize_callback'    => '',
          'sanitize_js_callback' => '',

          // add control
          'control'              => array(
            'label'              => 'Background Color',
            'type'               => 'color',
          ),

        ),

        // add setting
        array(
          'name'                 => 'body_text_color',
          'default'              => '#fff',
          'type'                 => 'option',
          'capability'           => 'edit_theme_options',
          'theme_supports'       => '',
          'transport'            => 'refresh',
          'sanitize_callback'    => '',
          'sanitize_js_callback' => '',

          // add control
          'control'              => array(
            'label'              => 'Text Color',
            'type'               => 'radio',
            'description'        => 'some description',
            'choices'            => array(
              'yes'              => 'Yes, Please.',
              'no'               => 'No, Thank you.'),
          ),

        ), // end a setting

      ), // end settings

    ), // end section

  ), // end sections

);

CSFramework_Customize::instance( $panels );
{% endhighlight %}

Let's open `themename/cs-framework/config/customize.config.php` all examples there

also you can use override method for config. [see override](#override-configure)