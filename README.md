# [`curtisfree.com`][site]

## Building with Jekyll (via Podman!)

### Setup

On macOS, use [Homebrew][brew] to install [Podman][podman]:

```sh
brew install podman podman-compose
```

Then, get things ready by starting a virtual machine for running containers:

```sh
podman machine init --now
```

### Generate, Serve, & Test

To build a container and begin serving content, simply run:

```sh
podman compose up
```

Generated static content will be in `_site/` and hosted at `http://localhost:4000`.

Presssing `<C-c>` will stop the service. It can be re-started (and logs watched) using:

```sh
podman compose start && podman compose logs -f
```

### Teardown

To remove containers and images specifically tied to the site:

```sh
podman compose down
```

## License

Text content licensed under a <a rel="license"
href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0
International License</a>.

[site]:   https://curtisfree.com
[podman]: https://podman.io
[brew]:   https://brew.sh
