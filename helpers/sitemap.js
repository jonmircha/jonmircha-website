const fs = require("fs"),
  path = require("path"),
  site = "https://jonmircha.com/",
  postsDirectory = path.join(process.cwd(), "posts"),
  postsFiles = fs.readdirSync(postsDirectory),
  postsSlugs = postsFiles.map((file) => file.slice(0, -3)),
  postsRoutes = postsSlugs.map(
    (slug) => `
      <url>
        <loc>${site}${slug}/</loc>
        <changefreq>daily</changefreq>
        <priority>0.7</priority>
      </url>
    `
  );

fileContent = `
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:news="http://www.google.com/schemas/sitemap-news/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:mobile="http://www.google.com/schemas/sitemap-mobile/1.0" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
  <url>
    <loc>${site}</loc>
    <changefreq>daily</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc>${site}ahora/</loc>
    <changefreq>daily</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc>${site}cursos/</loc>
    <changefreq>daily</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc>${site}blog/</loc>
    <changefreq>daily</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc>${site}bryan/</loc>
    <changefreq>daily</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc>${site}maratones/</loc>
    <changefreq>daily</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc>${site}mecenas/</loc>
    <changefreq>daily</changefreq>
    <priority>0.7</priority>
  </url>
  ${postsRoutes.join("")}
</urlset>
`;

fs.writeFile("public/sitemap.xml", fileContent, (err) => {
  if (err) throw err;
  console.log("sitemap.xml creado!");
});
