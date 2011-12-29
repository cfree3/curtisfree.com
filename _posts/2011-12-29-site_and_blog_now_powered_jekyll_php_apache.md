---
title:  Site and blog now powered by Jekyll + PHP + Apache
date:   2011-12-29 17:29:00
path:   /blog/2011/12/29/site_and_blog_now_powered_jekyll_php_apache
layout: post
tags:   [Apache, blog, Jekyll, PHP, site]
---
#### Out with the old!

Previously, my site was powered by my own PHP-based content management system(_CF-CMS_), and my
blog was on [Blogger](https://www.blogger.com). Though both were sufficient, managing the
appearance of my blog is much easier when writing code from scratch than when hacking on a Blogger
template. Furthermore, using Jekyll is a type of learning experience.

#### In with the new!

My site and blog are now powered by [Jekyll](http://jekyllrb.com/). I'm quite particular regarding
some aspects of my site -- particularly, the URLs. Therefore, I'm using a small PHP "gatekeeper"
that allows me to page URLs exactly. Ultimately, content is stored as static HTML; but it is "fed"
to into the response by a PHP script. While this does create some overhead, my site certainly isn't
popular enough (at present, anyway) for that to matter.

Other functionality achieved by _CF-CMS_ using PHP has now been pushed to Apache via `.htaccess`.

The long-term success of Jekyll is yet to be seen -- as it hasn't been around as long as more
popular (and user-friendly) solutions like [WordPress](https://wordpress.org). The fact that
[GitHub Pages](http://pages.github.com) supports Jekyll is certain to lend it a push among geeks,
but only time will tell how it will fare.

#### What this means...

By choice, my blog can now be found at [`curtisfree.com/blog`](/blog) --
rather than at [`blog.curtisfree.com`](http://blog.curtisfree.com). Further wreaking havoc with
existing "permalinks," I've changed post paths, too. The Atom feed for blog posts can now be
found at [`curtisfree.com/blog/feed`](/blog/feed).

Another side effect of leaving Blogger for Jekyll is that I no longer have native support for
comments. Many (most?) bloggers using Jekyll make use of [DISQUS](https://disqus.com/) to add
third-party support for comments, but I've chosen to have _no comments_ for now. The question-mark
link at the end of each post is a stand-in, giving a link to email me directly with any comments
and/or questions.

#### So?

I'm happier with the new solution and -- hopefully -- won't be changing it anytime soon.

