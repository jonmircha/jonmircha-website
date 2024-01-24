<aside class="post-menu">

## Temas

- [Isomorfismo](#isomorfismo)
- [_JavaScript_ NO es _JAVA_](#javascript-no-es-java)
- [Características](#características)
- [Escritura de código](#escritura-de-código)
- [Palabras reservadas](#palabras-reservadas)
- [Ordenamiento de código](#ordenamiento-de-código)
- [Tipos de datos en _JavaScript_](#tipos-de-datos-en-javascript)
- [Aprende JavaScript GRATIS](#aprende-javascript-gratis)

---

</aside>

## Isomorfismo

Hoy _JavaScript_, es el único lenguaje capaz de ejecutarse en las 3 capas de una aplicación:

1. _Frontend_ (con _JavaScript_).
1. _Backend_ (con _Node.js_).
1. Persistencia de Datos (con _MongoDB_, _Couch DB_, _Firebase_, etc).

Con JavaScript puedes:

- Diseño y Desarrollo Web.
- Hacer Videojuegos.
- Experiencias _3D_, Realidad Aumentada, Realidad Virtual.
- Controlar _Hardware_ (drones, _robots_, electrodomésticos, _wearables_, etc).
- Aplicaciones Híbridas y Móviles.
- Aprendizaje Automático.
- etc.

[🔼 Regresar](#temas)

---

## _JavaScript_ NO es _JAVA_

![Esto es JavaScript](img/blog/this-is-javascript.jpg)
![JavaScript vs JAVA](img/blog/jsvsjava.jpg)
![JavaScript vs JAVA](img/blog/java-vs-javascript.jpg)

[🔼 Regresar](#temas)

---

## Características

- Lenguaje de Alto Nivel.
- Interpretado.
- Dinámico.
- Débilmente Tipado.
- Multi paradigma.
- Sensible a MAYÚSCULAS y minúsculas.
- No necesitas los puntos y comas al final de cada línea.

[🔼 Regresar](#temas)

---

## Escritura de código

Los **identificadores** deben comenzar con:

- Una letra o
- Un signo de dolar **\$** o
- Un guión bajo **\_**
- Nunca con números o caracteres especiales.

Usa **<i>snake_case</i>** en:

- Nombre de archivos:

```js
mi_archivo_javascript.js;
```

Usa **<i>UPPER_CASE</i>** en:

- Constantes:

```js
const UNA_CONSTANTE = "Soy una constante",
  PI = 3.141592653589793;
```

Usa **<i>UpperCamelCase</i>** en:

- Clases:

```js
class SerHumano {
  constructor(nombre, genero) {
    this.nombre = nombre;
    this.genero = genero;
  }

  miNombreEs() {
    return `Mi nombre es ${this.nombre}`;
  }
}
```

Usa **<i>lowerCamelCase</i>** en:

- Objetos:

```js
const unObjeto = {
  nombre: "Jonathan",
  email: "jonmircha@gmail.com",
};
```

- Primitivos:

```js
let unaCadena = "Hola Mundo",
  unNumero = 19,
  unBoolean = true;
```

- Funciones:

```js
function holaMundo(nombre) {
  alert(`Hola mundo ${nombre}`);
}
holaMundo("Jonathan");
```

- Instancias:

```js
const ajax = new XMLHttpRequest(),
  jon = new SerHumano("Jonathan", "Hombre");
```

[🔼 Regresar](#temas)

---

## Palabras reservadas

```js
A: abstract
B: boolean, break, byte
C: case, catch, char, class, const, continue
D: debugger, default, delete, do, double
E: else, enum, export, extends
F: false, final, finally, float, for, function
G: goto
I: if, implements, import, in, instanceof, int, interface
L: let, long
N: native, new, null
P: package, private, protected, public
R: return
S: short, static, super, switch, synchronized
T: this, throw, throws, transient, true, try, typeof
V: var, volatile, void
W: while, with
```

[🔼 Regresar](#temas)

---

## Ordenamiento de código

1. **IMPORTACIÓN DE MÓDULOS.**
1. **DECLARACIÓN DE VARIABLES.**
1. **DECLARACIÓN DE FUNCIONES.**
1. **EJECUCIÓN DE CÓDIGO.**

[🔼 Regresar](#temas)

---

## Tipos de datos en _JavaScript_

**Primitivos**: Se accede directamente al valor.

- string
- number
- boolean
- null
- undefined
- NaN

**Compuestos**: Se accede a la referencia del valor.

- object = {}
- array = []
- function () { }
- Class {}
- etc.

[🔼 Regresar](#temas)

---

## Aprende _JavaScript_ GRATIS

Si estás interesado en aprender _JavaScript_ desde las bases hasta un nivel que te permita obtener tu primer trabajo o empleo como programador _web_ te invito a que veas mi **Curso de _JavaScript_** totalmente **gratuito** en mi [canal de _YouTube_](https://youtube.com/jonmircha?sub_confirmation=1).

En mi curso aprenderás: Sintaxis, Gramática, Lógica, _EcmaScript_, Programación Orientada a Objetos, Asincronía, _DOM_, _AJAX_, _JSON_, Consumo de _API's_, _Node_ y mucho más.

**¡¡¡Accede ya!!!**

[Ver Curso](https://www.youtube.com/playlist?list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA)

Si no quieres perderte de las últimas novedades de este curso como: nuevos videos, artículos de _blog_, códigos y recursos para estudiar. Entra ya al sitio oficial:

[**Aprende*JavaScript*.org**](https://aprendejavascript.org/)

[🔼 Regresar](#temas)

---
