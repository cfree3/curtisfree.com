---
title:  Changing the font in Pentadactyl
date:   2013-03-16 20:54:00
path:   /blog/2013/03/16/changing_pentadactyl_font
layout: post
tags:   [Firefox, Pentadactyl]
---

Pentadactyl is excellent (I've posted about it [before][pentadactyl]) -- but depending on your
system, the font used in its UI elements might not have optimal defaults. In particular, one might
wish to change the monospace font face and size.

#### Font face

If you have a favorite [monospace font][monospace], then likely you'll want to use that font in
Pentadactyl, too. While Pentadactyl's `:hi` command can be used to use different fonts in different
locations, the simplest way to drop in your favorite font is to apply it to _all_ areas in the UI
that make use of a monospace font.

Pentadactyl's default monospace font is actually just that of Firefox itself. Since different
systems will have different fonts installed, I prefer to dictate my preferred font by setting it in
Firefox.

From Pentadactyl, open the Firefox preferences using `:dialog preferences`. Then go to the "Content"
tab, look for the "Fonts & Colors" section, and click the "Advanced" button. Here you can set your
preferred monospace font.

<img class="seamless" src="/imgs/firefox_font_settings.png" />

Restart Firefox, and (assuming no other overrides) Pentadactyl will begin using the font you
specified.

#### Font size

Changing the default monspace font size in Firefox settings does not seem to effect that used by
Pentadactyl; therefore, we'll turn to the `FontFixed` style group, which applies to some -- but not
all -- areas of the Pentadactyl UI that use a monospace font. Fortunately, it is easy to tell
Pentadactyl to apply `FontFixed` styling to other groups.

Replacing `9pt` with your preferred font size, and the following to your
[`.pentadactylrc`][pentadactylrc]:

    hi FontFixed -append font-size: 9pt !important;

    " some groups -- such as `CmdLine` and `StatusLine` -- are linked by default
    hi -append -link FontFixed Hint
    hi -append -link FontFixed CompItem
    hi -append -link FontFixed CompTitle

[pentadactyl]:   /blog/2011/12/31/vimperator_to_pentadactyl
[monospace]:     /blog/2012/05/12/preferred_monospace_fonts
[pentadactylrc]: /config/.pentadactylrc
