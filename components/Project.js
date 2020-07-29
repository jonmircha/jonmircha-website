export default function Project({ project }) {
  return (
    <>
      <a
        className="box-shadow-none project"
        href={project.link}
        target="_blank"
        rel="noopener"
      >
        <figure>
          <img
            className="icon-x5"
            src={project.img}
            alt={project.name}
            loading="lazy"
          />
          <figcaption>
            <span>{project.name}</span>
            <small dangerouslySetInnerHTML={{ __html: project.excerpt }} />
          </figcaption>
        </figure>
      </a>
      <style jsx>{`
        .project {
          border: thin solid transparent;
          border-bottom-color: var(--gray-light);
          display: block;
          font-size: var(--fluid-0);
          font-weight: 900;
          text-decoration: none;
          color: var(--text-color);
        }

        .project:hover {
          background-color: var(--gray-light);
          opacity: 1;
        }

        .project figure {
          padding: calc(var(--fluid-0) * 0.5);
          width: 100%;
          height: 100%;
          display: flex;
        }

        .project figcaption {
          margin-left: var(--fluid-2);
          flex-grow: 1;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
          align-items: center;
        }

        .project span,
        .project small {
          width: 100%;
        }

        .project small {
          font-weight: 400;
        }

        @media screen and (min-width: 780px) {
          .project figure {
            align-items: center;
          }
        }
      `}</style>
    </>
  );
}
