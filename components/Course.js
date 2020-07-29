export default function Course({ el }) {
  return (
    <>
      <article className="course">
        <a
          className="box-shadow-none"
          href={el.link}
          target="_blank"
          rel="noopener"
        >
          <img src={el.img} alt={el.name} loading="lazy" />
        </a>
        <div>
          <h3>{el.name}</h3>
          <p
            className="fluid-0"
            dangerouslySetInnerHTML={{ __html: el.excerpt }}
          />
        </div>
      </article>
      <style jsx>{`
        .course {
          border: thin solid var(--dark);
          border-radius: calc(var(--fluid-0) / 4);
          margin: var(--fluid-0);
          max-width: 320px;
          display: flex;
          flex-direction: column;
          background-color: var(--gray-light);
        }

        .course h3 {
          font-size: calc(var(--fluid-1) * 0.8);
        }

        .course img {
          border-radius: calc(var(--fluid-0) / 4) calc(var(--fluid-0) / 4) 0 0;
        }

        .course > div {
          padding: 0 2vw;
        }
      `}</style>
    </>
  );
}
