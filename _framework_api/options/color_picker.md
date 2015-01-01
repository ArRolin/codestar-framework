---
title: Color Picker
type: h2
weight: 212
filename: options/color_picker.md
---

{% highlight php startinline %}
array(
  'id'    => 'unique_option_3001',
  'type'  => 'color_picker',
  'title' => 'Color Picker Field',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'      => 'unique_option_3002',
  'type'    => 'color_picker',
  'title'   => 'Color Picker Field',
  'default' => '#ffbc00',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'      => 'unique_option_3003',
  'type'    => 'color_picker',
  'title'   => 'Color Picker Field',
  'default' => '#ffbc00',
  'rgba'    => true,
),
{% endhighlight %}

| **Key**          | **Default**  | **Description**
| `id`             | unique       | an unique id - use nice name
| `type`           | color_picker | type of option
| `title`          | null         | title of field
| `desc`           | null         | decription of field. this is showing below title. can be used html
| `default`        | null         | default value of field
| `help`           | null         | help tooltip of field
| `class`          | null         | extra class of field.
| `wrap_class`     | null         | extra class of field wrapper
| `dependency`     | null         | dependency for showing and hiding fields [see an example](#how-to-use-dependency)
| `before`         | null         | extra text for field before area
| `after`          | null         | extra text for field after area
| `name`           | null         | name of field
| `attirbutes`     | array        | attributes of field. supporting only html standard attributes [see an example](#how-to-use-attributes)
| `sanitize`       | text         | sanitize of field. can be enabled or disabled
| `validate`       | null         | validate of field. can be enabled or disabled
| `multilang`      | false        | multilangual support of field
| `show_only_lang` | null         | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**    | ---          | ---
| `rgba`           | true         |  rgba support of picker