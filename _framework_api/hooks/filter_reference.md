---
title: Filter Reference
type: h2
weight: 401
filename: hooks/filter_reference.md
---

{% highlight php startinline %}
// framework options filter example
function extra_cs_framework_options( $options ) {

  $options      = array(); // remove old options

  $options[]    = array(
    'name'      => 'section_unique_id',
    'title'     => 'First Section',
    'icon'      => 'fa fa-heart',
    'fields'    => array(
      array(
        'id'    => 'option_id',
        'type'  => 'text',
        'title' => 'First Option',
      ),
      array(
        'id'    => 'another_option_id',
        'type'  => 'textarea',
        'title' => 'Secondary Option',
      ),
    )
  );

  return $options;

}
add_filter( 'cs_framework_options', 'extra_cs_framework_options' );
{% endhighlight %}

| **add_filter**              | **args**
| --------------------------- | --------
| `cs_framework_settings`     | This filter for change to current **framework** settings
| `cs_framework_options`      | This filter for change to current **framework** options
| `cs_metabox_options`        | This filter for change to current **metabox** options
| `cs_shortcode_options`      | This filter for change to current **shortcode** options
| `cs_customize_options`      | This filter for change to current **customize** options
| `cs_save_post`              | This filter for metabox options save changes
| `cs_shortcode_exclude`      | This filter for exlude post types for "add shortcode" option
| `cs_get_path_locate`        | This filter for framework path initalize
| `cs_locate_template`        | This filter for framework template initalize
| `cs_get_option`             | This filter for get option function
| `cs_get_customize_option`   | This filter for get customize option function
| `cs_websafe_fonts`          | This filter for adding web safe fonts
| `cs_language_defaults`      | This filter for multilangual languages