import Layout from "../components/Layout";
import BlogItem from "../components/BlogItem";
import Sponsors from "../components/Sponsors";
import { getAllPostsByDate } from "../helpers/getPosts";

export default function Blog({ posts }) {
  return (
    <Layout
      title="Notas | jonmircha"
      description="Siempre tomo nota de todo lo que me pueda servir o me haga crecer como persona o profesional, aquí te lo comparto."
      poster="/img/posters/blog.jpg"
      slug="/blog"
    >
      <section className="fluid-wrap">
        <h1 className="super-title">Mis Notas</h1>
        <p className="fluid-2">
          Siempre hago anotaciones de todo lo que me sirve o me hace crecer como
          persona o profesional, aquí te las comparto como artículos de
          <i>Blog</i>.
        </p>
      </section>
      <section className="fluid-wrap fluid-insulate-bottom">
        {posts.map((post, index) => (
          <BlogItem key={index} post={post} />
        ))}
      </section>
      <Sponsors />
    </Layout>
  );
}

export async function getStaticProps() {
  return {
    props: { posts: getAllPostsByDate() },
  };
}
