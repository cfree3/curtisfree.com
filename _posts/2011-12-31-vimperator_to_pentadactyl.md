---
title:  I've shifted from Vimperator to Pentadactyl
layout: post
tags:   [Firefox, Pentadactyl, Vim, Vimperator]
---
I've been using [Vimperator][vimperator] for years. I'm a huge fan of the [Vim][vim] text editor,
and Vimperator provides a Vim-like user experience in my favorite Web browser,
[Mozilla Firefox][firefox].

That said, Vimperator 3 was a departure from the experience I had come to know and enjoy.

  * The command line UI was revamped. In part, this led to the removal of what I consider a nice
    security feature: color-coding (the status bar) to indicate the security in use on the current
    page. Though one can use [a custom script][vimperator_script] to re-implement this color-coding,
    it causes noticable delay when changing tabs.
  
  * Certain lower-level aspects became less _Vim-like_. For example, the `'guioptions'` option (like
    that in Vim) was replaced with `'gui'` -- which has different (and sometimes confusing)
    behavior.

Recently, a friend asked me about the browser enhancement I was using, and when researching it
herself, she discovered my new favorite Firefox extension:
[Pentadactyl][pentadactyl].

<div class="imgs">
  <a href="/imgs/pentadactyl.png"><img src="/imgs/pentadactyl.png" width="250" height="152" /></a><a href="/imgs/pentadactyl_focus.png"><img src="/imgs/pentadactyl_focus.png" width="250" height="152" /></a>
</div>

Pentadactyl began as a fork of pre-3.0 Vimperator when two of the latter's primary developers left
the project. While Vimperator development has focused on "usability," "simplicity", "stability",
and "design" (as described in [in the Vimperator wiki][vimperator_wiki]), Pentadactyl has maintained
(and pushed toward) a truer Vim experience that can fulfill a hacker's dream.

Importantly, both of the _specific_ points mentioned above are nonissues with Pentadactyl:

  * The status bar security color-coding is functional. Like Vimperator, Pentadactyl now (by
    default) shows only a single line at the bottom of the window. Whereas Vimperator's "single
    line" is a dual-purpose status and command line, Pentadactyl shows only the status line and
    reveals the command line only when necessary.
  
  * Pentadactyl still uses `'guioptions'`. That said, some options diverge from what one might be
    accustomed to with Vim. Notably, search-related options use the term `find` instead of `search`
    (e.g., Vim's `'hlsearch'` vs. Pentadactyl's `'hlfind'`); and Vim's multiple case-related options
    (`'ignorecase'` and `'smartcase'`) are unified into a single option (`'findcase'`).

If you love Vim and have been using Vimperator, give Pentadactyl a shot (you'll need to update your
[`.vimperatorrc`][vimperatorrc] to a compatible [`.pentadactylrc`][pentadactylrc]).  If you're new
to both, try each in turn and see which you prefer!

[vimperator]:        http://vimperator.org/vimperator
[vim]:               http://www.vim.org
[firefox]:           https://www.mozilla.org/firefox
[vimperator_script]: https://code.google.com/p/vimperator-labs/issues/detail?id=542
[pentadactyl]:       http://dactyl.sourceforge.net/pentadactyl/
[vimperator_wiki]:   https://code.google.com/p/vimperator-labs/wiki/VimperatorVsPentadactyl
[vimperatorrc]:      /config/.vimperatorrc
[pentadactylrc]:     /config/.pentadactylrc
