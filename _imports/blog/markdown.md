_Markdown_ es un lenguaje de marcado ligero creado en 2004 por _John Gruber_, trata de conseguir la máxima legibilidad y facilidad de publicación tanto en su forma de entrada como de salida, inspirándose en muchas convenciones existentes para marcar mensajes de correo electrónico usando texto plano.

Facilita la aplicación de formato y estilo a texto plano empleando una serie de caracteres de forma especial.

El objetivo de su creador fue hacer que la gente pudiera escribir usando un formato de texto plano fácil de leer, fácil de escribir y con la posibilidad de convertir su documento en _HTML_ válido.

La gran simpleza de su sintaxis hizo que tuviera una rápida adopción y popularidad en la comunidad de desarrolladores.

Actualmente aparte de permitir generar contenido _HTML_ de forma dinámica, también se emplea (casí de forma estándar) para la creación de documentación técnica y con la proliferación de la arquitectura _JAM Stack_ para la creación de sitios estáticos a través de herramientas de tipo _SSG_ (_Static Site Generator_) y _SSR_ (_Server Side Rendering_) como _Hugo_, _Gatsby_, _Eleventy_, _Next.js_, _Sergey_, _Astro_, entre otros, _Markdown_ se ocupa para la generación de contenido editorial (artículos de _blog_) de forma dinámica.

## Sintaxis _Markdown_

La sintaxis es muy sencilla y cuenta con varias opciones para algunos de sus elementos. Básicamente se trata de añadir ciertos caracteres al inicio o final de la línea o el elemento al que vamos a aplicar el formato.

<aside class="post-menu">

## Temas

