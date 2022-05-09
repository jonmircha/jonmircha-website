(async (d) => {
  /* //Chat de Drift
  function driftChat() {
    (function () {
      "use strict";
      !(function () {
        var t = (window.driftt = window.drift = window.driftt || []);
        if (!t.init) {
          if (t.invoked)
            return void (
              window.console &&
              console.error &&
              console.error("Drift snippet included twice.")
            );
          (t.invoked = !0),
            (t.methods = [
              "identify",
              "config",
              "track",
              "reset",
              "debug",
              "show",
              "ping",
              "page",
              "hide",
              "off",
              "on",
            ]),
            (t.factory = function (e) {
              return function () {
                var n = Array.prototype.slice.call(arguments);
                return n.unshift(e), t.push(n), t;
              };
            }),
            t.methods.forEach(function (e) {
              t[e] = t.factory(e);
            }),
            (t.load = function (t) {
              var e = 3e5,
                n = Math.ceil(new Date() / e) * e,
                o = document.createElement("script");
              (o.type = "text/javascript"),
                (o.async = !0),
                (o.crossorigin = "anonymous"),
                (o.src =
                  "https://js.driftt.com/include/" + n + "/" + t + ".js");
              var i = document.getElementsByTagName("script")[0];
              i.parentNode.insertBefore(o, i);
            });
        }
      })();
      drift.SNIPPET_VERSION = "0.3.1";
      drift.load("cga87pv427td");
    })();
  } */

  //Botones AddThis
  function shareSocialMedia() {
    const $s = d.createElement("script");
    $s.src =
      "//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d98208b017c1d74";
    d.body.appendChild($s);
  }

  /* //Disqus Comments
  function disqusComments() {
    const disqus_config = function () {
      this.page.url = `https://jonmircha.com/${location.pathname}`;
      this.page.identifier = location.pathname;
    };
    const $s = d.createElement("script");
    $s.src = "https://jonmircha.disqus.com/embed.js";
    $s.setAttribute("data-timestamp", +new Date());
    (d.head || d.body).appendChild($s);
  } */

  //Highlight Code
  function highlightCode() {
    const $s = d.createElement("script"),
      $c = d.createElement("link");
    $c.rel = "stylesheet";
    $c.href =
      "https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/themes/prism-okaidia.min.css";
    $s.src = "https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/prism.min.js";
    d.head.insertAdjacentElement("afterbegin", $c);
    d.body.appendChild($s);
  }

  //Google Analytics
  function ga() {
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "UA-114853516-1");
  }

  //Fecha Formato Humano
  function humanDate(date) {
    return new Date(`${date}T00:00:00`)
      .toDateString()
      .slice(4)
      .replace("Jan", "Ene")
      .replace("Apr", "Abr")
      .replace("Aug", "Ago")
      .replace("Dec", "Dic");
  }

  //Data del Sitio
  async function getData() {
    let res = await fetch("assets/data.json"),
      json = await res.json();
    return json;
  }

  //Rutas de Aprendizaje
  function learningPaths(id, category) {
    let items = d.getElementById(id).dataset.items,
      $courses = "";
    const pathCourses = data.courses
        .filter((el) => el.category.includes(category))
        .reverse(),
      courses = items ? pathCourses.slice(0, items) : pathCourses;
    courses.forEach((el, index) => {
      let codes = el.codes
          ? `
          <p class="text-right">
            <a href="${el.codes}">
              Códigos del curso
            </a>
          </p>
        `
          : "",
        number =
          el.category !== "none"
            ? `<p class="course-index">${index + 1}</p>`
            : "";

      $courses += `
          <article class="course">
            <a class="box-shadow-none" href="${el.link}">
              <img src="${el.img}" alt="${el.name}" loading="lazy">
            </a>
            <div>
              <h3>${el.name}</h3>
              <p>${el.excerpt}</p>
              ${codes}
              ${number}
            </div>
          </article>
      `;
    });
    d.getElementById(id).innerHTML = $courses;
  }

  let data = await getData();

  //Cursos y Últimos Cursos
  if (d.getElementById("courses")) {
    let items = d.getElementById("courses").dataset.items,
      $courses = "";
    const published = data.courses.filter((el) => el.inHome === true),
      courses = items ? published.slice(0, items) : published;
    courses.forEach((el) => {
      let codes = el.codes
        ? `
          <p class="text-right">
            <a href="${el.codes}">
              Códigos del curso
            </a>
          </p>
        `
        : "";

      $courses += `
          <article class="course">
            <a class="box-shadow-none" href="${el.link}">
              <img src="${el.img}" alt="${el.name}" loading="lazy">
            </a>
            <div>
              <h3>${el.name}</h3>
              <p>${el.excerpt}</p>
              ${codes}
            </div>
          </article>
      `;
    });
    d.getElementById("courses").innerHTML = $courses;
  }

  //Cursos Obsoletos
  if (d.getElementById("deprecated-courses")) {
    let items = d.getElementById("deprecated-courses").dataset.items,
      $courses = "";
    const deprecated = data.courses.filter((el) => el.deprecated === true),
      courses = items ? deprecated.slice(0, items) : deprecated;

    console.log(deprecated);
    courses.forEach((el) => {
      let codes = el.codes
        ? `
          <p class="text-right">
            <a href="${el.codes}">
              Códigos del curso
            </a>
          </p>
        `
        : "";

      $courses += `
          <article class="course">
            <a class="box-shadow-none" href="${el.link}">
              <img src="${el.img}" alt="${el.name}" loading="lazy">
            </a>
            <div>
              <h3>${el.name}</h3>
              <p>${el.excerpt}</p>
              ${codes}
            </div>
          </article>
      `;
    });
    d.getElementById("deprecated-courses").innerHTML = $courses;
  }

  //Rutas de Aprendizaje
  if (d.getElementById("path-frontend")) {
    learningPaths("path-frontend", "frontend");
  }

  if (d.getElementById("path-js")) {
    learningPaths("path-js", "js");
  }

  if (d.getElementById("path-php")) {
    learningPaths("path-php", "php");
  }

  if (d.getElementById("path-none")) {
    learningPaths("path-none", "none");
  }

  //Artículos y Últimos Artículos
  if (d.getElementById("posts")) {
    let items = d.getElementById("posts").dataset.items,
      $posts = "";
    const published = data.posts.filter((el) => el.publish === true),
      posts = items ? published.slice(0, items) : published;
    posts.forEach(
      (el) =>
        ($posts += `
          <a href="${location.origin}/${
          el.slug
        }" class="box-shadow-none blog-item">
            <figure>
              <img class="icon-x3" src="img/category/${el.category}.svg" alt="${
          el.category
        }" title="Categoría: ${el.category}" loading="lazy">
              <figcaption>
                <span>${el.title}</span>
                <time datetime="${el.date}">${humanDate(el.date)}</time>
              </figcaption>
            </figure>
          </a>
      `)
    );
    d.getElementById("posts").innerHTML = $posts;
  }

  //Proyectos y Últimos Proyectos
  if (d.getElementById("projects")) {
    let items = d.getElementById("projects").dataset.items,
      $projects = "";
    const projects = items ? data.projects.slice(0, items) : data.projects;

    projects.forEach(
      (el) =>
        ($projects += `
          <a class="box-shadow-none project" href="${el.link}">
            <figure>
              <img class="icon-x5" src="${el.img}" alt="${el.name}" loading="lazy">
              <figcaption>
                <span>${el.name} <small>( ${el.date} )</small></span>
                <small>${el.excerpt}</small>
              </figcaption>
            </figure>
          </a>
      `)
    );
    d.getElementById("projects").innerHTML = $projects;
  }

  //Escuelas
  if (d.getElementById("schools")) {
    let items = d.getElementById("schools").dataset.items,
      $schools = "";
    const schools = items ? data.schools.slice(0, items) : data.schools;

    schools.forEach(
      (el) =>
        ($schools += `
          <a class="box-shadow-none project" href="${el.link}">
            <figure>
              <img class="icon-x5" src="${el.img}" alt="${el.name}" loading="lazy">
              <figcaption>
                <span>${el.name} <small>( ${el.date} )</small></span>
                <small>${el.excerpt}</small>
              </figcaption>
            </figure>
          </a>
      `)
    );
    d.getElementById("schools").innerHTML = $schools;
  }

  //Notas
  if (d.getElementById("notes")) {
    let items = d.getElementById("notes").dataset.items,
      $notes = "";
    const published = data.notes.filter((el) => el.publish === true),
      notes = items ? published.slice(0, items) : published;
    notes.forEach(
      (el) =>
        ($notes += `
          <a href="${location.origin}/${
          el.slug
        }" class="box-shadow-none blog-item">
            <figure>
              <img class="icon-x3" src="img/category/${el.category}.svg" alt="${
          el.category
        }" title="Categoría: ${el.category}" loading="lazy">
              <figcaption>
                <span>${el.title}</span>
                <time datetime="${el.date}">${humanDate(el.date)}</time>
              </figcaption>
            </figure>
          </a>
      `)
    );
    d.getElementById("notes").innerHTML = $notes;
  }

  //Youtube Sponsor
  if (d.getElementById("youtube-sponsor")) {
    d.getElementById("yt-subscribers").textContent = data.youtube.subscribers;
    d.getElementById("yt-views").textContent = data.youtube.views;
    d.getElementById("yt-videos").textContent = data.youtube.videos;
    d.getElementById("yt-date").textContent = humanDate(data.youtube.date);
  }

  //Ahora
  if (d.getElementById("now")) {
    let nowList = data.now,
      $nowList = "";

    nowList.forEach((el) => ($nowList += `<li class="fluid-1">${el}</li>`));

    d.getElementById("now-list").insertAdjacentHTML("afterbegin", $nowList);
    d.getElementById("now-date").textContent = humanDate(data.nowDate);
  }

  //Artículo Actual
  if (d.getElementById("post-blog")) {
    const posts = data.posts,
      currentPost = posts.filter(
        (el) =>
          location.pathname === `/${el.slug}` ||
          location.pathname === `/${el.slug}.html`
      ),
      post = currentPost[0];

    d.getElementById("post-blog").innerHTML = `
        <h1>${post.title}</h1>
        <aside class="post-date">
          <small>
            <span>Última actualización:</span>
            <i>
              <time datetime="${post.date}">
                ${humanDate(post.date)}
              </time>
            </i>
          </small>
        </aside>
        <img class="icon-x5 post-category" src="img/category/${
          post.category
        }.svg" alt="Categoría: ${post.category}" title="Categoría: ${
      post.category
    }" loading="lazy">
      `;
  }

  //Nota Actual
  if (d.getElementById("post-note")) {
    const notes = data.notes,
      currentNote = notes.filter(
        (el) =>
          location.pathname === `/${el.slug}` ||
          location.pathname === `/${el.slug}.html`
      ),
      note = currentNote[0];

    d.getElementById("post-note").innerHTML = `
        <h1>${note.title}</h1>
        <aside class="post-date">
          <small>
            <span>Última actualización:</span>
            <i>
              <time datetime="${note.date}">
                ${humanDate(note.date)}
              </time>
            </i>
          </small>
        </aside>
        <img class="icon-x5 post-category" src="img/category/${
          note.category
        }.svg" alt="Categoría: ${note.category}" title="Categoría: ${
      note.category
    }" loading="lazy">
      `;
  }

  //Mecenas
  if (d.getElementById("mecenas")) {
    let mecenas = data.mecenas,
      $mecenas = "";

    if (mecenas.length === 0) {
      $mecenas = `
        <p class="section fluid-3 text-center">
          Conviértete en mi <b>primer mecenas</b>.
          <br>
          Tu nombre aparecerá aquí.
        </p>
      `;
    } else {
      $mecenas = `<ul class="section-bottom flex-grid-center">`;
      mecenas.forEach(
        (el) =>
          ($mecenas += `<li><a class="fluid-1" href="${el.link}">${el.name}</a></li>`)
      );
      $mecenas += `</ul>`;
    }

    d.getElementById("mecenas-list").outerHTML = $mecenas;
  }

  //Maratones
  if (d.getElementById("marathons")) {
    const marathons = data.marathons;
    let $marathons = "";

    marathons.reverse().forEach(
      (el, index) =>
        ($marathons += `
          <tr>
            <td>
              <small>${index + 1}</small>
            </td>
            <td>
              <small>
                <em>${el.title}</em>
              </small>
            </td>
            <td>
              <small>
                <time datetime="${el.time}">
                  <strong>${el.time}</strong>
                </time>
              </small>
            </td>
            <td>
              <small>
                <time datetime="${el.date}">
                  ${humanDate(el.date)}
                </time>
              </small>
            </td>
            <td>
              <small>${el.altitude}m</small>
            </td>
            <td>
              <small>${el.extra ? el.extra : "-"}</small>
            </td>
          </tr>
        `)
    );

    d.getElementById("marathons").innerHTML = `
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
        ${$marathons}
      </tbody>
    `;
  }

  //Botones para compartir
  if (d.getElementById("share-social-media")) {
    shareSocialMedia();
  }

  /* //Comentarios Disqus
  if (d.getElementById("disqus_thread")) {
    disqusComments();
  } */

  //Resaltado de Código
  if (d.querySelector("code")) {
    highlightCode();
  }

  //Agregando atributos a enlaces externos
  d.querySelectorAll('a[href^="http"]:not(.blog-item)').forEach((el) => {
    el.setAttribute("target", "_blank");
    el.setAttribute("rel", "noopener");
  });

  //Dark Mode
  if (d.getElementById("dark-mode")) {
    let sun = `<svg fill="currentColor" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" preserveAspectRatio="xMidYMid meet">
          <title>Light Mode</title>
          <path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
            clip-rule="evenodd"></path>
        </svg>`,
      moon = `<svg fill="currentColor" width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" preserveAspectRatio="xMidYMid meet">
          <title>Dark Mode</title>
          <path xmlns="http://www.w3.org/2000/svg"
            d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>`;

    if (localStorage.getItem("theme") === "dark") {
      d.documentElement.classList.add("dark-mode");
      d.getElementById("dark-mode").innerHTML = sun;
    } else {
      d.documentElement.classList.remove("dark-mode");
      d.getElementById("dark-mode").innerHTML = moon;
    }

    d.getElementById("dark-mode").addEventListener("click", (e) => {
      e.preventDefault();
      d.documentElement.classList.toggle("dark-mode");
      let theme;
      if (d.documentElement.classList.contains("dark-mode")) {
        theme = "dark";
        d.getElementById("dark-mode").innerHTML = sun;
      } else {
        theme = "light";
        d.getElementById("dark-mode").innerHTML = moon;
      }
      localStorage.setItem("theme", theme);
    });
  }

  //Entorno local vs producción
  if (location.host !== "jonmircha.com") {
    d.querySelector(".logo a").setAttribute(
      "href",
      d.querySelector(".logo a").dataset.href
    );

    d.querySelectorAll(".menu a").forEach((el) =>
      el.setAttribute("href", `${el.href}.html`)
    );

    d.querySelectorAll(".blog-item").forEach((el) =>
      el.setAttribute("href", `${el.href}.html`)
    );
  } else {
    /* if (d.getElementById("home")) {
      driftChat();
    } */

    if ("serviceWorker" in navigator) {
      navigator.serviceWorker.register("./sw.js");
      //.then((reg) => console.log("Service Worker Registrado", reg));
    }

    ga();
  }
})(document);
