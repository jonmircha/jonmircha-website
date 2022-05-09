//asignar un nombre y versión al cache
const CACHE_NAME = "jonmircha-cache",
  urlsToCache = [
    "./",
    "./index.html",
    "./cursos",
    "./cursos.html",
    "./cv",
    "./cv.html",
    "./ahora",
    "./ahora.html",
    "./notas",
    "./notas.html",
    "./bryan",
    "./bryan.html",
    "./assets/index.js",
    "./assets/style.css",
    "./assets/data.json",
    "./img/404.jpg",
    "./img/favicon.png",
    "./img/jonmircha.jpg",
    "./img/kEnAi.svg",
    "./img/posters/404.jpg",
    "./img/posters/ahora.jpg",
    "./img/posters/apoyo.jpg",
    "./img/posters/Bryan.jpg",
    "./img/posters/cursos.jpg",
    "./img/posters/docente-digital.jpg",
    "./img/posters/jonmircha.jpg",
    "./img/posters/maratones.jpg",
    "./img/posters/mecenas.jpg",
    "./img/posters/notas.jpg",
    "./img/posters/servicios.jpg",
    "./img/posters/youtube.png",
    "./img/posters/youtube-poster-channel.png",
    "./img/posters/youtube-poster-channel-small.png",
    "./img/posters/youtube-sponsors.jpg",
    "https://fonts.gstatic.com/s/raleway/v16/1Ptrg8zYS_SKggPNwK4vWqZPANqczVs.woff2",
    "https://fonts.gstatic.com/s/raleway/v16/1Ptug8zYS_SKggPNyC0IT4ttDfA.woff2",
    "https://fonts.googleapis.com/css2?family=Raleway:wght@400;900&display=swap",
    "https://www.googletagmanager.com/gtag/js?id=UA-114853516-1",
    "https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/themes/prism-okaidia.min.css",
    "https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/prism.min.js",
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