- [Párrafos](#párrafos)
- [Textos](#textos)
- [Encabezados](#encabezados)
- [Enlaces](#enlaces)
- [Imágenes](#imágenes)
- [Divisiones](#divisiones)
- [Listas](#listas)
- [Citas](#citas)
- [Tablas](#tablas)
- [Códigos](#códigos)
- [Comentarios](#comentarios)
- [Escape de caracteres](#escape-de-caracteres)
- [Aprende más](#aprende-más)

---

</aside>

### Párrafos

##### Código _Markdown_

```md
Párrafo 1...

Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, voluptatibus, molestiae omnis, voluptas ullam dolorem accusantium cumque minima quod saepe quis corporis eos nemo sequi dolore reiciendis dignissimos? Quis, provident.

Párrafo 3...
```

##### Contenido _Markdown_

Párrafo 1...

Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, voluptatibus, molestiae omnis, voluptas ullam dolorem accusantium cumque minima quod saepe quis corporis eos nemo sequi dolore reiciendis dignissimos? Quis, provident.

Párrafo 3...

[🔼 Regresar](#sintaxis-markdown)

---

### Textos

Podemos aplicar algunos estilos al texto como: _cursiva_, **negritas** y ~tachado~.

##### Código _Markdown_:

```md
_cursiva_

**negrita**

~tachado~

**_cursiva y negrita_**

_~cursiva y tachado~_

**~negrita y tachado~**

**_~cursiva, negrita y tachado~_**
```

##### Contenido _Markdown_:

_cursiva_

**negrita**

~tachado~

**_cursiva y negrita_**

_~cursiva y tachado~_

**~negrita y tachado~**

**_~cursiva, negrita y tachado~_**

[🔼 Regresar](#sintaxis-markdown)

---

### Encabezados

En _HTML_ existen 6 niveles de encabezados, que nos permite dar jerarquía a los títulos de nuestro contenido. En _Markdown_ tenemos los mismos encabezados.

##### Código _Markdown_:

```md
# Encabezado de nivel 1

## Encabezado de nivel 2

### Encabezado de nivel 3

#### Encabezado de nivel 4

##### Encabezado de nivel 5

###### Encabezado de nivel 6
```

##### Contenido _Markdown_:

# Encabezado de nivel 1

## Encabezado de nivel 2

### Encabezado de nivel 3

#### Encabezado de nivel 4

##### Encabezado de nivel 5

###### Encabezado de nivel 6

[🔼 Regresar](#sintaxis-markdown)

---

### Enlaces

##### Código _Markdown_

```md
[YouTube](https://youtube.com/jonmircha)
```

##### Contenido _Markdown_

[YouTube](https://youtube.com/jonmircha)

[🔼 Regresar](#sintaxis-markdown)

---

### Imágenes

##### Código _Markdown_

```md
![This is JavaScript](https://jonmircha.com/img/blog/this-is-javascript.jpg)
```

##### Contenido _Markdown_

![This is JavaScript](https://jonmircha.com/img/blog/this-is-javascript.jpg)

[🔼 Regresar](#sintaxis-markdown)

---

### Divisiones

En _HTML_ se tiene la etiqueta `<hr>` para definir una división o ruptura semántica entre bloques de contenido. Se visualiza como una línea horizontal.

##### Código _Markdown_

```md
Un bloque de contenido.

---

Otro bloque de contenido.
```

##### Contenido _Markdown_

Un bloque de contenido.

---

Otro bloque de contenido.

[🔼 Regresar](#sintaxis-markdown)

---

### Listas

Podemos utilizar listas ordenadas y desordenadas en _Markdown_.

#### Listas ordenadas

##### Código _Markdown_

```md
1. Primavera
1. Verano
1. Otoño
1. Invierno
```

##### Contenido _Markdown_

1. Primavera
1. Verano
1. Otoño
1. Invierno

#### Listas desordenadas

##### Código _Markdown_

```md
- Primavera
- Verano
- Otoño
- Invierno
```

##### Contenido _Markdown_

- Primavera
- Verano
- Otoño
- Invierno

#### Listas anidadas

Si quieres generar listas anidadas (sublistas), usa la **indentación** para controlar los niveles de los elementos de la lista.

##### Código _Markdown_

```md
- Primavera
  - Abril
  - Mayo
  - Junio
- Verano
  - Julio
  - Agosto
  - Septiembre
- Otoño
  1. Octubre
  1. Noviembre
     - Día de Muertos
     - _Black Friday_
  1. Diciembre
- Invierno
  1. Enero
  1. Febrero
  1. Marzo
```

##### Contenido _Markdown_

- Primavera
  - Abril
  - Mayo
  - Junio
- Verano
  - Julio
  - Agosto
  - Septiembre
- Otoño
  1. Octubre
  1. Noviembre
     - Dia de Muertos
     - _Black Friday_
  1. Diciembre
- Invierno
  1. Enero
  1. Febrero
  1. Marzo

[🔼 Regresar](#sintaxis-markdown)

---

### Citas

Podemos dar formato de cita a un texto, anteponiendo a la línea de texto un carcater de mayor qué (**`>`**).

Podemos declarar citas en una sóla línea o en bloque.

#### Citas en línea

##### Código _Markdown_

```md
> Todo lo que escuchamos es una opinión, no un hecho. Todo lo que vemos es una perspectiva, no la verdad. - Marco Aurelio.
```

##### Contenido _Markdown_

> Todo lo que escuchamos es una opinión, no un hecho. Todo lo que vemos es una perspectiva, no la verdad. - Marco Aurelio.

#### Citas en bloque

##### Código _Markdown_

```md
> Todo lo que escuchamos es una opinión, no un hecho. Todo lo que vemos es una perspectiva, no la verdad.
>
> Marco Aurelio.
```

##### Contenido _Markdown_

> Todo lo que escuchamos es una opinión, no un hecho. Todo lo que vemos es una perspectiva, no la verdad.
>
> Marco Aurelio.

[🔼 Regresar](#sintaxis-markdown)

---

### Tablas

##### Código _Markdown_

```md
| Columna 1 | Columna 2 | Columna 3 |
| --------- | --------- | --------- |
| A         | B         | C         |
| D         | E         | F         |
| G         | H         | I         |
```

##### Contenido _Markdown_

| Columna 1 | Columna 2 | Columna 3 |
| --------- | --------- | --------- |
| A         | B         | C         |
| D         | E         | F         |
| G         | H         | I         |

[🔼 Regresar](#sintaxis-markdown)

---

### Códigos

Podemos dar formato de código a un texto, para ello se usa el acento grave (**\`**).

Podemos declarar código en una sóla línea o en bloque.

#### Código en línea

##### Código _Markdown_

```md
Esto es `código` en línea.

En _JavaScript_ una variable se define así: `let saludo = "Hola Mundo";`.
```

##### Contenido _Markdown_

Esto es `código` en línea.

En _JavaScript_ una variable se define así: `let saludo = "Hola Mundo";`.

#### Código en bloque

##### Código _Markdown_

````md
```js
function sumar(a, b) {
  if (typeof a !== "number" || typeof b !== "number") {
    console.error(`Los valores ingresados NO son números.`);
    return false;
  }

  let c = a + b;
  return c;
}
```
````

##### Contenido _Markdown_

```js
function sumar(a, b) {
  if (typeof a !== "number" || typeof b !== "number") {
    console.error(`Los valores ingresados NO son números.`);
    return false;
  }

  let c = a + b;
  return c;
}
```

#### Código _HTML_

_Markdown_ también interpreta código _HTML_ dentro de su sintaxis.

##### Código _Markdown_

```html
<form>
  <label for="q">Buscar:</label>
  <input type="search" name="q" id="q" required />
  <input type="submit" value="🔍" />
</form>
```

##### Contenido _Markdown_

<form>
  <label for="q">Buscar:</label>
  <input type="search" name="q" id="q" required />
  <input type="submit" value="🔍" />
</form>

[🔼 Regresar](#sintaxis-markdown)

---

### Comentarios

Los comentarios son textos ignorados por el programa que interpreta o compila el código, no se visualizarán. Sirven a los programadores para dejar notas en el código. _Markdown_ utiliza el mismo formato que _HTML_ para comentar.

##### Código _Markdown_

```md
<!-- Esto es un comentario -->
```

##### Contenido _Markdown_

<!-- Esto es un comentario -->

[🔼 Regresar](#sintaxis-markdown)

---

### Escape de caracteres

Se le llama **escape de caracteres** al proceso que hace un lenguaje de marcado o programación para omitir los caracteres especiales que usa para la definición de su sintaxis. Al escapar caracteres, el lenguaje los interpretará como simple texto plano.

Por ejemplo _Markdown_ usa los siguientes caracteres especiales: guión bajo, medio, asterísco, corchetes cuadrados, paréntesis, almohadilla, acento grave, barra invertida, etc.

Para escapar un caracter en _Markdown_ sólo tenemos que anteponerle un barra invertida **`\`**.

##### Código _Markdown_

```md
Texto en \_cursiva\_ y \*\*negrita\*\*.
```

##### Contenido _Markdown_

Texto en \_cursiva\_ y \*\*negrita\*\*.

[🔼 Regresar](#sintaxis-markdown)

---

### Aprende más

Si quieres profundizar en este lenguaje de marcado, el sitio de [_Markdown Guide_](https://www.markdownguide.org/) es una excelente opción que te servirá como guía de consulta rápida donde podrás encontrar: _cheat sheets_, actualizaciones de la sintaxis, herramientas, aplicaciones y servicios que usan _Markdown_.

Otra guía que te puede servir para hacer consultas rápidas mientras te aprendes la sintaxis es la del sitio de [_Joe Di Castro_](https://joedicastro.com/pages/markdown.html).

Si quieres practicar de forma inmediata la sintaxis del lenguaje puedes entrar al sitio de [_Dillinger_](https://dillinger.io/) que es un editor de código _Markdown_ en línea.

En este curso te enseño a trabajar con _Markdown_.

[Ver Curso](https://www.youtube.com/watch?v=FlsoBiteuPM)

[🔼 Regresar](#sintaxis-markdown)

---
