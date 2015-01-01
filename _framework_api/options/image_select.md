---
title: Image Select
type: h2
weight: 213
filename: options/image_select.md
---

> Image select using checkbox method

{% highlight php startinline %}
array(
  'id'        => 'image_select_option',
  'type'      => 'image_select',
  'title'     => 'Image Select Field',
  'options'   => array(
    'left'    => get_template_directory_uri() .'/sidebar/left-sidebar.png',
    'right'   => get_template_directory_uri() .'/sidebar/right-sidebar.png',
    'default' => get_template_directory_uri() .'/sidebar/default-sidebar.png',
  ),
  'default'   => 'right',
),
{% endhighlight %}

> Image select using radio method

{% highlight php startinline %}
array(
  'id'        => 'image_select_option',
  'type'      => 'image_select',
  'title'     => 'Image Select Field',
  'options'   => array(
    'left'    => get_template_directory_uri() .'/sidebar/left-sidebar.png',
    'right'   => get_template_directory_uri() .'/sidebar/right-sidebar.png',
    'default' => get_template_directory_uri() .'/sidebar/default-sidebar.png',
  ),
  'default'   => 'default',
  'radio'     => true,
),
{% endhighlight %}

| **Key**          | **Default**  | **Description**
| `id`             | unique       | an unique id - use nice name
| `type`           | image_select | type of option
| `title`          | null         | title of field
| `desc`           | null         | decription of field. this is showing below title. can be used html
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
| `default`        | array        | default value of field
| `radio`          | true         | use as radio