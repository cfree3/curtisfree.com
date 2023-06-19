---
title:  Simple yet thorough hostname resolution in Mac OS X
layout: post
---
There are many CLI tools available to resolve IPs for domain names, such as `dig` and `host`. While
these utilities generally perform DNS resolution, they do not typically consider hostnames defined
in `/etc/hosts`.

Fortunately, in Mac OS X [the tool `dscacheutil` can do this][superuser]. I've defined a shell
function in `~/.zshrc` to make this simple:

    ip() { dscacheutil -q host -a name ${1}; }

Note that this works for both DNS-resolvable hosts _and_ those you've defined:

<pre><code>% ip curtisfree.com
name: curtisfree.com
ip_address: 66.40.52.181</code></pre>

<pre><code>% ip post-it # home server, named in /etc/hosts
name: post-it
ip_address: 192.168.0.2</code></pre>

This function will work in both ZSH and BASH, and it should be adaptable to your favorite shell.

[superuser]: http://superuser.com/a/299431
