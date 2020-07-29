import Layout from "../components/Layout";

export default function Error({ statusCode }) {
  return (
    <Layout
      title="404 Not Found | jonmircha"
      description="Error 404: No Encontrado. Lamentablemente, esta página no existe."
      poster="/img/posters/404.png"
      slug="/404"
    >
      <article className="fluid-wrap fluid-insulate-bottom text-center">
        <p className="fluid-3">Lamentablemente, esta página no existe.</p>
        <img src="/img/404.png" alt="Error 404" loading="lazy" />
        <p>¯\_(ツ)_/¯</p>
      </article>
    </Layout>
  );
}

Error.getInitialProps = ({ res, err }) => {
  const statusCode = res ? res.statusCode : err ? err.statusCode : 404;
  return { statusCode };
};
