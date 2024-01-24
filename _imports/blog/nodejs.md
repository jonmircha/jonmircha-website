<aside class="post-menu">

## Temas

- [Introducción](#introducción)
- [Instalación](#instalación)
- [_REPL_](#repl)
- [Hola Mundo](#hola-mundo)
- [_Blocking VS Non Blocking_](#blocking-vs-non-blocking)
- [_Single Thread_](#single-thread)
- [_Event Loop_](#event-loop)
- [Módulos](#módulos)
- [_NPM_](#npm)
- [Aprende más](#aprende-más)

---

</aside>

## Introducción

### ¿Qué es _Node.js_?

> *Node.js*® es un entorno de ejecución para _JavaScript_ construido con el motor de _JavaScript_ _V8_ de _Chrome_. _Node.js_ usa un modelo de operaciones _E/S_ sin bloqueo y orientado a eventos, que lo hace liviano y eficiente. El ecosistema de paquetes de _Node.js_, _npm_, es el ecosistema mas grande de librerías de código abierto en el mundo.
>
> - [Node.js en español](https://nodejs.org/es/).

_Node.js_ es un entorno de ejecución de código abierto basado en el motor de _JavaScript_ _V8_ de _Google Chrome_. Permite a los desarrolladores ejecutar código _JavaScript_ fuera del navegador _web_, lo que significa que pueden utilizar _JavaScript_ para construir aplicaciones en el lado del servidor. Fue creado por _Ryan Dahl_ en 2009 y desde entonces se ha convertido en una tecnología ampliamente adoptada y popular en el mundo del desarrollo _web_.

### Historia

La historia de _Node.js_ comienza en 2009 cuando _Ryan Dahl_, un ingeniero de _software_, presentó por primera vez _Node.js_ en el evento "_JSConf EU_" en Berlín. La idea detrás de _Node.js_ surgió de la frustración de _Dahl_ con los servidores _web_ tradicionales que utilizaban el modelo de hilos, que a menudo resultaba en un rendimiento deficiente y problemas de escalabilidad.

_Ryan Dahl_ quería construir un entorno de servidor que pudiera manejar múltiples solicitudes concurrentes de manera eficiente y escalable. Para lograr esto, eligió utilizar el motor _V8 de Google Chrome_, que es un motor de _JavaScript_ de alto rendimiento. _Dahl_ desarrolló una capa de red y _E/S_ sobre el motor utilizando el lenguaje de programación _C++_, y lo llamó "_Node.js_".

Fue lanzado oficialmente en 2009 y su enfoque en la asincronía y el modelo no bloqueante lo hizo popular rápidamente entre los desarrolladores. La comunidad de _Node.js_ comenzó a crecer y aportar bibliotecas y módulos adicionales a través de _NPM_ (_Node Package Manager_), que se convirtió en el gestor de paquetes estándar para _Node.js_.

En los años siguientes, _Node.js_ continuó evolucionando y ganando popularidad. Grandes empresas como _LinkedIn_, _PayPal_, _Netflix_ y _Walmart_ lo adoptaron para sus aplicaciones y servicios, lo que contribuyó a su crecimiento y aceptación en la industria.

En 2015, dio un importante paso hacia la madurez con la convergencia de dos proyectos que habían surgido anteriormente: _Node.js_ y _io.js_. Ambos proyectos trabajaron juntos bajo la iniciativa "_Node.js Foundation_" para consolidar esfuerzos y unificar la comunidad. Esto llevó a la creación de _Node.js v4_, que incluyó características y mejoras significativas.

Desde entonces, _Node.js_ ha seguido mejorando y lanzando nuevas versiones de manera regular. Ha continuado siendo una tecnología popular para el desarrollo de aplicaciones _web_, servicios en tiempo real, aplicaciones de Internet de las cosas (_IoT_) y más. La comunidad activa de desarrolladores, las constantes mejoras de rendimiento y la amplia adopción en la industria aseguran que _Node.js_ seguirá siendo una herramienta relevante y poderosa para el desarrollo en el futuro.

Algunos videos con más información:

- [Presentación de _Node.js_ por _Ryan Dahl_](https://youtube.com/watch?v=ztspvPYybIY).
- [Historia de _Node.js_](https://youtube.com/watch?v=cw7XvUWimZo).

### Isomorfismo con _JavaScript_

El isomorfismo es una técnica de programación que permite ejecutar el mismo código en el lado del cliente y en el lado del servidor.

Hoy _JavaScript_, es el único lenguaje de programación capaz de ejecutarse en las 3 capas del desarrollo que tiene una aplicación _web_:

1. En el **_Frontend_** con el _JavaScript_ de toda la vida, el de los navegadores.
1. En el **_Backend_** con entornos de programación como [_Node.js_](https://nodejs.org/es), [_Deno_](https://deno.land/) o [_Bun_](https://bun.sh/).
1. En la **Persistencia de Datos** con gestores de bases de datos [_NoSQL_](./nosql) como _MongoDB_, _Couch DB_, _Firebase_, etc.

Incluso hoy con _JavaScript_ gracias a su entorno _Node.js_ podemos controlar dispositivos de _Hardware_ y _IoT_ como controladores y _chips_ tipo _Arduino_, robots, drones, _wearables_, electrodomésticos y más.

Veamos algunas de las características más importantes de _Node.js_ en estos contextos de desarrollo.

#### _Node.js_ en el _Frontend_:

En el contexto del desarrollo _Frontend_, _Node.js_ tiene varios usos importantes:

1. **Ejecución de tareas en el entorno de desarrollo:** Es útil para ejecutar tareas y _scripts_ durante el proceso de desarrollo _frontend_. Por ejemplo, se puede utilizar para compilar archivos _CSS_ y _JavaScript_, optimizar imágenes, concatenar archivos, minificar código, y otras tareas comunes que mejoran el rendimiento y la eficiencia de una aplicación _web_.
1. **Manejo de paquetes y dependencias:** Junto con _NPM_ (_Node Package Manager_), es ampliamente utilizado para gestionar dependencias y paquetes en el _frontend_. Con NPM, los desarrolladores pueden instalar y administrar librerías y _frameworks_ de _JavaScript_ que se utilizan en el frontend del proyecto.
1. **Entorno de construcción (_build environment_):** Puede ser utilizado como un entorno de construcción para aplicaciones _frontend_. Es especialmente común en proyectos que utilizan _frameworks_ de _frontend_ como _React_, _Vue.js_ o _Angular_, donde se pueden configurar _scripts_ y tareas para compilar, empaquetar y optimizar el código antes de desplegarlo en producción.
1. **Desarrollo de herramientas _frontend_:** Permite a los desarrolladores crear herramientas y utilidades que facilitan el desarrollo _frontend_. Por ejemplo, se pueden construir herramientas de generación de código, _scaffolding_ (plantillas de proyecto), _linters_, y otras utilidades para mejorar la calidad y productividad del equipo de desarrollo.
1. **Servidores de desarrollo locales:** Al utilizar _Node.js_, los desarrolladores pueden configurar servidores de desarrollo locales para probar su aplicación frontend antes de desplegarla en un servidor de producción. Esto les permite trabajar en un entorno seguro y controlado, y realizar cambios en tiempo real sin tener que depender de un servidor _web_ externo.
1. **Pruebas y automatización:** Es ampliamente utilizado en el desarrollo _frontend_ para realizar pruebas unitarias, pruebas de integración y pruebas _end-to-end_. Además, se puede utilizar para automatizar tareas de prueba, lo que permite a los desarrolladores detectar y solucionar problemas rápidamente.
1. **_Server-Side Rendering_ (_SSR_):** Algunos _frameworks_ de _frontend_, como _React_ y _Vue.js_, permiten el _Server Side Rendering_ (renderizado del lado del servidor). _Node.js_ es esencial para habilitar este proceso, ya que puede ejecutar el código de estos _frameworks_ en el servidor y enviar una página _HTML_ completamente renderizada al cliente, lo que mejora el rendimiento y la experiencia del usuario.

En resumen, _Node.js_ es una herramienta versátil y poderosa que desempeña un papel crucial en el desarrollo _frontend_ moderno. Permite a los desarrolladores mejorar la eficiencia, gestionar dependencias, automatizar tareas y realizar pruebas para crear aplicaciones más eficientes y robustas.

#### _Node.js_ en el _Backend_:

En el contexto del desarrollo _Backend_, _Node.js_ tiene varios usos importantes:

1. **Basado en _JavaScript_:** Utiliza el mismo lenguaje de programación, _JavaScript_, tanto en el lado del cliente (navegador) como en el lado del servidor (_Node.js_). Esto permite a los desarrolladores utilizar las mismas habilidades y herramientas en ambos entornos.
1. **Asíncrono y No bloqueante:** Utiliza un modelo de entrada/salida sin bloqueo y basado en eventos, lo que permite a las aplicaciones manejar múltiples solicitudes y operaciones simultáneamente sin esperar a que una operación termine antes de pasar a la siguiente.
1. **Eficiente y Rápido:** Gracias a su arquitectura no bloqueante, es muy eficiente y escalable, lo que lo hace adecuado para aplicaciones en tiempo real y de alto rendimiento.
1. **Escalabilidad:** Se diseñó desde el principio con la escalabilidad en mente. Su enfoque en la asincronía y la eficiencia permite que las aplicaciones creadas, escalen fácilmente para manejar una mayor carga de trabajo sin aumentar significativamente los recursos del servidor.
1. **Amplia comunidad y ecosistema:** Cuenta con una gran comunidad de desarrolladores y una amplia variedad de bibliotecas y paquetes disponibles a través de _NPM_ (_Node Package Manager_), lo que facilita la construcción de aplicaciones con funcionalidades avanzadas y reutilizables.
1. **Manejo de solicitudes HTTP:** Incluye un módulo `http` que permite crear fácilmente servidores web y manejar solicitudes y respuestas _HTTP_, lo que lo hace ideal para el desarrollo de aplicaciones _web_ y _APIs_.
1. **Multi Plataforma:** Es compatible con múltiples sistemas operativos, como _Windows_, _macOS_ y _Linux_, lo que facilita la portabilidad de las aplicaciones desarrolladas en este entorno.
1. **Uso del mismo lenguaje en el cliente y el servidor:** Al utiliza _JavaScript_ tanto en el lado del cliente como en el servidor. Esto simplifica el desarrollo para aquellos que ya están familiarizados con dicho lenguaje, ya que pueden utilizar las mismas habilidades y conocimientos en ambos lados, lo que reduce la curva de aprendizaje.
1. **Ideal para aplicaciones en tiempo real:** Gracias a su modelo no bloqueante y su capacidad para manejar muchas conexiones simultáneas, _Node.js_ es especialmente adecuado para aplicaciones en tiempo real, como _chats_, juegos en línea, aplicaciones de colaboración y sistemas de notificaciones.

Estas características y ventajas hacen de _Node.js_ una opción popular y poderosa para desarrollar aplicaciones _web_ y servidores modernos y eficientes. Su ecosistema vibrante y en constante crecimiento lo convierte en una tecnología atractiva para desarrolladores de todo el mundo.

#### _Node.js_ en las Bases de Datos:

_Node.js_ tiene varios usos importantes en el contexto de trabajar con bases de datos:

1. **Conexión y consultas a bases de datos:** _Node.js_ permite establecer conexiones con diferentes sistemas de bases de datos, tanto relacionales como no relacionales, por ejemplo _MySQL_, _PostgreSQL_, _MongoDB_, _Redis_, entre otros. Utilizando bibliotecas y _drivers_ específicos para cada base de datos, _Node.js_ puede realizar consultas, inserciones, actualizaciones y eliminaciones de datos de manera eficiente.
1. **Desarrollo de APIs para acceso a datos:** Se pueden crear _APIs_ (_Application Programming Interfaces_) que actúen como intermediarios para el acceso y manipulación de datos en una base de datos. Estas _APIs_ pueden ser utilizadas por aplicaciones cliente, tanto en el _frontend_ como en otros servicios en el backend, para acceder y gestionar datos almacenados en la base de datos.
1. **_Middleware_ para la manipulación de datos:** En aplicaciones web, _Node.js_ puede actuar como un _middleware_ para realizar tareas de validación, transformación y procesamiento de datos antes de guardarlos o recuperarlos de la base de datos. Esto ayuda a mantener la lógica de negocio separada del acceso directo a la base de datos y permite una mayor modularidad y reutilización de código.
1. **Cacheo y almacenamiento en caché de datos:** Se puede utilizar para implementar estrategias de caché, donde los datos frecuentemente accedidos se almacenan en memoria o en bases de datos rápidas como _Redis_. Esto reduce la carga en la base de datos principal y mejora significativamente el rendimiento de la aplicación, especialmente en aplicaciones con muchas solicitudes concurrentes.
1. **Procesamiento de datos en tiempo real:** Es ideal para aplicaciones que requieren procesamiento de datos en tiempo real, como análisis de datos en vivo, actualización de datos, notificaciones, etc. Al ser asincrónico y no bloqueante, puede manejar grandes cantidades de datos y tareas en tiempo real de manera eficiente.
1. **Migraciones y cambios en la estructura de la base de datos:** Con _Node.js_, se pueden crear _scripts_ para realizar migraciones en la base de datos, lo que permite realizar cambios en la estructura de la base de datos de manera controlada y sin afectar la integridad de los datos existentes.
1. **Integración con bases de datos externas y servicios:** Puede integrarse fácilmente con servicios y bases de datos externas a través de _APIs_ o servicios _web_. Esto permite la comunicación con otras aplicaciones y sistemas para acceder y compartir datos de manera segura.

En general, _Node.js_ es una herramienta valiosa para trabajar con bases de datos, ya que proporciona una plataforma eficiente y flexible para el acceso, manipulación y gestión de datos, lo que contribuye a la construcción de aplicaciones _backend_ más eficientes, escalables y en tiempo real.

#### _Node.js_ con el _Hardware_

_Node.js_ también tiene aplicaciones interesantes en temas de _hardware_, permitiendo a los desarrolladores interactuar con dispositivos físicos y utilizar el poder de JavaScript para controlar y manipular hardware en diferentes contextos. Aquí hay algunas áreas en las que se utiliza:

1. **Internet de las cosas (_IoT_):** Es una elección popular para desarrollar aplicaciones y prototipos de _IoT_. Su naturaleza asíncrona y no bloqueante lo hace ideal para interactuar con sensores y actuadores en dispositivos _IoT_. Puede comunicarse con dispositivos conectados a través de puertos _GPIO_ (_General Purpose Input/Output_), _UART_ (_Universal Asynchronous Receiver/Transmitter_), y otros protocolos de comunicación, permitiendo a los dispositivos _IoT_ enviar y recibir datos.
1. **Robots y Drones:** Se ha utilizado para controlar robots y drones. La capacidad de manejar múltiples tareas en tiempo real lo convierte en una opción atractiva para aplicaciones robóticas. Puede interactuar con sensores, motores y otros componentes para controlar el movimiento y realizar acciones específicas.
1. **Automatización del hogar:** Se utiliza en proyectos de automatización del hogar, donde se puede conectar y controlar dispositivos electrónicos, electrodomésticos, iluminación y otros dispositivos inteligentes a través de interfaces _web_ o aplicaciones móviles.
1. **Impresoras _3D_:** Se ha utilizado para controlar impresoras _3D_. Puede enviar comandos de impresión a través de un puerto serial o una conexión de red para controlar el proceso de impresión y monitorear el estado de la impresora.
1. **Servidores para dispositivos embebidos:** _Node.js_ es una opción viable para implementar servidores en dispositivos embebidos con recursos limitados. Su huella ligera y su eficiencia lo hacen adecuado para manejar solicitudes de red y controlar la comunicación con otros dispositivos.
1. **Realidad Virtual y Realidad Aumentada:** Se utiliza para construir aplicaciones en tiempo real que interactúan con dispositivos de realidad virtual y aumentada. Puede procesar datos en tiempo real de sensores y cámaras para proporcionar experiencias inmersivas.
1. **_Hardware_ de prototipado y pruebas:** Es útil para el prototipado rápido y pruebas de concepto en temas de _hardware_. Los desarrolladores pueden crear fácilmente interfaces para interactuar con diferentes componentes y evaluar la viabilidad de nuevas ideas y proyectos.

En resumen, _Node.js_ proporciona una plataforma versátil y eficiente para interactuar con hardware, desde dispositivos pequeños y embebidos hasta robots, drones, y aplicaciones de _IoT_. Su enfoque en la asincronía y el desarrollo rápido lo hace una opción popular para proyectos que implican controlar y monitorear dispositivos físicos.

[🔼 Regresar](#temas)

---

## Instalación

### Tipos de instalación

Node.js ofrece diferentes tipos de instalación para adaptarse a las necesidades y preferencias de los usuarios. Los tipos de instalación más comunes son:

1. **Instalación Binaria (_Binary_):** Esta es la forma más sencilla de instalar _Node.js_ y es adecuada para la mayoría de los usuarios. Consiste en descargar un instalador precompilado específico para el sistema operativo y la arquitectura del usuario. Los instaladores binarios están disponibles para _Windows_, _macOS_ y diversas distribuciones de _Linux_. Solo es necesario descargar el archivo del instalador y seguir el asistente de instalación para completar el proceso.
1. **Instalación a través del Gestor de Paquetes del Sistema (_Package Manager_):** Algunos sistemas operativos y distribuciones de _Linux_ ofrecen _Node.js_ en sus repositorios y permiten instalarlo mediante el gestor de paquetes del sistema. Por ejemplo, en sistemas basados en _Debian/Ubuntu_, se puede instalar _Node.js_ usando `apt`, y en sistemas basados en _Fedora/RHEL_, se puede instalar usando `dnf` o `yum`. Esta opción es conveniente para aquellos que prefieren utilizar las herramientas de gestión de paquetes nativas de su sistema.
1. **Instalación desde el código fuente (_Source_):** Esta opción es menos común y se utiliza generalmente por desarrolladores avanzados o para personalizar la instalación de _Node.js_ en sistemas operativos que no tienen un instalador binario disponible. Consiste en descargar el código fuente desde el repositorio oficial de _GitHub_, compilarlo y configurar el sistema manualmente.
1. **Manejo de versiones con _NVM_ (_Node Version Manager_):** _NVM_ es una herramienta que permite instalar y administrar múltiples versiones de _Node.js_ en el mismo sistema. Es útil cuando necesitas trabajar con diferentes proyectos que requieren versiones específicas. Se puede instalar en sistemas _UNIX_, _macOS_ e incluso hay versión para _Windows_ y facilita el cambio entre versiones de _Node.js_ sin tener que desinstalar e instalar manualmente.

Las primeras tres opcines de la lista anterior se conocen también como instalación de tipo _Stand Alone_ ya que instalamos una sola y única versión de _Node.js_, a diferencia de lo que nos ofrece _NVM_, la capacidad de gestionar múltiples de versiones.

Es importante mencionar que la forma de instalar Node.js puede variar según el sistema operativo y las preferencias del usuario. Para obtener instrucciones detalladas sobre cómo instalar Node.js en un sistema específico, es recomendable consultar la documentación oficial de Node.js o seguir las guías proporcionadas por la comunidad de desarrollo.

De cualquier manera aquí te dejo un par de enlaces y videos que te servirán para instalarlo:

- Instalación _Stand Alone_:
  - [Sitio de descarga](https://nodejs.org/es/download).
  - [Video de instalación _Stand Alone_](https://youtube.com/watch?v=_DQP6UxKEn8).
- Instalación con _NVM_:
  - [_NVM_ para _Linux/macOS_](https://github.com/nvm-sh/nvm).
  - [_NVM_ para _Windows_](https://github.com/coreybutler/nvm-windows).
  - [Video de instalación _NVM_](https://youtube.com/watch?v=iG4u1MK7N3I).

### Tipos de versiones

_Node.js_ tiene dos tipos principales de versiones:

1. **Versiones _LTS_ (_Long Term Support_):** Estas son las versiones recomendadas para la mayoría de los usuarios, especialmente para aplicaciones y proyectos en producción. Las versiones _LTS_ tienen soporte a largo plazo, lo que significa que recibirán actualizaciones de seguridad y correcciones de errores durante un período más prolongado. _Node.js LTS_ se actualiza cada 6 meses, y cada versión _LTS_ tiene un ciclo de soporte de 30 meses. Esto proporciona a los usuarios tiempo suficiente para planificar y realizar actualizaciones sin tener que lidiar con cambios frecuentes.
1. **Versiones _Current_ (Actuales):** Estas son las versiones más recientes de _Node.js_ con las últimas características y mejoras. Se lanzan cada 6 meses y tienen un ciclo de soporte más corto en comparación con las versiones _LTS_. Estas versiones son ideales para aquellos usuarios que desean experimentar con las últimas características y estar a la vanguardia de la tecnología. Sin embargo, no se recomiendan para entornos de producción críticos debido a su ciclo de vida más corto y la posibilidad de cambios más frecuentes.

Es importante tener en cuenta que la elección de la versión de Node.js depende del tipo de proyecto y sus necesidades específicas. Si estás iniciando un nuevo proyecto, es recomendable usar la última versión _LTS_, ya que brindará una mayor estabilidad y soporte a largo plazo. Por otro lado, si ya tienes un proyecto en producción que utiliza una versión _LTS_ más antigua, es posible que desees mantener esa versión y planificar una actualización a la siguiente versión _LTS_ en el futuro.

### Verificando la instalación

Una vez que se complete la instalación, puedes verificar si _Node.js_ y _NPM_ se han instalado correctamente abriendo una ventana de terminal y escribiendo los siguientes comandos:

```terminal
node -v

npm -v
```

Si se muestran las versiones de Node.js y NPM en la terminal, significa que la instalación fue exitosa.

Si has decidido trabajar con _NVM_, estos son los comandos que más vas a usar:

```bash
// para mostrar la ayuda de nvm
nvm --h

// para listar las versiones de node que tienes en nvm
nvm list

// para instalar la versión vX.X.X de node con nvm
nvm install vX.X.X

// para usar la versión vX.X.X de node con nvm
nvm use vX.X.X

// para desinstalar la versión vX.X.X de node con nvm
nvm uninstall vX.X.X

// para asignar la versión vX.X.X como default en nvm
nvm alias default vX.X.X
```

Recuerda que debes remplazar las _**X.X.X**_ por la versión que deseas instalar, no vayas a ejecutar el comando con las _**X's**_ 🫢.

[🔼 Regresar](#temas)

---

## _REPL_

El _REPL_ (_Read-Eval-Print Loop_) de _Node.js_ es una herramienta interactiva que permite a los desarrolladores ejecutar y probar código _JavaScript_ de manera interactiva en tiempo real. Es una característica muy útil para experimentar con el lenguaje y probar fragmentos de código antes de incorporarlos en un proyecto más grande. Es similar a la consola interactiva que se encuentra en la mayoría de los navegadores _web_, pero se ejecuta directamente en la línea de comandos del sistema operativo.

### Funcionamiento

1. **_Read_ (Leer):** El _REPL_ espera a que el usuario ingrese una línea de código o una expresión _JavaScript_.
1. **_Eval_ (Evaluar):** Una vez que el usuario presiona _Enter_, el _REPL_ evalúa la expresión o el código ingresado.
1. **_Print_ (Imprimir):** Después de evaluar la expresión o código, el resultado se imprime en la pantalla.
1. **_Loop_ (Bucle):** El _REPL_ vuelve a esperar al usuario para ingresar otra línea de código y repite el proceso.

### ¿Cómo acceder?

Para acceder al _REPL_ de _Node.js_, simplemente abre una ventana de terminal o línea de comandos y escribe `node` seguido de la tecla _Enter_. Esto iniciará el _REPL_, y verás un símbolo de `>` que indica que estás en modo de entrada del _REPL_. A partir de ahí, puedes ingresar cualquier código _JavaScript_, y el _REPL_ lo evaluará y mostrará el resultado.

### Ejemplo de uso

```shell
$ node
> 2 + 3
5
> const mensaje = "¡Hola, Mundo!";
undefined
> mensaje
'¡Hola, Mundo!'
> const cuadrado = (num) => num * num;
undefined
> cuadrado(5)
25
> let array = [1, 2, 3, 4, 5];
undefined
> array.map(num => num * 2)
[ 2, 4, 6, 8, 10 ]
> .exit
```

Para salir del _REPL_, simplemente escribe `.exit` y presiona _Enter_ o usa `Ctrl + C` dos veces (para _Windows_). También puedes usar `.help` para ver una lista de comandos adicionales disponibles dentro del _REPL_.

El _REPL_ de _Node.js_ es una herramienta poderosa para experimentar y depurar código _JavaScript_ de manera rápida y sencilla, y es especialmente útil para aprender y practicar conceptos del lenguaje.

[🔼 Regresar](#temas)

---

## Hola Mundo

Para ejecutar un archivo _JavaScript_ en _Node.js_, simplemente sigue estos pasos:

1. Abre una ventana de terminal o línea de comandos en tu sistema operativo.
1. Navega al directorio donde se encuentra el archivo _JavaScript_ que deseas ejecutar. Puedes hacerlo utilizando el comando `cd` seguido de la ruta del directorio, por ejemplo:
   ```shell
   cd /ruta/del/directorio
   ```
1. Una vez que estás en el directorio correcto, utiliza el comando `node` seguido del nombre del archivo _JavaScript_ que deseas ejecutar. Por ejemplo, si el archivo se llama _"app.js"_, escribe:
   ```shell
   node app.js
   ```
1. Presiona _Enter_ y _Node.js_ ejecutará el archivo _JavaScript_. Cualquier salida o resultado del archivo se mostrará en la ventana de terminal.

Si el archivo _JavaScript_ contiene código válido, _Node.js_ lo ejecutará y mostrará el resultado en la terminal.

Recuerda que, al utilizar _Node.js_ para ejecutar un archivo _JavaScript_, estás ejecutando el código en el entorno del servidor, que es diferente del entorno del navegador. Por lo tanto, algunas funcionalidades específicas del navegador, como el manejo del _DOM_, no estarán disponibles en el entorno de _Node.js_. Sin embargo, tendrás acceso a otras funcionalidades, como operaciones de archivo, solicitudes _HTTP_, acceso a la red y más que en los navegadores no existen.

[🔼 Regresar](#temas)

---

## _Blocking VS Non Blocking_

En _Node.js_, el término "_blocking_" (bloqueante) vs. "_non-blocking_" (no bloqueante) se refiere a cómo el código se ejecuta en relación con las operaciones de entrada/salida (_E/S_). Estas operaciones de _E/S_ pueden incluir lecturas/escrituras de archivos, solicitudes _HTTP_, conexiones de red, consultas a bases de datos y cualquier otra operación que implique esperar a que algo suceda, como recibir una respuesta del servidor o leer un archivo del disco.

### Modo _Blocking_

En un modelo de ejecución bloqueante, una operación de _E/S_ bloqueará la ejecución del programa hasta que se complete. Durante este tiempo, el hilo de ejecución se detiene y no puede continuar con otras tareas. Si hay múltiples solicitudes o tareas simultáneas que requieren operaciones de bloqueo, cada una debe esperar a que se complete la operación antes de continuar.

Un ejemplo simple sería leer un archivo de forma bloqueante:

```javascript
const fs = require("fs");
console.log("Inicio del programa");
const data = fs.readFileSync("archivo.txt", "utf8");
console.log(data);
console.log("Fin del programa");
```

En este caso, la ejecución se bloquea mientras se lee el archivo y solo después de que se complete la lectura, se imprimirá el contenido del archivo y el mensaje _"Fin del programa"_.

### Modo _Non Blocking_

En contraste, en un modelo de ejecución no bloqueante, las operaciones de _E/S_ se ejecutan de manera asíncrona. Cuando se inicia una operación, el programa continúa con otras tareas en lugar de esperar a que se complete. Cuando esta se completa, se ejecuta una devolución de llamada (_callback_) para manejar el resultado.

Un ejemplo no bloqueante sería leer un archivo de forma no bloqueante:

```javascript
const fs = require("fs");
console.log("Inicio del programa");
fs.readFile("archivo.txt", "utf8", (err, data) => {
  if (err) throw err;
  console.log(data);
});
console.log("Fin del programa");
```

En este caso, la función `fs.readFile` inicia la operación de lectura y luego continúa con la ejecución del código sin esperar a que se complete la operación. Cuando la lectura del archivo se completa, se invoca la devolución de llamada y se imprime el contenido del archivo. Esto permite que el programa siga ejecutando otras tareas mientras se realiza la operación de lectura.

#### Ventajas del enfoque no bloqueante

La arquitectura no bloqueante es fundamental para su alta eficiencia y rendimiento. Al utilizar un solo hilo para manejar múltiples solicitudes, Node.js puede procesar solicitudes concurrentes de manera eficiente y escalable, lo que lo hace ideal para aplicaciones en tiempo real y de alta carga. Además, el modelo no bloqueante permite aprovechar al máximo los recursos del sistema, ya que el hilo de ejecución no se queda inactivo esperando operaciones de _E/S_, sino que se utiliza para otras tareas mientras las operaciones se realizan en segundo plano.

En resumen, la distinción entre _blocking vs non-blocking_ en _Node.js_ es clave para comprender cómo se manejan las operaciones de _E/S_ y cómo influye en la eficiencia y escalabilidad de las aplicaciones desarrolladas en este entorno. El enfoque no bloqueante es esencial para aprovechar al máximo el rendimiento de _Node.js_ en aplicaciones de tiempo real y de alta concurrencia.

[🔼 Regresar](#temas)

---

## _Single Thread_

El concepto de _Single Thread_ (hilo único) en _Node.js_ se refiere a que, por defecto utiliza un solo hilo de ejecución para manejar todas las solicitudes y tareas. Esto es diferente de algunos otros entornos de servidor tradicionales que utilizan un modelo de múltiples hilos, donde cada solicitud se maneja en un hilo separado.

En _Node.js_, el hilo único es responsable de todas las operaciones y tareas del servidor, incluyendo la ejecución del código JavaScript, el manejo de operaciones de entrada/salida (_E/S_), y la respuesta a las solicitudes de los clientes. Esto incluye la ejecución de código en el servidor, la manipulación de archivos, las consultas a bases de datos, las solicitudes _HTTP_, entre otras tareas.

### ¿Cómo funciona?

El hilo único de _Node.js_ utiliza un enfoque no bloqueante y asíncrono para manejar tareas y operaciones de _E/S_. Cuando una operación de E/S se inicia, en lugar de bloquear el hilo y esperar a que se complete, _Node.js_ continúa ejecutando otras tareas y eventos. Cuando la operación de _E/S_ se completa, se activa una devolución de llamada (_callback_) para manejar el resultado.

Por ejemplo, cuando Node.js recibe una solicitud _HTTP_, en lugar de crear un nuevo hilo para manejar la solicitud, el hilo único iniciará la operación de E/S para procesar la solicitud y luego continuará manejando otras solicitudes o eventos mientras espera la respuesta del cliente. Esto permite que Node.js maneje múltiples solicitudes concurrentemente utilizando un solo hilo.

### Ventajas y desafíos

#### Ventajas

- **Eficiencia:** El modelo de hilo único permite que _Node.js_ utilice recursos del sistema de manera más eficiente, ya que no hay sobrecarga de conmutación de hilos y cada hilo puede manejar múltiples solicitudes.
- **Escalabilidad:** La naturaleza no bloqueante y asincrónica de _Node.js_ le permite manejar un gran número de solicitudes concurrentes de manera eficiente, lo que lo hace altamente escalable.
- **Menos complejidad:** El enfoque de hilo único puede reducir la complejidad y facilitar la depuración y el desarrollo de aplicaciones.

#### Desafíos

- **Bloqueo de _CPU_:** Si una operación bloqueante (por ejemplo, una operación intensiva de cálculo) se realiza en el hilo único, puede bloquear toda la aplicación, afectando la capacidad de manejar otras solicitudes en ese momento.
- **Necesidad de evitar bloqueo:** Los desarrolladores deben tener cuidado de evitar bloquear el hilo único con operaciones de larga duración o bloqueantes, ya que esto podría afectar negativamente el rendimiento.

Es importante destacar que, aunque _Node.js_ utiliza un solo hilo para manejar tareas, también puede aprovechar múltiples núcleos del procesador mediante el uso de la biblioteca `cluster`, que permite crear múltiples procesos hijos para distribuir la carga entre los núcleos del _CPU_ y aprovechar al máximo los recursos de la máquina. Esto permite que _Node.js_ mantenga su eficiencia y capacidad de manejo de múltiples solicitudes incluso en sistemas con varios núcleos de _CPU_.

[🔼 Regresar](#temas)

---

## _Event Loop_

El _Event Loop_ (bucle de eventos) es uno de los conceptos fundamentales de _Node.js_ que lo hace único y poderoso. Es la piedra angular de la arquitectura no bloqueante y asíncrona de _Node.js_, lo que permite que el servidor maneje múltiples solicitudes de manera eficiente sin bloquear el hilo de ejecución.

El _Event Loop_ es una estructura que se encarga de administrar y manejar eventos y tareas en Node.js. Funciona continuamente en segundo plano mientras la aplicación está en ejecución, y su objetivo principal es manejar las operaciones de entrada/salida (_E/S_) y las devoluciones de llamada (_callbacks_) de manera no bloqueante.

Cuando una operación de _E/S_ (por ejemplo, una solicitud _HTTP_, lectura/escritura de archivos o una consulta a la base de datos) se inicia en _Node.js_, en lugar de bloquear la ejecución y esperar a que se complete, el _Event Loop_ delega la operación a un componente externo del sistema operativo y continúa ejecutando otras tareas y eventos en el hilo principal.

Cuando la operación de _E/S_ se completa, el componente externo notifica al _Event Loop_ que la operación ha terminado. En ese momento, el _Event Loop_ agrega la devolución de llamada asociada a la operación de _E/S_ a la cola de eventos y, en algún momento posterior, cuando el hilo principal está libre, el _Event Loop_ procesa la cola de eventos y ejecuta las devoluciones de llamada correspondientes.

### Fases del _Event Loop_

El _Event Loop_ consta de varias fases que se repiten continuamente mientras la aplicación está en ejecución:

1. **Fase de Lectura y Ejecución de Operaciones Externas:** En esta fase, el _Event Loop_ inicia operaciones de _E/S_ y solicitudes externas, como lectura/escritura de archivos, operaciones de red y llamadas a bases de datos.
1. **Fase de Ejecución de _Callbacks_:** En esta fase, el _Event Loop_ procesa las devoluciones de llamada (_callbacks_) de las operaciones de _E/S_ que se completaron. Las devoluciones de llamada se agregan a la cola de eventos y se ejecutan de manera secuencial.
1. **Fase de Procesamiento de Promesas (_Microtask Queue_):** A partir de _Node.js v12_, esta fase fue introducida como un _microtask queue_ independiente. Aquí se procesan las promesas y otros _microtasks_ antes de pasar a la siguiente fase del _Event Loop_. Esto garantiza que las promesas se resuelvan antes de que se continúe con el procesamiento de las operaciones externas.
1. **Fase de Comprobación (_Check_):** En esta fase, se ejecutan ciertos tipos de _callbacks_, como `setImmediate()`. Es una oportunidad para ejecutar operaciones más cercanas al final del bucle de eventos.
1. **Fase de Cierre (_Close_):** Esta fase se encarga de manejar las tareas de limpieza y cierre de recursos antes de que la aplicación se detenga o se cierre.

En resumen, el _Event Loop_ es el componente esencial de la arquitectura de _Node.js_ que le permite manejar operaciones asíncronas y no bloqueantes de manera eficiente. Es la clave para el rendimiento y la escalabilidad de Node.js y es lo que lo convierte en una excelente opción para aplicaciones en tiempo real y de alta concurrencia.

![Event Loop Node.js](./img/blog/event-loop-nodejs.gif)

[🔼 Regresar](#temas)

---

## Módulos

En _Node.js_, los módulos son bloques de código reutilizables y encapsulados que permiten organizar y separar la funcionalidad de una aplicación en unidades más pequeñas y manejables. Los módulos permiten que el código se escriba de manera modular y fomentan las buenas prácticas de desarrollo, como la reutilización de código y la separación de funcionalidades.

En _Node.js_, existen dos tipos principales de módulos:

1. **Módulos incorporados:** Son módulos que vienen preinstalados con _Node.js_ y están disponibles para su uso sin necesidad de instalar nada adicional. Algunos ejemplos de módulos incorporados son `fs` (_file system_) para trabajar con archivos, `http` para crear servidores _web_ y manejar solicitudes _HTTP_, `path` para manipular rutas de archivos, entre otros. Puedes usar estos módulos directamente en tu código sin necesidad de instalarlos.
1. **Módulos personalizados:** Son módulos creados por los desarrolladores para encapsular y reutilizar código específico de una aplicación. Los módulos personalizados se crean separando funciones, variables o clases en archivos separados y luego se exportan para que otros archivos puedan importarlos y usarlos. Esto se logra utilizando el sistema de módulos de _Node.js_.

### Sistemas de módulos en _Node.js_

En Node.js, existen dos tipos principales de sistemas de módulos:

#### _CommonJS (CJS)_

Es el sistema de módulos que se utiliza por defecto en Node.js. Utiliza las palabras clave `require` y `module.exports` (o `exports`) para importar y exportar módulos, respectivamente.

- **Importar un módulo (_require_):** Para importar un módulo en Node.js, se utiliza la palabra clave `require` seguida del nombre del archivo o ruta del módulo que se desea importar. Por ejemplo:

```javascript
const modulo = require("./ruta/al/modulo.js");
```

- **Exportar un módulo (_module.exports o exports_):** Para exportar un módulo en Node.js, se utiliza la propiedad `module.exports` o simplemente `exports` para asignar valores o funciones al objeto que se exportará. Por ejemplo:

```javascript
// modulo.js
const funcion1 = () => {
  // ...
};

const funcion2 = () => {
  // ...
};

module.exports = {
  funcion1,
  funcion2,
};
```

#### _ECMAScript Modules (ESM)_

A partir de _Node.js_ versión 13, se agregó soporte para _ECMAScript Modules (ESM)_, que permite utilizar el formato de importación y exportación estándar definido en _ECMAScript_ (el estándar que rige _JavaScript_).

- **Importar un módulo (_import_):** Para importar un módulo con _ESM_, se utiliza la palabra clave `import` seguida del nombre del archivo o ruta del módulo que se desea importar. Por ejemplo:

```javascript
import modulo from "./ruta/al/modulo.js";
```

- **Exportar un módulo (_export_):** Para exportar un módulo con _ESM_, se utiliza la palabra clave `export` para exportar valores o funciones directamente. Por ejemplo:

```javascript
// modulo.js
export const funcion1 = () => {
  // ...
};

export const funcion2 = () => {
  // ...
};
```

Es importante tener en cuenta que para utilizar _ESM_ en _Node.js_, se debe agregar el atributo `"type": "module"` en el archivo `package.json` de tu proyecto, o utilizar la extensión `.mjs` para los archivos de módulo que utilicen el formato _ESM_.

Por defecto, _CommonJS_ sigue siendo el sistema de módulos más comúnmente utilizado en proyectos de _Node.js_, pero el soporte para _ESM_ permite a los desarrolladores aprovechar las características más modernas de importación y exportación estándar de _ECMAScript_ si así lo desean.

[🔼 Regresar](#temas)

---

## _NPM_

_NPM_ (_Node Package Manager_) es el administrador de paquetes predeterminado para _Node.js_, y se utiliza para instalar, actualizar y gestionar paquetes y dependencias de terceros en un proyecto.

### Comandos _NPM_

Para sacarle el máximo provecho a _NPM_, te dejo un enlace hacia su [documentación oficial](https://docs.npmjs.com/cli-documentation/), de cualquier manera a continuación te enlisto algunos de los comandos más usados:

- Iniciar un proyecto:

```bash
npm init //Con asistente

npm init -y //Sin asistente
```

- Instalando paquetes:

```bash
npm install [package]

npm install [package]@3.4.12 //Versión específica

npm i [package] //shortcut
```

- Actualizar paquetes:

```bash
npm update [package]
```

- Desinstalar paquetes:

```bash
npm uninstall [package]

npm uninstall [package]@3.4.12 //Versión específica

npm un [package] //shortcut
```

### Carpeta _node_modules_

Cuando ejecutas el comando `npm install` _NPM_ crea una carpeta llamada`node_modules` que es un directorio que se agrega en la raíz de un proyecto _Node.js_ cuando se instalan paquetes o dependencias vía _NPM_. Esta carpeta es un componente fundamental en la gestión de dependencias en _Node.js_ y contiene todos los paquetes externos y sus dependencias que se utilizan en el proyecto.

La estructura de la carpeta `node_modules` puede volverse bastante compleja en proyectos grandes con muchas dependencias. Sin embargo, esta estructura es necesaria para asegurar que todas las dependencias estén correctamente organizadas y que no haya conflictos entre diferentes versiones de paquetes.

Es importante tener en cuenta que no es necesario incluir la carpeta `node_modules` en un sistema de control de versiones (por ejemplo, _Git_). Esto se debe a que los archivos en `node_modules` pueden ser fácilmente recreados utilizando el archivo `package.json` y el comando `npm install`. Por esta razón, se suele agregar la carpeta `node_modules` al archivo `.gitignore` o al sistema de ignorar archivos correspondiente para evitar que se incluyan en el control de versiones y, así, mantener un repositorio más limpio y liviano.

### Archivo _package.json_

Es un archivo de configuración fundamental en proyectos de _Node.js_. Contiene información sobre el proyecto, sus dependencias, _scripts_ personalizados y otros metadatos relevantes para el proyecto. Este archivo se encuentra en la raíz del directorio del proyecto y es utilizado por _NPM_ para gestionar las dependencias y scripts relacionados con el proyecto.

El archivo `package.json` es un archivo _JSON_ que contiene una serie de claves y valores. Las claves más comunes incluyen:

1. **name:** El nombre del proyecto.
1. **version:** La versión actual del proyecto. Sigue un esquema de versionado semántico (pe, `1.0.0`).
1. **description:** Una breve descripción del proyecto.
1. **main:** El archivo principal que se debe ejecutar cuando se importa el proyecto como un módulo.
1. **dependencies:** Un objeto que lista las dependencias de producción del proyecto. Contiene los nombres de los paquetes y las versiones requeridas.
1. **devDependencies:** Un objeto que lista las dependencias de desarrollo del proyecto. Contiene los nombres de los paquetes y las versiones requeridas para el desarrollo.
1. **scripts:** Un objeto que define scripts personalizados que pueden ser ejecutados desde la línea de comandos con el comando `npm run`.
1. **author:** El nombre del autor o autores del proyecto.
1. **license:** La licencia bajo la cual se distribuye el proyecto.

#### Ejemplo

```json
{
  "name": "mi-proyecto",
  "version": "1.0.0",
  "description": "Una aplicación sencilla de ejemplo",
  "main": "app.js",
  "dependencies": {
    "express": "4.17.1",
    "lodash": "4.17.21"
  },
  "devDependencies": {
    "jest": "27.1.1"
  },
  "scripts": {
    "start": "node app.js",
    "test": "jest"
  },
  "author": "Tu Nombre",
  "license": "MIT"
}
```

#### Uso y funcionalidad del archivo

El archivo `package.json` tiene varios propósitos importantes:

1. **Gestión de Dependencias:** Permite especificar las dependencias del proyecto en las secciones "_dependencies_" y "_devDependencies_". Cuando ejecutas `npm install` basado en este archivo, NPM descarga y guarda todas las dependencias listadas en la carpeta `node_modules` del proyecto.
1. **_Scripts_ Personalizados:** La sección "_scripts_" permite definir instrucciones personalizadas que se pueden ejecutar utilizando el comando `npm run`. Por ejemplo, en el archivo anterior, puedes ejecutar `npm run start` para iniciar la aplicación y `npm run test` para ejecutar pruebas con _Jest_.
1. **Metadatos del Proyecto:** Proporciona información sobre el proyecto, como su nombre, versión, descripción, autor, licencia, etc. Esto es útil para otros desarrolladores y para mantener un registro claro del proyecto.

En resumen, el archivo `package.json` es un componente esencial en proyectos de _Node.js_ y juega un papel crucial en la gestión de dependencias, configuración del proyecto y definición de scripts personalizados. Es una parte integral de la estructura de proyectos de _Node.js_ y permite que _NPM_ administre el proyecto de manera eficiente y precisa.

### Archivo _package-lock.json_

Es un archivo generado automáticamente por _NPM_ cuando se instalan o actualizan las dependencias de un proyecto _Node.js_. Este archivo tiene un propósito específico y es utilizado para asegurar una instalación reproducible y consistente de las dependencias del proyecto en diferentes entornos.

#### Funciones y usos del archivo

1. **Versionado preciso de dependencias:** Contiene información detallada sobre las versiones exactas de las dependencias que fueron instaladas en el proyecto. Esto incluye las versiones de las dependencias directas e indirectas (dependencias de dependencias) del proyecto. Esto garantiza que las mismas versiones de las dependencias se utilicen en diferentes instalaciones y por diferentes desarrolladores, lo que evita posibles incompatibilidades o sorpresas en la configuración del proyecto.
1. **Bloqueo de versiones:** Actúa como una especie de "bloqueo de versiones", lo que significa que cuando alguien más instale las dependencias del proyecto utilizando `npm install`, _NPM_ instalará exactamente las mismas versiones que se encuentran en el archivo `package-lock.json`. Esto evita problemas donde se podrían utilizar versiones más recientes de las dependencias, lo que podría llevar a cambios no deseados o errores en el proyecto.
1. **Mayor consistencia y estabilidad:** Se asegura una mayor consistencia y estabilidad en la configuración de las dependencias. Esto es especialmente útil en proyectos colaborativos donde diferentes desarrolladores pueden trabajar en diferentes máquinas y sistemas operativos. El archivo `package-lock.json` garantiza que todos los desarrolladores tengan el mismo entorno de desarrollo.
1. **Rápida instalación de dependencias:** Al tener información precisa sobre las versiones de las dependencias en el archivo `package-lock.json`, _NPM_ puede realizar instalaciones más rápidas y eficientes, ya que no necesita resolver las versiones de las dependencias nuevamente en cada instalación.

**Importante**: Es fundamental incluir el archivo `package-lock.json` en el control de versiones del proyecto (por ejemplo, _Git_) para garantizar que todos los miembros del equipo tengan acceso a la misma configuración de dependencias. Al compartir el proyecto con otros desarrolladores o al implementarlo en diferentes servidores, el archivo `package-lock.json` asegura que las dependencias se instalen de manera coherente y sin cambios inesperados en las versiones.

### Tipos de banderas de dependencias

En _Node.js_ y _NPM_, existen varias banderas u opciones que se pueden utilizar al momento de instalar dependencias. Estas banderas proporcionan diferentes funcionalidades y configuraciones para la instalación de paquetes y la gestión de dependencias. A continuación, se enumeran algunas de las banderas más comunes y su propósito:

1. **`--save` (`-S`):** Esta bandera se usa para guardar la dependencia en la sección "dependencies" del archivo `package.json`. Por ejemplo:

   ```bash
   npm install express --save
   ```

1. **`--save-dev` (`-D`):** Esta bandera se usa para guardar la dependencia en la sección "devDependencies" del archivo `package.json`. Por ejemplo:

   ```bash
   npm install jest --save-dev
   ```

1. **`--global` (`-g`):** Esta bandera se usa para instalar la dependencia de forma global en el sistema, lo que la hace accesible para todos los proyectos. Por ejemplo:

   ```bash
   npm install nodemon -g
   ```

1. **`--production`:** Esta bandera se usa para instalar solo las dependencias de producción y omitir las dependencias de desarrollo. Por ejemplo:

   ```bash
   npm install --production
   ```

1. **`--no-save`:** Esta bandera se usa para evitar que _NPM_ agregue la dependencia al archivo `package.json`. Es útil si solo quieres instalar una dependencia temporalmente sin guardarla en el proyecto. Por ejemplo:

   ```bash
   npm install lodash --no-save
   ```

1. **`--legacy-peer-deps`:** Esta bandera se usa para permitir que _NPM_ instale paquetes que presenten advertencias de dependencias obsoletas. Es útil si trabajas con paquetes que aún no han actualizado sus dependencias.

1. **`--prefer-offline`:** Esta bandera se usa para preferir las versiones descargadas de los paquetes, incluso si están desactualizadas, en lugar de descargar las últimas versiones desde el registro.

1. **`--ignore-scripts`:** Esta bandera se usa para evitar la ejecución de scripts definidos en los paquetes durante la instalación. Puede ser útil si no deseas que los scripts personalizados de los paquetes se ejecuten al instalarlos.

1. **`--audit`:** Esta bandera se usa para verificar si las dependencias tienen vulnerabilidades conocidas y proporciona información sobre cómo solucionarlas.

Estas son solo algunas de las banderas más comunes utilizadas en la instalación de dependencias con _NPM_. Pueden ser muy útiles para controlar cómo se instalan y administran las dependencias en proyectos de _Node.js_. Puedes obtener más información sobre todas las opciones disponibles ejecutando `npm help install` desde la línea de comandos.

### Comando _npx_

El comando `npx` es una herramienta incluida en _NPM_ a partir de la versión _5.2.0_. Su función principal es permitir la ejecución de paquetes _Node.js_ temporales o instalados globalmente sin la necesidad de instalarlos en tu sistema o proyecto de manera permanente.

### Funciones y usos principales

1. **Ejecución de paquetes temporales:** `npx` se usa para ejecutar paquetes temporales sin tener que instalarlos previamente. Por ejemplo, si hay un paquete disponible en el registro de _NPM_ que solo necesitas usar una vez o de forma esporádica, puedes usar `npx` para ejecutarlo sin la necesidad de instalarlo globalmente o agregarlo a tu proyecto.

   ```bash
   npx create-react-app my-app
   ```

   En este ejemplo, `npx` ejecuta el paquete `create-react-app` temporalmente para crear una nueva aplicación de _React_ llamada `my-app` sin necesidad de instalar el paquete globalmente en el sistema.

1. **Ejecución de comandos de paquetes instalados globalmente:** `npx` permite ejecutar comandos de paquetes que están instalados globalmente en tu sistema, incluso si no están disponibles en el directorio actual. Esto puede ser útil si necesitas acceder a una utilidad de línea de comandos que has instalado globalmente.

   ```bash
   npx nodemon app.js
   ```

   En este ejemplo, `npx` ejecuta el paquete `nodemon` globalmente para monitorear y reiniciar automáticamente la aplicación `app.js`.

1. **Seleccionar versiones específicas de paquetes:** `npx` permite especificar versiones específicas de un paquete para ejecutar un comando. Esto puede ser útil para probar comandos en diferentes versiones de paquetes sin tener que instalar varias versiones de forma permanente.

   ```bash
   npx mocha@6 test.js
   ```

   En este ejemplo, `npx` ejecuta el paquete `mocha` en su versión 6 para ejecutar las pruebas definidas en `test.js`.

En resumen, `npx` es una herramienta poderosa que facilita la ejecución de paquetes temporales o instalados globalmente sin la necesidad de instalarlos permanentemente en tu sistema o proyecto. Puedes usar `npx` para probar nuevas herramientas, ejecutar comandos de paquetes globales o probar versiones específicas de paquetes de forma temporal y eficiente.

Como puedes ver _NPM_ y todo su ecosistema de elementos, lo hacen una herramienta poderosa que facilita la gestión de dependencias y la instalación de paquetes, lo que permite que los desarrolladores aprovechen las soluciones existentes y la comunidad de código abierto para acelerar el desarrollo de sus proyectos.

[🔼 Regresar](#temas)

---

## Aprende más

Si estás interesado en aprender más sobre _JavaScript_ en el lado del servidor, a través de su poderoso entorno de programación _backend_, _Node.js_, no te pierdas mis cursos totalmente **gratuitos** en mi [canal de _YouTube_](https://youtube.com/playlist?list=PLvq-jIkSeTUY3gY-ptuqkNEXZHsNwlkND).

**¡¡¡Accede ya!!!**

[Ver Cursos](https://www.youtube.com/playlist?list=PLvq-jIkSeTUY3gY-ptuqkNEXZHsNwlkND)

[🔼 Regresar](#temas)

---
