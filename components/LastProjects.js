import Project from "./Project";

export default function LastProjects({ projects }) {
  return (
    <section className="full-screen-center">
      <article className="fluid-wrap fluid-insulate">
        <h2 className="fluid-5 text-center super-title full-width">
          Últimos Proyectos
        </h2>
        <section>
          {projects.map((project, index) => (
            <Project key={index} project={project} />
          ))}
        </section>
      </article>
    </section>
  );
}
