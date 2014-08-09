---
title:  Using Amazon.com's Universal Wishlist with Vimperator
date:   2011-08-06 20:54:00
layout: post
tags:   [Amazon.com, Firefox, Vimperator]
---
You can also use Vimperator to add items to your Amazon.com wish list. With
the following code, the command `:amzwishlist` will do the trick:

    "" Amazon Universal Wishlist
    """ JS derived from http://www.amazon.com/wishlist/get-button (also see Delicious credits above).
    """" NOTE: If not already logged into Amazon.com, this will not always work ('&' isn't handled
    """"       by Amazon when passing through login).
    command! amzwishlist js add_to_amazon_wishlist();
    :js <<EOJS
      add_to_amazon_wishlist = function() {
        var amazon_wishlist_url = 'http://www.amazon.com/wishlist/add'
                                + '?u=' + encodeURIComponent(window.getBrowser().currentURI.spec)
                                + '&t=' + encodeURIComponent(window.getBrowser().contentDocument.title);
        window.open(amazon_wishlist_url, 'amzwishlist', 'width=900,height=553');
      }
    EOJS
