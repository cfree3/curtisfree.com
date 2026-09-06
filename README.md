# [`curtisfree.com`][site]

## 🚀 Quickstart

```sh
brew install podman podman-compose go-task markdownlint-cli2
task setup
task serve
# iterate & use `task lint`
<C-c>
task teardown
```

## 🛠️ Building with [Jekyll][jekyll]

> [!NOTE]
> There are multiple ways one can build a website with Jekyll, but this document covers a
> containerized approach suitable for development on macOS.

### Requirements

- [Podman][podman]
- [Podman Compose][podman-compose]
- [Task][task]

These can be installed using the [Homebrew][brew] package manager:

```sh
brew install podman podman-compose go-task
```

### Getting Started

Get things ready by starting a virtual machine for running containers:

```sh
task setup
```

### Generate, Serve, & Test

To launch a container and begin serving content, simply run:

```sh
task serve
```

Generated static content will be in `_site/` and hosted at `http://localhost:4000`.

Presssing `<C-c>` will stop the service and tear down container resources (but not the virtual
machine).

### Wrapping Up

To remove the underlying virtual machine:

```sh
task teardown
```

## 🧹 Linting

Markdown is linted using [markdownlint-cli2][markdownlint], which can also be installed using
Homebrew:

```sh
brew install markdownlint-cli2
```

The `lint` task will then analyze all Markdown files (`.md`):

```sh
task lint
```

## 📄 License

Text content licensed under a <a rel="license"
href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0
International License</a>.

[site]:           https://curtisfree.com
[jekyll]:         https://jekyllrb.com
[brew]:           https://brew.sh
[podman]:         https://podman.io
[podman-compose]: https://github.com/containers/podman-compose
[task]:           https://taskfile.dev
[markdownlint]:   https://github.com/DavidAnson/markdownlint-cli2
