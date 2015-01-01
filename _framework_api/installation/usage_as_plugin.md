---
title: Usage as Plugin
type: h2
weight: 102
filename: installation/usage_as_plugin.md
---

{% highlight text hl_lines=5 %}
.
├── wp-content
|   ├── plugins
|   |   ├── akismet
|   |   ├── cs-framework
|   |   ├── ...
|   |   ├── ...
{% endhighlight %}

* Download zip file from github repository
* **Way1** Extract download zip on `wp-content/plugins/cs-framework` folder under your plugin directory
* **Way2** Upload zip file from `wordpess plugins panel -> add new -> upload plugin`
* Active Codestar Framework plugin from wordpress plugins panel
* Yay! Right now you are ready to configure framework, metaboxes, wp customize, shortcoder
* Take a look for config files from `wp-content/plugins/cs-framework/config` folder also you can manage config files from theme directory. see overriding files method.
* Read for about [configuration](#configuration)