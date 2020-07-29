export function cssPost() {
  return (
    <style jsx global>{`
      .post h1 {
        font-size: calc(var(--fluid-5) * 0.825);
        text-align: center;
      }

      .post hr {
        border: thin solid var(--gray-light);
      }

      .post img {
        margin-left: auto;
        margin-right: auto;
        display: block;
      }

      .post p,
      .post li {
        font-size: calc(var(--fluid-1) * 0.85);
        line-height: 1.4;
      }

      .post .btn-pulse {
        margin-left: auto;
        margin-bottom: var(--fluid-5);
        padding: calc(var(--fluid-0) / 3);
        display: block;
        width: 35%;
        font-size: calc(var(--fluid-1) / 1.25);
        background-color: var(--blue);
        box-shadow: 0 0 4px var(--blue);
      }

      .post .date {
        margin-top: calc(var(--fluid-1) * -1);
        display: block;
        font-size: calc(var(--fluid-1) * 0.5);
        text-align: center;
      }

      .post code {
        font-size: 80%;
      }

      @media screen and (min-width: 992px) {
        .post h1 {
          width: 100vw;
          position: relative;
          left: 50%;
          right: 50%;
          margin-left: -50vw;
          margin-right: -50vw;
          font-size: calc(var(--fluid-5) * 1);
        }
      }
    `}</style>
  );
}
