import { sponsors } from "../helpers/data.json";

export default function Sponsors() {
  return (
    <>
      <article className="full-screen-center sponsors">
        <div className="fluid-insulate">
          <aside className="fluid-wrap text-center">
            <h3>Si te gusta y te sirve mi contenido</h3>
            <h2 className="fluid-5 super-title">
              <i>¡Apóyame!</i>
            </h2>
            <p className="fluid-2">
              Paso la mayor parte de mi tiempo haciendo cursos y tutoriales{" "}
              <b>gratuitos</b> sobre diseño y desarrollo <i>web</i> en{" "}
              <a
                href="https://youtube.com/jonmircha?sub_confirmation=1"
                target="_blank"
                rel="noopener"
              >
                <i>YouTube</i>
              </a>
              .
            </p>
            <p className="fluid-2">
              Únete a mi <i>Patreon</i> o a mi <i>Membresía de YouTube</i>,
              tengo diferentes <b>beneficios</b> para los que me quieran apoyar.
            </p>
            <p className="fluid-2">
              También puedes invitarme un taco 🌮 por <i>Paypal</i>.
            </p>
            <h3>🤗¡Muchas Gracias!🤗</h3>
          </aside>
          <aside className="fluid-wrap-1200 flex-grid-center">
            {sponsors.map((sponsor, index) => (
              <a
                key={index}
                className="box-shadow-none sponsor"
                href={sponsor.link}
                style={{ color: sponsor.color }}
                target="_blank"
                rel="noopener"
              >
                <img src={sponsor.icon} alt={sponsor.name} loading="lazy" />
                <h3>{sponsor.name}</h3>
              </a>
            ))}
          </aside>
        </div>
      </article>
      <style jsx>{`
        .sponsors {
          background-image: url("/img/posters/apoyo.jpg");
          background-repeat: no-repeat;
          background-position: center top;
          background-size: cover;
          background-attachment: fixed;
        }

        .sponsors > div {
          width: inherit;
          min-height: inherit;
          background-color: rgba(0, 0, 0, 0.8);
          color: var(--white);
        }

        .sponsor {
          border: thin solid var(--gray-light);
          border-radius: calc(var(--fluid-0) / 4);
          margin: var(--fluid-0);
          max-width: 250px;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          text-align: center;
          text-decoration: none;
          background-color: var(--gray-light);
          color: var(--white);
        }

        .sponsor h3 {
          font-size: calc(var(--fluid-4) / 2);
        }

        .sponsor img {
          border-radius: 25%;
          padding: var(--fluid-2);
          margin: var(--fluid-0);
          width: calc(var(--fluid-4) * 2);
          height: calc(var(--fluid-4) * 2);
          background-color: var(--white);
        }
      `}</style>
    </>
  );
}
