---
title:  Controlling a headless CrashPlan instance from Mac OS X
layout: post
tags:   [CrashPlan, Mac]
---
I use [CrashPlan][crashplan] as a computer backup solution. Rather than backing up to the cloud, I
use a [Raspberry Pi][pi] [as a home CrashPlan server][server].

Fortunately, though technically unsupported, it's very easy to administer a headless CrashPlan
instance (like that on a Pi): CrashPlan covers this [in their support documents][headless].

Steps 4-5 of "Configuring a Headless Client" require that the user temporarily modify the contents
of `CrashPlan/conf/ui.properties`. While it is not difficult to locate that file on a Linux-like
system (just look at the installation directory or list of files provided by the appropriate
package), its location on OS X is not as obvious.

But all `.app` Mac applications are really just special directories. Assuming that CrashPlan has
been installed to the system-wide `Applications` folder, this configuration file is located at
`/Applications/CrashPlan.app/Contents/Resources/Java/conf/ui.properties`.

Given that pointer, [CrashPlan's own instructions][headless] should do the trick.

[crashplan]: http://www.crashplan.com
[pi]:        http://www.raspberrypi.org
[server]:    http://www.jonrogers.co.uk/2012/05/crashplan-on-the-raspberry-pi/
[headless]:  http://support.crashplan.com/doku.php/how_to/configure_a_headless_client
