---
title: Metabox Configure
type: h2
weight: 302
filename: config/metabox_configure.md
---

{% highlight text hl_lines=6 %}
.
├── themename
|   ├── cs-framework
|   |   ├── config
|   |   |   ├── framework.config.php
|   |   |   ├── metabox.config.php
|   |   |   ├── shortcode.config.php
|   |   |   ├── customize.config.php
{% endhighlight %}

> take a look metabox.config.php example

{% highlight php startinline %}
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * CSFramework Metabox Config
 *
 * @since 1.0
 * @version 1.0
 *
 */
$metaboxes        = array();

$metaboxes[]      = array(
  'id'            => '_custom_meta_options',
  'title'         => 'Custom Options',
  'post_type'     => 'page', // or post or CPT
  'context'       => 'normal',
  'priority'      => 'default',
  'sections'      => array(

    // begin section
    array(
      'name'      => 'section_1',
      'title'     => 'Section 1',
      'icon'      => 'fa fa-wifi',
      'fields'    => array(

        // a field
        array(
          'id'    => 'metabox_option_id',
          'type'  => 'text',
          'title' => 'An Text Option',
        ),

        // a field
        array(
          'id'    => 'metabox_option_other_id',
          'type'  => 'textarea',
          'title' => 'An Textarea Option',
        ),

      ),
    ),

    // begin section
    array(
      'name'      => 'section_2',
      'title'     => 'Section 2',
      'icon'      => 'fa fa-heart',
      'fields'    => array(

        // a field
        array(
          'id'    => 'metabox_option_2_id',
          'type'  => 'text',
          'title' => 'An Text Option',
        ),

      ),
    ),

  ),
);

CSFramework_Metabox::instance( $metaboxes );
{% endhighlight %}

> How to get options from front-page

{% highlight php startinline %}
$meta_data = get_post_meta( POST_ID, '_custom_meta_options', true );
var_dump( $meta_data );
{% endhighlight %}


Let's open `themename/cs-framework/config/metabox.config.php` all examples there

also you can use override method for config. [see override](#override-configure)