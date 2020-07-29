import SEO from "./Seo";
import Header from "./Header";

export default function Layout({ title, description, poster, slug, children }) {
  return (
    <>
      <SEO
        title={title}
        description={description}
        poster={poster}
        slug={slug}
      />
      <Header />
      <main>{children}</main>
    </>
  );
}
