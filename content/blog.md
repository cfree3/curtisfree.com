---
title:  CurtisFree.com Blog
path:   /blog
layout: blog
---

{% for post in site.posts limit: 3 %}

  <div class="post">

    {% capture permalink %}/{{ post.id | remove:"/content/" }}{% endcapture %}
    <h3 class="post_title"><a href="{{ permalink }}">{{ post.title }}</a></h3>

    <div class="post_body">
      {{ post.content }}
    </div>

    <h4 class="post_meta">
      [ {{ post.date | date:"%d %b %Y @ %I:%M %p" }} ]
      {% if post.tags.size > 0 %}
      [
        {% for tag in post.tags %}
          {{ tag }}{% if forloop.last == false %}, {% endif %}
        {% endfor %}
      ]
      {% endif %}
      [ <a href="{{ permalink }}">Permalink</a> ]
      [ <a href="mailto:cf@curtisfree.com?subject=Blog ({{ permalink }})">?</a> ]
    </h4>

  </div>

{% endfor %}

{% include nextlink.html %}

