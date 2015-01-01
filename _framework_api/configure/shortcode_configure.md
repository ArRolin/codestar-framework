---
title: Shortcode Configure
type: h2
weight: 303
filename: config/shortcode_configure.md
---

{% highlight text hl_lines=7 %}
.
├── themename
|   ├── cs-framework
|   |   ├── config
|   |   |   ├── framework.config.php
|   |   |   ├── metabox.config.php
|   |   |   ├── shortcode.config.php
|   |   |   ├── customize.config.php
{% endhighlight %}

> take a look shortcode.config.php example

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
$shortcodes       = array();

$shortcodes[]     = array(
  'name'          => 'group_1',
  'title'         => 'Group #1',
  'shortcodes'    => array(

    array(
      'name'      => 'cs_toggle',
      'title'     => 'Toggle',
      'fields'    => array(
        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
          'help'  => 'Reference site about Lorem Ipsum.',
        ),
        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Content',
        )
      ),
    ),

  )
);

CSFramework_Shortcode_Manager::instance( $shortcodes );
{% endhighlight %}

Let's open `themename/cs-framework/config/shortcode.config.php` all examples there

also you can use override method for config. [see override](#override-configure)