# website

The website for ARC's main website.

This website is statically built using the [Hugo] framework. To develop the
website, download Hugo using your normal package manager (or docker) and run
the following and open http://localhost:1313/ in your browser.

```sh
hugo server
```

Alternatively, a Dockerfile is provided so the following could be used instead.

```sh
docker build -t website . && docker run --name website --network=host website
```

[Hugo]: https://gohugo.io/

## Project Layout

This project is laid out using the standard Hugo project format.

```nohighlight
website
|-- config.yaml - Site-wide configuration and menus.
|-- content - Main text and content on the web page.
|-- layouts - How the text should be position. Home page is in here too.
\-- static - JavaScript, CSS, images, and other miscellaneous content.
```

We list our sponsors and officers as entries/posts within their page as a
section to reduce repetition. Since we don't want sponsors or officers to have
their own page, we use a partial for our 404 page and make the single page for
sponsors or officers look like the 404 page.
