## ¿Qué es una _API_?

Una _**API**_ (_**Application Programming Interface**_), o Interfaz de Programación de Aplicaciones, es un conjunto de rutinas que provee acceso a funciones de un determinado _software_, para efectos de esta nota, acceso a las funciones de nuestros sitios y aplicaciones _web_.

Dentro de los navegadores _web_ tenemos 2 tipos de _APIs_:

1. **_APIs_ nativas**, como el _DOM_ que es el _API_ que nos permite acceder al código _HTML_ de nuestros documentos a través de _JavaScript_ o la de Geolocalización que no permite acceder a las coordendas terrestres de nuestra ubicación actual; y,
1. **_APIs_ externas**, como la de _Twitter_ que nos permite obtener los últimos tweets de un usuario, o la de _GitHub_ que nos permite obtener la información de los repositorios de una cuenta o como la _API_ de _WordPress_ que nos permite acceder a la información de páginas y entradas de un sitio.

La mayoría de _APIs_ externas del desarrollo _web_ actual, funcionan con la Arquitectura _**REST**_.

## ¿Qué es _REST_?

El término _**REST**_ (_**Representational State Transfer**_) o Transferencia de Estado Representacional, se originó en el año 2000, descrito en la [tesis](https://es.wikipedia.org/wiki/Transferencia_de_Estado_Representacional) de _Roy Fielding_, padre de la especificación _HTTP_.

Un servicio _**REST**_ es un conjunto de restricciones con las que podemos crear un estilo de arquitectura de _software_, la cual podremos usar para crear aplicaciones _web_ respetando el protocolo _HTTP_.

Hoy en día la mayoría de las empresas utilizan _**API REST**_ para crear servicios. Esto se debe a que es un estándar lógico y eficiente para la creación de servicios _web_.

Según _Fielding_ las restricciones que definen a un sistema _**API REST**_ o _**RESTful**_ como también se le conoce, son:

- **Cliente-Servidor**, esta restricción mantiene al cliente y al servidor débilmente acoplados. Esto quiere decir que el cliente no necesita conocer los detalles de implementación del servidor y el servidor se olvida de entender cómo son usados los datos que envía al cliente.
- **Sin Estado**, significa que cada petición recibida por el servidor debería ser independiente, es decir, no es necesario mantener sesiones.
- **Cacheable**, debe admitir un sistema de almacenamiento en _caché_, lo que evitará repetir varias conexiones entre el servidor y el cliente para recuperar un mismo recurso.
- **Interfaz Uniforme**, significa una interfaz genérica para administrar cada interacción que se produzca entre el cliente y el servidor de manera uniforme, lo cual simplifica y separa la arquitectura. Esta restricción indica que cada recurso del servicio _**REST**_ debe tener una única dirección (_URL_) _web_, a estas rutas se les da el nombre de _**endpoints**_.
- **Sistema de Capas**, el servidor puede disponer de varias capas para su implementación. Esto ayuda a mejorar la escalabilidad, el rendimiento y la seguridad.

Si creas aplicaciones _web_ con _JavaScript_, las _API REST_ probablemente serán la forma principal de obtener datos para tus aplicaciones, así como la de enviar datos hacia una base de datos.

Así que... ...sí las _API REST_, son el nuevo _CRUD_ del desarrollo moderno, con la ventaja de que puedes desacoplar tu la lógica de tu cliente de la del servidor y la base de datos.

![CRUD](https://jonmircha.com/img/blog/crud.png)

<div class="container-sm table-crud-rest">

| Operaciones _CRUD_ | Peticiones _REST_ |
| ------------------ | ----------------- |
| _INSERT_           | _POST_            |
| _SELECT_           | _GET_             |
| _UPDATE_           | _PUT_             |
| _DELETE_           | _DELETE_          |

</div>

![REST - CRUD](https://jonmircha.com/img/blog/rest-crud.png)

Otra ventaja de este modelo de desarrollo es que puedes usar un mismo origen de datos para distintos clientes, por ejemplo un cliente nativo (_iOS_, _Android_), un cliente de escritorio (_Windows_) o un cliente _web_ (Navegadores).

![Arquitectura REST](https://jonmircha.com/img/blog/rest-arquitectura.jpg)

[Ver Video](https://www.youtube.com/watch?v=wzoUu6rcQ4c&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

### Creando un _API REST_ falsa

#### _JSON Server_

[Ver Video](https://www.youtube.com/watch?v=g0IZP95Mc18&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=112)

#### Consumo de datos con cliente _REST_

[Ver Video](https://www.youtube.com/watch?v=09w2S9g7m74&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=113)

#### _CRUD_ _REST_

[Ver Video](https://www.youtube.com/watch?v=MDPz2UST-Zo&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=114)

## _CRUD_ _REST_ con _AJAX_

```html
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD API REST AJAX</title>
  </head>

  <body>
    <h1>CRUD API REST AJAX</h1>
    <section class="crud">
      <article>
        <h2 class="crud-title">Agregar Santo</h2>
        <form class="crud-form">
          <input type="text" name="nombre" placeholder="nombre" required />
          <br />
          <input
            type="text"
            name="constelacion"
            placeholder="constelación"
            required
          />
          <br />
          <input type="submit" value="Enviar" />
          <input type="hidden" name="id" />
        </form>
      </article>
      <article>
        <h2>Ver Santos</h2>
        <table class="crud-table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Constelación</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </article>
    </section>
    <template id="crud-template">
      <tr>
        <td class="name"></td>
        <td class="constellation"></td>
        <td>
          <button class="edit">Editar</button>
          <button class="delete">Eliminar</button>
        </td>
      </tr>
    </template>
    <script>
      const d = document,
        $table = d.querySelector(".crud-table"),
        $form = d.querySelector(".crud-form"),
        $title = d.querySelector(".crud-title"),
        $template = d.getElementById("crud-template").content,
        $fragment = d.createDocumentFragment();

      const ajax = (options) => {
        let { url, method, success, error, data } = options;
        const xhr = new XMLHttpRequest();

        xhr.addEventListener("readystatechange", (e) => {
          if (xhr.readyState !== 4) return;

          if (xhr.status >= 200 && xhr.status < 300) {
            let json = JSON.parse(xhr.responseText);
            success(json);
          } else {
            let message = xhr.statusText || "Ocurrió un error";
            error(`Error ${xhr.status}: ${message}`);
          }
        });

        xhr.open(method || "GET", url);
        xhr.setRequestHeader("Content-type", "application/json; charset=utf-8");
        xhr.send(JSON.stringify(data));
      };

      const getAll = () => {
        ajax({
          url: "http://localhost:5555/santos",
          success: (res) => {
            console.log(res);

            res.forEach((el) => {
              $template.querySelector(".name").textContent = el.nombre;
              $template.querySelector(".constellation").textContent =
                el.constelacion;
              $template.querySelector(".edit").dataset.id = el.id;
              $template.querySelector(".edit").dataset.name = el.nombre;
              $template.querySelector(".edit").dataset.constellation =
                el.constelacion;
              $template.querySelector(".delete").dataset.id = el.id;

              let $clone = d.importNode($template, true);
              $fragment.appendChild($clone);
            });

            $table.querySelector("tbody").appendChild($fragment);
          },
          error: (err) => {
            console.log(err);
            $table.insertAdjacentHTML("afterend", `<p><b>${err}</b></p>`);
          },
        });
      };

      d.addEventListener("DOMContentLoaded", getAll);

      d.addEventListener("submit", (e) => {
        if (e.target === $form) {
          e.preventDefault();

          if (!e.target.id.value) {
            //Create - POST
            ajax({
              url: "http://localhost:5555/santos",
              method: "POST",
              success: (res) => location.reload(),
              error: (err) =>
                $form.insertAdjacentHTML("afterend", `<p><b>${err}</b></p>`),
              data: {
                nombre: e.target.nombre.value,
                constelacion: e.target.constelacion.value,
              },
            });
          } else {
            //Update - PUT
            ajax({
              url: `http://localhost:5555/santos/${e.target.id.value}`,
              method: "PUT",
              success: (res) => location.reload(),
              error: (err) =>
                $form.insertAdjacentHTML("afterend", `<p><b>${err}</b></p>`),
              data: {
                nombre: e.target.nombre.value,
                constelacion: e.target.constelacion.value,
              },
            });
          }
        }
      });

      d.addEventListener("click", (e) => {
        if (e.target.matches(".edit")) {
          $title.textContent = "Editar Santo";
          $form.nombre.value = e.target.dataset.name;
          $form.constelacion.value = e.target.dataset.constellation;
          $form.id.value = e.target.dataset.id;
        }

        if (e.target.matches(".delete")) {
          let isDelete = confirm(
            `¿Estás seguro de eliminar el id ${e.target.dataset.id}?`
          );

          if (isDelete) {
            //Delete - DELETE
            ajax({
              url: `http://localhost:5555/santos/${e.target.dataset.id}`,
              method: "DELETE",
              success: (res) => location.reload(),
              error: (err) => alert(err),
            });
          }
        }
      });
    </script>
  </body>
</html>
```

[Ver Video (parte 1)](https://www.youtube.com/watch?v=FGBm1fjNMhI&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=115)

[Ver Video (parte 2)](https://www.youtube.com/watch?v=0j24Rebv8NU&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=116)

## _CRUD_ _REST_ con _Fetch_

```html
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD API REST FETCH</title>
  </head>

  <body>
    <h1>CRUD API REST FETCH</h1>
    <section class="crud">
      <article>
        <h2 class="crud-title">Agregar Santo</h2>
        <form class="crud-form">
          <input type="text" name="nombre" placeholder="nombre" required />
          <br />
          <input
            type="text"
            name="constelacion"
            placeholder="constelación"
            required
          />
          <br />
          <input type="submit" value="Enviar" />
          <input type="hidden" name="id" />
        </form>
      </article>
      <article>
        <h2>Ver Santos</h2>
        <table class="crud-table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Constelación</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </article>
    </section>
    <template id="crud-template">
      <tr>
        <td class="name"></td>
        <td class="constellation"></td>
        <td>
          <button class="edit">Editar</button>
          <button class="delete">Eliminar</button>
        </td>
      </tr>
    </template>
    <script>
      const d = document,
        $table = d.querySelector(".crud-table"),
        $form = d.querySelector(".crud-form"),
        $title = d.querySelector(".crud-title"),
        $template = d.getElementById("crud-template").content,
        $fragment = d.createDocumentFragment();

      const getAll = async () => {
        try {
          let res = await fetch("http://localhost:5555/santos"),
            json = await res.json();

          if (!res.ok) throw { status: res.status, statusText: res.statusText };

          console.log(json);
          json.forEach((el) => {
            $template.querySelector(".name").textContent = el.nombre;
            $template.querySelector(".constellation").textContent =
              el.constelacion;
            $template.querySelector(".edit").dataset.id = el.id;
            $template.querySelector(".edit").dataset.name = el.nombre;
            $template.querySelector(".edit").dataset.constellation =
              el.constelacion;
            $template.querySelector(".delete").dataset.id = el.id;

            let $clone = d.importNode($template, true);
            $fragment.appendChild($clone);
          });

          $table.querySelector("tbody").appendChild($fragment);
        } catch (err) {
          let message = err.statusText || "Ocurrió un error";
          $table.insertAdjacentHTML(
            "afterend",
            `<p><b>Error ${err.status}: ${message}</b></p>`
          );
        }
      };

      d.addEventListener("DOMContentLoaded", getAll);

      d.addEventListener("submit", async (e) => {
        if (e.target === $form) {
          e.preventDefault();

          if (!e.target.id.value) {
            //Create - POST
            try {
              let options = {
                  method: "POST",
                  headers: {
                    "Content-type": "application/json; charset=utf-8",
                  },
                  body: JSON.stringify({
                    nombre: e.target.nombre.value,
                    constelacion: e.target.constelacion.value,
                  }),
                },
                res = await fetch("http://localhost:5555/santos", options),
                json = await res.json();

              if (!res.ok)
                throw { status: res.status, statusText: res.statusText };

              location.reload();
            } catch (err) {
              let message = err.statusText || "Ocurrió un error";
              $form.insertAdjacentHTML(
                "afterend",
                `<p><b>Error ${err.status}: ${message}</b></p>`
              );
            }
          } else {
            //Update - PUT
            try {
              let options = {
                  method: "PUT",
                  headers: {
                    "Content-type": "application/json; charset=utf-8",
                  },
                  body: JSON.stringify({
                    nombre: e.target.nombre.value,
                    constelacion: e.target.constelacion.value,
                  }),
                },
                res = await fetch(
                  `http://localhost:5555/santos/${e.target.id.value}`,
                  options
                ),
                json = await res.json();

              if (!res.ok)
                throw { status: res.status, statusText: res.statusText };

              location.reload();
            } catch (err) {
              let message = err.statusText || "Ocurrió un error";
              $form.insertAdjacentHTML(
                "afterend",
                `<p><b>Error ${err.status}: ${message}</b></p>`
              );
            }
          }
        }
      });

      d.addEventListener("click", async (e) => {
        if (e.target.matches(".edit")) {
          $title.textContent = "Editar Santo";
          $form.nombre.value = e.target.dataset.name;
          $form.constelacion.value = e.target.dataset.constellation;
          $form.id.value = e.target.dataset.id;
        }

        if (e.target.matches(".delete")) {
          let isDelete = confirm(
            `¿Estás seguro de eliminar el id ${e.target.dataset.id}?`
          );

          if (isDelete) {
            //Delete - DELETE
            try {
              let options = {
                  method: "DELETE",
                  headers: {
                    "Content-type": "application/json; charset=utf-8",
                  },
                },
                res = await fetch(
                  `http://localhost:5555/santos/${e.target.dataset.id}`,
                  options
                ),
                json = await res.json();

              if (!res.ok)
                throw { status: res.status, statusText: res.statusText };

              location.reload();
            } catch (err) {
              let message = err.statusText || "Ocurrió un error";
              alert(`Error ${err.status}: ${message}`);
            }
          }
        }
      });
    </script>
  </body>
</html>
```

[Ver Video (parte 1)](https://www.youtube.com/watch?v=dmkzieeLibk&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=117)

[Ver Video (parte 2)](https://www.youtube.com/watch?v=0LMThcUx__0&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=118)

## _CRUD_ _REST_ con _Axios_

```html
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUD API REST AXIOS</title>
  </head>

  <body>
    <h1>CRUD API REST AXIOS</h1>
    <section class="crud">
      <article>
        <h2 class="crud-title">Agregar Santo</h2>
        <form class="crud-form">
          <input type="text" name="nombre" placeholder="nombre" required />
          <br />
          <input
            type="text"
            name="constelacion"
            placeholder="constelación"
            required
          />
          <br />
          <input type="submit" value="Enviar" />
          <input type="hidden" name="id" />
        </form>
      </article>
      <article>
        <h2>Ver Santos</h2>
        <table class="crud-table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Constelación</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </article>
    </section>
    <template id="crud-template">
      <tr>
        <td class="name"></td>
        <td class="constellation"></td>
        <td>
          <button class="edit">Editar</button>
          <button class="delete">Eliminar</button>
        </td>
      </tr>
    </template>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
      const d = document,
        $table = d.querySelector(".crud-table"),
        $form = d.querySelector(".crud-form"),
        $title = d.querySelector(".crud-title"),
        $template = d.getElementById("crud-template").content,
        $fragment = d.createDocumentFragment();

      const getAll = async () => {
        try {
          let res = await axios.get("http://localhost:5555/santos"),
            json = await res.data;

          console.log(json);

          json.forEach((el) => {
            $template.querySelector(".name").textContent = el.nombre;
            $template.querySelector(".constellation").textContent =
              el.constelacion;
            $template.querySelector(".edit").dataset.id = el.id;
            $template.querySelector(".edit").dataset.name = el.nombre;
            $template.querySelector(".edit").dataset.constellation =
              el.constelacion;
            $template.querySelector(".delete").dataset.id = el.id;

            let $clone = d.importNode($template, true);
            $fragment.appendChild($clone);
          });

          $table.querySelector("tbody").appendChild($fragment);
        } catch (err) {
          let message = err.statusText || "Ocurrió un error";
          $table.insertAdjacentHTML(
            "afterend",
            `<p><b>Error ${err.status}: ${message}</b></p>`
          );
        }
      };

      d.addEventListener("DOMContentLoaded", getAll);

      d.addEventListener("submit", async (e) => {
        if (e.target === $form) {
          e.preventDefault();

          if (!e.target.id.value) {
            //Create - POST
            try {
              let options = {
                  method: "POST",
                  headers: {
                    "Content-type": "application/json; charset=utf-8",
                  },
                  data: JSON.stringify({
                    nombre: e.target.nombre.value,
                    constelacion: e.target.constelacion.value,
                  }),
                },
                res = await axios("http://localhost:5555/santos", options),
                json = await res.data;

              location.reload();
            } catch (err) {
              let message = err.statusText || "Ocurrió un error";
              $form.insertAdjacentHTML(
                "afterend",
                `<p><b>Error ${err.status}: ${message}</b></p>`
              );
            }
          } else {
            //Update - PUT
            try {
              let options = {
                  method: "PUT",
                  headers: {
                    "Content-type": "application/json; charset=utf-8",
                  },
                  data: JSON.stringify({
                    nombre: e.target.nombre.value,
                    constelacion: e.target.constelacion.value,
                  }),
                },
                res = await axios(
                  `http://localhost:5555/santos/${e.target.id.value}`,
                  options
                ),
                json = await res.data;

              location.reload();
            } catch (err) {
              let message = err.statusText || "Ocurrió un error";
              $form.insertAdjacentHTML(
                "afterend",
                `<p><b>Error ${err.status}: ${message}</b></p>`
              );
            }
          }
        }
      });

      d.addEventListener("click", async (e) => {
        if (e.target.matches(".edit")) {
          $title.textContent = "Editar Santo";
          $form.nombre.value = e.target.dataset.name;
          $form.constelacion.value = e.target.dataset.constellation;
          $form.id.value = e.target.dataset.id;
        }

        if (e.target.matches(".delete")) {
          let isDelete = confirm(
            `¿Estás seguro de eliminar el id ${e.target.dataset.id}?`
          );

          if (isDelete) {
            //Delete - DELETE
            try {
              let options = {
                  method: "DELETE",
                  headers: {
                    "Content-type": "application/json; charset=utf-8",
                  },
                },
                res = await axios(
                  `http://localhost:5555/santos/${e.target.dataset.id}`,
                  options
                ),
                json = await res.data;

              location.reload();
            } catch (err) {
              let message = err.statusText || "Ocurrió un error";
              alert(`Error ${err.status}: ${message}`);
            }
          }
        }
      });
    </script>
  </body>
</html>
```

[Ver Video (parte 1)](https://www.youtube.com/watch?v=uvTgSMYbV8c&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=119)

[Ver Video (parte 2)](https://www.youtube.com/watch?v=Z535sOcIaMA&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=120)
