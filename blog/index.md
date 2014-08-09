---
title:  CurtisFree.com Blog
layout: blog
---
{% for post in site.posts limit: 3 %}

  <div class="post">

    <h3 class="post_title"><a href="{{ post.url }}">{{ post.title }}</a></h3>

    <div class="post_body">
      {{ post.content }}
    </div>

    <h4 class="post_meta">
      [ {{ post.date | date:'%d %b %Y @ %I:%M %p' }} ]
      {% if post.tags.size > 0 %}
      [ {{ post.tags | join:' | ' }} ]
      {% endif %}
      [ <a href="{{ site.url }}{{ post.url }}">Permalink</a> ]
      [ <a href="mailto:{{ site.email }}?subject=Blog ({{ post.id | remove_first:'/blog/' }})">?</a> ]
    </h4>

  </div>

{% endfor %}

{% include nextlink.html %}
