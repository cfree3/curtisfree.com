---
title:  Jekyll via containers
layout: post
---
This website is hosted on Github Pages and "powered" by Jekyll: a Ruby-based static website
generation engine. Jekyll is a popular tool, and I like it! But installing and managing Ruby and all
the necessary gems on my Mac is not what I would call a _great_ experience.

##### What hurts?

A quick Google reveals common advice to avoid using the macOS built-in Ruby installation. While
there may be multiple reasons, the clearest issue when using Jekyll is that Ruby's `gem` package
manager tries to install to a system-wide/shared location. With that comes potential permissions
issues, but I also feel like installing this, that, and the other gem to a system-wide location is
_messy_.

But hey, I use Homebrew! So I can easily install a new version of Ruby into the Homebrew prefix
(`/opt/homebrew` on my Apple silicon), and then let that version of Ruby handle gems. You can also
use Bundler to tidy things up a bit, especially if you need to pull in the Github Pages gem.

This only works, though, if I manage my `PATH` in ways that aren't as straightforward as I like.
And... isn't there just a better, cleaner way to do all of this?

##### Enter... containers!

Fortunately, there are "official" upstream containers for compiling and testing Jekyll websites!

But beware: I have found that the `pages` version of this container, which should support Github
Pages emulation out of the box, runs into gem dependency issues. (You can build upon that container
and work through the issues, but I deem it not worth the time.)

I have found the `latest` tag to work great for my needs. It's an old image; and if that bothers
you, you can use a `Containerfile` to build atop that and use `apk` to update packages and make any
other changes you want. But functionally, it works as-is without issue.

I still get the benefit of Github Pages, too, because I am still using Bundler for the Github Pages
gem _within_ the Jekyll container!

##### How?

For me, the answer is [Podman][podman]. You may be more familiar with Docker, and it's fine to use
whichever container platform you prefer or are most comfortable with. But I'll stick with Podman,
which works excellently for these purposes.

[podman]: https://podman.io/

If you use Homebrew to install software on your Mac, it's easy to install Podman:

```sh
brew install podman
```

Once the installation is complete, you will need to ask Podman to create an underlying virtual
machine. Since Podman (like Docker) needs a Linux base to support containerization, all the
containers you run on your Mac will _actually_ run on a Linux virtual machine.

Podman makes this trivial:

```sh
podman machine init --now
```

(The `--now` flag tells Podman to start the virtual machine immediately.)

You can tweak the configuration of this virtual machine, create multiple, etc.; but the defaults are
just fine for working with Jekyll.

From this point, enter the topmost directory of your Jekyll site (in many cases, the root of a Git
repository). This is where you have `_config.yaml`. The following [incantation][incantation] will
start a Jekyll container hosting your site on `http://localhost:4000`:

[incantation]: https://github.com/envygeeks/jekyll-docker/blob/master/README.md

```sh
podman run --rm -it \
  -v "${PWD}":/srv/jekyll \
  -p 4000:4000 \
  docker.io/jekyll/jekyll:latest \
  jekyll serve --host 0.0.0.0 --drafts --watch --force_polling
```

**That's a mouthful, isn't it?** Two specific notes on this command:

- You need to use an absolute path to your site contents (here, `${PWD}`) instead of `.` or a
  relative path. This is due to how volume mount locations are resolved through the underlying
  virtual machine.
- I like using `--watch`, but the default technique Jekyll uses to accomplish that does not work
  while running it inside a container. [That's where `--force_polling` comes in.][polling]

[polling]: https://github.com/envygeeks/jekyll-docker/issues/281

When you are done, just press `<C-c>` to stop the process. `--rm` means that the container will be
removed (though the `jekyll/jekyll:pages` image is still cached locally).

Can we make this cleaner? Yes! Enter `compose`. First, let's turn back to Homebrew:

```sh
brew install podman-compose
```

This introduces a new command: `podman compose`. It's designed to mimic the "original" tool of this
sort, [Docker Compose][compose].

[compose]: https://docs.docker.com/compose/

Now you can create a simple file at the root of your site/repository called `compose.yaml`:

```yaml
services:
  jekyll:
    image: docker.io/jekyll/jekyll:pages
    ports:
      - "4000:4000"
    volumes:
      - "${PWD}:/srv/jekyll"
    command: jekyll serve --host 0.0.0.0 --drafts --watch --force_polling
```

Go ahead and update your `_config.yaml` so that the compose file will not be included in your site:

```yaml
...
exclude: [ compose.yaml ]
...
```

Now, you can simply run:

```sh
podman compose up
```

When you're done, `C-c` will stop (but not remove) the container. It can be restarted with `start`,
but you won't get the output of Jekyll printed to your terminal. So instead, you can run:

```sh
podman compose start && podman compose logs -f
```

And when you are _really_ done, running `podman compose down` will remove the containers entirely.

##### And then?

That's it! Things are good to go. Containers are great, and I'm glad that there are official Jekyll
containers available in the Docker container registry.

If the above steps don't do _quite_ what you want, the possibilities are endless. You can build out
your own solution!

##### _Update (7 Aug 2026)_

I have corrected a couple of errors and updated the above to reflect my [current working test
setup][update_commit].

[update_commit]: https://github.com/cfree3/curtisfree.com/commit/40e86c7854cd71c78a1d0a040be7602b0918f31c
