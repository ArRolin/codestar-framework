---
title: Group
type: h2
weight: 209
filename: options/group.md
---

{% highlight php startinline %}
array(
  'id'              => 'unique_option_901',
  'type'            => 'group',
  'title'           => 'Group Field',
  'button_title'    => 'Add New',
  'accordion_title' => 'Add New Field',
  'fields'          => array(
    array(
      'id'    => 'unique_option_901_text_1',
      'type'  => 'text',
      'title' => 'Text Field 100',
    ),
    array(
      'id'    => 'unique_option_901_upload_1',
      'type'  => 'upload',
      'title' => 'Upload Field',
    ),
    array(
      'id'    => 'unique_option_901_switcher_1',
      'type'  => 'switcher',
      'title' => 'Switcher Field',
    ),
  ),
),
{% endhighlight %}

| **Key**           | **Default** | **Description**
| `id`              | unique      | an unique id - use nice name
| `type`            | group       | type of option
| `title`           | null        | title of field
| `desc`            | null        | decription of field. this is showing below title. can be used html
| `help`            | null        | help tooltip of field
| `class`           | null        | extra class of field.
| `wrap_class`      | null        | extra class of field wrapper
| `before`          | null        | extra text for field before area
| `after`           | null        | extra text for field after area
| `multilang`       | false       | multilangual support of field
| `show_only_lang`  | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**     | ---         | ---
| `default`         | array       | default value for group field
| `button_title`    | string      | button title of group field
| `accordion_title` | string      | accordion title of group field
| `fields`          | array       | fields of group field this is inside fields of field