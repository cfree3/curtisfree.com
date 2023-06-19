---
title:  How to (help) prevent commit message misspellings in Vim
layout: post
---
Some time ago, I was responsible for this:

> Best commit message ever: "Remove paccidental character" - [@curtisafree](https://twitter.com/curtisafree)
>
> &mdash; [Kelsey Francis][tweet-kf]

But it's actually not difficult to avoid simple misspellings and typos in Git commit messages thanks
to Vim's built-in spellchecker.

Add the following to your Vim config (`~/.vimrc`) to enable this feature specifically for Git
commits:

~~~ vim
" ensure Vim can work with filetypes
filetype plugin on

" assuming this is correct for you, of course
set spelllang=en_us

" enable spellcheck for Git commits
autocmd FileType gitcommit setlocal spell
~~~

There's a lot more you can do with Vim's spellchecker; see `:help spell` for more information.

[tweet-kf]: https://twitter.com/_kelseyfrancis/status/180637211438497792
