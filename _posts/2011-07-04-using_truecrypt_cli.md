---
title:  Using the TrueCrypt CLI
layout: post
tags:   [CLI, TrueCrypt]
---
[TrueCrypt][truecrypt] is a great utility for hiding sensitive data -- whether in an encrypted disk
image or on an entire encrypted partition.

I encourage you to check out TrueCrypt, but that is not the point of this post.

Most TrueCrypt users are likely accustomed to its GUI. In fact, I very much like it. That said,
some users do not realize that there is also a command-line interface (CLI) to TrueCrypt.

The key to using TrueCrypt from a terminal is the `-t` flag – which signals to the utility that
you wish to use its `t`extual interface.

After an encrypted volume has been created (a task that can also be accomplished via terminal),
the two most common tasks will be _mounting_ and _unmounting_ the volume.

Mounting is simple and is the "default" option (requiring no special flags/commands). Simply tell
TrueCrypt the location of the encrypted volume (disk image or device) and the mountpoint:

    % truecrypt -t /dev/sdc /media/my_volume
    Enter password for /dev/sdc:
    Enter keyfile [none]:
    Protect hidden volume (if any)? (y=Yes/n=No) [No]:
    Enter your user password or administrator password:

Note that this makes it easy to choose an _arbitrary mountpoint_ for the volume (rather than the
default, which for me is `/media/truecrypt1` for the first mounted volume). You can use a more
complex command to avoid some of the prompts seen in that example.

Dismounting is also a simple task:

    % truecrypt -t -d /media/my_volume
    Enter your user password or administrator password:

For a full description of how to use TrueCrypt's CLI, check out the built-in help (N.B., there's
no man page):
<pre><code>% truecrypt --help # Opens GUI containing help info and prints to terminal.</code></pre>
<pre><code>% truecrypt -t --help # Prints to terminal only.</code></pre>
<pre><code>% truecrypt -t --help | less # Nicer. :-)</code></pre>

If you begin using the CLI interface regularly, then do yourself a little favor and add an alias
to your shell config: `alias truecrypt='truecrypt -t'`.

[truecrypt]: http://www.truecrypt.org/
