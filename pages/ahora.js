import Layout from "../components/Layout";
import Services from "../components/Services";
import LastProjects from "../components/LastProjects";
import YouTubeSponsor from "../components/YouTubeSponsor";
import { humanDate } from "../helpers/formatDate";
import { now, nowDate, projects } from "../helpers/data.json";

export default function Ahora() {
  return (
    <Layout
      title="Ahora | jonmircha"
      description="¿Qué estoy haciendo ahora mismo?"
      poster="/img/posters/ahora.jpg"
      slug="/ahora"
    >
      <article className="fluid-wrap">
        <h1 className="text-center super-title full-width">
          ¿Qué estoy haciendo ahora mismo?
        </h1>
        <aside className="fluid-insulate">
          <img
            src="/img/posters/ahora.jpg"
            alt="¿Qué estoy haciendo ahora mismo?"
          />
          <p className="fluid-2">
            Como estoico, aprecio mucho mi calidad de vida. Respeto mi tiempo y
            el de los demás.
          </p>
          <p className="fluid-2">
            Profesionalmente no me comprometo a trabajar en más proyectos de los
            que pueda contar con mi mano 🖐🏻.
          </p>
          <p className="fluid-2">
            <i>
              Esto me permite mantenerme enfocado e invertir de la manera más
              inteligente posible mi tiempo y energía para dar la mayor
              contribución posible...
            </i>
          </p>
          <p className="fluid-2 text-right">
            <b>
              <i>... menos pero mejor.</i>
            </b>
          </p>
        </aside>
        <aside className="fluid-insulate">
          <h3>Actualmente enfocado en:</h3>
          <ol className="dark-box">
            {now.map((el, index) => (
              <li
                className="fluid-2"
                key={index}
                dangerouslySetInnerHTML={{ __html: el }}
              />
            ))}
            <a
              className="btn-pulse btn-float-right"
              href="mailto:hola@jonmircha.com"
              target="_blank"
              rel="noopener"
            >
              <small>hola@jonmircha.com</small>
            </a>
          </ol>
          <br />
          <p className="text-right">
            <small>
              <b>
                <i>Última actualización: {humanDate(nowDate)}.</i>
              </b>
            </small>
          </p>
        </aside>
      </article>
      <Services />
      <LastProjects projects={projects} />
      <YouTubeSponsor />
    </Layout>
  );
}
