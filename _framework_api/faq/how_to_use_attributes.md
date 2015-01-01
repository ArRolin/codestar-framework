---
title: How to Use Attributes
type: h2
weight: 1002
filename: faq/how_to_use_attributes.md
---

> [read more about tag_input attributes](http://www.w3schools.com/tags/tag_input.asp)

{% highlight php startinline %}
array(
  'id'            => 'unique_option_101',
  'type'          => 'text',
  'title'         => 'Text Field',
  'attributes'    => array(
    'maxlength'   => 10,
    'placeholder' => 'do stuff',
    'readyonly'   => 'only-key'
    'disabled'    => 'only-key'
  ),
),
{% endhighlight %}

> [read more about tag_textarea attributes](http://www.w3schools.com/tags/tag_textarea.asp)

{% highlight php startinline %}
array(
  'id'            => 'unique_option_102',
  'type'          => 'textarea',
  'title'         => 'Text Field',
  'attributes'    => array(
    'rows'        => 10,
    'cols'        => 5,
    'placeholder' => 'do stuff',
  ),
),
{% endhighlight %}

> [read more about tag_select attributes](http://www.w3schools.com/tags/tag_select.asp)

{% highlight php startinline %}
array(
  'id'         => 'unique_option_103',
  'type'       => 'select',
  'title'      => 'Select Field',
  'options'    => array(
    'green'    => 'Green',
    'blue'     => 'Blue',
    'yellow'   => 'Yellow',
  ),
  'attributes' => array(
    'multiple' => 'multiple',
    'style'    => 'width: 125px; height: 125px;',
  ),
),
{% endhighlight %}

You can use some attibutes for fields. Let's see some examples for how to use attributes.