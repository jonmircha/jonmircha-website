//asignar un nombre y versión al cache
const CACHE_NAME = "jonmircha-cache",
  urlsToCache = [
    "./",
    "./index.html",
    "./cursos",
    "./cursos.html",
    "./blog",
    "./blog.html",
    "./mentoria",
    "./mentoria.html",
    "./hola",
    "./hola.html",
    "./404.html",
    "./assets/index.js",
    "./assets/prism.js",
    "./assets/style.css",
    "./assets/slides.css",
    "./assets/prism.css",
    "./assets/data.json",
    "./img/404.png",
    "./img/apoyo.jpg",
    "./img/favicon.png",
    "./img/jonmircha.jpg",
    "./img/jonmircha-100k.jpg",
    "./img/jonmircha-hola.jpg",
    "./img/kEnAi.png",
    "./img/kEnAi.svg",
    "./img/og.png",
    "./img/youtube-banner.jpg",
    "./fonts/raleway-100.woff2",
    "./fonts/raleway-400.woff2",
    "./fonts/raleway-900.woff2",
    "./fonts/graphik-400.woff",
    "./fonts/graphik-500.woff",
    "./fonts/graphik-600.woff",
    "./fonts/roboto-mono-400.woff2",
  ];

//durante la fase de instalación, generalmente se almacena en caché los activos estáticos
self.addEventListener("install", (e) => {
  e.waitUntil(
    caches
      .open(CACHE_NAME)
      .then((cache) => {
        return cache.addAll(urlsToCache).then(() => self.skipWaiting());
      })
      .catch((err) => console.log("Falló registro de cache", err))
  );
});

//una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
self.addEventListener("activate", (e) => {
  const cacheWhitelist = [CACHE_NAME];

  e.waitUntil(
    caches
      .keys()
      .then((cacheNames) => {
        return Promise.all(
          cacheNames.map((cacheName) => {
            //Eliminamos lo que ya no se necesita en cache
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName);
            }
          })
        );
      })
      // Le indica al SW activar el cache actual
      .then(() => self.clients.claim())
  );
});

//cuando el navegador recupera una url
self.addEventListener("fetch", (e) => {
  //Responder ya sea con el objeto en caché o continuar y buscar la url real
  e.respondWith(
    caches.match(e.request).then((res) => {
      if (res) {
        //recuperar del cache
        return res;
      }
      //recuperar de la petición a la url
      return fetch(e.request);
    })
  );
});
