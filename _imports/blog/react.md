<aside class="post-menu">

## Temas

- [Introducción](#introducción)
- [_Create React App_](#create-react-app)
- [_JSX_](#jsx)
- [Componentes](#componentes)
- [Propiedades](#propiedades)
- [Estado](#estado)
- [Renderizado Condicional](#renderizado-condicional)
- [Renderizado de Elementos](#renderizado-de-elementos)
- [Eventos](#eventos)
- [Comunicación entre componentes](#comunicación-entre-componentes)
- [Ciclo de Vida](#ciclo-de-vida)
- [_Hooks_](#hooks)
- [Aprende más](#aprende-más)

---

</aside>

## Introducción

_React_ es una biblioteca _JavaScript_ altamente eficiente y declarativa que se utiliza para crear interfaces de usuario interactivas.

Fue creado por el ingeniero de _Facebook_ _Jordan Walke_ y se lanzó en mayo de 2013.

En los últimos años, ha superado a sus rivales y ha establecido firmemente su dominio.

React te insita a crear **código declarativo** (indicas el qué, no el cómo) y **orientado a componentes**.

Un componente es un pieza de código que puede representar una parte de la interfaz de usuario o una funcionalidad en particular que se puede encapsular y reutilizar en diferentes partes de un desarrollo o incluso en diferentes aplicaciones.

Cada componente **reaccionará** a cambios internos (en su estado) o externos (nuevas propiedades recibidas) y se volvera a redibujar (**renderizado**) en la interfaz. Para ello _React_ utiliza su _**Virtual DOM**_ que es una copia del _DOM_ original del navegador para sólo hacer los cambios necesarios en los nodos que hayan reaccionado y evitar redibujar todo el árbol del _DOM_.

Para poder interactuar con la interfaz _React_ tiene **eventos sintéticos** que son una abstracción de los eventos nativos de los navegadores, para mejorar la compatibilidad y evitar el uso de librerías para _**crossbrowsing**_ (_bye bye jQuery_ 🤭).

### ¿Por qué usarlo?

#### Ventajas:

- **Alto rendimiento**: _React_ es conocido por su alta eficiencia y flexibilidad. Se puede integrar fácilmente con diferentes tecnologías. Se puede usar tanto para el lado del cliente como para el lado del servidor.
- **Recursos abundantes** : como _Facebook_ la mantiene, existe una gran cantidad de documentación y recursos disponibles en la web que hace que la curva de aprendizaje sea muy fluida.
- **Compatibilidad con versiones anteriores** : la transición o migración de versiones anteriores a nuevas es bastante fácil y retrocompatible.
- **Estructura de componentes fácil de mantener**: la arquitectura basada en componentes de _React_ ayuda a aumentar la reutilización del código y facilita bastante el mantenimiento de proyectos a gran escala.
- **Fuerte Comunidad**: _React_ tiene más de 1300 colaboradores en _[GitHub](https://github.com/facebook/react)_.
- **Documentación Multi idioma**: Actualmente _React_ tiene su documentación en diferentes idiomas entre ellos el [español](https://es.reactjs.org/).
- **Flujo de datos unidireccional**: el enlace de datos unidireccional y hacia abajo (de componentes padres a hijos), ayuda a garantizar que los cambios realizados en la estructura del componente hijo no afecten la estructura del componente padre.

#### Desventajas:

- **Complejo**: muchos desarrolladores pueden encontrar en un inicio demasiado compleja la curva de aprendizaje de _React_ en comparación con otros frameworks como el caso de _Vue_. Dicha complejidad puede ser innecesaria para proyectos a pequeña escala.
- **JSX**: el uso de _JSX_ agrega otra capa de complejidad. _JSX_ es un preprocesador que agrega extensión de sintaxis _XML_ a _JavaScript_. Aunque _JSX_ ayuda a codificar el código _React_ de una manera más segura y rápida, puede ser difícil de comprender para los nuevos desarrolladores.
- **Necesidad de un ecosistema de muchas herramientas**: _React_ requiere una amplia gama de herramientas para funcionar correctamente y ser compatible con otras tecnologías.
- **Problemas de SEO**: se sabe que las **_SPAs_** (_Single Page Applications_) creadas con _React_ se enfrentan a problemas de indexación por parte de los rastreadores y _bots_ de motores de búsqueda.

#### ¿Quién lo usa?

Grandes empresas como _Netflix_, _Yahoo_, _Airbnb_, _Instagram_, _Facebook_, _WhatsApp_, _PayPal_, _Microsoft_, la _BBC_, _Aeroméxico_, etc. Incluso grandes sitios de información y noticias que antes usaban _WordPress_ se están migrando a sitios hechos con _JAM stack_ y _React_ como librería principal, tal es el caso de _[Smashing Magazine](https://www.smashingmagazine.com/2020/01/migration-from-wordpress-to-jamstack/)_.

#### Estadísticas que respaldan su uso:

- _[Google Trends](https://trends.google.com.mx/trends/explore?q=react,angular,vue)_.
- _[NPM Trends](https://www.npmtrends.com/react-vs-angular-vs-vue)_.
- _[Stack Overflow Trends](https://insights.stackoverflow.com/trends?tags=reactjs%2Cangular%2Cvue.js)_.
- _[State of JavaScript](https://2020.stateofjs.com/)_.

#### Entorno y Herramientas de Desarrollo.

_React_ es una librería y no técnicamente un _framework_. Por lo que sólo maneja la capa de Vista, tomando como referencia el modelo _MVC_ (Modelo Vista Controlador) para el desarrollo de aplicaciones web. Sin embargo cuenta con una amplia gama de herramientas, librerías y _frameworks_ para complementar su entorno de desarrollo, por ejemplo:

- _**[Node.js y NPM](https://nodejs.org/en/)**_: Para ejecutar el entorno de desarrollo e instalar dependencias.
- _**[Yarn](https://yarnpkg.com/)**_: Un gestor de paquetes _JavaScript_.
- _**[Webpack](https://webpack.js.org/)**_: Es un empaquetador de archivos para aplicaciones _JavaScript_.
- _**[React Router](https://reacttraining.com/react-router/)**_: Librería para manejar rutas declarativas.
- _**[Redux](https://es.redux.js.org/)**_: Es una librería para gestionar el estado de las aplicaciones _JavaScript_.
- _**[Flux](https://facebook.github.io/flux/)**_: Es la arquitectura de aplicaciones que _Facebook_ usa para crear aplicaciones web del lado del cliente.
- _**[Create React App](https://create-react-app.dev/)**_: Un conjunto de configuraciones preestablecidadas para comenzar a trabajar con _React_ ejecutando un sólo comando.
- _**[Gatsby](https://www.gatsbyjs.org/)**_: Es un _framework_ basado en _React_ para desarrollar rápidamente sitios y aplicaciones web, usando diferentes fuentes de datos como _CMS_, _Markdowns_, _APIs_, etc.
- _**[Next.js](https://nextjs.org/)**_: Es un _framework_ basado en _React_ para desarrollar sitios estáticos y aplicaciones del lado del servidor (_**SSR** - Server Side Rendering_).
- _**[GraphQL](https://graphql.org/)**_: Es un lenguaje de consulta de datos para _APIs_.
- _**[React Bootstrap](https://react-bootstrap.github.io/)**_: Es la versión del popular _framework frontend **Bootstrap**_ pero creado con componentes hechos en _React_.
- _**[Material UI](https://material-ui.com/es/)**_: Es un _framework frontend_ inspirado en _**Material Design**_ creado con componentes hechos en _React_.
- _**[React Native](https://facebook.github.io/react-native/)**_: Es un _framework_ basado en _React_ para la creación de aplicaciones móviles y nativas.
- _**[React Dev Tools Chrome](https://chrome.google.com/webstore/detail/react-developer-tools/fmkadmapgofadopljbjfkapdkoienihi?hl=es)**_: Es una extensión para _Chrome_ que agrega de herramientas de depuración para _React_.
- _**[React Dev Tools Firefox](https://addons.mozilla.org/es/firefox/addon/react-devtools/)**_: Es una extensión para _Firefox_ que agrega de herramientas de depuración para _React_.
- _**[Simple React Snippets for VSCode](https://marketplace.visualstudio.com/items?itemName=burkeholland.simple-react-snippets)**_: Es una extensión para _Visual Studio Code_ que nos permite usar atajos para agilizar la escritura de código _React_.

[🔼 Regresar](#temas)

---

## Create React App

Aunque existen varias formas de empezar con _React_, una manera sencilla y eficiente es con _**[create-react-app](https://create-react-app.dev/)**_, una aplicación de consola que nos va a permitir crear aplicaciones _React_ con cero configuración, lo que nos permitirá centrarnos en los más importante: **Programar en _React_**.

Para crear una aplicación utilizamos el comando _**npx create-react-app**_ seguido del nombre que le quieras dar a tu aplicación. Por ejemplo:

```text
npx create-react-app my-app
```

Cuando ejecutas ese comando _create-react-app_ va a crear una carpeta llama _my-app_ con una serie de archivos y subcarpetas para que puedas empezar a trabajar en tu proyecto.

Ingresa a la carpeta _**my-app**_ y ejecuta el proyecto con los siguientes comandos:

```text
cd my-app
npm start
```

El último comando ejecuta el servidor de desarrollo y abre un navegador con una pantalla de bienvenida.

¡Felicidades!, has creado tu primera aplicación con _React_.

### ¿Qué incluye _create-react-app_?

Un proyecto creado con _create-react-app_, además de React, incluye librerías como:

- _**Webpack**_: que se encarga de procesar y empaquetar nuestro código _JavaScript_ (con sus dependencias), archivos _CSS_ y otros archivos estáticos como imágenes, vectores, fuentes, etc.
- _**Babel**_: que nos permite usar nuevas características de _ECMAScript_.
- _**PostCSS**_ que es una librería para el procesamiento de _CSS_.
- _**Jest**_ que es una librería para _testing_.
- etc.

Uno podría configurar un proyecto de _React_ manualmente e incluir cada una de estas librerías, pero es bastante engorroso, _create-react-app_ nos hace la vida más fácil.

### Estructura de carpeta

_create-react-app_ crea la siguiente estructura de archivos y carpetas:

```text
my-app/
  README.md
  node_modules/
  package.json
  public/
    index.html
    favicon.ico
  src/
    App.css
    App.js
    App.test.js
    index.css
    index.js
    logo.svg
```

Los dos archivos más importantes son:

- _**public/index.html**_ - la plantilla _HTML_ de la aplicación.
- _**src/index.js**_ - el punto de entrada _JavaScript_ de la aplicación.

Puedes eliminar o renombrar otros archivos según tus necesidades.

Dentro de _**src**_ se incluyen todos los archivos _JavaScript_ y _CSS_ de tu aplicación.

También es recomendable incluir otros archivos estáticos como imágenes y fuentes en esta carpeta. Puedes crear subcarpetas para organizar mejor los archivos.

En _**public**_ van todos los archivos estáticos que necesites incluir en la plantilla _**public/index.html**_.

Puedes crear otras carpetas además de _**src**_ y _**public**_. Estas carpetas no van a ser incluídas en el paquete de distribución.

### _Scripts_

En la carpeta del proyecto puedes ejecutar los siguientes comandos:

- _**npm start**_ - inicia el servidor de desarrollo y abre un navegador con la aplicación.
- _**npm test**_ - ejecuta las pruebas.
- _**npm run build**_ - empaqueta la aplicación para producción en la carpeta _**build**_.
- _**npm run eject**_ - permite cambiar manualmente las librerías y configuración que utiliza _create-react-app_ por defecto. Ten cuidado con este comando, una vez que se expulsa la configuración inicial **no hay vuelta atrás**.

### _Hot reloading_

Una de las funcionalidades más importantes de los proyectos creados con _create-react-app_ es la capacidad de hacer cambios en vivo sin necesidad de reiniciar el servidor. Si haces un cambio en algún archivo en _**src**_ o _**public**_ el navegador se refresca automáticamente.

[🔼 Regresar](#temas)

---

## _JSX_

Es una extensión de la sintaxis de _JavaScript_ que produce elementos de _React_.

Se puede usar:

- Dentro de estructuras de control como _if_ y _for_.
- Asignarlo a variables.
- Aceptarlo como argumento o retorno en funciones.
- Expresiones _JavaScript_.

Veamos un ejemplo tomado del código que genera _create-react-app_:

```html
<div className="App">
  <header className="App-header">
    <img src="{logo}" className="App-logo" alt="logo" />
    <h1 className="App-title">Welcome to React</h1>
  </header>
  <p className="App-intro">
    To get started, edit <code>src/App.js</code> and save to reload.
  </p>
</div>
```

_**JSX**_ es similar a _HTML_ pero con algunas diferencias importantes:

Algunas reglas importantes:

- Toda etiqueta debe cerrarse por ejemplo `<br>` debera cerrarse a `<br />`.
- Los componentes deben devolver un sólo elemento padre.
- Algunos atributos _HTML_ cambian como:
  - _**class**_ por _**className**_.
  - _**for**_ por _**htmlFor**_.
- Los atributos de un elemento _JSX_ pueden aceptar valores de tipo _String_ entrecomillados o expresiones _JavaScript_ entre llaves, por ejemplo:
  - `<img alt="Avatar" src={user.avatarURL} />`

### _JSX_ se transforma en _JavaScript_

Por debajo _**JSX**_ se transforma en código _JavaScript_. Por ejemplo, el siguiente código _**JSX**_.

```html
<div class="active">Hola Mundo</div>
```

se transforma en el siguiente código _JavaScript_:

```js
React.createElement("div", { className: "active" }, "Hola mundo");
```

Puedes utilizar el [_REPL_ de _Babel_](https://babeljs.io/repl) para ver en qué se convierte el código _JSX_ que escribes.

La ventaja de _**JSX**_ es que, como es _JavaScript_, podemos:

1. Ver algunos errores en tiempo de compilación.
1. Asignar _**JSX**_ a variables. Por ejemplo:

   ```js
   const el = <p>Hola</p>;
   ```

1. Retornar _**JSX**_ desde métodos. Por ejemplo:

   ```js
    renderText() {
      if (someCondition) {
        return <p>Hola</p>;
      } else {
        return <p>Mundo</p>;
      }
    }
   ```

Una restricción de _**JSX**_ es que siempre debes tener un elemento raíz:

```js
const el = (
  <div>
    <p>Hola</p>
    <p>Mundo</p>
  </div>
);
```

Este es un patrón muy común en las aplicaciones de React.

### Mezclando _JSX_ con _JavaScript_

Para mezclar código JavaScript en _**JSX**_ utiliza llaves \(**{}**\):

```jsx
const style = "active";
const title = "Hola Mundo";

<div className={style}>{title}</div>;
```

Una restricción de _**JSX**_ es que no puedes utilizar _**if**_, _**else**_, _**while**_ o _**for**_.

Para agregar condicionales utiliza el **operador ternario**:

```jsx
<div>{condition ? <h1>Hola Mundo</h1> : null}</div>
```

Para mostrar elementos de un arreglo o un objeto utiliza _**map**_:

```jsx
const names = ["Jon", "Irma", "kEnAi"];

const jsx = (
  <ul>
    {names.map((name, index) => (
      <li key={index}>{name}</li>
    ))}
  </ul>
);
```

### Estilos _CSS inline_ en _JSX_

Es posible definir y utilizar estilos _inline_ en _**JSX**_:

```jsx
let styles = {
  borderColor: "#999",
};

const jsx = <div style={styles}>Hola mundo</div>;
```

### Eventos del _DOM_ en _JSX_

En _**JSX**_ se utilizan los eventos estándar del _DOM_ como _**onclick**_, _**onchange**_, _**onkeydown**_, ... pero utilizando _camelCase_: _**onClick**_, _**onChange**_, _**onKeyDown**_, ...

```jsx
<button onClick={alert("Hola")}></button>
```

Fíjate que utilizamos corchetes \(**{}**\) para escribir nuestro código _JavaScript_.

También podríamos pasar una función que es invocada cuando se genere el evento:

```jsx
const saludar = () => alert("Hola!");

<button onClick={saludar}></button>;
```

Fíjate que no estamos invocando la función _**saludar**_, sólo la estamos pasando para que _React_ la invoque cuando ocurra el evento.

[🔼 Regresar](#temas)

---

## Componentes

En _React_ se introduce el concepto de **componentes** para crear la interfaz gráfica de nuestra aplicación.

Permiten separar el código y los elementos de la interfaz en pequeñas piezas independientes y reutilizables que estarán aisladas una de otras.

El objetivo es que cada componente sea independiente y encapsule su marcado, estilos y estado. De esa forma los componentes pueden ser reutilizables y la interfaz gráfica más fácil de mantener y evolucionar.

Se le pueden pasar datos a un componente a través de algo llamado _**props**_ y devuelven a _React_ elementos que describen lo que debe verse en pantalla.

En _React_ los datos fluyen de forma unidireccional, de componentes padres a componentes hijos.

_React_ te permite definir componentes como **clases** o como **funciones**.

### Tipos de Componentes

Como una clase que extiende de _**Component**_ con un método _**render**_:

```jsx
import React, { Component } from "react";

class Title extends Component {
  render() {
    return <h1>Hola mundo</h1>;
  }
}
```

O como una función que retorna lo que se va a renderizar:

```jsx
const Title = () => {
  return <h1>Hola Mundo</h1>;
};
```

### Utilizando un componente

Para utilizar un componente debes importarlo y después incluirlo en tu _**JSX**_ como se muestra en el siguiente ejemplo:

```jsx
import React from "react";
import Title from "./Title";

function App {
    return <Title />;
}
```

[🔼 Regresar](#temas)

---

## Propiedades

Son valores que recibe un componente hijo de uno padre. Se agrupan en un objeto llamado _**props**_, el cual puede recibir diferentes tipos de datos, como:

- _**Strings**_
- _**Numbers**_
- _**Booleans**_
- _**Arrays**_
- _**Objects**_
- _**Functions**_
- _**React Elements**_
- _**React Components**_

Las _**props**_ son **inmutables**, es decir, son valores de **sólo lectura**, no se pueden modificar.

El componente las recibe como atributos que se pasan a través de _**JSX**_.

Por ejemplo, podemos pasar un atributo _**name**_ al componente _**Welcome**_:

```jsx
<Welcome name="Jon" />

<Welcome name="Irma" />
```

Si defines el componente en una clase, las _**props**_ se reciben en el constructor de la clase:

```jsx
class Welcome extends Component {
  constructor(props) {
    super(props);
  }

  render() {
    return <h1>{this.props.name}</h1>;
  }
}
```

Si defines el componente como una función, las _**props**_ se reciben como un parámetro de la función:

```jsx
const Welcome = (props) => {
  return <h1>{props.name}</h1>;
};
```

[🔼 Regresar](#temas)

---

## Estado

El _**state**_ son los valores internos que manejan la lógica y los datos de un componente, permite que éste reaccione a cualquier cambio lo que hará que se vuelva a renderizar en la interfaz.

El estado tiene 3 características importantes:

1. Es inmutable.
1. No se puede modificar directamente.
1. Es asíncrono.

Para hacer cambios hay que hacer uso del método _**setState()**_.

El estado de un componente no es accesible desde otro componente excepto de aquel que lo posee y lo asigna.

La **propagación del estado** fluye de forma **unidireccional** y **descendiente** (hacia abajo), esto significa que un componente padre puede pasar valores de su estado a componentes hijos que lo recibirán como propiedades.

En el momento que los valores del estado del padre sufran cambios esto causará que tanto el padre como los hijos que recibieron esos valores como propiedades se rendericen nuevamente y reaccionen a dicho cambio.

Cada componente que se defina como una clase cuenta con un objeto para almacenar información llamado _**state**_.

Cada vez que cambia el _**state**_ _React_ vuelve a renderizar \(pintar\) el componente en la vista.

```jsx
class Welcome extends Component {
  constructor() {
    super();

    this.state = {
      title: "Hola Mundo",
    };
  }

  render() {
    return <h1>{this.state.title}</h1>;
  }
}
```

En este ejemplo estamos definiendo una componente _**Welcome**_ que inicializa el estado con una llave _**title**_. En el método _**render**_ estamos obteniendo el valor de esa llave con _**this.state.title**_.

Para cambiar el estado utiliza el método _**setState**_:

```jsx
this.setState({
  title: "Hello World",
});
```

[🔼 Regresar](#temas)

---

## Renderizado condicional

En _React_, puedes crear distintos componentes que encapsulan el comportamiento que necesitas. Entonces, puedes renderizar solamente algunos de ellos, dependiendo del estado de tu aplicación.

El renderizado condicional en _React_ funciona de la misma forma que lo hacen las condiciones en _JavaScript_. Puedes usar el condicional _**if**_ o el **operador ternario** para crear elementos dinámicamente en base al valor del estado o las propiedades que recibe el componente.

Considera estos dos componentes:

```jsx
function SaludoUsuario(props) {
  return <h1>¡Bienvenid@ nuevamente!</h1>;
}
```

```jsx
function SaludoInvitado(props) {
  return <h1>Por favor, regístrate.</h1>;
}
```

Vamos a crear un componente _**Saludar**_ que muestra cualquiera de estos componentes dependiendo si el usuario ha iniciado sesión o no:

```jsx
function Saludar(props) {
  const isLoggedIn = props.isLoggedIn;

  if (isLoggedIn) {
    return <SaludoUsuario />;
  }
  return <SaludoInvitado />;
}

ReactDOM.render(
  // Intentar cambiando isLoggedIn={true}:
  <Saludar isLoggedIn={false} />,
  document.getElementById("root")
);
```

Con el **operador ternario** el código quedaría de la siguiente manera:

```jsx
function Saludar(props) {
  const isLoggedIn = props.isLoggedIn;

  return isLoggedIn ? <SaludoUsuario /> : <SaludoInvitado />;
}

ReactDOM.render(
  // Intentar cambiando isLoggedIn={true}:
  <Saludar isLoggedIn={false} />,
  document.getElementById("root")
);
```

[🔼 Regresar](#temas)

---

## Renderizado de elementos

Puedes hacer colecciones de elementos e incluirlos en _JSX_ usando llaves **{}**.

Recorriendo los elementos de un _**array**_ y usando la función _**map()**_ de _Javascript_.

Por ejemplo:

```jsx
const numeros = [1, 2, 3, 4, 5];
const listaElementos = numeros.map((numero) => <li>{numero}</li>);
```

Incluimos el _**array listaElementos**_ dentro de un elemento _**&lt;ul&gt;**_, y lo renderizamos en el _DOM_:

```jsx
ReactDOM.render(<ul>{listaElementos}</ul>, document.getElementById("root"));
```

Refactorizamos el ejemplo anterior en un componente que acepte un _**array**_ de numeros e imprima una lista de elementos.

```jsx
function ListaNumeros(props) {
  const numeros = props.numeros;
  const listaElementos = numeros.map((numero) => <li>{numero}</li>);
  return <ul>{listaElementos}</ul>;
}

const numeros = [1, 2, 3, 4, 5];
ReactDOM.render(
  <ListaNumeros numeros={numeros} />,
  document.getElementById("root")
);
```

Al ejecutar este código, serás advertido que una _**key**_ debería ser proporcionada para elementos de lista.

Una “**_key_**” es un atributo especial de tipo _**string**_ que debes incluir al crear listas de elementos.

Las _**keys**_ ayudan a _React_ a identificar que elementos han cambiado, son agregados, o son eliminados. Las _**keys**_ deben ser dadas a los elementos dentro del array para darle una identidad estable.

La mejor forma de elegir una _**key**_ es usando un _**string**_ que identifique únicamente a un elemento de la lista entre sus hermanos. Habitualmente vas a usar los _IDs_ de tus datos como _**key**_.

Cuando no tengas _IDs_ estables para renderizar, puedes usar como _**key**_ el índice de los elementos del _**array**_ de datos como último recurso.

Las _**keys**_ usadas dentro de _**arrays**_ deberían ser únicas entre sus hermanos. Sin embargo, no necesitan ser únicas globalmente. Podemos usar las mismas _**keys**_ cuando creamos dos o más _**arrays**_ diferentes.

Entonces refactorizando nuestro código anterior quedaría así:

```jsx
function ListaNumeros(props) {
  const numeros = props.numeros;
  const listaElementos = numeros.map((numero, indice) => (
    <li key={indice}>{numero}</li>
  ));
  return <ul>{listaElementos}</ul>;
}

const numeros = [1, 2, 3, 4, 5];
ReactDOM.render(
  <ListaNumeros numeros={numeros} />,
  document.getElementById("root")
);
```

[🔼 Regresar](#temas)

---

## Eventos

Manejar eventos en _React_ es muy similar a manejar eventos en el _DOM_. Sin embargo existen algunas diferencias de sintaxis:

- Los eventos de _React_ se nombran usando _camelCase_, en vez de minúsculas.
- Con _JSX_ pasas una función como el manejador del evento, en vez de un _string_.

Ejemplo, en _HTML_:

```jsx
<button onclick="cambiarIdioma()">Cambiar idioma</button>
```

Ejemplo, en _React_:

```jsx
<button onClick="{cambiarIdioma}">Cambiar idioma</button>
```

Otra diferencia es que en _React_ no puedes retornar _**false**_ para prevenir el comportamiento por defecto. Debes, explícitamente, llamar _**preventDefault**_.

Por ejemplo, en nuestro ejemplo del componente _**Welcome**_ visto en el tema del **Estado** podemos cambiarlo para que cuando hagan click sobre el _**h1**_ cambie el texto. Para eso vamos a definir un método _**updateText**_ que vamos a invocar cuando hagan _**click**_ sobre el _**h1**_:

```jsx
class Welcome extends Component {
  constructor() {
    super();

    this.state = {
      title: "Hola Mundo",
    };

    // tenemos que enlazar el método al contexto actual
    this.updateText = this.updateText.bind(this);
  }

  updateText() {
    this.setState({
      title: "Hello World",
    });
  }

  render() {
    return <h1 onClick={this.updateText}>{this.state.title}</h1>;
  }
}
```

[🔼 Regresar](#temas)

---

## Comunicación entre componentes

Tenemos 3 casos de comunicación entre los componentes de _React_:

1. Comunicación entre un componente padre a uno hijo.
1. Comunicación entre un componente hijo y su padre.
1. Comunicación entre componentes no relacionados.

### Comunicación entre un componente padre a uno hijo

Éste es el caso más natural en el mundo de _React_ y se hace a través del paso de _**props**_ de un componente padre a uno hijo.

```jsx
import React, { Component } from "react";

class Padre extends Component {
  render() {
    return (
      <div>
        <Hijo mensaje="Mensaje para el hijo 1" />
        <Hijo mensaje="Mensaje para el hijo 2" />
      </div>
    );
  }
}

function Hijo(props) {
  return <h2>{props.mensaje}</h2>;
}

export default Padre;
```

### Comunicación entre un componente hijo y su padre

Cuando tenemos la necesidad de que un componente hijo mande datos a su padre los podemos hacer a traves de los **eventos**, simplemente pasamos una función como _**prop**_ del componente padre al componente hijo, y éste ejecutará la función .

En este ejemplo, cambiaremos el estado del componente padre pasando una función al componente hijo e invocando esa función dentro del componente hijo.

```jsx
import React, { Component } from "react";

class Padre extends Component {
  constructor(props) {
    super(props);
    this.state = { contador: 0 };

    this.incrementarContador = this.incrementarContador.bind(this);
  }

  incrementarContador(e) {
    //el contexto del evento proviene del Hijo
    this.setState({ contador: this.state.contador++ });
  }

  render() {
    return (
      <div>
        <Hijo
          mensaje="Mensaje para el hijo 1"
          incrementarContador={incrementarContador}
        />
        <Hijo
          mensaje="Mensaje para el hijo 2"
          incrementarContador={incrementarContador}
        />
      </div>
    );
  }
}

function Hijo(props) {
  return (
    <div>
      <h2>{props.mensaje}</h2>
      <button onClick={props.incrementarContador}>+</button>
    </div>
  );
}

export default Padre;
```

### Comunicación entre componentes no relacionados

Si los componentes no tienen una relación padre-hijo o están relacionados, pero están demasiado lejos, como por ejemplo, un bisnieto o tataranieto, tenemos que crear un mecanismo de observación y/o suscripción para la comunicación entre dichos componentes.

Al menos existen 3 patrones para hacer esto.

1. Patrón **Emisor de eventos / Destino / Despachador** : los oyentes deben hacer referencia a la fuente para suscribirse.
1. Patrón **Publicación / Suscripción**: no necesita una referencia específica a la fuente que desencadena el evento, hay un objeto global accesible en todas partes que maneja todos los eventos.
1. Patrón **Señales**: similar al Emisor de Eventos, pero aquí no usa cadenas aleatorias. Cada objeto que podría emitir eventos debe tener una propiedad específica con ese nombre. De esta manera, se sabe exactamente qué eventos puede emitir un objeto.
1. [**Portales**](https://es.reactjs.org/docs/portals.html): proporcionan una opción de primera clase para renderizar hijos en un nodo _DOM_ que existe por fuera de la jerarquía del _DOM_ del componente padre.

Puedes encontrar más información al respecto en este [enlace](https://github.com/millermedeiros/js-signals/wiki/Comparison-between-different-Observer-Pattern-implementations).

Otra manera de compartir datos entre componentes sin que tengan una relación padre-hijo es compartiendo un **estado global** accesible para todos los componentes de nuestra aplicación, para ello podríamos usar 2 opciones:

1. _**Redux**_: librería externa a _React_ para el manejo del estado.
1. _**Context**_: un _API_ interna de _React_ que provee una forma de pasar datos a través del árbol de componentes sin tener que pasar _props_ manualmente en cada nivel. Esta _API_ la retomaremos cuando veamos el tema de _Hooks_.

[🔼 Regresar](#temas)

---

## Ciclo de Vida

Son métodos que se ejecutan automáticamente en un **Componente de Clase**, ocurren en 3 fases:

1. Montaje.
1. Actualización.
1. Desmontaje

### Montaje

Estos métodos se ejecutan cuando se crea un componente y se inserta en el arbol del _DOM_.

- _**constructor()**_: Se ejecuta al crear la instancia del componente, en el constructor puedes inicializar el estado y enlazar manejadores de eventos.
- _**render()**_: Es el único método requerido, cuando se ejecuta, examina el estado y las propiedades y dibuja el componente en el árbol del _DOM_.
- _**componentDidMount()**_: Se invoca inmediatamente después de que un componente se ha insertado al árbol del _DOM_. Es útil para ejecutar suscripciones o peticiones asíncronas a _API's_, bases de datos, servicios, etc.

### Actualización

Estos métodos son ejecutados por cambios en el estado o las propiedades de los componentes.

- _**render()**_: redibuja el componente cuando detecta cambios en el estado o las propiedades del componente.
- _**componentDidUpdate()**_: Se ejecuta inmediatamente después de que la actualización del estado o las propiedades sucede, al igual que _componenDidMount_ es un método ideal para hacer peticiones externas.

### Desmontaje

Estos métodos son ejecutados una vez que el componente ha sido eliminado del árbol del _DOM_.

- _**componentWillUnmount()**_: Se ejecuta antes de destruir el componente del árbol del _DOM_, es un método útil para hacer tareas de limpieza.

[🔼 Regresar](#temas)

---

## _Hooks_

Los _Hooks_ son una nueva incorporación a partir de _**React 16.8.0**_, que nos permiten **"enganchar"** el estado y el ciclo de vida en componentes basados en funciones.

### ¿Por qué se crearon los _Hooks_?

**Las clases confunden a las personas y a las máquinas**.

Entender la estructura y reglas que implican crear una clase puede ser una curva de aprendizaje lenta y requerir de ciertos conceptos, como el manejo de _this_ en _JavaScript_, por el contrario las funciones son muy fáciles de entender y manipular incluso para personas que van comenzando.

A las máquinas tampoco les gusta las clases ya que no minifican tan bien como las funciones, esto significa que nuestro código ocupará más texto y por ende más espacio de almacenamiento.

### Preguntas frecuentes

- ¿Los _hooks_ hacen que mi aplicación sea más rápida? **NO**.
- ¿Los _hooks_ hacen algo que un Componente de Clase no pueda hacer? **NO**.
- ¿Los Componentes de Clase van a desaparecer? **NO**.
- ¿Mi conocimiento del estado, las propiedades y los eventos serán obsoleto ahora con _hooks_? **NO**.
- ¿Debo reescribir todas mis aplicaciones _React_, ahora con _hooks_? **Probablemente NO**.
- ¿Debo implementar _hooks_ en mi próximo proyecto? **Probablemente SÍ**.

### Tipos de Hooks

- Básicos (en el 100% de tus proyectos):
  - _**useState**_.
  - _**useEffect**_.
- Avanzados (tal vez no en todos tus proyectos):
  - _**useContext**_.
  - _**useRef**_.
  - _**useReducer**_.
  - _**useCallback**_.
  - _**useMemo**_.

Puedes ver toda la lista de _hooks_ disponibles en la [documentación](https://reactjs.org/docs/hooks-reference.html) de _React_.

En este artículo explicaremos los _hooks_:

- _**useState**_.
- _**useEffect**_.

### _useState_

Permite manipular el estado de un componente funcional, se comporta como el objeto _state_ y a la función _this.setState_ de los componentes de clase.

Para usarlo, debemos importarlo desde la librería de React.

```jsx
import React, { useState } from "react";
```

Ahora, en nuestro componente funcional, vamos a inicializar el _hook_, para ello asignaremos mediante la **destructuración de arreglos** 2 elementos:

1. El valor del estado y,
1. Un método para actualizarlo

Adicionalmente le pasaremos como parámetro el valor inicial del estado al método _useState_.

```jsx
import React, { useState } from "react";

export default function Componente() {
  const [valor, setValor] = useState(0);

  return <span>El valor del componente es {valor}</span>;
}
```

Para actualizar el estado tenemos que utilizar el método resultante de la destructuración de _useState_ y pasarle el nuevo valor.

```jsx
import React, { useState } from "react";

export default function Componente() {
  const [valor, setValor] = useState(0);
  return (
    <div>
      <span>El valor del componente es {valor}</span>
      <button onClick={() => setValor(valor + 1)}>Aumentar valor</button>
    </div>
  );
}
```

Un detalle del estado en los _Hooks_, es que no debe ser tratado como un objeto como en los componentes de clases, si necesitas más de un valor cada uno debe ser almacenado en una variable diferente y usar la destructurción de _useState_.

```jsx
import React, { useState } from "react";

export default function Componente() {
  const [valor, setValor] = useState(0);
  const [valor2, setValor2] = useState("Hola Mundo");
  const [valor3, setValor3] = useState(true);

  return (
    <div>
      <span>El valor del componente es {valor}</span>
      <button onClick={() => setValor(valor + 1)}>Aumentar valor</button>
    </div>
  );
}
```

### _useEffect_

Permite hacer uso del ciclo de vida en un componente funcional. Usar _useEffect_ equivale a la combinación de los métodos:

- _componentDidMount()_ (montaje).
- _componentDidUpdate()_ (actualización).
- _componentWillUnmount()_ (desmontaje).

_useEffect_ recibe como parámetro una función que se ejecutará cada vez que nuestro componente se renderice, ya sea por cambios del estado o las propiedades.

Para usarlo, debemos importarlo desde la librería de _React_.

```jsx
import React, { useEffect } from "react";
```

Para añadir un efecto que se ejecutará cada vez que nuestro componente se renderice, se debe pasar como parámetro una función al _hook_ _useEffect_ misma que se ejecutará al renderizarse el componente.

```jsx
import React, { useEffect } from "react";

export default function Efecto() {
  useEffect(function () {
    console.log("Me he renderizado!!!");
  });

  return <span>Este es un ejemplo del hook useEffect.</span>;
}
```

Con _useEffect_ también podemos suscribirnos y desuscribirnos a eventos, temporizadores, servicios, _API's_, etc.

Para ello hay que escribir el código de la suscripción en el cuerpo de la función de _useEffect_ y para evitar problemas de rendimiento o aumento indiscriminado de la memoria y recursos de nuestra aplicación retornar en una función el código que desuscriba o cancele lo que se ejecuto en el cuerpo de la función.

```jsx
import React, { useEffect, useState } from "react";

export default function ScrollYNavegador() {
  const [scrollY, setScrollY] = useState(0);

  useEffect(() => {
    //Creamos una función para actualizar el estado
    const actualizarScrollY = () => {
      let scrollY = window.pageYOffset;
      console.log(`scrollY: ${scrollY}`);
      setScrollY(scrollY);
    };
    //Actualizamos el scroll al montar el componente
    actualizarScrollY();
    //Nos suscribimos al evento scroll de window
    window.addEventListener("scroll", actualizarScrollY);

    //Devolvemos una función para desuscribir el evento
    return () => {
      window.removeEventListener("scroll", actualizarScrollY);
    };
  });

  return (
    <div>
      <span>ScrollY del Navegador: {scrollY}px</span>
    </div>
  );
}
```

Por defecto los efectos se ejecutan cada vez que se realiza un renderizado, si queremos evitar actualizaciones innecesarias o indiscriminadas podemos pasarle un segundo parámetro al _hook_.

El parámetro debe ser un _array_ con todos los valores de los que dependerá el efecto, de forma que sólo se ejecutará cuando ese valor cambie.

```jsx
import React, { useEffect, useState } from "react";

export default function ScrollYNavegador() {
  const [scrollY, setScrollY] = useState(0);

  useEffect(() => {
    //Creamos una función para actualizar el estado
    const actualizarScrollY = () => {
      let scrollY = window.pageYOffset;
      console.log(`scrollY: ${scrollY}`);
      setScrollY(scrollY);
    };
    //Actualizamos el scroll al montar el componente
    actualizarScrollY();
    //Nos suscribimos al evento scroll de window
    window.addEventListener("scroll", actualizarScrollY);

    //Devolvemos una función para desuscribir el evento
    return () => {
      window.removeEventListener("scroll", actualizarScrollY);
    };
  }, [scrollY]);

  return (
    <div>
      <span>ScrollY del Navegador: {scrollY}px</span>
    </div>
  );
}
```

Si le pasamos un _array_ vacío, eso hará que el efecto no dependa de ningún valor, por lo que sólo se ejecutará al montarse y desmontarse el componente.

```jsx
import React, { useEffect, useState } from "react";

export default function ScrollYNavegador() {
  const [scrollY, setScrollY] = useState(0);

  useEffect(() => {
    //Creamos una función para actualizar el estado
    const actualizarScrollY = () => {
      let scrollY = window.pageYOffset;
      console.log(`scrollY: ${scrollY}`);
      setScrollY(scrollY);
    };
    //Actualizamos el scroll al montar el componente
    actualizarScrollY();
    //Nos suscribimos al evento scroll de window
    window.addEventListener("scroll", actualizarScrollY);

    //Devolvemos una función para desuscribir el evento
    return () => {
      window.removeEventListener("scroll", actualizarScrollY);
    };
  }, []);

  return (
    <div>
      <span>ScrollY del Navegador: {scrollY}px</span>
    </div>
  );
}
```

[🔼 Regresar](#temas)

---

## Aprende más

[Ve mi Curso](https://www.youtube.com/playlist?list=PLvq-jIkSeTUZ5XcUw8fJPTBKEHEKPMTKk)

[🔼 Regresar](#temas)
