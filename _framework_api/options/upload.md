---
title: Upload
type: h2
weight: 210
filename: options/upload.md
---

{% highlight php startinline %}
array(
  'id'    => 'unique_option_1001',
  'type'  => 'upload',
  'title' => 'Upload Field',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'            => 'unique_option_1002',
  'type'          => 'upload',
  'title'         => 'Upload Field',
  'settings'      => array(
   'upload_type'  => 'image',
   'button_title' => 'Upload',
   'frame_title'  => 'Select an image',
   'insert_title' => 'Use this image',
  ),
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'            => 'unique_option_1003',
  'type'          => 'upload',
  'title'         => 'Upload Field',
  'settings'      => array(
   'upload_type'  => 'video',
   'button_title' => 'Video',
   'frame_title'  => 'Select a video',
   'insert_title' => 'Use this video',
  ),
),
{% endhighlight %}

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | upload      | type of option
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
| `sanitize`       | text        | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**    | ---         | ---
| `settings`       | array       | settings of field
| `upload_type`    | image       | upload type of field. you can use *image* or *video* type
| `button_title`   | 'Upload'    | button title of field
| `frame_title`    | 'Upload'    | frame title of field
| `insert_title`   | 'Use Image' | insert title of field