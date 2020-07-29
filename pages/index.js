import { useEffect } from "react";
import Layout from "../components/Layout";
import HeroImage from "../components/HeroImage";
import About from "../components/About";
import NewsLetter from "../components/NewsLetter";
import LastCourses from "../components/LastCourses";
import Sponsors from "../components/Sponsors";
import LastPosts from "../components/LastPosts";
import Services from "../components/Services";
import LastProjects from "../components/LastProjects";
import YouTubeSponsor from "../components/YouTubeSponsor";
import { driftChat } from "../helpers/social";
import { getAllPostsByDate } from "../helpers/getPosts";
import { courses, projects } from "../helpers/data.json";

export default function Index({ posts }) {
  const lastCourses = courses.slice(0, 6),
    lastPosts = posts.slice(0, 6);

  let heroContent = (
    <div>
      <h2>Hola, soy tu amigo y docente digital...</h2>
      <h1 className="super-title">Jonathan MirCha</h1>
      <img src="/img/jonmircha.jpg" alt="jonmircha" loading="lazy" />
    </div>
  );

  useEffect(() => {
    driftChat();
  }, []);

  return (
    <Layout>
      <HeroImage img="/img/posters/docente-digital.jpg" content={heroContent} />
      <About />
      <NewsLetter />
      <LastCourses courses={lastCourses} />
      <Sponsors />
      <LastPosts posts={lastPosts} />
      <Services />
      <LastProjects projects={projects} />
      <YouTubeSponsor />
    </Layout>
  );
}

export async function getStaticProps() {
  return {
    props: { posts: getAllPostsByDate() },
  };
}
