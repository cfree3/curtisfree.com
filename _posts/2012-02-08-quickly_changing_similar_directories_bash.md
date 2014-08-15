---
title:  Quickly changing between similar directories in BASH
layout: post
tags:   [BASH, CLI, Linux, tips, ZSH]
---
I recently [discovered][zsh_cd] a nifty trick in the `cd` builtin provided by ZSH: the ability to
change from the current directory to another whose path is generated via simple (and, for better or
worse, non-global) search-and-replace:

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
            echo -e "usage: cd path" >&2
            echo -e "       cd to_replace replace_with" >&2
            return 1
        else
            local new_pwd=$(echo ${PWD} | sed "s/${1}/${2}/")
            builtin cd ${new_pwd} && echo ${new_pwd}
        fi
    }

Note that this isn't perfect. For example, it will not work with values of `to_replace` or
`replace_with` that contain forward slashes (or anything else that will mess with the `sed`
command). There are certainly more involved methods that would avoid the limitations seen here.

#### _Update (18 Feb 2011):_

[Josh Berry][josh_berry] points out that this can be done using [BASH's built-in string
manipulation][bash_strings] in place of `sed`. The relevant line in the above function can be
replaced with the following:

    local new_pwd=${PWD/${1}/${2}}

[zsh_cd]:       http://www.acm.uiuc.edu/workshops/zsh/cd.html
[josh_berry]:   http://josh-berry.blogspot.com
[bash_strings]: http://tldp.org/LDP/abs/html/string-manipulation.html
