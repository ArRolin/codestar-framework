---
title: Radio
type: h2
weight: 204
filename: options/radio.md
---

{% highlight php startinline %}
array(
  'id'      => 'unique_option_401',
  'type'    => 'radio',
  'title'   => 'Radio Field',
  'options' => array(
    'yes'   => 'Yes, Please.',
    'no'    => 'No, Thanks.',
  ),
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'      => 'unique_option_402',
  'type'    => 'radio',
  'title'   => 'Radio Field',
  'options' => array(
    'yes'   => 'Yes, Please.',
    'no'    => 'No, Thanks.',
  ),
  'default' => 'no',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'         => 'unique_option_403',
  'type'       => 'radio',
  'title'      => 'Radio Field',
  'options'    => array(
    'green'    => 'Green',
    'blue'     => 'Blue',
    'yellow'   => 'Yellow',
    'red'      => 'Red',
    'black'    => 'Black',
    'white'    => 'White',
  ),
  'default'    => 'blue'
),
{% endhighlight %}

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | radio       | type of option
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
| `sanitize`       | checkbox    | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**    | ---         | ---
| `options`        | array       | options of radios
| `query_args`     | array       | query args for wordpress core radios
| `default`        | array       | default value of field

### RADIO USING SAME CHECKBOX OPTIONS

Already Radio using same checkbox options [see for options](#checkbox-with-pages) just you will change type as **radio**