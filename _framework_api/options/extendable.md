---
title: Extendable
type: h2
weight: 218
filename: options/extendable.md
---

{% highlight php startinline %}
// cs-framework/fields/password.php
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

> Usage:

{% highlight php startinline %}
array(
  'id'    => 'option_id',
  'type'  => 'password',
  'title' => 'Password Field',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'      => 'my_first_option',
  'type'    => 'password',
  'title'   => 'Password Field',
  'desc'    => 'This is my extendable option.',
  'help'    => 'Write something. This is important for something.',
  'default' => '123456',
),
{% endhighlight %}

You can create your own extenable fields. This example for a password field.

| **Key**          | **Default** | **Description**
| `id`             | option_id   | an unique name use nice name
| `type`           | text        | type of option
| `title`          | string      | Title of field
| `desc`           | null        | Field Decription, you can write html
| `default`        | null        | Default value for field when start framework
| `help`           | null        | Help for option, it will show on tooltip
| `name`           | null        | custom input name
| `dependency`     | null        | extra element class name design element field.
| `class`          | null        | extra element class name design element field.
| `wrap_class`     | null        | extra element area class name.
| `before`         | null        | extra content for field before supporting html tags
| `after`          | null        | extra content for field after supporting html tags
| `attirbutes`     | array       | input tag attributes supporting html standard attributes [w3school](http://www.w3schools.com/tags/tag_input.asp)
| `sanitize`       | text        | input text sanitize you can turn off with false
| `validate`       | null        | input text validate you can turn off with false
| `multilang`      | false       | multilangual text support
| `show_only_lang` | null        | multilangual text support you can use 'en' or 'tr' or 'es'