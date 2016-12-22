---
layout: default
---
### Hey! You've reached the personal website of Curtis Free.

Want to talk? Send me an [email][email] or a [tweet][tweet]! Prefer to read? Check out some of my
latest blog posts:

<ul class="postlist">
    {% for post in site.posts limit: 3 %}
    <li>
      <a href="{{ post.url }}">{{ post.title }}</a>
    </li>
    {% endfor %}
</ul>

[email]: mailto:{{ site.email }}
[tweet]: {{ site.twitter-url }}
