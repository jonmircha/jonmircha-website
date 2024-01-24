<aside class="post-menu">

## Temas

- [Introducción](#introducción)
- [Sin configuración](#sin-configuración)
- [Modos](#modos)
- [Transpilando _JS_ con _Babel_](#transpilando-js-con-babel)
- [Inyección de _JS_ en _HTML_](#inyección-de-js-en-html)
- [Extracción de _CSS_](#extracción-de-css)
- [Servidor _Web_ de Desarrollo](#servidor-web-de-desarrollo)
- [Aprende más](#aprende-más)

<hr>

</aside>

## Introducción

Es un empaquetador de archivos para aplicaciones _JavaScript_ modernas, totalmente configurable y a diferencia de los _Task Runners_ (como _Grunt_ y _Gulp_) donde los procesos se gestionan de forma separada, en _Webpack_, se conoce el origen y todo se compila en un único archivo.

Crea una gráfica de todas las dependencias de la aplicación. Tiene un archivo de configuración, denominado **_webpack.config.js_**, donde se define todo el proceso de construcción en un objeto _JS_.

_Webpack_ tiene 4 conceptos clave:

- **_Entry_**: Indica cuál es el punto(s) de entrada.
- **_Output_**: Indica cuál es el punto(s) de salida.
- **_Loaders_**: Realizan transformaciones en los archivos.
- **_Plugins_**: Realizan acciones en los archivos.

Aprende más sobre _Webpack_:

- [Sitio Oficial](https://webpack.js.org/)
- [Conceptos básicos](https://webpack.js.org/concepts/)
- [Configuración básica](https://webpack.js.org/configuration/)
- [_Loaders_](https://webpack.js.org/loaders/)
- [_Plugins_](https://webpack.js.org/plugins/)
- [_Dev Server_](https://webpack.js.org/configuration/dev-server/)

[🔼 Regresar](#temas)

---

## Sin configuración

Crea un nuevo directorio y colócate en el:

```bash
mkdir webpack-starter-kit && cd webpack-starter-kit
```

Inicia un proyecto Node:

```bash
npm init
```

Instala _webpack_ y su _cli_:

```bash
npm i -D webpack webpack-cli
```

En el **_package.json_** agrega el siguiente comando:

```json
"scripts" : {
  "build" : "webpack"
}
```

Ejecuta el comando:

```bash
npm run build
```

El comando arrojará un error:

```js
ERROR in Entry module not found: Error: Can't resolve './src' in '~/webpack-starter-kit'
```

_Webpack_ está buscando un punto de entrada en ./src 😱😱😱¡¡¡ Sin Archivo de configuración !!!

A partir de la versión 4 no es necesario definir el punto de entrada, tomará **_./src/index.js_** como valor predeterminado 🤓.

En versiones anteriores, el punto de entrada debe definirse dentro del archivo de configuración denominado **_webpack.config.js_**.

Crea el archivo **_./src/index.js_** y escribe:

```js
console.log("Hola mundo sin configuración con Webpack");
```

Ejecuta nuevamente el comando **_build_** y _Webpack_ en automático nos habrá generado el archivo de salida **_./dist/main,js_** 😱😱😱

[🔼 Regresar](#temas)

---

## Modos

### Producción y Desarrollo

En _Webpack_ un patrón común es tener 2 archivos de configuración uno para las tareas de desarrollo y otro para las de producción.

Mientras que para proyectos grandes aún se pueden necesitar 2 archivos, en proyectos pequeños , es posible especificar el tipo de configuración en una sola línea de configuración.

Desde la versión 4 se introdujo el modo de producción y el modo de desarrollo.

De hecho cuando corrimos el comando **_build_** la terminal nos mando un mensaje de advertencia:

```js
WARNING in configuration
The 'mode' option has not been set, webpack will fallback to 'production' for this value. Set 'mode' option to 'development' or 'production' to enable defaults for each environment.
You can also set it to 'none' to disable any default behavior. Learn more: https://webpack.js.org/concepts/mode/
```

La opción 'modo' no se ha configurado. Establezca la opción 'modo' en 'desarrollo' o 'producción' para habilitar los valores predeterminados para este entorno.

Vamos a crear un comando para cada ambiente:

```json
"scripts" : {
  "dev" : "webpack --mode development" ,
  "build" : "webpack --mode production"
}
```

Ejecutemos ambos comandos y miremos el archivo **_./dist/main.js_** después de ejecutarlos:

- **_npm run dev_** generará un archivo indentado y con comentarios.
- **_npm run build_** generará un archivo minificado y sin comentarios.

Modificando puntos de entrada y salida predeterminados:

```json
"scripts": {
  "dev": "webpack --mode development --entry ./foo/src/index.js --output-path ./foo/dist",
  "build": "webpack --mode production --entry ./foo/src/index.js --output-path ./foo/dist"
}
```

[🔼 Regresar](#temas)

---

## Transpilando _JS_ con _Babel_

_Webpack_ por sí sólo no sabe como transpilar código _ESNext_, pero tiene un _loader_ que lo hace.

Instala **_babel-loader_** y sus dependencias:

```bash
npm i -D babel-loader @babel/core @babel/preset-env
```

Ahora crea el archivo **_.babelrc_** con el siguiente código:

```json
{
  "presets": ["@babel/preset-env"]
}
```

Escribe el siguiente código en tu archivo **_./src/index.js_**

```js
const arr = [1, 2, 3],
  codeESNext = () => console.log(...arr);

codeESNext();
```

Crea el archivo **_webpack.config.js_** y escribe el siguiente código:

```js
module.exports = {
  module: {
    rules: [
      {
        test: /\.js$/i,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
        },
      },
    ],
  },
};
```

Ejecutemos los comandos **_dev_** y **_build_** y miremos el archivo **_./dist/main.js_** después de ejecutarlos:\_

- **_npm run dev_** transpiló el archivo con sintaxis _ESNext_ a _ES5_ indentado y con comentarios, gracias a la configuración del archivo **_webpack.config.js_**.
- **_npm run build_** transpiló el archivo con sintaxis _ESNext_ a _ES5_ minificado y sin comentarios, gracias a la configuración del archivo **_webpack.config.js_**.

[🔼 Regresar](#temas)

---

## Inyección de _JS_ en _HTML_

Para inyectar el código dinámico que genera _Webpack_ en los archivos _HTML_, necesita 2 dependencias : **_html-webpack-plugin_** y **_html-loader_**.

Instala las dependencias:

```bash
npm i -D html-webpack-plugin html-loader
```

Agrega la siguiente regla al archivo **_webpack.config.js_**:

```js
const HtmlWebpackPlugin = require("html-webpack-plugin");

module.exports = {
  module: {
    rules: [
      {
        test: /\.js$/i,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
        },
      },
      {
        test: /\.html$/i,
        use: [
          {
            loader: "html-loader",
            options: { minimize: true },
          },
        ],
      },
    ],
  },
  plugins: [
    new HtmlWebpackPlugin({
      template: "./src/index.html",
      filename: "./index.html",
    }),
  ],
};
```

Ahora crea el archivo **_./src/index.html_**:

```html
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webpack</title>
  </head>
  <body>
    <div id="app"></div>
  </body>
</html>
```

Ejecutemos los comandos **_dev_** o **_build_** y miremos el archivo **_./dist/index.html_** después de ejecutarlos.

No es necesario incluir el _JavaScript_ dentro del archivo _HTML_, _Webpack_ lo ha inyectado automáticamente y ha minificado el código 😎.

[🔼 Regresar](#temas)

---

## Extracción de _CSS_

_Webpack_ por sí sólo no sabe como extraer código _CSS_ en un archivo externo, pero tiene un _loader_ y un _plugin_ que lo hace.

Instala las dependencias:

```bash
npm i -D mini-css-extract-plugin css-loader
```

Agrega la siguiente regla al archivo **_webpack.config.js_**:

```js
const HtmlWebpackPlugin = require("html-webpack-plugin"),
  MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  module: {
    rules: [
      {
        test: /\.js$/i,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
        },
      },
      {
        test: /\.html$/i,
        use: [
          {
            loader: "html-loader",
            options: { minimize: true },
          },
        ],
      },
      {
        test: /\.css$/i,
        use: [MiniCssExtractPlugin.loader, "css-loader"],
      },
    ],
  },
  plugins: [
    new HtmlWebpackPlugin({
      template: "./src/index.html",
      filename: "./index.html",
    }),
    new MiniCssExtractPlugin(),
  ],
};
```

Ahora crea el archivo **_./src/style.css_** con algo de código:

```css
html {
  box-sizing: border-box;
  font-family: sans-serif;
  font-size: 16px;
  color: #8dd6f9;
  background-color: #2b3a42;
}
```

Ahora importamos los estilos desde el punto de entrada, el archivo **_./src/index.js_**:

```js
import style from "./style.css";
```

Ejecutemos los comandos **_dev_** o **_build_** y miremos el archivo **_./dist/index.html_** después de ejecutarlos.

No es necesario incluir el _CSS_ dentro del archivo _HTML_, _Webpack_ lo ha inyectado automáticamente y ha creado el archivo de estilos **_main.css_** 😎.

[🔼 Regresar](#temas)

---

## Servidor Web de Desarrollo

No es muy óptimo estar ejecutando el comando **_dev_** cada vez que hacemos un cambio en nuestra aplicación lo ideal es configurar un servidor _web_ de prueba que en automático recompile nuestro código y recargue el navegador.

_Webpack_, cuenta con su propio servido de desarrollo.

Instala la dependencia:

```bash
npm i -D webpack-dev-server
```

Agregamos el comando **_start_** a nuestro **_package.json_**:

```json
"scripts": {
  "start": "webpack serve  --mode development --open --port 3000"
}
```

Al ejecutarlo, _Webpack_ abrirá la aplicación en una ventana del navegador.

```bash
npm start
```

[🔼 Regresar](#temas)

---

## Aprende más

[Ve mi Curso](https://www.youtube.com/watch?v=-bp3q-YTr4Q)

[🔼 Regresar](#temas)

---
