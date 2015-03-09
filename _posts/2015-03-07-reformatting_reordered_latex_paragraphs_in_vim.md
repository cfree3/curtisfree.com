---
title:  Reformatting reordered LaTeX paragraphs in Vim
layout: post
tags:   [LaTeX, Vim]
---
While revising a non-technical paper in LaTeX recently, I found it useful to reorder the sentences
in some paragraphs to improve the flow and meaning of the text. In doing this, I often manually
deconstructed the text into separate sentences in the source to make reordering easy.

As an extreme example, I would go from [this][lipsum]:

~~~ latex
Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pulvinar
neque nec odio auctor ultricies. Ut maximus libero nibh, eget tempus
nulla convallis nec. Ut auctor, augue eget ornare tincidunt, leo risus
porta eros, id auctor metus mauris sit amet turpis. Nullam malesuada
pharetra nunc, sed faucibus velit rhoncus ut. Aliquam sagittis gravida
elit ut convallis. Sed auctor, ipsum in malesuada tempus, urna nunc
hendrerit quam, sit amet tincidunt purus turpis ut ipsum. Nam vel augue
blandit, hendrerit mi sed, tempus arcu.  Suspendisse metus magna,
placerat ut vulputate sed, vehicula eget nisl. Nulla gravida, erat non
pretium efficitur, ligula sem consequat sem, vitae mattis tellus lectus
in diam. Aenean in luctus velit. Cras lacinia lorem eget euismod
faucibus.
~~~

To this (sentences in question starting on newlines):

~~~ latex
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
In pulvinar
neque nec odio auctor ultricies.
Ut maximus libero nibh, eget tempus
nulla convallis nec.
Ut auctor, augue eget ornare tincidunt, leo risus
porta eros, id auctor metus mauris sit amet turpis. Nullam malesuada
pharetra nunc, sed faucibus velit rhoncus ut.
Aliquam sagittis gravida
elit ut convallis. Sed auctor, ipsum in malesuada tempus, urna nunc
hendrerit quam, sit amet tincidunt purus turpis ut ipsum. Nam vel augue
blandit, hendrerit mi sed, tempus arcu.  Suspendisse metus magna,
placerat ut vulputate sed, vehicula eget nisl. Nulla gravida, erat non
pretium efficitur, ligula sem consequat sem, vitae mattis tellus lectus
in diam. Aenean in luctus velit. Cras lacinia lorem eget euismod
faucibus.
~~~

Then to this (some sentences reordered):

~~~ latex
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Ut auctor, augue eget ornare tincidunt, leo risus
porta eros, id auctor metus mauris sit amet turpis. Nullam malesuada
pharetra nunc, sed faucibus velit rhoncus ut.
Ut maximus libero nibh, eget tempus
nulla convallis nec.
In pulvinar
neque nec odio auctor ultricies.
Aliquam sagittis gravida
elit ut convallis. Sed auctor, ipsum in malesuada tempus, urna nunc
hendrerit quam, sit amet tincidunt purus turpis ut ipsum. Nam vel augue
blandit, hendrerit mi sed, tempus arcu.  Suspendisse metus magna,
placerat ut vulputate sed, vehicula eget nisl. Nulla gravida, erat non
pretium efficitur, ligula sem consequat sem, vitae mattis tellus lectus
in diam. Aenean in luctus velit. Cras lacinia lorem eget euismod
faucibus.
~~~

With the sentences reordered, I needed to reformat the source to restore the clean style seen in the
first example. Those familar with Vim likely think of `gq`, which reformats the selected source. To
help further, `vip` will visually select the paragraph! So, what about `vipgq`?

~~~
Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Ut auctor,
augue eget ornare tincidunt, leo risus porta eros, id auctor metus
mauris sit amet turpis. Nullam malesuada pharetra nunc, sed faucibus
velit rhoncus ut.  Ut maximus libero nibh, eget tempus nulla convallis
nec.  In pulvinar neque nec odio auctor ultricies.  Aliquam sagittis
gravida elit ut convallis. Sed auctor, ipsum in malesuada tempus, urna
nunc hendrerit quam, sit amet tincidunt purus turpis ut ipsum. Nam vel
augue blandit, hendrerit mi sed, tempus arcu.  Suspendisse metus magna,
placerat ut vulputate sed, vehicula eget nisl. Nulla gravida, erat non
pretium efficitur, ligula sem consequat sem, vitae mattis tellus lectus
in diam. Aenean in luctus velit. Cras lacinia lorem eget euismod
faucibus.
~~~

While that looks nice at quick glance, further inspection reveals that there are two spaces between
certain sentences. Some additional Vim commands can clean that up, but it's even easier if one
introduces a command to accomplish the task. I added the following to my Vim configuration:

~~~ vim
map <C-e> vipgqgv:s/ \{2,\}/ /g<CR>:noh<CR>
~~~

Now, `<C-e>` will do several things:

1. Select the paragraph under the cursor (`vip`)
2. Reformat the paragraph source as illustrated above (`gq`)
3. Reselect the paragraph (`gv`, which re-selects the previous visual selection)
4. Replace multiple spaces with a single space (`:s/ \{2,\}/ /g<CR>`)
5. Clear the search pattern (`:noh<CR>`)

(That last item is important because I don't want Vim to highlight _all_ occurrences of multiple
spaces should I have space indents and the like elsewhere in my source.)

Using `<C-e>` on the reconstructed paragraph yields the following:

~~~ latex
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut auctor,
augue eget ornare tincidunt, leo risus porta eros, id auctor metus
mauris sit amet turpis. Nullam malesuada pharetra nunc, sed faucibus
velit rhoncus ut. Ut maximus libero nibh, eget tempus nulla convallis
nec. In pulvinar neque nec odio auctor ultricies. Aliquam sagittis
gravida elit ut convallis. Sed auctor, ipsum in malesuada tempus, urna
nunc hendrerit quam, sit amet tincidunt purus turpis ut ipsum. Nam vel
augue blandit, hendrerit mi sed, tempus arcu. Suspendisse metus magna,
placerat ut vulputate sed, vehicula eget nisl. Nulla gravida, erat non
pretium efficitur, ligula sem consequat sem, vitae mattis tellus lectus
in diam. Aenean in luctus velit. Cras lacinia lorem eget euismod
faucibus.
~~~

[lipsum]: http://www.lipsum.com/
