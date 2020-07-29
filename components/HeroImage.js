export default function HeroImage({ img, content }) {
  return (
    <>
      <section className="hero-image">
        <article>{content}</article>
      </section>
      <style jsx global>{`
        .hero-image {
          min-height: 100vh;
          background-image: url(${img});
          background-repeat: no-repeat;
          background-position: center top;
          background-size: cover;
          background-attachment: fixed;
        }

        .hero-image article {
          width: 100%;
          min-height: inherit;
          display: flex;
          justify-content: center;
          align-items: center;
          text-align: center;
          color: var(--white);
          background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-image img {
          border-radius: 100%;
          width: calc(var(--fluid-5) * 2.5);
          height: auto;
        }
      `}</style>
    </>
  );
}
