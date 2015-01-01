---
title: How to Use Dependency
type: h2
weight: 1003
filename: faq/how_to_use_dependency.md
---

> Switcher Dependency

{% highlight php startinline %}
array(
  'id'         => 'unique_option_1',
  'type'       => 'switcher',
  'title'      => 'Switcher Field',
  'default'    => true,
),
array(
  'id'         => 'unique_option_2',
  'type'       => 'text',
  'title'      => 'Text Field',
  'dependency' => array( 'unique_option_1', '==', 'true' ),
),
{% endhighlight %}

> Text Dependency

{% highlight php startinline %}
array(
  'id'         => 'unique_option_3',
  'type'       => 'text',
  'title'      => 'Switcher Field',
  'default'    => true,
),
array(
  'id'         => 'unique_option_4',
  'type'       => 'text',
  'title'      => 'Text Field',
  'dependency' => array( 'unique_option_3', '!=', '' ),
),
{% endhighlight %}

> Multilevel Switcher Dependency

{% highlight php startinline %}
array(
  'id'         => 'unique_option_5',
  'type'       => 'switcher',
  'title'      => 'Switcher Field',
),
array(
  'id'         => 'unique_option_6',
  'type'       => 'switcher',
  'title'      => 'Switcher Field',
  'dependency' => array( 'unique_option_5', '==', 'true' ),
),
array(
  'id'         => 'unique_option_7',
  'type'       => 'text',
  'title'      => 'Text Field',
  'dependency' => array( 'unique_option_6', '==', 'true' ),
),
{% endhighlight %}

> Select Dependency

{% highlight php startinline %}
array(
  'id'             => 'unique_option_8',
  'type'           => 'select',
  'title'          => 'Select Field',
  'options'        => array(
    'bmw'          => 'BMW',
    'mercedes'     => 'Mercedes',
    'audi'         => 'Audi',
  ),
  'default_option' => 'Select a car',
),
array(
  'id'             => 'unique_option_9',
  'type'           => 'text',
  'title'          => 'Text Field',
  'dependency'     => array( 'unique_option_8', '==', 'bmw' ),
),
{% endhighlight %}

Let's take a look how to using dependency