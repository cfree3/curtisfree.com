---
title:  Elevator configuration
date:   2013-09-14 15:31:00
path:   /blog/2013/09/14/elevator_configuration
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

[arch]:     http://archlinux.org
[mac]:      http://apple.com/mac
[haxie]:    https://en.wikipedia.org/w/index.php?title=Haxie&oldid=560332629
[unsanity]: http://arstechnica.com/civis/viewtopic.php?p=24502203
[pckh]:     https://pqrs.org/macosx/keyremap4macbook/pckeyboardhack.html.en
[slate]:    https://github.com/jigish/slate
[shadows]:  http://apple.stackexchange.com/q/61924
