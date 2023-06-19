---
title:  My preferred monospace fonts
layout: post
---
As a programmer and command-line enthusiast, I spend a lot of time looking at monospace fonts. For
many years, I enjoyed using what has been for years a popular default:
[Bitstream Vera][bitstream] Sans Mono.

A few months ago, I spent a great deal of time trying out different monospace fonts. Here, I'll
present a brief list of my favorites; the font specification strings and screenshots represent my
preferred configuration for each of the fonts in my preferred terminal, `rxvt-unicode`:

  * <a href="http://www.fial.com/~scott/tamsyn-font/">Tamsyn</a>
    <pre>-*-tamsyn-medium-r-*-*-14-*-*-*-*-*-*-*</pre>
    <img src="/blog/assets/terminal_font_tamsyn.png" />

    <p>
      There's just something about Tamsyn that I like (in addition to
      <a href="http://www.fial.com/~scott/tamsyn-font/">its website</a>, of which I'm a big fan).
    </p>

    <p>
      Unfortunately, though it's a sans-serif font, the glyph shapes do seem to possess some
      &quot;serif&quot; qualities and seem jagged (pixelated). I'm also not a fan of the
      &quot;sharp&quot; <i>m</i> and <i>w</i> glyphs at smaller sizes (as shown). I refer to the
      <i>m</i> as a &quot;<a href="https://mail.google.com">Gmail</a> <i>m</i>.&quot;
    </p>

  * <a href="http://dejavu-fonts.org">DejaVu</a> Sans Mono
    <pre>xft:DejaVu Sans Mono:size=9</pre>
    <img src="/blog/assets/terminal_font_dejavu.png" />

    <p>
      DejaVu Sans Mono is little more than Bitstream Vera Sans Mono &ndash; so here, I'm not
      straying far from my &quot;safe default&quot;; but I prefer DejaVu because it supports a
      larger character set (even though, admittedly, I don't make use of it).
    </p>

    <p>
      This is the only non-bitmap font on the list.
    </p>

    <p>
      Among other things, this means that much of its appearance is dependent on system font
      settings. Bitmap fonts, on the other hand, are much more uniform in appearance across systems
      (though they, too, are subject to some variation). Working with multiple Linux distributions
      and OS X, DejaVu Sans Mono can look crisp or blurry &ndash; or perhaps the character spacing
      might not be consistent across applications. While this is no fault of the font itself, it's
      worth noting.
    </p>

    <p>
      I continue to use DejaVu in some terminals/on some machines; and it's my preferred font for
      displayed code (e.g., in code blocks on this page).
    </p>

  * <a href="http://terminus-font.sourceforge.net">Terminus</a>
    <pre>-*-terminus-medium-r-*-*-12-*-*-*-*-*-*-*</pre>
    <img src="/blog/assets/terminal_font_terminus.png" />

    <p>
      Terminus is well-known in the Arch Linux community &ndash; and for good reason. It's simply a
      great font. Terminus glyphs are perhaps the simplest and most readable I've seen.
    </p>

    <p>
      You might notice that the directory names in the screenshot are not displayed in bold face:
      this size of the Terminus font has no bold face. I don't consider that a problem (in fact, I
      like the clean look of a terminal with no bold fonts); but others might.
    </p>

    <p>
      Terminus is &quot;tied&quot; with DejaVu as my favorite for use on some systems.
    </p>

  * <a href="https://bbs.archlinux.org/viewtopic.php?id=130912">Termsyn</a>
    <pre>-*-termsyn-medium-r-*-*-14-*-*-*-*-*-*-*</pre>
    <img src="/blog/assets/terminal_font_termsyn.png" />

    <p>
      Termsyn is a middle-ground between <i>Term</i>inus and Tam<i>syn</i>.
    </p>

    <p>
      Termsyn is probably the least popular on the list, but it's my default font in
      <code>rxvt-unicode</code> and on virtual consoles on my personal Arch machine. Using my
      preferred size for each font (pictured here), Termsyn is a little larger than Terminus.
      Furthermore, the &quot;serif&quot; qualities that I dislike in Tamsyn are not prevalent in
      Termsyn, due to its inheriting simple glyph shapes from Terminus.
    </p>

##### _Update (06 Jul 2012)_

Newer versions of Termsyn include versions in a format usable on virtual consoles, so I no longer
turn to Tamsyn as a substitute there.

Furthermore, while it is still my go-to, later versions of Termsyn have adoped additional Tamsyn
glyphs (in particular, note the difference in the **l** from above):
![](/blog/assets/terminal_font_termsyn_later.png)

[bitstream]: https://en.wikipedia.org/wiki/Bitstream_Vera
