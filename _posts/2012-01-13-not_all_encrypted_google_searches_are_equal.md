---
title:  Not all encrypted Google searches are equal
date:   2012-01-13 15:33:00
path:   /blog/2012/01/03/not_all_encrypted_google_searches_are_equal
layout: post
tags:   [Google, HTTPS, search, tips]
---
Google offers two separate encrypted (i.e., via HTTPS) search pages:
[`https://encrypted.google.com`](https://encrypted.google.com) (which has been established for some
time) and [`https://www.google.com`](https://www.google.com) (a more recent development). The former
has generally lagged behind the standard Google search page in terms of features;
`https://www.google.com` looks more like the regular Google search page.

My personal motivation for preferring Google's HTTPS variants is not to protect my search terms:
rather, I am concerned with the cookie information being passed between my browser and Google's
servers. While I do not often (okay, _ever_) use "open Wi-Fi," failure to use an encrypted
connection means that there is increased potential for a session hijack (as highlighted by the
widely-publicized [Firesheep](http://codebutler.com/firesheep)).

<div class="imgs">
  <a href="/imgs/g_https_encrypted.png"><img src="/imgs/g_https_encrypted.png" width="250" height="174" /></a><a href="/imgs/g_https_www.png"><img src="/imgs/g_https_www.png" width="250" height="174" /></a>
</div>

Aside from differences in each version's "frills," there is an important security-relevant
difference between the two: the underlying search result links.

Note that links in Google search results _look_ like they point directly at the result URL; however,
they actually point back to Google's own servers, which redirect the browser to the actual result.
This means that Google can track clicks, lead to particular referers, and more.

On `https://encrypted.google.com`, these underlying links point back to
`https://encrypted.google.com`; however, **on `https://www.google.com`, search result redirect links
not use HTTPS**.

For example, the first hit when searching for "Arch Linux" on `https://encrypted.google.com` is
(line breaks added):

    https://encrypted.google.com/url?sa=t&rct=j&q=arch%20linux&source=web&cd=1&ved=0CDMQFjAA&url=htt
    p%3A%2F%2Fwww.archlinux.org%2F&ei=7-AQT_D3JIGFtgeC05mVAg&usg=AFQjCNHBJwJZGGNQOe4ZlnbMOM676Q1H7g&
    sig2=qeODYK6JsiPId9mR0kwyOw

On `https://www.google.com`, one has:

    http://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&ved=0CDQQFjAA&url=http%3A%2F%2Fww
    w.archlinux.org%2F&ei=GOEQT_SsOtGJtweYl-GLAg&usg=AFQjCNHBJwJZGGNQOe4ZlnbMOM676Q1H7g&sig2=ek7en0Z
    ia2EtsYirM0xlsQ

While it is _unlikely_ that your session will be hijacked simply by following one of these
redirections, note that _any cookie information_ related to your authenticated session that is sent
across the Internet unencrypted carries some potential for misuse if it is intercepted.

Users of the [EFF](https://www.eff.org/)'s [HTTPS Everywhere](https://www.eff.org/https-everywhere)
Firefox extension are probably already using `https://encrypted.google.com`. If you're using Chrome,
you can manually add a new search engine with a search string of:

    https://encrypted.google.com#q=%s

If you don't already use the HTTPS-fortified Google search pages, give it a try.

#### _Update (16 Mar 2012):_

The EFF has published
[a note](https://www.eff.org/deeplinks/2011/10/google-encrypts-more-searches) pointing out another
security-related discrepancy between the two subdomains.
