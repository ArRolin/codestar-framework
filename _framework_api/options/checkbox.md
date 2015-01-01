---
title: Checkbox
type: h2
weight: 203
filename: options/checkbox.md
---

{% highlight php startinline %}
array(
  'id'    => 'unique_option_301',
  'type'  => 'checkbox',
  'title' => 'Checkbox Field',
  'label' => 'Yes, Please do it.'
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'      => 'unique_option_302',
  'type'    => 'checkbox',
  'title'   => 'Checkbox Field',
  'label'   => 'Yes, Please do it.',
  'default' => true
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'         => 'unique_option_303',
  'type'       => 'checkbox',
  'title'      => 'Checkbox Field',
  'options'    => array(
    'bmw'      => 'BMW',
    'mercedes' => 'Mercedes',
    'audi'     => 'Audi',
  ),
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'id'       => 'unique_option_304',
  'type'     => 'checkbox',
  'title'    => 'Checkbox Field',
  'options'  => array(
    'green'  => 'Green',
    'blue'   => 'Blue',
    'yellow' => 'Yellow',
    'red'    => 'Red',
    'black'  => 'Black',
    'white'  => 'White',
  ),
  'default'  => array( 'blue', 'red' )
),
{% endhighlight %}

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | checkbox    | type of option
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
| `label`          | string      | label of a checkbox
| `options`        | array       | options of checkboxes
| `query_args`     | array       | query args for wordpress core checkboxes
| `default`        | array       | default value of field

### CHECKBOX WITH "PAGES"

> Checkbox with default wordpress pages [see for more query_args](http://codex.wordpress.org/Function_Reference/get_pages)

{% highlight php startinline hl_lines=5 %}
array(
  'id'      => 'unique_option_305',
  'type'    => 'checkbox',
  'title'   => 'Checkbox for Pages',
  'options' => 'pages',
),
{% endhighlight %}

{% highlight php startinline hl_lines=5 %}
array(
  'id'            => 'unique_option_306',
  'type'          => 'checkbox',
  'title'         => 'Checkbox for Pages',
  'options'       => 'pages',
  // query_args is option for all
  'query_args'    => array(
    'sort_order'  => 'ASC',
    'sort_column' => 'post_title',
  ),
),
{% endhighlight %}

We are getting wordpress default pages via `get_pages( $args )` function. And you can use wordpress core query args here.
[see for more query_args](http://codex.wordpress.org/Function_Reference/get_pages)

### CHECKBOX WITH POSTS

> Checkbox with default wordpress posts [learn more query_args](http://codex.wordpress.org/Function_Reference/get_posts)

{% highlight php startinline %}
array(
  'id'             => 'unique_option_307',
  'type'           => 'checkbox',
  'title'          => 'Checkbox for Posts',
  'options'        => 'posts',
  'query_args'     => array(
    'orderby'      => 'post_date',
    'order'        => 'DESC',
  ),
),
{% endhighlight %}

### CHECKBOX WITH CATEGORIES

> Checkbox with default wordpress categories [learn more query_args](http://codex.wordpress.org/Function_Reference/get_categories)

{% highlight php startinline %}
array(
  'id'             => 'unique_option_308',
  'type'           => 'checkbox',
  'title'          => 'Checkbox for Posts',
  'options'        => 'categories',
  'query_args'     => array(
    'orderby'      => 'name',
    'order'        => 'ASC',
  ),
),
{% endhighlight %}

### CHECKBOX WITH TAGS

> Checkbox with default wordpress post tags [learn more query_args](http://codex.wordpress.org/Function_Reference/get_terms)

{% highlight php startinline %}
array(
  'id'             => 'unique_option_309',
  'type'           => 'checkbox',
  'title'          => 'Checkbox for Post Tags',
  'options'        => 'tags',
  'query_args'     => array(
    'orderby'      => 'name',
    'order'        => 'ASC',
  ),
),
{% endhighlight %}

### CHECKBOX WITH CUSTOM POST TYPE POSTS

> Checkbox with CPT (custom post type) posts [learn more query_args](http://codex.wordpress.org/Function_Reference/get_posts)

{% highlight php startinline %}
array(
  'id'             => 'unique_option_310',
  'type'           => 'checkbox',
  'title'          => 'Checkbox for CPT Posts',
  'options'        => 'posts',
  'query_args'     => array(
    'post_type'    => 'movies',
    'orderby'      => 'post_date',
    'order'        => 'DESC',
  ),
),
{% endhighlight %}

### CHECKBOX WITH CUSTOM POST TYPE CATEGORIES

> Checkbox with CPT (custom post type) categories [learn more query_args](http://codex.wordpress.org/Function_Reference/get_categories)

{% highlight php startinline %}
array(
  'id'             => 'unique_option_311',
  'type'           => 'checkbox',
  'title'          => 'Checkbox for CPT Posts',
  'options'        => 'categories',
  'query_args'     => array(
    'type'         => 'movies',
    'taxonomy'     => 'movies_taxonomy',
    'orderby'      => 'post_date',
    'order'        => 'DESC',
  ),
),
{% endhighlight %}

### CHECKBOX WITH CUSTOM POST TYPE TAGS

> Checkbox with CPT (custom post type) tags [learn more query_args](http://codex.wordpress.org/Function_Reference/get_terms)

{% highlight php startinline %}
array(
  'id'             => 'unique_option_312',
  'type'           => 'checkbox',
  'title'          => 'Checkbox for CPT Tags',
  'options'        => 'tags',
  'query_args'     => array(
    'taxonomies'   => array( 'post_tag', 'your_tax' ),
    'orderby'      => 'post_date',
    'order'        => 'ASC',
  ),
),
{% endhighlight %}