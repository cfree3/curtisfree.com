---
title:  Android fragmentation
layout: post
tags:   [Apple, Android, Bluetooth]
---
It has long been said that Android is "fragmented": Apple exerts tight control over iOS and its
phones/tablets, but Android OEMs are free to (and almost always do) make changes to the operating
system to differentiate themselves within the market and to offer consumers something that
competitors don't (heartrate monitor support, custom payment services, etc.). Ignoring the Apple
side of the fence, this practice makes for good competition (though certain companies dominate in
sales outside of technologist communities). Developers have to work around inconsistencies between
different Android OSes, but how does this state of affairs affect the _consumer_ experience in
day-to-day device usage?

Let me be clear: **fragmentation is not necessarily bad**. But it can make things difficult.

---

My own experiences streaming audio over Bluetooth in the car have been a recent cause of
frustration.

I have a sampling of four different Android devices running Android, with experience across OS
versions:

- Samsung Galaxy S5 (Verizon)
- HTC One (m8) (Verizon)
- Asus Nexus 7 (2013, Wi-Fi)
- Huawei Nexus 6P

And two vehicles with Bluetooth-enabled stereos:

- Toyota Camry (2012)
- Honda HR-V (2016)

The requirements are pretty simple: the device must (a) pair with the stereo and (b) communicate
track metadata do the stereo using the [Google Play Music app][app].

Admittedly, Bluetooth behavior is heavily dependent upon the head unit manufacturer (which happens
to be the vehicle maker in these scenarios). Different units support varying Bluetooth protocol
versions and differing feature sets within those versions. For example, the HR-V is capable of
displaying contact photos when making calls, but the Camry has no such feature. That said, my
requirements for audio "success" seem reasonable across any vehicle which supports audio streaming
from a phone.

So, how did the various devices perform?

#### Samsung Galaxy S5 (Kit Kat, Lollipop, Marshmallow)

Of all the phones I've used, the Galaxy S5's Bluetooth audio experience is the strangest and most
disappointing.

Considering audio alone, Google Play Music worked without issue on the S5: song would play from the
car's speakers based on the in-app selection. Furthermore, audio controls (like changing tracks)
worked as expected. However, the song information displayed on the stereo was seldom, if ever, the
song actually being played.

Interestingly, the song displayed was actually a track indexed by Samsung's own music app. Only a
small number of songs were in the phone's normal storage and therefore in the Samsung app's
playlist, and the display seemed to cycle through those songs as the track was changed in Play
Music.

(This seems to have been fixed in more recent Galaxy devices, as the S7 does not suffer this
problem.)

#### HTC One (m8) (Kit Kat, Lollipop)

I happily used an HTC One (m8) to listen to audio in the Camry for over a year and seldom
experienced any issues. There, things work as I'd expect: music plays over my car's speakers, and
the head unit tells me what's playing.

But things weren't as nice in the HR-V. There, the phone _initially_ seems to pair with the car, and
music and track info are communicated as I'd want. But the phone never believes that the pairing
process completed, and the phone won't reconnect to the car after disconnecting without unpairing
and repairing.

#### Asus Nexus 7 (Lollipop)

Ah, [Nexus][nexus].

In the HR-V, the Nexus 7 works exactly as I believe it should: music is played reliabily, and
correct track information is communicated to and displayed on the head unit. This proved very useful
during a recent vacation.

Unfortunately, I was unable to test the feature on the Camry, as the car's head unit -- for some
inexplicable reason -- reported that it does not support devices of that type (anything other than
phones, perhaps?). This is a failing of the car, however, and should not reflect poorly upon the
Nexus 7.

#### Huawei Nexus 6P (Marshmallow, Nougat)

The Nexus 6P exhibits the best behavior out of all these devices. It works exactly as one might
expect -- playing music and providing track information -- in both the Camry and the HR-V.

I'll also point out that only the Nexus phones -- running Google's vision of Android -- seem to do
the right thing across vehicles... when those vehicles are cooperative.

But all this isn't to say that the Nexus 6P does everything right when it comes to Bluetooth
interactivity. On both Marshmallow and Nougat, the phone occasionally reverts back to producing
audio over its own speakers while remaining paired to the Camry. And when Bluetooth-enabled devices
(including my Fitbit Charge) receive information about an incoming call, ony the phone number
(`+1##########`) is communicated -- with no contact name attached. Contact name display seems to
work on my Pebble 2 SE.

---

**The success rate across these situations is roughly 50%.** _And this isn't clearly anyone's
fault._ But at the same time, the lack of a consistent experience across devices running the same
major version of Android gives a terrible user experience, and it's no wonder that so many Android
users happily move or return to the world of iDevices. Both of our aforementioned vehicles have
features designed specifically to work with iPhone (USB connectivity in the case of the Camry and
Siri access in the case of the HR-V). And though I haven't validated this myself, I imagine that
things _would_ work flawlessly if we were using iPhones: manufacturers know what to expect with
Apple products (something they can build for and test against), and Apple's market share is
significant enough among consumers who purchase such automobiles that it's worth ensuring
compatibility.

---

Fragmentation is a fact of life in the Android ecosystem; plenty of people are happy with their
Android devices and are likely (happily) oblivious to this fact. Many (_very many_) have settled
down into the Samsung ecosystem, so clearly these frustrations are not universal.

Sometimes, I'm firmly planted in the Android camp. But when no two Android devices do simple, common
things (like pairing with a Bluetooth-enabled stereo in a car) the same way, Apple's walled garden
doesn't seem like such a bad place to be.

[nexus]: https://www.google.com/nexus/
[app]:   https://play.google.com/store/apps/details?id=com.google.android.music
