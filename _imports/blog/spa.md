## _Single Page Application_

Una _**SPA**_ o Aplicación de una Sola Página es una _web_ que todo su contenido carga una sola vez, es decir, tu navegador descarga un sólo archivo _html_ con todos los recursos y dependencias que necesite para funcionar: estilos, _scripts_, imágenes, fuentes, etc.

Una vez que carga todo el contenido de la aplicación la navegación de esta suele ser muy rápida y fluida, pues el contenido ya ha sido previamente cargado y sólo estamos intercambiando contenido a través de las interacciones del usuario.

Dependiendo de la complejidad y robustez de la aplicación también podría cargarse contenido de forma dinámica sin la necesidad de recargar la página y sí, como seguramente lo estas pensando esto se hace mediante [peticiones asíncronas](/javascript-asincrono) con [_AJAX_](/ajax) de tal manera que sólo se tiene que cargar el nuevo contenido.

<br>

### Rutas en una SPA

En una _**SPA**_ tenemos **vistas**, NO páginas. Las vistas son las diferentes secciones o apartados de contenido que tiene la aplicación y al no tener que cambiar de ruta para acceder al contenido, la carga suele ser muy rápida.

<br>

**¿Entonces si el contenido se carga en una sóla página, la _url_ no cambia?**

Si... y No... 🤔😵😕.

<br>

Por funcionalidad quizas **NO** sería necesario que cambiáse la _url_, pero por usabilidad es una muy buena opción que **SI** cambie, ya que el navegador va guardando en su historial todas las páginas (en este caso todas las vistas) que el usuario va visitando, lo que podría permitir al usuario regresar o adelantar vistas a través de los botones de atrás y adelante de su navegador _web_.

También piensa en la posibilidad que existe de que el usuario en vez de navegar por la aplicación para llegar a un contenido en particular, decida acceder a este a través de una _url_ que decida escribir manualmente en la barra de dirección de su navegador web, si no implementas un sistema de rutas esto podría ser un gran problema de accesibilidad en el contenido de tu _**SPA**_.

<br>

**Pero si el contenido se carga en una sóla página, ¿cómo cambiamos la _url_?**

Gracias al uso del _hash_ de la _url_ y el paso de parámetros en la misma 😉🤓😎.

<br>

### ¿Y el _SEO_ en una _SPA_?

Si bien, acabamos de explicar que podemos cambiar la _url_ mediante el paso de parámetros y el _hash_ de la misma, es un hecho que este tipo de cambios en la _url_ no es muy amigable y como tal siempre hacemos referencia al mismo archivo que carga toda la aplicación.

Además hay que considerar que la mayoria del contenido de una _**SPA**_ se carga de forma dinámica, por lo que los mecanismos que tienen los buscadores para analizar el código _HTML_ de las _urls_ prácticamente son inservibles, pues en su mayoría, las _**SPAs**_ tienen un sólo _tag_ _HTML_ vacío con un nombre de identificador y mediante _JavaScript_, el contenido es cargado asíncronamente a dicho _tag_.

Por lo anterior el código _HTML_ de nuestra _**SPA**_ estaría vacío ante los rastreadores de los buscadores, encargados de posicionar el contenido en la _web_.

Pero no te preocupes 😬 no todo esta perdido, si bien las _**SPAs**_ no son tan amigables con el _SEO_, lo cierto es que en los últimos años los mismos buscadores han implementado mecanismos en sus rastreadores para detectar el código _HTML_ generado por una _**SPA**_.

Adicionalmente tenemos 2 técnicas para volver más _SEO friendly_ a nuestras _**SPAs**_:

1. Los Generadores de Sitios Estáticos (_**SSG - Static Site Generators**_) y
1. El Renderizado del Lado del Servidor (_**SSR - Server Side Rendering**_).

Pero de estas dos estrategias hablaré en otra ocasión.

<br>

### ¿En qué se programa una _SPA_?

Las _**SPAs**_ se desarrollan en [_JavaScript_](/javascript), como son aplicaciones _web_ 100% hechas con código _frontend_, es el único lenguaje en el que se pueden programar. También necesitaremos _HTML_ para el marcado del contenido y _CSS_ para su presentación.

<br>

**Pero si el código de una _SPA_ es 100% _frontend_ ¿qué pasa con el código _backend_ que proporciona los datos?**

<br>

El código _backend_ que provee los datos a una _**SPA**_, es 100% independiente de esta. De hecho a la _**SPA**_ le importa poco en qué lenguaje este programado su _backend_ o que reglas, patrones, estructuras o técnicas use internamente, mientras este le proporcione los datos en una [_API_](/api-rest) expuesta generalmente en formato [_JSON_](/json) es todo lo que la _**SPA**_ necesita de un _backend_.

Con lo anterior expuesto, significa que si decides desarrollar un proyecto bajo el paradigma de las _**SPAs**_ puedes programar de forma independiente el _frontend_ del _backend_ y sólo conectarlos a través de la [_API_](/api-rest) que los comuniqué entre sí.

