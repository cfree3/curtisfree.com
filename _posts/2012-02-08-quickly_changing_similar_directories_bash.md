---
title:  Quickly changing between similar directories in BASH
date:   2012-02-09 01:03:00
path:   /blog/2012/02/08/quickly_changing_similar_directories_bash
layout: post
tags:   [BASH, CLI, Linux, tips, ZSH]
---
I recently [discovered](http://www.acm.uiuc.edu/workshops/zsh/cd.html) a nifty trick in the `cd`
builtin provided by ZSH: the ability to change from the current directory to another whose path is
generated via simple (and, for better or worse, non-global) search-and-replace:

    % pwd
    /top/left/bottom
    % ls /top/*
    /top/left:
    bottom

    /top/right:
    bottom
    % cd left right
    /top/right/bottom
    % pwd
    /top/right/bottom

Unfortunately, users of BASH don't get this nicety; however, by adding a (somewhat) simple function
to your shell config (`~/.bashrc` or perhaps `~/.bash_profile`), you can emulate this behavior:

    cd () { 
        if [ $# -eq 1 ]; then
            builtin cd ${1}
        elif [ $# -gt 2 ]; then
            echo -e "usage: cd path"
            echo -e "       cd to_replace replace_with"
            return 1
        else
            local new_pwd=$(echo ${PWD} | sed "s/${1}/${2}/")
            echo ${new_pwd} && builtin cd ${new_pwd}
        fi
    }

Note that this isn't perfect. For example, it will not work with values of `to_replace` or
`replace_with` that contain forward slashes (or anything else that will mess with the `sed`
command). There are certainly more involved methods that would avoid the limitations seen here.
