(async function (d) {
  //Fecha formato humano
  function humanDate(date) {
    return new Date(`${date}T00:00:00`)
      .toDateString()
      .slice(4)
      .replace("Jan", "Ene")
      .replace("Apr", "Abr")
      .replace("Aug", "Ago")
      .replace("Dec", "Dic");
  }

  //Datos del sitio
  async function getData() {
    let res = await fetch("assets/data.json"),
      json = await res.json();
    return json;
  }

  let data = await getData();

  //Artículos del blog
  if (d.getElementById("posts")) {
    const posts = data.posts.filter((el) => el.publish === true);
    let $posts = "";

    posts.forEach(
      (el) =>
        ($posts += `
          <a href="${location.origin}/${el.slug}" class="blog-item">
            <figure>
              <img src="img/category/${el.category}.svg" alt="${
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
    d.getElementById("posts").insertAdjacentHTML("beforeend", $posts);
  }

  //Slides
  if (d.getElementById("slides")) {
    const slides = data.slides.filter((el) => el.publish === true);
    let $slides = "";

    slides.forEach(
      (el) =>
        ($slides += `
          <a href="${location.origin}/${
          el.slug
        }" class="blog-item" target="_blank">
            <figure>
              <img src="img/category/${el.category}.svg" alt="${
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
    d.getElementById("slides").insertAdjacentHTML("beforeend", $slides);
  }

  //Pensamientos
  if (d.getElementById("thoughts")) {
    const thoughts = data.thoughts.filter((el) => el.publish === true);
    let $thoughts = "";

    thoughts.forEach(
      (el) =>
        ($thoughts += `
          <a href="${location.origin}/${el.slug}" class="blog-item">
            <figure>
              <img src="img/category/${el.category}.svg" alt="${
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
    d.getElementById("thoughts").insertAdjacentHTML("beforeend", $thoughts);
  }

  //Vlogs
  if (d.getElementById("vlogs")) {
    const vlogs = data.vlogs.filter((el) => el.publish === true);
    let $vlogs = "";

    vlogs.forEach(
      (el) =>
        ($vlogs += `
          <a href="${el.url}" class="blog-item external" target="_blank">
            <figure>
              <img src="img/category/${el.category}.svg" alt="${el.category}" title="Categoría: ${el.category}" loading="lazy">
              <figcaption>
                <span>${el.title}</span>
              </figcaption>
            </figure>
          </a>
      `)
    );
    d.getElementById("vlogs").insertAdjacentHTML("beforeend", $vlogs);
  }

  //Artículo o nota actual
  if (d.getElementById("post-blog")) {
    let post;

    const currentPost = data.posts.filter(
      (el) =>
        location.pathname === `/${el.slug}` ||
        location.pathname === `/${el.slug}.html`
    );

    if (currentPost.length === 0) {
      const currentToughts = data.thoughts.filter(
        (el) =>
          location.pathname === `/${el.slug}` ||
          location.pathname === `/${el.slug}.html`
      );

      post = currentToughts[0];
    } else {
      post = currentPost[0];
    }

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
        <img class="post-category" src="img/category/${
          post.category
        }.svg" alt="Categoría: ${post.category}" title="Categoría: ${
      post.category
    }" loading="lazy">
      `;
  }

  //Agregando atributos a enlaces externos en artículos del blog
  d.querySelectorAll('a[href^="http"]:not(.blog-item)').forEach((el) => {
    el.setAttribute("target", "_blank");
    el.setAttribute("rel", "noopener");
  });

  //Colaboraciones
  if (d.getElementById("colabs")) {
    const colabs = data.colabs;
    let $colabs = "";

    colabs.forEach(
      (el) =>
        ($colabs += `
          <a class="card-list" href="${el.link}">
            <figure>
              <img src="${el.img}" alt="${el.name}" loading="lazy">
              <figcaption>
                <span>${el.name} <small>(${el.date})</small></span>
                <small>${el.excerpt}</small>
              </figcaption>
            </figure>
          </a>
      `)
    );
    d.getElementById("colabs").innerHTML = $colabs;
  }

  //Proyectos
  if (d.getElementById("projects")) {
    const projects = data.projects;
    let $projects = "";

    projects.forEach(
      (el) =>
        ($projects += `
          <a class="card-list" href="${el.link}">
            <figure>
              <img src="${el.img}" alt="${el.name}" loading="lazy">
              <figcaption>
                <span>${el.name} <small>(${el.date})</small></span>
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
          <a class="card-list" href="${el.link}">
            <figure>
              <img src="${el.img}" alt="${el.name}" loading="lazy">
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

  //Maratones
  if (d.getElementById("marathons")) {
    const marathons = data.marathons;
    let $marathons = "";

    marathons.reverse().forEach(
      (el, index) =>
        ($marathons += `
          <tr>
            <td>
              <small>${marathons.length - index}</small>
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

  //Entorno local vs producción
  if (location.host !== "jonmircha.com") {
    d.querySelectorAll(".menu a").forEach((el) =>
      el.setAttribute("href", `${el.href}.html`)
    );

    d.querySelectorAll(".footer-menu a:not([title='inicio'])").forEach((el) =>
      el.setAttribute("href", `${el.href}.html`)
    );

    d.querySelectorAll(".blog-item:not(.external)").forEach((el) =>
      el.setAttribute("href", `${el.href}.html`)
    );
  } else {
    if ("serviceWorker" in navigator) {
      navigator.serviceWorker.register("./sw.js");
    }
  }
})(document);
