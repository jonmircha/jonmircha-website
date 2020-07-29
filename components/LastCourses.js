import Course from "./Course";

export default function LastCourses({ courses }) {
  return (
    <article className="fluid-wrap-1200 fluid-insulate">
      <h2 className="fluid-5 text-center super-title">Últimos Cursos</h2>
      <section className="flex-grid-center">
        {courses.map((course, index) => (
          <Course key={index} el={course} />
        ))}
      </section>
    </article>
  );
}
