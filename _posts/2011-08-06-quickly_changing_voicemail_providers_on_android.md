---
title:  Quickly changing voicemail providers on Android
layout: post
---
![](/imgs/vmswitch.png){: .left }

I have a Motorola Droid. Rather than using Verizon's own voicemail service, I choose to manage
my voicemail via [Google Voice][google_voice].

One day, I left a voicemail in someone else's Verizon mailbox. After listening to my message,
my friend chose to use Verizon's "reply" feature (basically, the user replies by directly leaving
a voicemail in the caller's own Verizon mailbox). Until this point, I had not even set up my Verizon
voicemail, and so I never received the message.

I have since set up my Verizon mailbox; however, I continue to use Google's services over Verizon's
own. The problem: *what do I do if someone sends me a voicemail reply in the future?* To reconcile
my desire to use one voicemail provider and my need to have access to another, I need a quick way
to switch between mailboxes.

My solution: add direct-dial shortcuts to make the voicemail switch.

First, I added two new contacts: _VM VZW_ (Verizon voicemail) and _VZW GV_ (Google Voice). Within
each contact, I have a single number (of type _VSC_, for [Vertical Service Code][vsc]). These
numbers are provided by Google when one chooses to use or stop using the Google voicemail service:
for _VM VZW_: `*71<google_voice_number>`; for _VM GV_: `*73`.

Finally, I added "direct dial" shortcuts for each number to one of my phone's home screens (like
those in the image above). Now, with one these shortcuts, I can easily switch from one service
to the other. I can then check my voicemail (`*78` on Verizon), and I will be sent whichever
service I am using.

With only slight modifications, this solution can be adapted to suit your own needs (or your own
wireless carrier).

[google_voice]: https://voice.google.com/
[vsc]:          https://en.wikipedia.org/wiki/Vertical_service_code
