import Layout from "../components/Layout";

export default function Bryan() {
  return (
    <Layout
      title="Bryan 👼🏻"
      description="👼🏻 FUISTE, ERES y SIEMPRE SERÁS... LO MEJOR DE MÍ, 20/08/2003 - 17/01/2008"
      poster="/img/posters/Bryan.jpg"
      slug="/bryan"
    >
      <article className="fluid-wrap-1200 fluid-insulate-bottom text-center">
        <h1 className="super-title">
          FUISTE, ERES y SIEMPRE SERÁS... LO MEJOR DE MÍ
        </h1>
        <h4>20/08/2003 - 17/01/2008</h4>
        <br />
        <img src="/img/posters/Bryan.jpg" alt="Bryan" loading="lazy" />
      </article>
    </Layout>
  );
}
