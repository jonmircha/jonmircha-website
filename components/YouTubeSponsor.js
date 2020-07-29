import { humanDate } from "../helpers/formatDate";
import { youtube } from "../helpers/data.json";

export default function YouTubeSponsor() {
  return (
    <>
      <section className="full-screen-center youtube-sponsor">
        <div className="fluid-insulate full-screen-center">
          <article className="fluid-wrap-1200 text-center">
            <h2 className="fluid-5 super-title">Patrocinadores</h2>
            <p className="fluid-2">
              Si está interesado en patrocinar videos en mi canal de{" "}
              <a
                href="https://youtube.com/jonmircha?sub_confirmation=1"
                target="_blank"
                rel="noopener"
              >
                <i>YouTube</i>
              </a>
              , envíame un correo para conocer los precios y términos.
            </p>
            <div className="fluid-insulate">
              <a
                className="btn-pulse"
                href="mailto:hola@jonmircha.com"
                target="_blank"
                rel="noopener"
              >
                hola@jonmircha.com
              </a>
            </div>
            <aside className="flex-grid-center flex-row-evenly-center ">
              <span>
                <b className="fluid-5">{youtube.subscribers}</b>
                <br />
                SUSCRIPTORES
              </span>
              <span>
                <b className="fluid-5">{youtube.views}</b>
                <br />
                VISTAS
              </span>
              <span>
                <b className="fluid-5">{youtube.videos}</b>
                <br />
                VIDEOS
              </span>
            </aside>
            <small className="">
              última actualización de cifras: {humanDate(youtube.date)}
            </small>
          </article>
        </div>
      </section>
      <style jsx>{`
        .youtube-sponsor {
          background-image: url("/img/posters/youtube-sponsors.jpg");
          background-repeat: no-repeat;
          background-position: center center;
          background-size: cover;
          background-attachment: fixed;
        }

        .youtube-sponsor > div {
          width: inherit;
          min-height: inherit;
          background-color: rgba(0, 0, 0, 0.8);
          color: var(--white);
        }

        .youtube-sponsor .flex-grid-center > * {
          flex: 1 1 250px;
        }
      `}</style>
    </>
  );
}
