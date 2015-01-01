---
title: Heading
type: h2
weight: 216
filename: options/heading.md
---

{% highlight php startinline %}
array(
  'type'    => 'heading',
  'content' => 'Heading Field',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'type'    => 'subheading',
  'content' => 'Sub Heading Field',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'type'    => 'content',
  'content' => 'Lorem ipsum dollar.',
),
{% endhighlight %}

| **Key**    | **Default**  | **Description**
| `type`     | heading      | heading or subheading or content
| `content`  | null         | content of field