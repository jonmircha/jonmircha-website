_**AJAX**_ significa _**Asynchronous JavaScript And XML**_. En pocas palabras, es el uso del objeto _**XMLHttpRequest**_ para comunicarse con los servidores.

Puede enviar y recibir información en varios formatos, incluidos _JSON_, _XML_, _HTML_ y archivos de texto.

El atractivo de _**AJAX**_ es su naturaleza _"asíncrona"_, lo que significa que puede comunicarse con el servidor, intercambiar datos y actualizar la página sin tener que recargar el navegador.

![Modelo AJAX](https://jonmircha.com/img/blog/ajax.png)

---

## Métodos Nativos

- [ActiveXObject](https://developer.mozilla.org/en-US/docs/Archive/Web/JavaScript/Microsoft_Extensions/ActiveXObject) <small>(IE8 e inferiores, esta depreciado)</small>
- [XMLHttpRequest](https://developer.mozilla.org/es/docs/Web/API/XMLHttpRequest)
- [API Fetch](https://developer.mozilla.org/es/docs/Web/API/Fetch_API)

## Librerías Externas

- [jQuery.ajax()](https://api.jquery.com/category/ajax/)
- [Axios](https://github.com/axios/axios)
- etc.

_**AJAX**_ no es una tecnología en sí mismo. En realidad, se trata de varias tecnologías independientes que se unen:

- **_HTML_** y **_CSS_**, para crear una presentación basada en estándares.
- **_DOM_**, para la interacción y manipulación dinámica de la presentación.
- **_HTML_**, **_XML_** y **_JSON_**, para el intercambio y la manipulación de información.
- **_XMLHttpRequest_** o **_Fetch_**, para el intercambio asíncrono de información.
- **_JavaScript_**, para unir todas las demás tecnologías.

Es importante también considerar los [Códigos de estado de respuesta _HTTP_](https://developer.mozilla.org/es/docs/Web/HTTP/Status) y los estados de la petición _**AJAX**_:

<div class="container-sm table-ajax-states">

| Estado                      | Valor |
| --------------------------- | ----- |
| _READY_STATE_UNINITIALIZED_ | 0     |
| _READY_STATE_LOADING_       | 1     |
| _READY_STATE_LOADED_        | 2     |
| _READY_STATE_INTERACTIVE_   | 3     |
| _READY_STATE_COMPLETE_      | 4     |

</div>

[Ver Video](https://www.youtube.com/watch?v=lN43CTpbWTU&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

---

## Objeto _XMLHttpRequest_

```js
const xhr = new XMLHttpRequest(),
  $xhr = document.getElementById("xhr"),
  $fragment = document.createDocumentFragment();

xhr.addEventListener("readystatechange", (e) => {
  if (xhr.readyState !== 4) return;

  console.log(xhr);

  if (xhr.status >= 200 && xhr.status < 300) {
    console.log("éxito");
    console.log(xhr.responseText);
    //$xhr.innerHTML = xhr.responseText;
    let json = JSON.parse(xhr.responseText);
    console.log(json);

    json.forEach((el) => {
      const $li = document.createElement("li");
      $li.innerHTML = `${el.name} -- ${el.email} -- ${el.phone}`;
      $fragment.appendChild($li);
    });

    $xhr.appendChild($fragment);
  } else {
    console.log("error");
    let message = xhr.statusText || "Ocurrió un error";
    $xhr.innerHTML = `Error ${xhr.status}: ${message}`;
  }

  console.log("Este mensaje cargará de cualquier forma");
});

xhr.open("GET", "https://jsonplaceholder.typicode.com/users");
//xhr.open("GET", "assets/users.json");

xhr.send();
```

[Ver Video](https://www.youtube.com/watch?v=6CQrK1sS7WA&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=106)

---

## _API Fetch_

```js
const $fetch = document.getElementById("fetch"),
  $fragment = document.createDocumentFragment();

//fetch("assets/users.json")
fetch("https://jsonplaceholder.typicode.com/users")
  /* .then((res) => {
      console.log(res);
      return res.ok ? res.json() : Promise.reject(res);
    }) */
  .then((res) => (res.ok ? res.json() : Promise.reject(res)))
  .then((json) => {
    console.log(json);
    //$fetch.innerHTML = json;
    json.forEach((el) => {
      const $li = document.createElement("li");
      $li.innerHTML = `${el.name} -- ${el.email} -- ${el.phone}`;
      $fragment.appendChild($li);
    });

    $fetch.appendChild($fragment);
  })
  .catch((err) => {
    console.log(err);
    let message = err.statusText || "Ocurrió un error";
    $fetch.innerHTML = `Error ${err.status}: ${message}`;
  })
  .finally(() => {
    console.log(
      "Esto se ejecutará independientemente del resultado de la Promesa Fetch"
    );
  });
```

[Ver Video](https://www.youtube.com/watch?v=dYB1UlGGmfk&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=107)

---

## _API Fetch_ + (_Async_ - _Await_)

```js
const $fetchAsync = document.getElementById("fetch-async"),
  $fragment = document.createDocumentFragment();

async function getData() {
  try {
    let res = await fetch("https://jsonplaceholder.typicode.com/users"),
      json = await res.json();

    console.log(res, json);

    //if (!res.ok) throw new Error("Ocurrio un Error al solicitar los Datos");
    if (!res.ok) throw { status: res.status, statusText: res.statusText };

    json.forEach((el) => {
      const $li = document.createElement("li");
      $li.innerHTML = `${el.name} -- ${el.email} -- ${el.phone}`;
      $fragment.appendChild($li);
    });

    $fetchAsync.appendChild($fragment);
  } catch (err) {
    console.log(err);
    let message = err.statusText || "Ocurrió un error";
    $fetchAsync.innerHTML = `Error ${err.status}: ${message}`;
  } finally {
    console.log("Esto se ejecutará independientemente del try... catch");
  }
}

getData();
```

[Ver Video](https://www.youtube.com/watch?v=GP8OCiJLeN4&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=108)

---

## Librería _Axios_

```js
const $axios = document.getElementById("axios"),
  $fragment = document.createDocumentFragment();

axios
  //.get("assets/users.json")
  .get("https://jsonplaceholder.typicode.com/users")
  .then((res) => {
    console.log(res);
    let json = res.data;

    json.forEach((el) => {
      const $li = document.createElement("li");
      $li.innerHTML = `${el.name} -- ${el.email} -- ${el.phone}`;
      $fragment.appendChild($li);
    });

    $axios.appendChild($fragment);
  })
  .catch((err) => {
    console.log(err.response);
    let message = err.response.statusText || "Ocurrió un error";
    $axios.innerHTML = `Error ${err.response.status}: ${message}`;
  })
  .finally(() => {
    console.log("Esto se ejecutará independientemente del resultado Axios");
  });
```

[Ver Video](https://www.youtube.com/watch?v=uxsEZgkcvFU&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=109)

---

## Librería _Axios_ + (_Async_ - _Await_)

```js
const $axiosAsync = document.getElementById("axios-async"),
  $fragment = document.createDocumentFragment();

async function getData() {
  try {
    let res = await axios.get("https://jsonplaceholder.typicode.com/users"),
      json = await res.data;

    console.log(res, json);

    json.forEach((el) => {
      const $li = document.createElement("li");
      $li.innerHTML = `${el.name} -- ${el.email} -- ${el.phone}`;
      $fragment.appendChild($li);
    });

    $axiosAsync.appendChild($fragment);
  } catch (err) {
    console.log(err.response);
    let message = err.response.statusText || "Ocurrió un error";
    $axiosAsync.innerHTML = `Error ${err.response.status}: ${message}`;
  } finally {
    console.log("Esto se ejecutará independientemente del try... catch");
  }
}

getData();
```

[Ver Video](https://www.youtube.com/watch?v=SBr_EVNErPk&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=110)
