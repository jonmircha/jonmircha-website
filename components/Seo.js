import Head from "next/head";
import { metatags } from "../helpers/data.json";

let { name, color, site, icon, title, description, poster, slug } = metatags;

export default function SEO({ title, description, poster, slug }) {
  return (
    <Head>
      {/* <!-- Meta Tags HTML --> */}
      <title>{title}</title>
      <meta name="description" content={description} />
      <meta charSet="utf-8" />
      {/* <!-- Meta Tags Responsive --> */}
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="theme-color" content={color} />
      <meta name="MobileOptimized" content="width" />
      <meta name="HandheldFriendly" content="true" />
      {/* Meta Tags Twitter */}
      <meta name="twitter:site" content={`@${name}`} />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:title" content={title} />
      <meta name="twitter:description" content={description} />
      <meta name="twitter:image" content={`${site}${poster}`} />
      {/* Meta Tags Facebook */}
      <meta property="og:site_name" content={name} />
      <meta property="og:url" content={`${site}${slug}`} />
      <meta property="og:type" content="website" />
      <meta property="og:title" content={title} />
      <meta property="og:description" content={description} />
      <meta property="og:image" content={`${site}${poster}`} />
      {/* Meta Tags Google */}
      <meta itemProp="name" content={title} />
      <meta itemProp="description" content={description} />
      <meta itemProp="image" content={`${site}${poster}`} />
      {/* Meta Tags iOS */}
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta
        name="apple-mobile-web-app-status-bar-style"
        content="black-translucent"
      />
      <meta name="format-detection" content="telephone=no" />
      <meta name="apple-mobile-web-app-title" content={name} />
      {/* Meta Tags Windows */}
      <meta name="msapplication-TileColor" content={color} />
      <meta name="msapplication-TileImage" content={icon} />
      {/* Meta Tags Icons */}
      <link rel="apple-touch-icon" href={icon} />
      <link rel="apple-touch-startup-image" href={icon} />
      <link rel="shortcut icon" type="image/png" href={icon} />
      {/* Meta Tags Links */}
      <link rel="author" type="text/plain" href={`${site}/humans.txt`} />
      <link
        rel="sitemap"
        type="application/xml"
        title="Sitemap"
        href={`${site}/sitemap.xml`}
      />
      <link rel="manifest" href={`/manifest.json`} />
      <link rel="canonical" href={`${site}${slug}`} />
    </Head>
  );
}

SEO.defaultProps = {
  title,
  description,
  poster,
  slug,
};
