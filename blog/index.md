---
layout: blog
---
### Blogline ([RSS](/blog/feed/)):
<table class="post_list">
  {% for post in site.posts %}
    <tr>
      <td class="post_link"><a href="{{ post.url }}">{{ post.title }}</a></td>
      <td class="post_date">
        {% capture year %}{{ post.date | date:'%Y' }}{% endcapture %}
          {% if year != previous_year %}
            {{ year }}
          {% capture previous_year %}{{ year }}{% endcapture %}
        {% endif %}
      </td>
    </tr>
  {% endfor %}
</table>
