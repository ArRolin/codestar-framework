---
title: Framework Configure
type: h2
weight: 301
filename: config/framework_configure.md
---

{% highlight text hl_lines=5 %}
.
├── themename
|   ├── cs-framework
|   |   ├── config
|   |   |   ├── framework.config.php
|   |   |   ├── metabox.config.php
|   |   |   ├── shortcode.config.php
|   |   |   ├── customize.config.php
{% endhighlight %}

> take a look framework.config.php example

{% highlight php startinline %}
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * CSFramework Config
 *
 * @since 1.0
 * @version 1.0
 *
 */

// Framework Settings
$settings      = array(
  'menu_title' => 'Framework',
  'menu_type'  => 'add_menu_page',
  'menu_slug'  => 'cs-framework',
  'ajax_save'  => false,
);

// Framework Options
$options      = array();

// a new setting section
$options[]    = array(
  'name'      => 'section_1',
  'title'     => 'Section #1',
  'icon'      => 'fa fa-repeat',
  'fields'    => array(

    // a text field
    array(
      'id'    => 'section_1_text',
      'type'  => 'text',
      'title' => 'Text Option Field',
    ),

    // a textarea field
    array(
      'id'    => 'section_1_textarea',
      'type'  => 'textarea',
      'title' => 'Textarea Option Field',
    ),

  )
);

CSFramework::instance( $settings, $options );
{% endhighlight %}

Let's open `themename/cs-framework/config/framework.config.php` all examples there

| **Settings keys**  | **Default**    | **Description**
| `menu_title`       | Framework      | an unique name use nice name
| `menu_type`        | add_menu_page  | type of option
| `menu_slug`        | cs-framework   | Title of field
| `menu_icon`        | null           | Supporting dashicon
| `menu_position`    | null           | Title of field
| `menu_capability`  | manage_options | Title of field
| `ajax_save`        | false          | Title of field

| **Options keys**   | **Default**    | **Description**
| `name`             | Framework      | an unique name use nice name
| `title`            | add_menu_page  | type of option
| `icon`             | cs-framework   | Title of field
| `fields`           | null           | Supporting dashicon


also you can use override method for config. [see override](#override-configure)