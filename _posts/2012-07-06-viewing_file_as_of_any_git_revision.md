---
title:  Viewing a file as of any Git revision
date:   2012-07-06 15:13:00
layout: post
tags:   [ Git, tips, Vim ]
---
When working with code in a Git repository, it is often instructive to view the contents of a file
as of a different revision.

Git makes this easy:

    % git show ${revision}:${path_to_file}

`${path_from_repo_root}` is the path to the file from the "root" of the repository (the directory
where the repo's `.git` subdirectory lives). `${revision}` specifies the Git revision (see `git help
gitrevisions`) at which you'd like to see the file contents.

If you're a Vim user, you can easily view the file in a Vim buffer -- and with syntax highlighting.
Assuming that the Vim-recognized filetype specification is `${filetype}`, the following will do the
trick:

    % git show ${revision}:${path_to_file} | vim -R -c "set ft=${filetype}" -
