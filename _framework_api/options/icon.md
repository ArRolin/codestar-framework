---
title: Icon
type: h2
weight: 208
filename: options/icon.md
---

{% highlight php startinline %}
array(
  'id'    => 'unique_option_801',
  'type'  => 'icon',
  'title' => 'Icon Field',
),
{% endhighlight %}

> Another Icon Field Example

{% highlight php startinline %}
array(
  'id'      => 'unique_option_802',
  'type'    => 'icon',
  'title'   => 'Icon Field',
  'default' => 'fa fa-heart',
),
{% endhighlight %}

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | icon        | type of option
| `title`          | null        | title of field
| `desc`           | null        | decription of field. this is showing below title. can be used html
| `default`        | null        | default value of field
| `help`           | null        | help tooltip of field
| `class`          | null        | extra class of field.
| `wrap_class`     | null        | extra class of field wrapper
| `dependency`     | null        | dependency for showing and hiding fields [see an example](#how-to-use-dependency)
| `before`         | null        | extra text for field before area
| `after`          | null        | extra text for field after area
| `name`           | null        | name of field
| `attirbutes`     | array       | attributes of field. supporting only html standard attributes [see an example](#how-to-use-attributes)
| `sanitize`       | null        | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'