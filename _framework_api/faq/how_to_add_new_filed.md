---
title: How to Add New Field
type: h2
weight: 1001
filename: faq/how_to_use_this.md
---

{% highlight text hl_lines=6 %}
.
├── cs-framework
|   ├── fields
|   |   ├── password
|   |   |   ├── password.php
{% endhighlight %}

{% highlight php startinline %}
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Password
 *
 * @since 1.0
 * @version 1.0
 *
 */
class CSFramework_Option_password extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output(){

    echo $this->element_before();
    echo '<input type="password" name="'. $this->element_name() .'" value="'. $this->element_value() .'"'. $this->element_class() . $this->element_attributes() .'/>';
    echo $this->element_after();

  }

}
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'    => 'unique_option_1',
  'type'  => 'password',
  'title' => 'Password Field',
),
{% endhighlight %}

You can create your own option fields. it is easy. you can use override method or directly modification method. let's take a look examples.