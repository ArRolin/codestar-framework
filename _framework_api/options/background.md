---
title: Background
type: h2
weight: 211
filename: options/background.md
---

{% highlight php startinline %}
array(
  'id'    => 'unique_option_2001',
  'type'  => 'background',
  'title' => 'Background Field',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'           => 'unique_option_2002',
  'type'         => 'background',
  'title'        => 'Background Field',
  'default'      => array(
    'image'      => '',
    'repeat'     => '',
    'position'   => '',
    'attachment' => '',
    'color'      => '',
  ),
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'           => 'unique_option_2003',
  'type'         => 'background',
  'title'        => 'Background Field',
  'default'      => array(
    'image'      => get_template_directory_uri() .'/images/bg.png',
    'repeat'     => 'repeat-x',
    'position'   => 'center center',
    'attachment' => 'fixed',
    'color'      => '#ffbc00',
  ),
),
{% endhighlight %}

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | background  | type of option
| `title`          | null        | title of field
| `desc`           | null        | decription of field. this is showing below title. can be used html
| `help`           | null        | help tooltip of field
| `class`          | null        | extra class of field.
| `wrap_class`     | null        | extra class of field wrapper
| `dependency`     | null        | dependency for showing and hiding fields [see an example](#how-to-use-dependency)
| `before`         | null        | extra text for field before area
| `after`          | null        | extra text for field after area
| `name`           | null        | name of field
| `attirbutes`     | array       | attributes of field. supporting only html standard attributes [see an example](#how-to-use-attributes)
| `sanitize`       | text        | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**    | ---         | ---
| `default`        | array       | default value of field
| `image`          | image       | default image value of field
| `repeat`         | null        | default repeat value of field
| `attachment`     | null        | default attachment value of field
| `color`          | null        | default color value of field