---
title:  CurtisFree.com
path:
layout: default
---

### Hey! You've reached the personal website of Curtis Free.

Want to talk? Send me an [email](mailto:cf@curtisfree.com)! Prefer to read?
Check out some of my latest blog posts:

<ul class="postlist">
    {% for post in site.posts limit: 3 %}
    <li>
      {% capture permalink %}/{{ post.id | remove:"/content/" }}{% endcapture %}
      <a href="{{ permalink }}">{{ post.title }}</a>
    </li>
    {% endfor %}
</ul>

