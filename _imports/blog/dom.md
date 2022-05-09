## _DOM: Document Object Model_

El Modelo de Objetos del Documento es un _API_ para documentos _HTML_ y _XML_.

Éste proveé una representación estructural del documento, permitiendo modificar su contenido y presentación visual mediante código _JavaScript_.

**El _DOM_ no es parte de la especificación de _JavaScript_, es una _API_ para los navegadores.**

[Más información en _MDN_](https://developer.mozilla.org/es/docs/DOM).

[Ver Video](https://www.youtube.com/watch?v=VlMiHqTR-7s&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Elementos del Documento:

```js
console.log(window.document);
console.log(document);
console.log(document.head);
console.log(document.body);
console.log(document.documentElement);
console.log(document.doctype);
console.log(document.charset);
console.log(document.title);
console.log(document.links);
console.log(document.images);
console.log(document.forms);
console.log(document.styleSheets);
console.log(document.scripts);
setTimeout(() => {
  console.log(document.getSelection().toString());
}, 2000);
document.write("<h2>Hola Mundo desde el DOM</h2>");
```

[Ver Video](https://www.youtube.com/watch?v=dF7lp_qBfV0&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Nodos, Elementos y Selectores:

[Más información en _MDN_](https://developer.mozilla.org/en-US/docs/Web/API/Node/nodeType).

```js
console.log(document.getElementsByTagName("li"));
console.log(document.getElementsByClassName("card"));
console.log(document.getElementsByName("nombre"));
console.log(document.getElementById("menu"));
console.log(document.querySelector("#menu"));
console.log(document.querySelector("a"));
console.log(document.querySelectorAll("a"));
console.log(document.querySelectorAll("a").length);
document.querySelectorAll("a").forEach((el) => console.log(el));
console.log(document.querySelector(".card"));
console.log(document.querySelectorAll(".card"));
console.log(document.querySelectorAll(".card")[2]);
console.log(document.querySelector("#menu li"));
console.log(document.querySelectorAll("#menu li"));
```

[Ver Video](https://www.youtube.com/watch?v=zBmtmlB5b5g&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Atributos y _Data-Attributes_:

```js
console.log(document.documentElement.lang);
console.log(document.documentElement.getAttribute("lang"));
console.log(document.querySelector(".link-dom").href);
console.log(document.querySelector(".link-dom").getAttribute("href"));

document.documentElement.lang = "en";
console.log(document.documentElement.lang);
document.documentElement.setAttribute("lang", "es-MX");
console.log(document.documentElement.lang);

const $linkDOM = document.querySelector(".link-dom");

$linkDOM.setAttribute("target", "_blank");
$linkDOM.setAttribute("rel", "noopener");
$linkDOM.setAttribute("href", "https://youtube.com/jonmircha");
console.log($linkDOM.hasAttribute("rel"));
$linkDOM.removeAttribute("rel");
console.log($linkDOM.hasAttribute("rel"));

//Data-Attributes
console.log($linkDOM.getAttribute("data-description"));
console.log($linkDOM.dataset);
console.log($linkDOM.dataset.description);
$linkDOM.setAttribute("data-description", "Modelo de Objeto del Documento");
console.log($linkDOM.dataset.description);
$linkDOM.dataset.description = "Suscríbete a mi canal y comparte";
console.log($linkDOM.dataset.description);
console.log($linkDOM.hasAttribute("data-id"));
$linkDOM.removeAttribute("data-id");
console.log($linkDOM.hasAttribute("data-id"));
```

[Ver Video](https://www.youtube.com/watch?v=l6npGZa_vgc&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Estilos y Variables _CSS_:

```js
const $linkDOM = document.querySelector(".link-dom");

console.log($linkDOM.style);
console.log($linkDOM.getAttribute("style"));
console.log($linkDOM.style.backgroundColor);
console.log($linkDOM.style.color);
console.log(window.getComputedStyle($linkDOM));
console.log(getComputedStyle($linkDOM).getPropertyValue("color"));

$linkDOM.style.setProperty("text-decoration", "none");
$linkDOM.style.setProperty("display", "block");
$linkDOM.style.width = "50%";
$linkDOM.style.textAlign = "center";
$linkDOM.style.marginLeft = "auto";
$linkDOM.style.marginRight = "auto";
$linkDOM.style.padding = "1rem";
$linkDOM.style.borderRadius = ".5rem";

console.log($linkDOM.style);
console.log($linkDOM.getAttribute("style"));
console.log(getComputedStyle($linkDOM));

//Variables CSS - Custom Properties CSS
const $html = document.documentElement,
  $body = document.body;

let varDarkColor = getComputedStyle($html).getPropertyValue("--dark-color"),
  varYellowColor = getComputedStyle($html).getPropertyValue("--yellow-color");

console.log(varDarkColor, varYellowColor);

$body.style.backgroundColor = varDarkColor;
$body.style.color = varYellowColor;

$html.style.setProperty("--dark-color", "#000");
varDarkColor = getComputedStyle($html).getPropertyValue("--dark-color");

$body.style.setProperty("background-color", varDarkColor);
```

[Ver Video](https://www.youtube.com/watch?v=asR6_XGzI3s&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Clases _CSS_:

```js
const $card = document.querySelector(".card");

console.log($card);
console.log($card.className);
console.log($card.classList);
console.log($card.classList.contains("rotate-45"));
$card.classList.add("rotate-45");
console.log($card.classList.contains("rotate-45"));
console.log($card.className);
console.log($card.classList);
$card.classList.remove("rotate-45");
console.log($card.classList.contains("rotate-45"));
$card.classList.toggle("rotate-45");
console.log($card.classList.contains("rotate-45"));
$card.classList.toggle("rotate-45");
console.log($card.classList.contains("rotate-45"));
$card.classList.toggle("rotate-45");
$card.classList.replace("rotate-45", "rotate-135");
$card.classList.add("opacity-80", "sepia");
$card.classList.remove("opacity-80", "sepia");
$card.classList.toggle("opacity-80", "sepia");
```

[Ver Video](https://www.youtube.com/watch?v=x1bzRMEH89A&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Texto y _HTML_:

```js
const $whatIsDOM = document.getElementById("que-es");
let text = `
    <p>
      El Modelo de Objetos del Documento (<b><i>DOM - Document Object Model</i></b>) es un API para documentos HTML y XML.
    </p>
    <p>
      Éste proveé una representación estructural del documento, permitiendo modificar su contenido y presentación visual mediante código JS.
    </p>
    <p>
      <mark>El DOM no es parte de la especificación de JavaScript, es una API para los navegadores.</mark>
    </p>
  `;

//$whatIsDOM.innerText = text;
$whatIsDOM.textContent = text;
$whatIsDOM.innerHTML = text;
$whatIsDOM.outerHTML = text;
```

[Ver Video](https://www.youtube.com/watch?v=ezjxA4o2-Ck&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### _DOM Traversing_ - Recorriendo el _DOM_:

```js
const $cards = document.querySelector(".cards");

console.log($cards);
console.log($cards.children);
console.log($cards.children[2]);
console.log($cards.parentElement);
console.log($cards.firstElementChild);
console.log($cards.lastElementChild);
console.log($cards.previousElementSibling);
console.log($cards.nextElementSibling);
console.log($cards.closest("div"));
console.log($cards.closest("body"));
console.log($cards.children[3].closest("section"));
```

[Ver Video](https://www.youtube.com/watch?v=m50UZkgV9-Q&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Creando Elementos y Fragmentos:

```js
const $figure = document.createElement("figure"),
  $img = document.createElement("img"),
  $figcaption = document.createElement("figcaption"),
  $figcaptionText = document.createTextNode("Animals"),
  $cards = document.querySelector(".cards"),
  $figure2 = document.createElement("figure");

$img.setAttribute("src", "https://placeimg.com/200/200/animals");
$img.setAttribute("alt", "Animals");
$figure.classList.add("card");

$figcaption.appendChild($figcaptionText);
$figure.appendChild($img);
$figure.appendChild($figcaption);
$cards.appendChild($figure);

$figure2.innerHTML = `
<img src="https://placeimg.com/200/200/people" alt="People">
<figcaption>People</figcaption>
`;
$figure2.classList.add("card");

$cards.appendChild($figure2);

const estaciones = ["Primavera", "Verano", "Otoño", "Invierno"],
  $ul = document.createElement("ul");

document.write("<h3>Estaciones del Año</h3>");
document.body.appendChild($ul);

estaciones.forEach((el) => {
  const $li = document.createElement("li");
  $li.textContent = el;
  $ul.appendChild($li);
});

const continentes = ["África", "América", "Asia", "Europa", "Oceanía"],
  $ul2 = document.createElement("ul");

document.write("<h3>Continentes del Mundo</h3>");
document.body.appendChild($ul2);
$ul2.innerHTML = "";
continentes.forEach((el) => ($ul2.innerHTML += `<li>${el}</li>`));

const meses = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre",
  ],
  $ul3 = document.createElement("ul"),
  $fragment = document.createDocumentFragment();

meses.forEach((el) => {
  const $li = document.createElement("li");
  $li.textContent = el;
  $fragment.appendChild($li);
});

document.write("<h3>Meses del Año</h3>");
$ul3.appendChild($fragment);
document.body.appendChild($ul3);
```

[Ver Video](https://www.youtube.com/watch?v=tFSFX37Yah4&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### _Templates HTML_:

```html
<template id="template-card">
  <figure class="card">
    <img />
    <figcaption></figcaption>
  </figure>
</template>
```

```js
const $cards = document.querySelector(".cards"),
  $template = document.getElementById("template-card").content,
  $fragment = document.createDocumentFragment(),
  cardsContent = [
    {
      title: "Tecnología",
      img: "https://placeimg.com/200/200/tech",
    },
    {
      title: "Animales",
      img: "https://placeimg.com/200/200/animals",
    },
    {
      title: "Arquitectura",
      img: "https://placeimg.com/200/200/arch",
    },
    {
      title: "Gente",
      img: "https://placeimg.com/200/200/people",
    },
    {
      title: "Naturaleza",
      img: "https://placeimg.com/200/200/nature",
    },
  ];

cardsContent.forEach((el) => {
  $template.querySelector("img").setAttribute("src", el.img);
  $template.querySelector("img").setAttribute("alt", el.title);
  $template.querySelector("figcaption").textContent = el.title;

  let $clone = document.importNode($template, true);
  $fragment.appendChild($clone);
});

$cards.appendChild($fragment);
```

[Ver Video](https://www.youtube.com/watch?v=Q9y9BugN8-s&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Modificando Elementos (_Old Style_):

```js
const $cards = document.querySelector(".cards"),
  $newCard = document.createElement("figure"),
  $cloneCards = $cards.cloneNode(true);

$newCard.innerHTML = `
  <img src="https://placeimg.com/200/200/any" alt="Any">
  <figcaption>Any</figcaption>
`;
$newCard.classList.add("card");

//$cards.replaceChild($newCard, $cards.children[2]);
//$cards.removeChild($cards.lastElementChild);
$cards.insertBefore($newCard, $cards.firstElementChild);
document.body.appendChild($cloneCards);
```

[Ver Video](https://www.youtube.com/watch?v=epMoFp_2ay8&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Modificando Elementos (_Cool Style_):

```js
/*
.insertAdjacent...
  .insertAdjacentElement(position, el)
  .insertAdjacentHTML(position, html)
  .insertAdjacentText(position, text)

Posiciones:
  beforebegin(hermano anterior)
  afterbegin(primer hijo)
  beforeend(ultimo hijo)
  afterend(hermano siguiente)
*/

const $cards = document.querySelector(".cards"),
  $newCard = document.createElement("figure");

let $contenCard = `
  <img src="https://placeimg.com/200/200/any" alt="Any">
  <figcaption></figcaption>
`;
$newCard.classList.add("card");

$newCard.insertAdjacentHTML("afterbegin", $contenCard);
$cards.insertAdjacentElement("beforeend", $newCard);
$newCard.querySelector("figcaption").insertAdjacentText("afterbegin", "Any"); */

//$cards.prepend($newCard);
//$cards.append($newCard);
//$cards.before($newCard);
//$cards.after($newCard);
```

[Ver Video](https://www.youtube.com/watch?v=tqqw2b1kasg&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

## Eventos

Los eventos son los mecanismos que tenemos en _JavaScript_ para controlar las acciones del usuario y definir el comportamiento del documento en cierto momento o cuando se cumplan ciertas condiciones.

[Más información en _MDN_](https://developer.mozilla.org/en-US/docs/Web/Events).

[Ver Video](https://www.youtube.com/watch?v=IQchmLGDXgU&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Manejadores de Eventos:

Las funciones que se ejecutan en un evento se llaman _**Event Handler**_ (Manejador de Eventos).

```js
function holaMundo() {
  alert("Hola Mundo");
  console.log(event);
}

function saludar(nombre = "Desconocid@") {
  alert(`Hola ${nombre}`);
  console.log(event);
}

const $eventoSemantico = document.getElementById("evento-semantico"),
  $eventoMultiple = document.getElementById("evento-multiple"),
  $eventoRemover = document.getElementById("evento-remover");

$eventoSemantico.onclick = holaMundo;
$eventoSemantico.onclick = function (e) {
  alert("Hola Mundo Manejador de Eventos Semántico");
  console.log(e);
  console.log(event);
};

$eventoMultiple.addEventListener("click", holaMundo);
$eventoMultiple.addEventListener("click", (e) => {
  alert("Hola Mundo Manejador de Eventos Múltiple");
  console.log(e);
  console.log(e.type);
  console.log(e.target);
  console.log(event);
});
$eventoMultiple.addEventListener("click", () => {
  saludar();
  saludar("Jon");
});

const removerDobleClick = (e) => {
  alert(`Removiendo el evento de tipo ${e.type}`);
  console.log(e);
  $eventoRemover.removeEventListener("dblclick", removerDobleClick);
  $eventoRemover.disabled = true;
};

$eventoRemover.addEventListener("dblclick", removerDobleClick);
```

[Ver Video](https://www.youtube.com/watch?v=2oHVjLrnRmY&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Flujo de Eventos (Burbuja y Captura):

El método _**addEventListener()**_ tiene un tercer párametro que puede ser de tipo _**boolean**_, si no se especifica, el valor por defecto es _**false**_.

Si el parámetro es _**false**_ se ejecuta la fase de burbuja (ir del elemento más interno al más externo).

Si el parámetro es _**true**_ se ejecuta la fase de captura (ir del elemento más externo al más interno).

```js
const $divsEventos = document.querySelectorAll(".eventos-flujo div");

function flujoEventos(e) {
  console.log(
    `Hola te saluda ${this.className}, el click lo originó ${e.target.className}`
  );
}

console.log($divsEventos);

$divsEventos.forEach((div) => {
  //Fase de burbuja
  //div.addEventListener("click", flujoEventos);
  //div.addEventListener("click", flujoEventos, false);
  //Fase de captura
  //div.addEventListener("click", flujoEventos, true);
  div.addEventListener("click", flujoEventos, {
    capture: false,
    once: true,
  });
});
```

[Ver Video](https://www.youtube.com/watch?v=myEsMzsJEFg&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### _stopPropagation & preventDefault_:

```js
const $divsEventos = document.querySelectorAll(".eventos-flujo div"),
  $linkEventos = document.querySelector(".eventos-flujo a");

function flujoEventos(e) {
  console.log(
    `Hola te saluda ${this.className}, el click lo originó ${e.target.className}`
  );
  e.stopPropagation();
}

console.log($divsEventos);

$divsEventos.forEach((div) => {
  //Fase de burbuja
  div.addEventListener("click", flujoEventos);
  //div.addEventListener("click", flujoEventos, false);
  //Fase de captura
  //div.addEventListener("click", flujoEventos, true);
  //div.addEventListener("click", flujoEventos, {
  //capture: false,
  //once: true,
  //});
});

$linkEventos.addEventListener("click", (e) => {
  alert("Hola soy tu amigo y docente digital... Jonathan MirCha");
  e.preventDefault();
  e.stopPropagation();
});
```

[Ver Video](https://www.youtube.com/watch?v=2LgnPW_VZYU&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Delegación de Eventos:

```js
function flujoEventos(e) {
  console.log(
    `Hola te saluda ${this} el click lo originó ${e.target.className}`
  );
  //e.stopPropagation();
}

document.addEventListener("click", (e) => {
  if (e.target.matches(".eventos-flujo div")) {
    flujoEventos(e);
  }

  if (e.target.matches(".eventos-flujo a")) {
    alert("Hola soy tu amigo y docente digital... Jonathan MirCha");
    e.preventDefault();
    //e.stopPropagation();
  }
});
```

[Ver Video](https://www.youtube.com/watch?v=j2fWSgOrxRs&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

## _BOM: Browser Object Model_

El Modelo de Objetos del Navegador es un _API_ que permite acceder y modificar las propiedades de las ventanas del propio navegador.

Mediante el _BOM_, es posible redimensionar y mover la ventana del navegador y realizar muchas otras manipulaciones no relacionadas con el contenido de la página _HTML_.

El mayor inconveniente del _BOM_ es que, a diferencia del _DOM_, no es un _API_ estándar, cada navegador lo puede interpretar de diferente manera, sin embargo, en los últimos años los navegadores están más estandarizados entre sí.

### Propiedades y Eventos del _BOM_:

```js
window.addEventListener("resize", (e) => {
  console.clear();
  console.log("********** Evento Resize **********");
  console.log(window.innerWidth);
  console.log(window.innerHeight);
  console.log(window.outerWidth);
  console.log(window.outerHeight);
  console.log(e);
});

window.addEventListener("scroll", (e) => {
  console.clear();
  console.log("********** Evento Scroll **********");
  console.log(window.scrollX);
  console.log(window.scrollY);
  console.log(e);
});

window.addEventListener("load", (e) => {
  console.log("********** Evento Load **********");
  console.log(window.screenX);
  console.log(window.screenY);
  console.log(e);
});

document.addEventListener("DOMContentLoaded", (e) => {
  console.log("********** Evento DOMContentLoaded **********");
  console.log(window.screenX);
  console.log(window.screenY);
  console.log(e);
});
```

El evento _**DOMContentLoaded**_ es disparado cuando el documento _HTML_ ha sido completamente cargado y parseado, sin esperar hojas de estilo, imágenes y subtramas para finalizar la carga.

El evento _**load**_ se dispara cuando se ha detectado la carga completa de la página.

Es un error frecuente usar _**load**_ cuando _**DOMContentLoaded**_ es mucho más apropiado.

Peticiones asíncronas pausan el parseo del _DOM_.

[Ver Video](https://www.youtube.com/watch?v=BoDLn_r0o84&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Métodos del _BOM_:

```js
window.alert("Alerta");
window.confirm("Confirmación");
window.prompt("Aviso");

const $btnAbrir = document.getElementById("abrir-ventana"),
  $btnCerrar = document.getElementById("cerrar-ventana"),
  $btnImprimir = document.getElementById("imprimir-ventana");

let ventana;

$btnAbrir.addEventListener(
  "click",
  (e) => (ventana = window.open("https://jonmircha.com"))
);

$btnCerrar.addEventListener("click", (e) => {
  //window.close();
  ventana.close();
});

$btnImprimir.addEventListener("click", (e) => window.print());
```

[Ver Video](https://www.youtube.com/watch?v=EqLVoofiXVs&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

### Objetos: _URL_, Historial y Navegador:

```js
console.log("********** Objeto URL (location) **********");
console.log(location);
console.log(location.origin);
console.log(location.protocol);
console.log(location.host);
console.log(location.hostname);
console.log(location.port);
console.log(location.href);
console.log(location.hash);
console.log(location.search);
console.log(location.pathname);
//location.reload();

console.log("********** Objeto Historial (history) **********");
console.log(history);
console.log(history.length);
//history.forward(1);
//history.go(-3);
//history.back(2);

console.log("********** Objeto Navegador (navigator) **********");
console.log(navigator);
console.log(navigator.connection);
console.log(navigator.geolocation);
console.log(navigator.mediaDevices);
console.log(navigator.mimeTypes);
console.log(navigator.onLine);
console.log(navigator.serviceWorker);
console.log(navigator.storage);
console.log(navigator.usb);
console.log(navigator.userAgent);
```

[Ver Video](https://www.youtube.com/watch?v=P5VxI53U_WI&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---
