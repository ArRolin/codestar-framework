---
title: Select
type: h2
weight: 205
filename: options/select.md
---

{% highlight php startinline %}
array(
  'id'             => 'unique_option_501',
  'type'           => 'select',
  'title'          => 'Select Field',
  'options'        => array(
    'bmw'          => 'BMW',
    'mercedes'     => 'Mercedes',
    'audi'         => 'Audi',
  ),
  'default_option' => 'Select a car',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'       => 'unique_option_502',
  'type'     => 'select',
  'title'    => 'Select Field',
  'options'  => array(
    'green'  => 'Green',
    'blue'   => 'Blue',
    'yellow' => 'Yellow',
  ),
  'default'  => 'blue',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'         => 'unique_option_503',
  'type'       => 'select',
  'title'      => 'Select Field',
  'options'    => array(
    'green'    => 'Green',
    'blue'     => 'Blue',
    'yellow'   => 'Yellow',
  ),
  'attributes' => array(
    'multiple' => 'multiple',
    'style'    => 'width: 125px; height: 125px;',
  ),
  'default'    => array( 'blue', 'red' ),
),
{% endhighlight %}

> Select with **chosen** script

{% highlight php startinline %}
array(
  'id'         => 'unique_option_504',
  'type'       => 'select',
  'title'      => 'Select Field',
  'options'    => array(
    'green'    => 'Green',
    'blue'     => 'Blue',
    'yellow'   => 'Yellow',
  ),
  'class'      => 'chosen',
),
{% endhighlight %}

> Multiple Select with **chosen** script

{% highlight php startinline %}
array(
  'id'            => 'unique_option_505',
  'type'          => 'select',
  'title'         => 'Select Field',
  'options'       => array(
    'green'       => 'Green',
    'blue'        => 'Blue',
    'yellow'      => 'Yellow',
  ),
  'class'         => 'chosen',
  'attributes'    => array(
    'placeholder' => 'Select a color',
    'multiple'    => 'multiple',
    'style'       => 'width: 150px;'
  ),
),
{% endhighlight %}

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | select      | type of option
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
| `sanitize`       | null        | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**    | ---         | ---
| `options`        | array       | options of radios
| `query_args`     | array       | query args for wordpress core radios
| `default`        | array       | default value of field
| `default_option` | array       | default option for first select option

### SELECT WITH "PAGES"

> Select with default wordpress pages [see for more query_args](http://codex.wordpress.org/Function_Reference/get_pages){:target="_blank"}

{% highlight php startinline hl_lines=5 %}
array(
  'id'      => 'unique_option_506',
  'type'    => 'select',
  'title'   => 'Select Field for Pages',
  'options' => 'pages',
),
{% endhighlight %}

{% highlight php startinline hl_lines=5 %}
array(
  'id'            => 'unique_option_507',
  'type'          => 'select',
  'title'         => 'Select Field for Pages',
  'options'       => 'pages',
  // query_args is option for all
  'query_args'    => array(
    'sort_order'  => 'ASC',
    'sort_column' => 'post_title',
  ),
),
{% endhighlight %}

We are getting wordpress default pages via `get_pages( $args )` function. And you can use wordpress core query args here.
[see for more query_args](http://codex.wordpress.org/Function_Reference/get_pages){:target="_blank"}

### Select with posts

> Select with default wordpress posts [learn more query_args](http://codex.wordpress.org/Function_Reference/get_posts){:target="_blank"}

{% highlight php startinline %}
array(
  'id'             => 'unique_option_508',
  'type'           => 'select',
  'title'          => 'Select Field for Posts',
  'options'        => 'posts',
  'query_args'     => array(
    'orderby'      => 'post_date',
    'order'        => 'DESC',
  ),
  'default_option' => 'Select a post'
),
{% endhighlight %}

### Select with categories

> Select with default wordpress categories [learn more query_args](http://codex.wordpress.org/Function_Reference/get_categories){:target="_blank"}

{% highlight php startinline %}
array(
  'id'             => 'unique_option_509',
  'type'           => 'select',
  'title'          => 'Select Field for Posts',
  'options'        => 'categories',
  'query_args'     => array(
    'orderby'      => 'name',
    'order'        => 'ASC',
  ),
  'default_option' => 'Select a category',
),
{% endhighlight %}

### Select with tags

> Select with default wordpress post tags [learn more query_args](http://codex.wordpress.org/Function_Reference/get_terms){:target="_blank"}

{% highlight php startinline %}
array(
  'id'             => 'unique_option_510',
  'type'           => 'select',
  'title'          => 'Select Field for Post Tags',
  'options'        => 'tags',
  'query_args'     => array(
    'orderby'      => 'name',
    'order'        => 'ASC',
  ),
  'default_option' => 'Select a tag',
),
{% endhighlight %}

### Select with "custom post type" posts

> Select with CPT (custom post type) posts [learn more query_args](http://codex.wordpress.org/Function_Reference/get_posts){:target="_blank"}

{% highlight php startinline %}
array(
  'id'             => 'unique_option_511',
  'type'           => 'select',
  'title'          => 'Select Field for CPT Posts',
  'options'        => 'posts',
  'query_args'     => array(
    'post_type'    => 'movies',
    'orderby'      => 'post_date',
    'order'        => 'DESC',
  ),
  'default_option' => 'Select a post',
),
{% endhighlight %}

### Select with "custom post type" categories

> Select with CPT (custom post type) categories [learn more query_args](http://codex.wordpress.org/Function_Reference/get_categories){:target="_blank"}

{% highlight php startinline %}
array(
  'id'             => 'unique_option_512',
  'type'           => 'select',
  'title'          => 'Select Field for CPT Posts',
  'options'        => 'categories',
  'query_args'     => array(
    'type'         => 'movies',
    'taxonomy'     => 'movies_taxonomy',
    'orderby'      => 'post_date',
    'order'        => 'DESC',
  ),
  'default_option' => 'Select a category',
),
{% endhighlight %}

### Select with "custom post type" tags

> Select with CPT (custom post type) tags [learn more query_args](http://codex.wordpress.org/Function_Reference/get_terms){:target="_blank"}

{% highlight php startinline %}
array(
  'id'             => 'unique_option_513',
  'type'           => 'select',
  'title'          => 'Select Field for CPT Tags',
  'options'        => 'tags',
  'query_args'     => array(
    'taxonomies'   => array( 'post_tag', 'your_tax' ),
    'orderby'      => 'post_date',
    'order'        => 'ASC',
  ),
  'default_option' => 'Select a tag',
),
{% endhighlight %}