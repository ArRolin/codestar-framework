---
title: Backup
type: h2
weight: 215
filename: options/backup.md
---

{% highlight php startinline %}
array(
  'type'  => 'backup',
  'title' => 'Backup Field',
),
{% endhighlight %}

| **Key**          | **Default** | **Description**
| `type`           | backup      | type of option
| `title`          | null        | title of field
| `desc`           | null        | decription of field. this is showing below title. can be used html
| `help`           | null        | help tooltip of field
| `class`          | null        | extra class of field.
| `wrap_class`     | null        | extra class of field wrapper
| `before`         | null        | extra text for field before area
| `after`          | null        | extra text for field after area