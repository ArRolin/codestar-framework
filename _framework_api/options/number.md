---
title: Number
type: h2
weight: 207
filename: options/number.md
---

{% highlight php startinline %}
array(
  'id'    => 'unique_option_701',
  'type'  => 'number',
  'title' => 'Number Field',
),
{% endhighlight %}

> Another Number Field Example

{% highlight php startinline %}
array(
  'id'      => 'unique_option_702',
  'type'    => 'number',
  'title'   => 'Number Field',
  'desc'    => 'This is an option.',
  'help'    => 'Write something.',
  'default' => '123456',
),
{% endhighlight %}

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | number      | type of option
| `title`          | null        | title of field
| `desc`           | null        | decription of field. this is showing below title. can be used html
| `default`        | numeric     | default value of field
| `help`           | null        | help tooltip of field
| `class`          | null        | extra class of field.
| `wrap_class`     | null        | extra class of field wrapper
| `dependency`     | null        | dependency for showing and hiding fields [see an example](#how-to-use-dependency)
| `before`         | null        | extra text for field before area
| `after`          | null        | extra text for field after area
| `name`           | null        | name of field
| `attirbutes`     | array       | attributes of field. supporting only html standard attributes [see an example](#how-to-use-attributes)
| `sanitize`       | number      | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'