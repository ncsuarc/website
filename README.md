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

## Website Deployment

Run `./deploy.sh -r` from the server machine (at time of writing, Twoninn).

## Updating the Website

First run `./updateGHCR.sh` in the main directory of the website from the machine you edited the code from. You will need to have a PAT token for github first.

### Generating a Github PAT Token

1. Navigate to GitHub Settings
    - Go to GitHub and log in.
    - Click on your profile picture in the top-right corner.
    - Select Settings.
2. Open Developer Settings
    - Scroll down and click Developer Settings (bottom-left sidebar).
    - Click Personal access tokens → Tokens (classic).
    - Make sure classic token is selected in the drop down in the middle of the page.
3. Generate a New Token
    - Click Generate new token.
    - Enter a Note to describe the token's purpose.
    - Set an Expiration date (use 90 days please)
4. Select Permissions
    - Repo: All
    - Workflow
    - write:packages
5. Generate and Copy the Token
    - Click Generate token.
    - Copy that token into the `.env` file in the correct variable.
    - Enter your username into the respective environment variable.
    - MAKE SURE THAT THE `.env` IS IN THE `.gitignore`
