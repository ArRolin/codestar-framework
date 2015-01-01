---
title: Switcher
type: h2
weight: 206
filename: options/switcher.md
---

{% highlight php startinline %}
array(
  'id'    => 'unique_option_601',
  'type'  => 'switcher',
  'title' => 'Switcher Field',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'    => 'unique_option_602',
  'type'  => 'switcher',
  'title' => 'Switcher Field',
  'label' => 'Do you want to it ?',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'      => 'unique_option_603',
  'type'    => 'switcher',
  'title'   => 'Switcher Field',
  'default' => true
),
{% endhighlight %}

> Switcher with Dependency

{% highlight php startinline %}
array(
  'id'         => 'unique_option_604',
  'type'       => 'switcher',
  'title'      => 'Switcher Field',
  'default'    => true
),
array(
  'id'         => 'unique_option_1',
  'type'       => 'text',
  'title'      => 'Text Field',
  'dependency' => array( 'unique_option_604', '==', 'true' ) // dependency rule
),
{% endhighlight %}

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | text        | type of option
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
| `label`          | string      | label of a checkbox
| `default`        | false       | default value of field