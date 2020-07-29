import Layout from "../components/Layout";
import Course from "../components/Course";
import Sponsors from "../components/Sponsors";
import { channelYears, courses } from "../helpers/data.json";

export default function Cursos() {
  return (
    <Layout
      title="Cursos | jonmircha"
      description={`Tengo más de ${channelYears} años generando contenido digital sobre el maravilloso mundo de la web. Aquí te comparto mis cursos y tutoriales."`}
      poster="/img/posters/cursos.jpg"
      slug="/cursos"
    >
      <article className="fluid-wrap">
        <h1 className="super-title">Mis Cursos</h1>
        <p className="fluid-2">
          Tengo más de {channelYears} años generando contenido digital sobre el
          maravilloso mundo de la <i>web</i>.
        </p>
        <p className="fluid-2">Aquí te comparto mis cursos y tutoriales.</p>
      </article>
      <section className="flex-grid-center fluid-insulate-bottom">
        {courses.map((course, index) => (
          <Course key={index} el={course} />
        ))}
      </section>
      <Sponsors />
    </Layout>
  );
}
