---
title:  Easy Delicious bookmarking with Vimperator
layout: post
tags:   [bookmarks, Delicious, Firefox, Vimperator]
---
If you use [Vimperator][vimperator], add the following to your `~/.vimperatorrc` to enable the
addition of a [Delicious][delicious] bookmark for the current page simply by pressing `D`:

    "" Bookmark on Delicious
    """ JS derived from http://delicious.com/help/bookmarklets.
    """ For reference, see https://developer.mozilla.org/en/XUL/browser.
    map D :js add_to_delicious()<CR>
    :js <<EOJS
      add_to_delicious = function() {
        var delicious_url = 'http://delicious.com/save'
                          + '?url=' + encodeURIComponent(window.getBrowser().currentURI.spec)
                          + '&title=' + encodeURIComponent(window.getBrowser().contentTitle)
                          + '&v=5&noui=1&jump=doclose'
                          + '&share=no'; // default share setting
        window.open(delicious_url, 'deliciousuiv5', 'width=550,height=550');
      }
    EOJS

[vimperator]: http://vimperator.org/trac/wiki/Vimperator
[delicious]:  http://delicious.com/