De esta forma puedes mantener mayor control e independencia de desarrollo entre cada una de las partes de código (_frontend_ y _backend_) de todo tu proyecto.

De hecho en los últimos años el paradigma de desarrollo de las _**SPAs**_ le ha ido ganando terreno al patrón de desarrollo _**MVC**_ (Modelo - Vista - Controlador) que fue muy popular en los inicios de la _web_, en este paradigma el _frontend_ y _backend_ estan mezclados y con mucha dependencia entre sí, además quien llevaba la mayor responsabilidad era el _backend_ y generalmente con cada nueva acción en la aplicación implicaba volver a solicitar los datos al servidor lo que implicaba una recarga al navegador, y por ende una nueva petición por cada acción ejecutada.

Con la llegada de [_AJAX_](/ajax) el tema de las recargas al servidor se solucionó, sin embargo la codependencia y mezcla entre código _frontend_ y _backend_ sigue ocurriendo en el paradigma _**MVC**_.

Actualmente con el avance que ha tenido [_JavaScript_](/ecmascript) como lenguaje y la proliferación de librerías y _frameworks_ que se basan en él, sumado a las nuevas formas de almacenar y consumir información en la _web_ como el cómputo en la nube y el desarrollo de microservicios en la misma; el paradigma de las _**SPAs**_ cada vez gana mayor aceptación frente al _**MVC**_, gracias a que permite desarrollar de forma autónoma e independiente cada parte de código de nuestra aplicación: _frontend_, _backend_ y persistencia de datos desacoplados y descentralizados de sí mismos.

<br>

### Librerías y _Frameworks_ para _SPAs_

Desde el 2010 con el surgimiento de proyectos como _Angular.js_, _Backbone.js_ y _Ember.js_ que comenzaban a tratar de darle más protagonismo al desarrollo _frontend_ más allá de la simple manipulación del [_DOM_](/dom) que nos ofrecía en su momento _jQuery_, comenzó el camino de la arquitectura basada en _**SPAs**_, podemos considerar a estas herramientas la primera generación de librerías y _frameworks_ _**SPAs**_.

Posteriormente y a partir del 2013 con el surgimiento de herramientas como _React_, _Angular_, _Polymer_, _Vue_ y _Svelte_ que integran nuevos conceptos al ecosistema _frontend_ como: el desarrollo basado en componentes, el manejo del estado, la reactividad, entre otros podemos considerar a estos proyectos como la segunda generación de librerías y _frameworks_ _**SPAs**_.

Así que como puedes ver, tienes una gran variedad de opciones a escoger.

![Arquitectura SPA](https://jonmircha.com/img/blog/arquitectura-spa.png)

---

### Creando una _SPA_

A continuación encontrarás una lista de videos donde te enseño a desarrollar una _SPA_ desde cero con _Vanilla JavaScript_, es decir, sin usar _frameworks_ o librerías externas, la programaremos únicamente con todo el poder que nos brinda nuestro querido y poderoso lenguaje de programación: _JavaScript_ 🤗💛.

1. [Introducción a las _Single Page Applications_](https://youtube.com/watch?v=5ukeeimOFLU&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Estructura de Proyecto: _assets_, _helpers_ y _components_](https://youtube.com/watch?v=jLMyWvZIhB4&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [_Helper_ de conexión a _API REST_](https://youtube.com/watch?v=VUbKdpVQKDU&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [_Helper_ de peticiones _AJAX_](https://youtube.com/watch?v=Ovuy9Bj5AtU&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Primeros Componentes de _UI_](https://youtube.com/watch?v=w0djekE6NR8&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Componente _Header_](https://youtube.com/watch?v=rY8k7-Jm8ws&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Renderizado Dinámico](https://youtube.com/watch?v=6WZ_C4iXhWA&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Enrutamiento: _Router_ de la _App_](https://youtube.com/watch?v=nC9WK4jFXls&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Refactorización de la _App_. Enrutamiento Asíncrono](https://youtube.com/watch?v=keGWjiUJ3V4&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Vista de _Post_ Actual](https://youtube.com/watch?v=cuQivOPJJ7M&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Buscador Interno de la _App_](https://youtube.com/watch?v=0SwwbsMZGrc&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Vista de la Búsqueda Actual](https://youtube.com/watch?v=1MAUA1lZPyM&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [_Infinite Scroll & High Order Components_](https://youtube.com/watch?v=XEf5jW9Y9oE&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [_Styled Components & Single File Components_](https://youtube.com/watch?v=MWrqhpGF6tU&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).

Esta lista de videos forma parte de mi [Curso de _JavaScript_](https://youtube.com/playlist?list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA) en _YouTube_.

Si quieres aprender _JavaScript_ de una forma más estructurada, a tu propio ritmo y totalmente gratis, te sugiero vayas a mi iniciativa [Aprende*JavaScript*.org](https://aprendejavascript.org) y comienza ya tu carrera profesional como desarrollador _web_ 🤓💛.
