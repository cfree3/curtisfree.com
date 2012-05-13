---
title:  CurtisFree.com Blog &rarr; All Posts
path:   /blog/all
layout: blog
---
### All posts ([Atom](/blog/feed)):
<ul class="postlist">
    {% for post in site.posts %}
    <li>
      {% capture permalink %}/{{ post.id | remove:"/content/" }}{% endcapture %}
      <a href="{{ permalink }}">{{ post.title }}</a>
    </li>
    {% endfor %}
</ul>
