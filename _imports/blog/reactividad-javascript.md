Para comprender el paradigma de la programación reactiva en _JavaScript_ y entender cómo es que funcionan internamente librerías y _frameworks_ como _React_, _Angular_, _Vue_, _Svelte_, _Polymer_, etc; es necesario comprender algunos conceptos importantes:

#### Reactividad

La reactividad de los datos, simplemente es que la interfaz de usuario de un sitio o aplicación se modifica a los cambios en los datos de la misma.

Cada vez que se actualizan los datos, la interfaz de usuario lo hace automáticamente para que coincida con la lógica de programación de la aplicación.

#### Estado

El estado son los datos de tu aplicación.

Entonces, ¿por qué se le llama estado en lugar de datos?

Porque tiene una duración determinada, el estado son datos en un momento particular de la aplicación, por ello decimos: _**el estado actual de los datos de la aplicación**_.

#### Interfaz basada en el estado

Una interfaz basada en el estado, es aquella que usa los datos de la aplicación en todo momento para pintar su elementos visuales.

Los elementos visuales de la interfaz suelen llamarse componentes.

#### Componentes

Para definir el término componente citaré la definición de _Nicole Sullivan_ que dice:

> _“It's a repeating visual pattern, that can be abstracted into an independent snippet of HTML, CSS and possibly JavaScript.” [Nicole Sullivan](https://youtube.com/watch?v=lsaG-EJcu88)_.

Traduciendo:

Es un patrón visual repetido, que se puede resumir en un fragmento independiente de _HTML_, _CSS_ y posiblemente _JavaScript_.

Los componentes:

- Son un fragmento de la interfaz que cumple una única función.
- Son reutilizables ( principio _DRY_ - _Don´t Repeat Yourself_ ).
- Son independientes, tanto de su contexto como del resto de componentes.
- Son autocontenidos, no filtran estilos o funcionalidad a otros componentes.

#### Programación Reactiva orientada a Componentes

Con lo descrito anteriormente podemos decir que una aplicación reactiva y basada en componentes nos permiten separar el código y los elementos de la interfaz en pequeñas piezas independientes y reutilizables que estarán aisladas una de otras, y en lugar de intentar apuntar y manipular directamente los elementos del _DOM_ cuando la aplicación **reaccioné** a las acciones del usuario, ésta actualizará su estado y luego la interfaz se repintará con los cambios en el estado.

Déjame mostrarte como funciona esto con _Vanilla JS_ 🤓💛.

---

### Entendiendo la Reactividad

A continuación encontrarás una lista de videos donde te enseño a implementar reactividad con _Vanilla JavaScript_, es decir, sin usar _frameworks_ o librerías externas, lo haremos únicamente con todo el poder que nos brinda nuestro querido y poderoso lenguaje de programación: _JavaScript_ 🤗💛.

1. [Reactividad en _JavaScript_](https://youtube.com/watch?v=RWTLqdS5vTo&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Manipulación NO Reactiva del _DOM_](https://youtube.com/watch?v=zZvmp6V2fCo&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Interfaz de Usuario (_UI_) basada en el Estado](https://youtube.com/watch?v=09Vx4IzPAQE&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Estado Reactivo](https://youtube.com/watch?v=yYyC2bE_q9o&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Estado Inmutable](https://youtube.com/watch?v=LhEY3heuDzs&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Componentes con Estado](https://youtube.com/watch?v=fdr5Wprx-vE&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).
1. [Programando una Librería para crear Componentes con Estado](https://youtube.com/watch?v=n_tKs1yyfBo&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA).

Esta lista de videos forma parte de mi [Curso de _JavaScript_](https://youtube.com/playlist?list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA) en _YouTube_.

Si quieres aprender _JavaScript_ de una forma más estructurada, a tu propio ritmo y totalmente gratis, te sugiero vayas a mi iniciativa [Aprende*JavaScript*.org](https://aprendejavascript.org) y comienza ya tu carrera profesional como desarrollador _web_ 🤓💛.
