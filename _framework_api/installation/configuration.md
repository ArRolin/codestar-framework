---
title: Configuration
type: h2
weight: 103
filename: installation/configuration.md
---

### Standard Configure

{% highlight text %}
.
├── cs-framework
|   ├── config
|   |   ├── framework.config.php
|   |   ├── metabox.config.php
|   |   ├── shortcode.config.php
|   |   ├── customize.config.php
{% endhighlight %}

After installation, you can modify directly config files from `cs-framework/config` folder. this is method same for plugin or theme methods.

### Override Configure

{% highlight text hl_lines=3 %}
.
├── themename
|   ├── cs-framework-override
|   |   ├── config
|   |   |   ├── framework.config.php
|   |   |   ├── metabox.config.php
|   |   |   ├── shortcode.config.php
|   |   |   ├── customize.config.php
{% endhighlight %}

If you do not want to touch framework files, you can use override method. Create a folder `/cs-framework-override/` on your theme directory and copy any orginal config file here.
Also you can use this method for child theme. create same folder on child theme and modify your copies.

### Filterable Configure

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

If you do not want to touch framework files, you can use `add_filter` method. You can see all filters for options below.

| Hook         | Hook Name             |
| -------------|-----------------------|
| add_filter   | cs_framework_options  |
| add_filter   | cs_framework_settings |
| add_filter   | cs_metabox_options    |
| add_filter   | cs_shortcode_options  |
| add_filter   | cs_customize_options  |