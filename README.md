# ARC's Public Website

The public-facing part of our website and what you first see at
<https://aerialroboticsclub.com/>!

This is primarily a marketing/publicity website, where we show off our systems,
our sponsors, and our team. However, it should also navigate authenticated
users to our issue tracker and git web server.

## Why [Docker](https://www.docker.com/)?

We (will) deploy our webserver in a docker container, so it is easiest for this
project to provide it's own docker container containing a pre-built version of
the website.

Docker also allows for cross-platform development and deployment of the
website, making developing a little easier.

Since the website is literally just static HTML, CSS, and JS right now, none of
these considerations are particularly important (except for this project
providing a "builder" image for the containers downstream). However, having a
docker image for this project allows us to freely modify the process for
building the static website.
