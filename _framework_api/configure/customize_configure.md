---
title: Customize Configure
type: h2
weight: 304
filename: config/customize_configure.md
---

{% highlight text hl_lines="8" %}
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
// -----------------------------------------
// Customize Core Fields                   -
// -----------------------------------------
$options        = array();
$options[]      = array(
  'name'        => 'core_fields',
  'title'       => 'Core Fields',
  'settings'    => array(

    array(
      'name'    => 'text_option',
      'control' => array(
        'label' => 'Text Field',
        'type'  => 'text',
      ),
    ),

    array(
      'name'    => 'text_option_with_default',
      'default' => 'bla bla bla',
      'control' => array(
        'label' => 'Text Field with Default',
        'type'  => 'text',
      ),
    ),

    array(
      'name'    => 'textarea_option',
      'control' => array(
        'label' => 'Textarea Field',
        'type'  => 'textarea',
      ),
    ),

  )
);

CSFramework_Customize::instance( $panels );
{% endhighlight %}

> How to getting options

{% highlight php startinline %}
echo cs_get_customize_option( 'text_option' );
echo cs_get_customize_option( 'text_option_with_default' );
echo cs_get_customize_option( 'textarea_option' );
{% endhighlight %}

Let's open `themename/cs-framework/config/customize.config.php` all examples there

also you can use override method for config. [see override](#override-configure)