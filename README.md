# CJ Nowacek Portfolio

Portfolio website for cjnowacek.com, showcasing Technical Art and Pipeline/DevOps work: project pages, downloadable resumes, an embedded demo reel, a dev log, and a contact form.

## Tech Stack

- **Framework:** [Astro](https://astro.build) (fully static output, MDX content collections)
- **Styling:** Plain modular CSS in `static/css/`, vanilla JavaScript
- **Hosting:** SiteGround (Apache); deployed by GitHub Actions on push to `main`
- **Server-side PHP (the only two pieces left):** the contact form handler and the `/play/` room directory

## Development

```bash
npm install
npm run dev        # http://localhost:4321
npm run build      # static site into dist/
npm run preview    # serve the built dist/
```

## Content Model

Each project is one `.mdx` file in `src/content/projects/`: frontmatter holds the card metadata (title, category, image, highlights, tags, ...), the body is the detail page. Detail routes derive from the file path (`smite/gravity-switch.mdx` → `/techart/smite/gravity-switch`). Listing pages (`index`, `/techart`, `/devops`) render explicit ordered id lists, so a project can exist unlisted.

Site-wide strings (nav, SEO, social links) live in `src/config.js`.

## Deploy

Pushing to `main` runs `.github/workflows/deploy.yml`: build, then rsync `dist/` to SiteGround. The deploy never touches `/play/` (deployed separately via `deploy-play.sh`), the live contact-form log, or `static/img/` contents. `deploy.sh` is the manual equivalent.

## Images

Images are not in git. They live in Dropbox (`C:\Dropbox\1-career\web-assets\~sync\`) and are synced into `static/img/` with the script in that Dropbox folder, then hand-rsynced to the server:

```bash
/c/Dropbox/1-career/web-assets/sync-with-static-img.sh [path-to-repo]
rsync -avzP --exclude='*.kra' --exclude='*~' static/img/ siteground:www/cjnowacek.com/public_html/static/img/
```

Astro serves them through the `public/static -> ../static` symlink. The two resume PDFs in `static/files/` are built and committed automatically by the `Resume-with-Tex` repo's CI.

## URL Structure

- `/` home, `/techart`, `/devops`, `/devlog`, `/about`, `/contact`
- Project details: `/techart/{project}`, `/devops/{project}`
- Old PHP-era URLs 301-redirect via `public/.htaccess`
- `/play/` Traitors & Titans room directory (standalone PHP)

See `CLAUDE.md` for the full architecture and workflow reference.
