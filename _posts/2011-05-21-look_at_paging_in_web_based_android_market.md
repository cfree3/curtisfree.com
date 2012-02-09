---
title:  A look at paging in the Web-based Android Market
date:   2011-05-21 17:39:00
path:   /blog/2011/05/21/look_at_paging_in_web_based_android_market
layout: post
tags:   [Android, design, UI]
---

If you have an Android phone and haven't visited the Web-based [Android Market](https://market.android.com/),
you should check it out. Just this morning, I was glancing over pages of the
[top free apps](https://market.android.com/details?id=apps_topselling_free) and noticed
something about the pager (shown below the app results).

The formula is simple. If on a page `x, x <= 5`, the paging menu allows selection of the first `x * 2` pages:
![](/imgs/am_pg_1.png)
![](/imgs/am_pg_2.png)
![](/imgs/am_pg_3.png)
![](/imgs/am_pg_4.png)
![](/imgs/am_pg_5.png)

If on a page `5 <= x < 10`, the user is always presented with a selection of the first 10 pages:
![](/imgs/am_pg_9.png)

Then, for any page `x >= 10`, the user is presented with a list of pages from `x -5` through
`x + 5` (inclusive -- total of 11 pages):
![](/imgs/am_pg_10.png)
![](/imgs/am_pg_12.png)

This is a departure from the usual: most sites with such paging menus offer the user a constant
number of pages for selection (surrounding the current page).

But what motivated Google's design? There are multiple possibilities:

* *User experience.*
  Simple: Why show the user so many pages in the menu? The further a user delves into the pages, the
  further he/she will likely go, so show more pages as the user goes further into the results.

* *Querying.*
  Perhaps the query used on the backend examines only enough data to know that there are a certain
  number of pages. Most users only visit the earliest pages, so why even consider the later results
  to determine how many pages there are?

Interesting design, Google.

#### Update: _Update (03 Jul 2011):_

It appears that the Market is no longer using the page selector described in this post. Instead,
the selector now offers the first 10 pages while on page `x < 10`, and pages `x - 5` through `x + 5`
(inclusive; 11 total) thereafter until there are too few pages left to do so, at which point the
last 11 pages are shown.

