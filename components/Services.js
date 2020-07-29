export default function Services() {
  return (
    <>
      <section className="full-screen-center services">
        <div className="fluid-insulate full-screen-center">
          <article className="fluid-wrap-1200 text-center">
            <h2 className="fluid-5 super-title">Servicios</h2>
            <p className="fluid-2">
              Me encanta la colaboración mutua entre <b>profesional</b> y{" "}
              <b>cliente</b>, prefiero la frase:
            </p>
            <p className="fluid-3">
              <b>
                <i>"Trabajo contigo".</i>
              </b>
            </p>
            <p className="fluid-2">
              En vez de:{" "}
              <b>
                <i>Trabajo para ti</i>
              </b>
              .
            </p>
          </article>
          <article className="fluid-wrap-1200 flex-grid-center">
            <div>
              <h3>Servicios Profesionales</h3>
              <ul>
                <li>
                  Desarrollo de sitios y aplicaciones <i>web</i> (
                  <i>FullStack</i>).
                </li>
                <li>
                  Optimización de motores de búsqueda (<i>SEO</i>).
                </li>
                <li>
                  Optimización del rendimiento <i>web</i> (<i>WPO</i>).
                </li>
                <li>
                  Optimización de redes sociales (<i>SMO</i>).
                </li>
                <li>
                  Prototipado y maquetación <i>web</i>.
                </li>
                <li>
                  <i>Marketing</i> de contenidos.
                </li>
              </ul>
            </div>
            <div>
              <h3>Servicios Educativos</h3>
              <ul>
                <li>Gestión Educativa (presencial y en línea).</li>
                <li>Clases Universitarias y de Posgrados.</li>
                <li>Conferencias, charlas y talleres.</li>
                <li>Cursos intensivos a la medida.</li>
                <li>Cursos en línea a la medida.</li>
                <li>Diseño Instruccional.</li>
              </ul>
            </div>
          </article>
          <article className="fluid-wrap-1200 text-center">
            <h4>Comencemos tu nuevo proyecto, escríbeme a</h4>
            <a
              className="btn-pulse"
              href="mailto:hola@jonmircha.com"
              target="_blank"
              rel="noopener"
            >
              hola@jonmircha.com
            </a>
          </article>
        </div>
      </section>
      <style jsx>{`
        .services {
          background-image: url("/img/posters/servicios.jpg");
          background-repeat: no-repeat;
          background-position: center center;
          background-size: cover;
          background-attachment: fixed;
        }

        .services > div {
          width: inherit;
          min-height: inherit;
          background-color: rgba(0, 0, 0, 0.75);
          color: var(--white);
        }

        .services li {
          font-size: calc(var(--fluid-1) * 0.8);
        }
      `}</style>
    </>
  );
}
