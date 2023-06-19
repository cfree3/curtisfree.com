---
title:  Converting a GNOME Terminal colorscheme to X resources
layout: post
---
When I began using Linux regularly (nearly five years ago), I used both Ubuntu and Red Hat
Enterprise Linux (RHEL) -- both with the GNOME desktop environment.

Eventually, after moving to Arch, I developed a taste for lighter-weight applications, including my
terminal (I prefer [`rxvt-unicode`][urxvt]).

The default terminal in GNOME is, as you might have guessed, [GNOME Terminal][gnome_terminal].
[Issues with VTE][vte_issues] aside, GNOME Terminal is great; and I still use it often on some
machines. When I used Ubuntu, the default color scheme in GNOME Terminal was the "Linux console"
theme (which, I imagine, is designed to mimic the default colors of a [VT][vt] in Linux).

When I began using a terminal configured via X resources
(think [`.Xdefaults`][xdefaults]), I sought to replicate this color scheme -- which I still use on
my personal machine to this day. Fortunately, once you understand the basic relationship between
GNOME Terminal's color preferences layout and the X resources color values, it's easy to map any
scheme.

##### Colors in X resources

I won't delve into the details of how X resources colors work in this post. For the purposes of a
basic tutorial, all you really need to know is that there are 16 "core" colors in X resources,
called `color0`, `color1`, etc., though `color15`.

To set these colors for use by all applications that understand X resources, you simply need to add
lines like the following to `~/.Xdefaults`:

    *color0:  #000000
    *color8:  #555555
    ! ... (this is a comment)
    *color7:  #AAAAAA
    *color15: #FFFFFF

(You'll notice that those aren't all in order. The reason isn't really important here; if you're
curious, search around for more information on colors in X resources/`.Xdefaults`.)

After your colors are set, you can load them by issuing the following command:

    % xrdb -merge ~/.Xdefaults

The modified settings will then take effect when the affected application is restarted.

Chances are, your system is already configured to merge in your `.Xdefaults` on login, so you only
really need to worry about that command when you want to see your changes during the current session
(which, I imagine, is most of the time); but note that some applications will understand changes the
next time they're launched _without_ the need to `-merge` yourself.

##### Get your colors from GNOME Terminal

The key to using colors from GNOME Terminal with X resources is to understand which colors in the
preferences pane map to which color values.

To get to the color options in GNOME Terminal, open the "Edit" menu and then select "Profiles...";
select the profile whose colors you wish to copy, and then click the "Edit" button.

Now, go to the "Colors" tab. At the bottom, you'll see boxes that allow you to change each of the 16
colors available in GNOME Terminal:
![](/blog/assets/gnome_terminal_colors.png)

The mapping is simple:

        color0    color1    color2    color3    color4    color5    color6    color7
        color8    color9    color10   color11   color12   color13   color14   color15

If you click a color in the grid, you'll get the following window:
![](/blog/assets/gnome_terminal_color_selection.png){: .seamless }
(Note that the window title gives the color number -- the same as that in the above mapping table.)

The value you need for your own `.Xdefaults` is the one in the "Color name" box.

##### Putting it all together

As you go through each of the colors in the GNOME Terminal preferences, you can add to and build
your color settings in your own `~/.Xdefaults`.

As I mentioned earlier, I use the GNOME Terminal "Linux console" colors on my personal (Arch)
machine. Here are the colors, taken from my own [`.Xdefaults`](/config/.Xdefaults):

    ! colors
    !! Taken from GNOME Terminal "Linux console" theme.
    *color0:  #000000
    *color8:  #555555
    *color1:  #AA0000
    *color9:  #FF5555
    *color2:  #00AA00
    *color10: #55FF55
    *color3:  #AA5500
    *color11: #FFFF55
    *color4:  #0000AA
    *color12: #5555FF
    *color5:  #AA00AA
    *color13: #FF55FF
    *color6:  #00AAAA
    *color14: #55FFFF
    *color7:  #AAAAAA
    *color15: #FFFFFF

I also prefer a white background, with black "normal" text. These two "special" colors are set
as follows:

    ! bg/fg
    *background: white
    *foreground: black

(Note that some colors can, in fact, be set by name rather than hex `#RRGGBB` values.)

[urxvt]:          http://software.schmorp.de/pkg/rxvt-unicode.html
[gnome_terminal]: http://library.gnome.org/users/gnome-terminal/stable/
[vte_issues]:     http://climagic.org/bugreports/libvte-scrollback-written-to-disk.html
[vt]:             https://en.wikipedia.org/wiki/Virtual_terminal
[xdefaults]:      /config/.Xdefaults
