---
title:  Elevator configuration
date:   2013-09-14 15:31:00
layout: post
tags:   [Arch, Mac, UI]
---
Perhaps it's a waste of time, but for years I have enjoyed exploring system and window manager
configuration. Getting window management _just right_. Making everything _look nice_. Getting every
key on the keyboard to do _exactly what I want_. And I think that there are two ways to do this.

> Are you _going up_ or _going down_?

#### Going up

I used [Arch Linux][arch] from 2007-2012, and it was great. While most Linux distributions can be
customized to no end, I would say that that is especially so with Arch. When you install Arch, you
get a command line -- and that's it:

  1. Install Arch base.
  2. Install video drivers.
  3. Install X11.
  4. Install a desktop environment or (the more minimal route) a window manager and other
     applications.

I call this approach _going up_ because you start with nothing and build the system into exactly
what you need. While that's true in regards to the whole system, specifically I am referring to the
human interface: window management, key operation, etc.

Arch users tweak every aspect of their systems and shape the installation into exactly what they
want. In fact, there's no choice: by _going up_, one has to do just that.

#### Going down

Since 2012, I have primarily used [Mac][mac] OS X; it's a far different experience than Arch (for a
number of reasons). In particular, I would call the customization approach with OS X (or Windows)
_going down_.

By default, things **just work** in OS X -- and that's one reason its popularity has grown. In fact,
I would go so far as to say that the out-of-the-box experience is a good one. But with time, the
urge to customize sets in. And customization is a far, far different experience than with Arch.

Almost every customization that one can do in OS X is a hack. In fact, the term ["haxie"][haxie] was
developed to describe some utilities that are used to customize the user experience in OS X. And in
some cases, [these hacks have led to severe troubles][unsanity].

Want to change how some of your keys behave? You can -- with [PCKeyboardHack][pckh] (note _Hack_).
Want to arrange your windows easily with some keyboard commands? [One can][slate], but doing so
requires use of the OS's accessibility support. Want to disable window shadows? [Good
luck.][shadows]

I call this _going down_ because you start with a full (and possibly even good) system and then have
to hack it to meet your needs.

#### So... which is better?

I don't think that either experience is necessarily better than the other. I would argue that it's
easier to get what you want out of your experience if you _go up_. As a Mac user, I continue to find
things I would like to change about my OS X experience, and while it's usually possible with a
_going down_ hack of some kind, sometimes OS X just won't budge from its "we-know-best" ways.

#### _Update (28 Sep 2013):_

I received a couple of responses to [my tweet][tweet] announcing this post; and I'd like to address
them here.

<blockquote class="twitter-tweet" data-conversation="none" align="center"><p><a
href="https://twitter.com/curtisafree">@curtisafree</a> I think my non-Gnome
Ubuntu setup is &quot;going lateral&quot;.</p>&mdash; Chris Martin
(@chris__martin) <a
href="https://twitter.com/chris__martin/statuses/378907878742310912">September
14, 2013</a></blockquote> <script async src="//platform.twitter.com/widgets.js"
charset="utf-8"></script>

Chris raises an excellent point -- and one that I didn't consider in my original post. There are
certainly mid-way systems that need to be torn down _and_ built up to get what one wants.

In terms of Linux, a lot comes down to what desktop environment you choose -- if you use one at all.
With Arch, many users (myself included, when I used it) choose _not_ to go the route of a full-blown
desktop environment and instead to set up a window manager (such as [Openbox][openbox]) and install
other utilities to shape the system into something useful -- certainly "going up."

Many other distributions come with a desktop environment such as [GNOME][gnome] out of the box. This
allows one to hit the ground running quickly, without the need to set up basic services such as USB
flash drive auto-mounting; and it certainly saves time and effort -- for some users. For others,
using a desktop environment saves the frustration of wasting hours attempting to get smaller
services to meet all of one's needs, but it also does _too much_ or does things that simply do not
appeal to the user.

In that latter case, one option is to install the desktop environment but use an alternative window
manager on top of it. But one still must deal with _other_ unwanted features of the environment
(e.g., a potentially-annoying network manager). So in these cases, one starts with an in-the-middle
solution that meets many of his/her needs but must tear it down _and_ add to it to reach an
acceptable state.

<blockquote class="twitter-tweet" data-conversation="none" align="center"><p><a
href="https://twitter.com/curtisafree">@curtisafree</a> I like the metaphor.
How would you consider something like emacs/vim compared to newer
environments?</p>&mdash; Josh Berry (@taeric) <a
href="https://twitter.com/taeric/statuses/378931330345476097">September 14,
2013</a></blockquote> <script async src="//platform.twitter.com/widgets.js"
charset="utf-8"></script>

I would say that more conventional editors like Vim and Emacs lead to configuration
"going up": there is a large space for Vim plugins, including very many popular ones that a number of
users would consider essential -- such as [Pathogen][pathogen], which provides just the very basic
service of supporting installation of _other_ plugins in a modular fashion. I'm less familiar with
the Emacs side of things; but I am aware that it, too, has at least a moderate plugin space.

That said, both Vim and Emacs include quite a lot out of the box (though Vim provides much less than
Emacs). But I'm not sure I've ever heard anyone complain about needing to _disable_ the included
features, as the editors are designed such that these more advanced functions stay out of the way
until needed.

In contrast, and given the above, I would say that configuring a newer editor/IDE is mostly a
"lateral" move. Many of today's popular editing environments come with some set of defaults (and
often some bundled-in "plugins") that one almost certainly must customize to his/her liking. This
applies to modern editors and to the IDEs I've seen. One might need to install new plugins to obtain
some functionality but at the same time must dig through the application's settings in order to
disable _niceties_ that get in the user's way -- such as automatic changes to text, templates, etc.

For what it's worth, I would say that many "editors" today are drawing closer to IDE land -- gaining
an increasing number of features to help programmers. So while the distinction still exists -- such
that editors are still a _little_ more "going up" than IDEs -- I think that they're both "lateral"
in comparison to earlier examples and more conventional text editors.

[arch]:        http://archlinux.org
[mac]:         http://apple.com/mac
[haxie]:       https://en.wikipedia.org/w/index.php?title=Haxie&oldid=560332629
[unsanity]:    http://arstechnica.com/civis/viewtopic.php?p=24502203
[pckh]:        https://pqrs.org/macosx/keyremap4macbook/pckeyboardhack.html.en
[slate]:       https://github.com/jigish/slate
[shadows]:     http://apple.stackexchange.com/q/61924
[tweet]:       https://twitter.com/curtisafree/status/378905271080189952
[openbox]:     http://openbox.org
[gnome]:       http://www.gnome.org
[pathogen]:    https://github.com/tpope/vim-pathogen
