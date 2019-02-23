;
//asignar un nombre y versión al cache
const CACHE_NAME = 'v1_cache_jonmircha',
  urlsToCache = [
    '/',
    '/cv_jonmircha.pdf',
    '/humans.txt',
    '/sitemap.xml',
    'https://fonts.googleapis.com/css?family=Raleway:400,700',
    'https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwJYtWqZPAA.woff2',
    'https://use.fontawesome.com/releases/v5.0.7/css/all.css',
    'https://use.fontawesome.com/releases/v5.0.6/webfonts/fa-solid-900.woff2',
    'https://use.fontawesome.com/releases/v5.0.6/webfonts/fa-brands-400.woff2',
    'https://use.fontawesome.com/releases/v5.0.6/webfonts/fa-regular-400.woff2',
    '/css/style.css',
    '/js/script.js',
    '/img/Bryan.jpg',
    '/img/curso-as3.jpg',
    '/img/curso-html5.jpg',
    '/img/curso-jquery.jpg',
    '/img/curso-js.jpg',
    '/img/curso-js-avanzado-paradigmas.jpg',
    '/img/curso-nodejs.jpg',
    '/img/curso-nodejs-desde-cero.jpg',
    '/img/curso-php.jpg',
    '/img/curso-poo-php-mysql.jpg',
    '/img/curso-react-desde-cero.jpg',
    '/img/curso-responsive-design.jpg',
    '/img/curso-web.jpg',
    '/img/curso-wordpress.jpg',
    '/img/ji.jpg',
    '/img/jonmircha.jpg',
    '/img/jonmircha-edcamp-2017.jpg',
    '/img/proyectos-bextlan.jpg',
    '/img/proyectos-cafe-latino.jpg',
    '/img/proyectos-edgram.jpg',
    '/img/proyectos-edteam.jpg',
    '/img/proyectos-kenai-gulp-starter-kit.jpg',
    '/img/proyectos-kenai-npm-starter-kit.jpg',
    '/img/proyectos-lucylara.jpg',
    '/img/proyectos-malvestida.jpg',
    '/img/proyectos-presentaciones.jpg',
    '/img/proyectos-programador-fitness.jpg',
    '/img/proyectos-responsimple.jpg',
    '/img/proyectos-somms.jpg',
    '/img/proyectos-talleres.jpg',
    '/img/proyectos-vlog-de-mircha.jpg',
    '/img/curso-css-avanzado-grid-flexbox.png',
    '/img/curso-gestion-desarrollo-web.png',
    '/img/curso-html5-pwas.png',
    '/img/curso-vue-desde-cero.png',
    '/img/favicon.png',
    '/img/favicon32.png',
    '/img/favicon64.png',
    '/img/favicon96.png',
    '/img/favicon128.png',
    '/img/favicon192.png',
    '/img/favicon256.png',
    '/img/favicon512.png',
    '/img/favicon1024.png',
    '/img/kEnAi.png',
    '/img/programador-fitness.png',
    '/img/favicon.ico'
  ]

//durante la fase de instalación, generalmente se almacena en caché los activos estáticos
self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache)
          .then(() => self.skipWaiting())
      })
      .catch(err => console.log('Falló registro de cache', err))
  )
})

//una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
self.addEventListener('activate', e => {
  const cacheWhitelist = [CACHE_NAME]

  e.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            //Eliminamos lo que ya no se necesita en cache
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName)
            }
          })
        )
      })
      // Le indica al SW activar el cache actual
      .then(() => self.clients.claim())
  )
})

//cuando el navegador recupera una url
self.addEventListener('fetch', e => {
  //Responder ya sea con el objeto en caché o continuar y buscar la url real
  e.respondWith(
    caches.match(e.request)
      .then(res => {
        if (res) {
          //recuperar del cache
          return res
        }
        //recuperar de la petición a la url
        return fetch(e.request)
      })
  )
})
