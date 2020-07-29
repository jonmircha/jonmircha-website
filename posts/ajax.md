---
title: AJAX
description: En esta nota te explico como funciona AJAX en JavaScript
slug: ajax
category: javascript
date: 2020-07-09T18:20:00
poster: /img/blog/ajax.png
---

# _AJAX_

<small class="date">Última actualización: _Jul 09 2020_</small>

<img class="icon-x5" src="/img/category/javascript.svg" alt="Categoría: javascript" title="Categoría: javascript" loading="lazy">

_**AJAX**_ significa _**Asynchronous JavaScript And XML**_. En pocas palabras, es el uso del objeto _**XMLHttpRequest**_ para comunicarse con los servidores.

Puede enviar y recibir información en varios formatos, incluidos _JSON_, _XML_, _HTML_ y archivos de texto.

El atractivo de _**AJAX**_ es su naturaleza _"asíncrona"_, lo que significa que puede comunicarse con el servidor, intercambiar datos y actualizar la página sin tener que recargar el navegador.

<img src="/img/blog/ajax.png" alt="Modelo AJAX" loading="lazy">

<br><hr><br>

## Métodos Nativos

- <a href="https://developer.mozilla.org/en-US/docs/Archive/Web/JavaScript/Microsoft_Extensions/ActiveXObject" target="_blank" rel="noopener">ActiveXObject</a> <small>(IE8 e inferiores)</small>
- <a href="https://developer.mozilla.org/es/docs/Web/API/XMLHttpRequest" target="_blank" rel="noopener">XMLHttpRequest</a>
- <a href="https://developer.mozilla.org/es/docs/Web/API/Fetch_API" target="_blank" rel="noopener">API Fetch</a>

## Librerías Externas

- <a href="https://api.jquery.com/category/ajax/" target="_blank" rel="noopener">jQuery.ajax()</a>
- <a href="https://github.com/axios/axios" target="_blank" rel="noopener">Axios</a>
- etc.

_**AJAX**_ no es una tecnología en sí mismo. En realidad, se trata de varias tecnologías independientes que se unen:

- **_HTML_** y **_CSS_**, para crear una presentación basada en estándares.
- **_DOM_**, para la interacción y manipulación dinámica de la presentación.
- **_HTML_**, **_XML_** y **_JSON_**, para el intercambio y la manipulación de información.
- **_XMLHttpRequest_** o **_Fetch_**, para el intercambio asíncrono de información.
- **_JavaScript_**, para unir todas las demás tecnologías.

Es importante también considerar los <a href="https://developer.mozilla.org/es/docs/Web/HTTP/Status" target="_blank" rel="noopener">Códigos de estado de respuesta _HTTP_</a> y los estados de la petición _**AJAX**_:

- _READY_STATE_UNINITIALIZED_ = 0
- _READY_STATE_LOADING_ = 1
- _READY_STATE_LOADED_ = 2
- _READY_STATE_INTERACTIVE_ = 3
- _READY_STATE_COMPLETE_ = 4

<a class="btn-pulse" href="https://www.youtube.com/watch?v=lN43CTpbWTU&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA" target="_blank" rel="noopener">Ver video</a>

<br><hr><br>
