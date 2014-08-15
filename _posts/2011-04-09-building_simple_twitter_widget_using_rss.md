---
title:  Building a simple Twitter widget using RSS
layout: post
tags:   [howto, PHP, tips, Twitter]
---
Sometimes, [Twitter's "stock" widgets][twitter_widgets] aren't quite what you want.

Sure, they look pretty nice; I'm even using one on this blog. But if you want to integrate Twitter
info into an existing website, they don't cut it. What then?

There's the [Twitter API][twitter_api]. If you want to build any type of complex Twitter app/widget,
then that might be the right solution for you, but if you want _only to display simple,
publicly-available tweets_, then you can build your own widget using publicly-available Twitter RSS
feeds.

#### Check out your own feed!

To see the feed for your own tweets, visit your Twitter profile using the old
Twitter interface (I'm not sure where to find the RSS URL in the new UI). Below the
icons of your followers, you should see a link to an RSS feed of your tweets:
![](/imgs/twitter_rss.png)

Copy that URL: you'll need it later.

#### Get coding!

I'm going to cover building a widget using PHP. If you prefer another language, I'm sure you can
figure it out.

The first step is to determine _how_ you will fetch and parse the RSS feed. I use
[Magpie RSS][magpie] for this task. There are newer libraries for PHP available, but Magpie is
simple and _works_.

Let's take a look at my own widget <del>(see [my homepage][home])</del>:

    <?php
    
        require('tp/magpierss/rss_fetch.inc'); // using Magpie RSS
    
        // get the latest tweet via RSS
        $url = 'http://twitter.com/statuses/user_timeline/222659411.rss';
        $latest_tweet = fetch_rss($url)->items[0]['title'];
    
        // we'll replace some patterns in the tweet
        $patterns = array(); $replacements = array();
    
        $patterns[] = '/curtisafree: /'; // remove Twitter username
        $replacements[] = '';
    
        $patterns[] = '/(https?:\/\/[^ ]+)/'; // make URLs into links
        $replacements[] = '<a href="\1">\1</a>';
    
        $patterns[] = '/@([a-zA-Z0-9_]+)/'; // turn user references into links
        $replacements[] = '<a href="https://twitter.com/\1">@\1</a>';
    
        echo preg_replace($patterns, $replacements, $latest_tweet);
    
    ?>

The first task is to import the Magpie code. My path (`tp/magpierss/rss_fetch.inc`) will only be
valid if that is where you have placed the code within your website hierarchy. Adjust the path as
appropriate.

Then, we actually fetch the information from Twitter. (Note that Magpie RSS uses caching, so the
load you'll be placing on the Twitter servers isn't too bad; but if you expect very heavy traffic,
you might consider using the official API instead.)

Magpie makes this simple. Using the URL you found earlier, we simply fetch the first tweet in the
feed. Within the RSS entry, both the title and body give the actual tweet text -- so either should
do the trick. I chose to pull out the title.

You could stop here, if you wanted. You have the tweet text and can display it as you wish. I
continue with some embellishments, though.

`$patterns` gives patterns to find within the tweet, and `$replacements` gives the corresponding
replacement patterns (yep, PHP's [`preg_replace`][preg_replace] can handle sets of patterns and
their corresponding replacements!).

First, I remove my own Twitter username from the beginning of the tweet (there's no need to show
it).

Now, there are two types of links within a tweet that I'd like to represent as actual links: Twitter
usernames (`@username`) and actual URLs. This can be accomplished using the patterns/replacements on
lines 10-13.

You might have noticed in the newer Twitter UI that some tweets contain links without the protocol
(`http`/`https`). The RSS feed, though, is more like the old Twitter UI. You'll see full URLs. For
example, I [tweeted][googl_tweet] about [goo.gl][googl] recently, and you can see a difference in
UIs (old on left, new on right):

<div class="imgs">
  <img src="/imgs/tweet_old.png" /><img src="/imgs/tweet_new.png" />
</div>

Via RSS, you'll see the former -- so the regex I provided above should be sufficient.

And there you have it: a simple Twitter widget that you can place anywhere on your website.

#### _Update (30 Jun 2012):_

I actually haven't been using this widget for a while. I had Twitter's official
["profile widget"](https://twitter.com/about/resources/widgets/widget_profile) on the site for a
bit, but at present I have no elements pulling from Twitter.

[twitter_widgets]: https://twitter.com/about/resources/widgets
[twitter_api]:     https://apiwiki.twitter.com/
[magpie]:          http://magpierss.sourceforge.net/
[home]:            /
[preg_replace]:    http://php.net/preg_replace
[googl_tweet]:     https://twitter.com/curtisafree/status/47485007014543360
[googl]:           http://goo.gl/
