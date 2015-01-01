---
title: Notice
type: h2
weight: 217
filename: options/notice.md
---

{% highlight php startinline %}
array(
  'type'  => 'notice',
  'class' => 'Success',
  'title' => 'Success: Lorem Ipsum Dollar.',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'type'  => 'notice',
  'class' => 'warning',
  'title' => 'Warning: Lorem Ipsum Dollar.',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'type'  => 'notice',
  'class' => 'danger',
  'title' => 'Danger: Lorem Ipsum Dollar.',
),
{% endhighlight %}

{% highlight php startinline %}
array(
  'type'  => 'notice',
  'class' => 'info',
  'title' => 'Info: Lorem Ipsum Dollar.',
),
{% endhighlight %}


| **Key**    | **Default** | **Description**
| `type`     | notice      | type of option
| `class`    | null        | success, warning, danger, info classes for notice
| `content`  | null        | content of field