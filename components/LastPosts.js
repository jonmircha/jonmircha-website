import BlogItem from "./BlogItem";

export default function LastPosts({ posts }) {
  return (
    <section className="full-screen-center">
      <article className="fluid-wrap fluid-insulate">
        <h2 className="fluid-5 text-center super-title">Últimas Notas</h2>
        <nav>
          {posts.map((post, index) => (
            <BlogItem key={index} post={post} />
          ))}
        </nav>
      </article>
    </section>
  );
}
