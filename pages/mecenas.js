import Layout from "../components/Layout";
import Sponsors from "../components/Sponsors";
import { mecenas } from "../helpers/data.json";

export default function Mecenas() {
  return (
    <Layout
      title="Mecenas | jonmircha"
      description="MUCHAS GRACIAS a todos los mecenas que han decidido apoyarme para seguir generando contenido, esta página con sus datos es mi muestra de gratitud."
      poster="/img/posters/mecenas.jpg"
      slug="/mecenas"
    >
      <article className="mecenas">
        <aside className="fluid-wrap-1200">
          <h1 className="text-center super-title">El Muro de Mecenas</h1>
          <p className="fluid-2">
            <b>MUCHAS GRACIAS</b> a todos los mecenas que han decidido apoyarme
            para seguir generando contenido, esta página con sus datos es mi
            muestra de gratitud.
          </p>
          {mecenas.length === 0 ? (
            <p className="fluid-insulate-top fluid-insulate-bottom fluid-4 text-center">
              Conviértete en mi primer <b>mecenas</b>.
              <br />
              Tú nombre aparecerá aquí.
            </p>
          ) : (
            <ul className="fluid-insulate-bottom flex-grid-center">
              {mecenas.map((el, index) => (
                <li key={index}>
                  <a
                    className="fluid-2"
                    href={el.link}
                    target="_blank"
                    rel="noopener"
                  >
                    {el.name}
                  </a>
                </li>
              ))}
            </ul>
          )}
          <img src="/img/posters/mecenas.jpg" alt="MUCHAS GRACIAS MECENAS" />
        </aside>
        <aside className="fluid-wrap fluid-insulate">
          <blockquote className="fluid-2">
            <cite>
              La palabra <b>mecenas</b> hace referencia a aquella persona
              interesada en la cultura y el conocimiento que, por contar con los
              recursos necesarios, patrocina a un artista o científico para
              permitirle realizar su tarea y beneficiarse con ella de algún modo
              más o menos directo.
            </cite>
          </blockquote>
        </aside>
        <Sponsors />
      </article>
    </Layout>
  );
}
