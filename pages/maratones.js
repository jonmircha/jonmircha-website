import { useEffect } from "react";
import Layout from "../components/Layout";
import { humanDate } from "../helpers/formatDate";
import { disqusComments, disqusHTML } from "../helpers/social";
import { cssPost } from "../helpers/css";
import { marathons, pagesLikePost } from "../helpers/data.json";

export default function Maratones() {
  useEffect(() => {
    disqusComments();
  }, []);

  let [post] = pagesLikePost.filter((el) => el.slug === "maratones");

  return (
    <>
      <Layout
        title={`${post.title} | jonmircha`}
        description={post.description}
        poster={post.poster}
        slug={`/${post.slug}`}
      >
        <div className="fluid-wrap fluid-insulate-bottom post">
          <h1>{post.title}</h1>
          <small className="date">
            Última actualización: <i>{humanDate(post.date)}</i>
          </small>
          <img
            className="icon-x5"
            src={`/img/category/${post.category}.svg`}
            alt={`Categoría: ${post.category}`}
            title={`Categoría: ${post.category}`}
            loading="lazy"
          />
          <p>En esta nota voy guardando las estadísticas de mis maratones.</p>
          <img
            src={post.poster}
            alt="Las medallas 🏅 de mis Maratones"
            title="Las medallas 🏅 de mis Maratones"
            loading="lazy"
          />
          <table className="fluid-insulate">
            <thead>
              <tr>
                <th>#️⃣</th>
                <th>🏃🏻</th>
                <th>⏲️</th>
                <th>📅</th>
                <th>🌊</th>
                <th>📊</th>
              </tr>
            </thead>
            <tbody>
              {marathons
                .map((marathon, index) => (
                  <tr key={index + 1}>
                    <td>
                      <small>{index + 1}</small>
                    </td>
                    <td>
                      <small>
                        <em>{marathon.title}</em>
                      </small>
                    </td>
                    <td>
                      <small>
                        <strong>{marathon.time}</strong>
                      </small>
                    </td>
                    <td>
                      <small>{humanDate(marathon.date)}</small>
                    </td>
                    <td>
                      <small>{marathon.altitude}m</small>
                    </td>
                    <td>
                      <small>{marathon.extra ? marathon.extra : "-"}</small>
                    </td>
                  </tr>
                ))
                .reverse()}
            </tbody>
          </table>
        </div>
        {disqusHTML()}
      </Layout>
      {cssPost()}
      <style jsx global>{`
        @media only screen and (min-width: 780px) {
          table {
            margin-right: auto;
            margin-left: auto;
            width: 100%;
          }

          table td {
            padding: calc(var(--fluid-0) / 2);
            text-align: center;
          }
        }

        @media only screen and (max-width: 779px),
          (min-device-width: 768px) and (max-device-width: 1024px) {
          /* Force table to not be like tables anymore */
          table,
          thead,
          tbody,
          th,
          td,
          tr {
            display: block;
          }

          /* Hide table headers (but not display: none;, for accessibility) */
          thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
          }

          tr {
            background-color: var(--gray-light);
          }

          tr:nth-child(odd) {
            background-color: var(--dark);
            color: var(--white);
          }

          td {
            /* Behave  like a "row" */
            border: none;
            position: relative;
            padding: 1vh 2vw;
            padding-left: 15%;
          }

          td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 1vh;
            left: 2vw;
            width: 10%;
            padding-right: 10px;
            white-space: nowrap;
            font-size: smaller;
          }

          td:nth-of-type(1):before {
            content: "#️⃣";
          }
          td:nth-of-type(2):before {
            content: "🏃🏻";
          }
          td:nth-of-type(3):before {
            content: "⏲️";
          }
          td:nth-of-type(4):before {
            content: "📅";
          }
          td:nth-of-type(5):before {
            content: "🌊";
          }
          td:nth-of-type(6):before {
            content: "📊";
          }
        }
      `}</style>
    </>
  );
}
