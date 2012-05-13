---
title:  Site and blog now powered by Jekyll + PHP + Apache
date:   2011-12-29 22:29:00
path:   /blog/2011/12/29/site_and_blog_now_powered_jekyll_php_apache
layout: post
tags:   [Apache, blog, Jekyll, PHP, site]
---
#### Out with the old!

Previously, my site was powered by _CF-CMS_ (my own PHP-based content management system), and my
blog was on [Blogger][blogger]. Though both were sufficient, managing the appearance of my blog is
much easier when writing code from scratch than when hacking on a Blogger template. Furthermore,
using Jekyll is a type of learning experience.

#### In with the new!

My site and blog are now powered by [Jekyll][jekyll]. I'm quite particular regarding some aspects of
my site---particularly, the URLs. Therefore, I'm using a small PHP "gatekeeper" that allows me to
manage URLs exactly. Ultimately, content is stored as static HTML; but it is "fed" to into the
response by a PHP script. While this does create some overhead, my site certainly isn't popular
enough (at present, anyway) for that to matter.

Other functionality achieved by _CF-CMS_ using PHP has now been pushed to Apache via `.htaccess`.

The long-term success of Jekyll is yet to be seen, as it hasn't been around as long as more
popular (and user-friendly) solutions like [WordPress][wordpress]. The fact that
[GitHub Pages][github_pages] supports Jekyll is certain to lend it a push among geeks, but only time
will tell how it will fare.

#### What this means...

By choice, my blog can now be found at [`curtisfree.com/blog`][blog] (as opposed to
`blog.curtisfree.com`. Further wreaking havoc with existing "permalinks," I've changed individual
post paths, too.

The Atom feed for blog posts can now be found at [`curtisfree.com/blog/feed`][feed].

A significant side effect of leaving Blogger for Jekyll is that I no longer have native support for 
comments. Many (most?) bloggers using Jekyll make use of [DISQUS][disqus] to add third-party support
for comments, but I've chosen to have _no comments_ for now. The question-mark link at the end of
each post is a stand-in, giving a link to email me directly with any comments and/or questions.

#### So?

I'm happier with the new solution and -- hopefully -- won't be changing it anytime soon.

#### _Update (29 Dec 2011):_

The code for my site (and blog) is now [on GitHub][github_site].

[blogger]:      https://www.blogger.com
[jekyll]:       http://jekyllrb.com
[wordpress]:    https://wordpress.org
[github_pages]: http://pages.github.com
[blog]:         /blog
[feed]:         /blog/feed
[disqus]:       https://disqus.com
[github_site]:  https://github.com/cfree3/CurtisFree.com
