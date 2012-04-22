---
title:  Adding the total line count to Vim's status line
date:   2012-04-22 12:23:00
path:   /blog/2012/04/22/adding_total_line_count_to_vim_statusline
layout: post
tags:   [Tips, Vim]
---
By default, Vim displays some information about the current file/state on its command line (the last
line in the window):
<img class="seamless" src="/imgs/laststatus_1.png" />

As of late, I like asking Vim to display a second line of information at all times (`:set
laststatus=2`). This leaves some information displayed on the command line but moves other info to
the "status line":
<img class="seamless" src="/imgs/laststatus_2.png" />

As you can see in both screenshots, I have enabled Vim's "ruler" (`:set ruler`), which gives
line, column, and position (the last few fields in the commandline and the status line,
respectively). While this information can certainly be helpful, one might also wish to know a little
more detail about his/her progress through the file.

With `'ruler'` set,
[Vim tries to do this](https://vimhelp.appspot.com/options.txt.html#%27ruler%27); but sometimes, it
can be useful to have the total line count to compare with the current line number -- not just a
relative position. Fortunately, Vim allows users to customize the contents of its status line.

The `'statusline'` option dictates what information is displayed on the status line. Since that
option is blank by default, one must dig through
[the documentation](https://vimhelp.appspot.com/options.txt.html#%27statusline%27) to find the true
default. Here's the relevant snippet:

    Emulate standard status line with 'ruler' set
      :set statusline=%<%f\ %h%m%r%=%-14.(%l,%c%V%)\ %P

`%l` is the current line number. I like to place the total line count (`%L`) just after that, as a
fraction:

    :set statusline=%<%f\ %h%m%r%=%-14.(%l/%L,%c%V%)\ %P

If you expect to edit very large files, you might also wish to give Vim some additional space to the
right for many-digit line counts. Here, we give the line/column count group 20 characters instead of
the default 14:

    :set statusline=%<%f\ %h%m%r%=%-20.(%l/%L,%c%V%)\ %P

This gives a status line like the following:
<img class="seamless" src="/imgs/laststatus_custom.png" />

Of course, you can add `%L` anywhere you like in your own status line. To make this setting "stick,"
add that line (minus the leading `:`) to your `~/.vimrc`.
