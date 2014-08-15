---
title:  Excluding Steam apps from CrashPlan backup on Mac OS X
layout: post
tags:   [CrashPlan, Mac, Steam]
---
I'm not much of a gamer, but having "purchased" [Portal][portal] for free years ago, I finally
installed [Steam][steam] on my Mac so that I could (perhaps) try it out.

When considering making another download, though, I began to wonder where Steam applications "live"
on the filesystem. Though I had hoped that they were installed to some system-wide location (which
of course wouldn't be great in a multi-user environment), [an answer on Super User][answer] informed
me that apps are stored within one's own `Library`, under
`~/Library/Application Support/Steam/SteamApps`.

While this it not itself a problem, it does mean that my downloaded Steam applications were being
backed up by CrashPlan. Backups are good, but I personally don't care enough about Steam apps to
include them in my backup data set. Fortunately, CrashPlan makes it easy to exclude certain
directories from backup.

First, find the **Files** area in the CrashPlan application. Typically this specifies your home
directory. Then click the **Change...** button. In the resulting directory tree dialog, navigate
to `~/Library/Application Support/Steam` and uncheck `SteamApps`:
<img class="seamless" src="/imgs/crashplan_exclude_steam_apps.png" />

Click the **Save** button, and that's it! CrashPlan will "synchronize" with your backup
destinations, and you should see the size of your backup decrease.

[portal]: http://www.valvesoftware.com/games/portal.html
[steam]:  http://store.steampowered.com/
[answer]: http://superuser.com/a/144048
