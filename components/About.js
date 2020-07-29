export default function About() {
  return (
    <section className="full-screen-center">
      <article className="fluid-wrap fluid-insulate">
        <p className="fluid-2">
          Soy profesor y programador web ubicado en Ciudad de México.
        </p>
        <p className="fluid-2">
          <b>Como profesor</b> tengo amplia experiencia en universidades,
          posgrados, sector privado y educación en línea.
        </p>
        <p className="fluid-2">
          <b>Como programador web</b> he trabajado para empresas como <i>MVS</i>
          , <i>Voit</i>,<i>Condé Nast</i>, <i>Aeroméxico</i>, <i>SIEMENS</i>,
          etc.
        </p>
        <p className="fluid-2">
          Para más información profesional descarga mi{" "}
          <a
            href="https://jonmircha.com/jonmircha-cv.pdf"
            target="_blank"
            rel="noopener"
          >
            CV
          </a>
          .
        </p>
        <p className="fluid-2">
          Tengo un{" "}
          <a
            href="https://youtube.com/jonmircha?sub_confirmation=1"
            target="_blank"
            rel="noopener"
          >
            canal en <i>YouTube</i>
          </a>{" "}
          donde enseño sobre el maravilloso mundo de la <i>web</i>.
        </p>
        <p className="fluid-2">
          <a
            className="box-shadow-none"
            href="https://youtube.com/jonmircha?sub_confirmation=1"
            target="_blank"
            rel="noopener"
          >
            <img
              src="img/posters/youtube.png"
              alt="Suscríbete a mi canal de YouTube"
              loading="lazy"
            />
          </a>
        </p>
      </article>
    </section>
  );
}
