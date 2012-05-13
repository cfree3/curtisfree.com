---
title:  Quickly copy last Git commit hash
date:   2012-05-05 01:34:00
path:   /blog/2012/05/04/quickly_copy_last_git_commit_hash
layout: post
tags:   [Git, tips, workflow]
---
A typical portion of my Git workflow involves the following:

1. Local `git commit`
2. `git push` to upstream remote
3. Add a comment to an issue tracker that includes the new commit hash

A simple shell (ZSH, BASH, or similar) function makes the last step a little bit easier:

    gitcp() { git log -1 --format="%H" | xclip -in; }

After running `gitcp`, the hash of the last commit is in X's primary selection and can easily be
pasted into a comment box in the issue tracker.  

Depending on your preferences, you can [instruct `xclip`][xclip] to copy into a different X
"selection" -- or you can even use [Autocutsel][autocutsel] to sync your X selections.

Not using X11? There are [`xclip` alternatives][xclip_alt] for OS X and Windows, so you can spin up
your own helper utility.

[xclip]:      http://linux.die.net/man/1/xclip
[autocutsel]: http://www.nongnu.org/autocutsel/
[xclip_alt]:  http://stackoverflow.com/a/750466
