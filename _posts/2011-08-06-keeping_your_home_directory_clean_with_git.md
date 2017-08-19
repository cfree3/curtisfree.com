---
title:  Keeping your home directory clean with Git
layout: post
tags:   [Git, tips]
---
I recently decided to keep my important and public dotfiles in [a repository][config] on
[Github][github]. In doing so, I comitted _most_ of the simple configuration files that I **want**
to have present in my home directory.

Of course, though, over time I tend to collect numerous _unwanted_ files in my home directory
(e.g., `.esd_auth`, `.zcompdump`). Some time ago, I developed a series of scripts to clean up my
home directory, and I typically run these scripts prior to shutting down my computer; however,
I have found that it is easy to use [Git][git] to help keep my home directory constantly tidy.

After committing what one wants to a Git repository, a check of `git status` will reveal that
_everything else_ is not currently under version control. That's where excludes (or "ignores")
come in handy. Assuming that the root of your repository is in your home directory,
`~/.git/info/exclude` can be used to tell Git which files you do not want under its control.

Here, add all files/directories that you _want_ in your home directory but do not wish to commit.
Ensure that you do not list any files you do **not** want at all (files like the aforementioned
`.zcompdump`).

Now, barring any changes you have made to files that _are_ in your repo, `git status` can be used
to reveal a quick list of any unwanted files that have accumulated:

    % git st # 'st' is an alias I have set for 'status'
    # On branch master
    # Untracked files:
    #   (use "git add <file>..." to include in what will be committed)
    #
    #       .esd_auth
    #       .gconfd/
    #       .macromedia/
    #       .viminfo
    #       .vimperator/
    #       .zcompdump
    #       .zsh_history
    nothing added to commit but untracked files present (use "git add" to track)

One caveat: Git will _not_ "alert" you to unwanted directories (including nested directories) if
they contain no actual files (see why [here][google_empty_dirs]):

    % grep ".adobe" .git/info/exclude
    % tree .adobe
    .adobe
    `-- Flash_Player
        `-- AssetCache
            `-- 5885UGDY

    3 directories, 0 files
    % git st
    # On branch master
    nothing to commit (working directory clean)

[config]:            /config
[github]:            https://github.com/
[git]:               http://git-scm.com/
[google_empty_dirs]: https://www.google.com/search?q=git+empty+directories
